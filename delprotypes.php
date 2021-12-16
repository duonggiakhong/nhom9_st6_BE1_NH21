<?php
require "config.php";
require "models/Db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protypes.php";
$product = new Product;
$manufacture = new manufacture;
$protypes = new protypes;
if(isset($_GET['type_id'])){
    $protypes->delprotypes($_GET['type_id']);
    header('location:protypes.php');
} 