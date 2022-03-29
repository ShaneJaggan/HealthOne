<?php

class Review
{
    public $id;
    public $product_id;
    public $username;
    public $email;
    public $rating;
    public $description;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}