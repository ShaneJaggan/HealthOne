<?php
require '../Modules/Categories.php';
require '../Modules/Products.php';
require '../Modules/Database.php';
require '../Modules/OpeningTimes.php';
require '../Modules/Reviews.php';
require '../Modules/Users.php';
session_start();
$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "HealthOne";
$titleSuffix = "";

switch ($params[1]) {
    case 'categories':
        $titleSuffix = ' | Categories';
        $categories = getCategories();
        include_once "../Templates/categories.php";
        break;

    case 'category':
        $titleSuffix = ' | Category';
        $categoryId = $_GET['id'];
        $products = getProducts($categoryId);
        $name = getCategoryName($categoryId);
        include_once "../Templates/category.php";
        break;

    case 'product':
        $titleSuffix = ' | Product';
        $productId = $_GET['id'];
        $product = getProduct($productId);
        $review = getReviews($product->id);
        $titleSuffix = ' | ' . $product->name;
        if (isset($_POST['review'])){
            $description = filter_input(INPUT_POST, 'description');
            $rating = filter_input(INPUT_POST, 'rating');
            $username = filter_input(INPUT_POST, 'username');
            postReview($description, $rating, $username, $product->id);
        }
        include_once "../Templates/product.php";
        break;

    case 'contact':
        $titleSuffix = ' | Contact';
        $openingTime = getOpeningTimes();
        include_once "../Templates/contact.php";
        break;

    case 'login':
        $titleSuffix = ' | Login';
        if (isset($_POST['login'])){
            $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
            $password = filter_input(INPUT_POST, 'password');
            $user = checkLogin($email, $password);
            if ($user == false){
                $error["title"] = "Invalid";
                $error['message'] = "Credentials are invalid";
            }else{
                $_SESSION['login'] = true;
                $_SESSION['role'] = $user->role;
                $_SESSION['email'] = $user->email;
                $titleSuffix = ' | Home';
                if ($_SESSION['role'] === 'admin'){
                    header('Location: /admin');
                }else{
                    header('Location: /');
                }
            }
        }
        if (isset($_POST['logout'])){
            session_destroy();
        }
        include_once "../Templates/login.php";
        break;
    case 'admin':
        require_once('../Modules/Admin.php');
        break;
    default:
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
