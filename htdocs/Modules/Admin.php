<?php

$title = "HealthOne";
$titleSuffix = "";

//TODO :: Check if user is logged in, if not, send back!

if (empty($params[2])) {
    $params[2] = '';
}

switch ($params[2]) {
    case 'categories':
        $titleSuffix = ' | Admin Products';
        $products = getAllProducts();
        include_once "../Templates/admin/categories.php";
        break;
    case 'add':
        $titleSuffix = ' | Add product';
        if (isset($_POST['add'])){
            $name = filter_input(INPUT_POST, 'name');
            $category_id = filter_input(INPUT_POST, 'category');
            $description = filter_input(INPUT_POST, 'description');
            addProduct($name, $category_id, $description);
            header('Location: /admin/categories');
        }
        include_once "../Templates/admin/add.php";
        break;
    case 'editProduct':
        $product = getProduct();
        $titleSuffix = ' | Edit Product';
        include_once "../Templates/admin/editProduct.php";
        break;
    default:
        $titleSuffix = ' | Admin home';
        include_once "../Templates/admin/home.php";
}
