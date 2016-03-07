<?php
require_once __DIR__ . '/../vendor/autoload.php';

define('DB_HOST', 'localhost');
define('DB_USER', 'fred');
define('DB_PASS', 'smith');
define('DB_NAME', 'itb');

// get all products from DB as array of Product objects
$products = \Itb\Product::getAll();

// outputs something like:
//  hammer, nail, nuts, bolts
foreach ($products as $product){
    print $product->getDescription() . ', ';
}