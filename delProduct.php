<?php
require "config.php";
require "models/Db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protypes.php";
$product = new Product;
$manufacture = new manufacture;
$protypes = new protypes;
if(isset($_GET['id'])){
    $product->delProduct($_GET['id']);
    header('location:products.php');
} 