<?php

require __DIR__ . '/models/Category.php';
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/Toy.php';
require __DIR__ . '/models/Accessory.php';



$product1 = new Product('01', new Category('cane'), 'crocchette', 'marca delle crocchette', 20);


var_dump($product1);
var_dump($product1->category->name);
