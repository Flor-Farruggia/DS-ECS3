<?php

require_once 'modals/product.php';
require_once 'modals/productType.php';



$PT = new productType();
$PT->id=2;
$PT->description = 'Cookies';

$p=new Product();
$p->id = 1;
$p->name = 'Merenguitas';
$p->price = 1000;
$p->stock = 10;
$p->productType = $PT;

$p->productData();