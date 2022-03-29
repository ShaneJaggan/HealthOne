<?php
    function checkLogin(string $email, string $password){
        global $pdo;
        $query = $pdo->prepare('SELECT email, role FROM user WHERE email = ? AND password = ?');
        $query->bindParam(1, $email);
        $query->bindParam(2, $password);
        $query->setFetchMode(PDO::FETCH_CLASS, User::class);
        $query->execute();
        return $query->fetch();
    }