<?php

class Accessory extends Product
{
    public $material;
    public $size;

    public function __construct($_product_id, Category $_category, $_name, $_brand, $_price, $_material, $_size)
    {
        parent::__construct($_product_id, $_category, $_name, $_brand, $_price);

        $this->material = $_material;
        $this->size = $_size;
    }
}
