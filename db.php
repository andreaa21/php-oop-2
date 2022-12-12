<?php


$product1 = new Food('01', new Category('cane'), 'crocchette', 'dog\'s love', 19.99, '2kg', 'carne, patate dolci, menta', 'anatra');
$product1->setImage('https://www.macrolibrarsi.it/data/cop/zoom/c/crocchette-per-cani-anatra-e-arancia-135338-5.jpg');

$product2 = new Toy('02', new Category('cane'), 'corda', 'Trixie', 0.99, '', '15cm');
$product2->setImage('https://shop-cdn-m.mediazs.com/bilder/trixie/corda/gioco/per/cani/8/400/7992_pla_trixie_spieltau_grau_hs8_8.jpg');

$product3 = new Accessory('03', new Category('gatto'), 'cuccia', 'kokon', 250, 'legno', '460x637x530');
$product3->setImage('https://www.byaldino.com/wp-content/uploads/2020/10/legowiska-12529783_69465170.jpg');

$product4 = new Food('04', new Category('gatto'), 'crocchette', 'Ultima', 38.99, '10kg', 'salmone, cereali', 'salmone');
$product4->setImage('https://shop-cdn-m.mediazs.com/bilder/ultima/cat/sterilized/salmone/6/400/1605795730288_1_6.jpg');
