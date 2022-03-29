<?php
    function getReviews(int $product_id){
        global $pdo;
        $query = $pdo->prepare('SELECT username,rating, description FROM reviews where product_id = ?');
        $query->bindParam(1, $product_id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    function postReview(string $description, int $rating, string $username, int $product_id){
        global $pdo;
        $query = $pdo->prepare('INSERT INTO reviews(product_id,username,rating,description) VALUES(?,?,?,?)');
        $query->bindParam(1, $product_id);
        $query->bindParam(2, $username);
        $query->bindParam(3, $rating);
        $query->bindParam(4, $description);
        $query->execute();
    }
?>

