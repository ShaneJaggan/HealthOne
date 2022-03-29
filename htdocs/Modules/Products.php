<?php
// TODO Zorg dat de methodes goed ingevuld worden met de juiste queries.
function getProducts(int $categoryId)
{
    global $pdo;
    $query=$pdo-> prepare("SELECT * FROM product WHERE category_id = ?");
    $query->bindParam(1, $categoryId);
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS, "Product");
    return $result;
}

function getProduct(int $productId)
{
    global $pdo;
    try {
        $query=$pdo-> prepare("SELECT * FROM product WHERE id = :id");
        $query->bindParam("id", $productId);
        $query->execute();
        $query->setFetchMode(PDO::FETCH_CLASS, "Product");
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    return $query->fetch();
}

function getAllProducts(){
    global $pdo;
    $query = $pdo->prepare('SELECT name,picture,description,category_id,id FROM product');
    $query->execute();
    $query->setFetchMode(PDO::FETCH_CLASS, "Product");
    $result=$query->fetchAll(PDO::FETCH_CLASS, "Product");
    return $result;
}

function addProduct(string $name, int $category_id, string $description){
    global $pdo;
    $query = $pdo->prepare('INSERT INTO product(name,description,category_id) VALUES(?,?,?)');
    $query->bindParam(1, $name);
    $query->bindParam(2, $description);
    $query->bindParam(3, $category_id);
    $query->execute();
}
