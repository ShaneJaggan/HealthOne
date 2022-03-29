<?php

class OpeningTime
{
    public $id;
    public $day;
    public $opening;
    public $closing;

    public function __construct()
    {
        settype($this->id, 'integer');
    }
}