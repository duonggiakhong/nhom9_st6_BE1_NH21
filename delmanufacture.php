<?php
require "config.php";
require "models/Db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protypes.php";
$product = new Product;
$manufacture = new manufacture;
$protypes = new protypes;
if(isset($_GET['manu_id'])){
    $manufacture->delmanufacture($_GET['manu_id']);
    header('location:manufactures.php');
} 