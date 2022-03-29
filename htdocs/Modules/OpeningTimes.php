<?php
function getOpeningTimes()
{
    global $pdo;
    $query=$pdo-> prepare("SELECT * FROM opening_times");
    $query->execute();
    $result=$query->fetchAll(PDO::FETCH_CLASS, "OpeningTime");
    return $result;
}