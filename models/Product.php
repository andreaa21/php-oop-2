<?php

class Product
{
    public $product_id;
    public $category;
    public $name;
    public $brand;
    public $price;
    public $is_available = true;
    public $image;

    public function __construct($_product_id, Category $_category, $_name, $_brand, $_price)
    {
        $this->product_id = $_product_id;
        $this->category = $_category;
        $this->name = $_name;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
    }
}
