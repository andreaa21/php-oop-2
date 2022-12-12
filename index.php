<?php

require __DIR__ . '/models/Category.php';
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/Toy.php';
require __DIR__ . '/models/Accessory.php';

require './db.php';

// var_dump($product1);
// var_dump($product2);

// var_dump($product3);
// var_dump($product4);


// var_dump($product1->image);

include __DIR__ . '/views/head.php';
include __DIR__ . '/views/header.php';
include __DIR__ . '/views/main.php';
include __DIR__ . '/views/footer.php';
