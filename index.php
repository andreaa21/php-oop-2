<?php


// models

require __DIR__ . '/models/Category.php';
require __DIR__ . '/models/Product.php';
require __DIR__ . '/models/Food.php';
require __DIR__ . '/models/Toy.php';
require __DIR__ . '/models/Accessory.php';


// db

require './database/db.php';



//views

include __DIR__ . '/views/layout/head.php';
include __DIR__ . '/views/layout/main.php';
