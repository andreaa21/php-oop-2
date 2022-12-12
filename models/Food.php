<?php

class Food extends Product
{
    public $weight;
    public $ingredients;
    public $flavour;

    public function __construct($_product_id, Category $_category, $_name, $_brand, $_price, $_weight, $_ingredients, $_flavour)
    {
        parent::__construct($_product_id, $_category, $_name, $_brand, $_price);

        $this->weight = $_weight;
        $this->ingredients = $_ingredients;
        $this->flavour = $_flavour;
    }
}
