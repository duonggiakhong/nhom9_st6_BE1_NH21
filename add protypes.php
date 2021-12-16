<?php
require "config.php";
require "models/Db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protypes.php";
$product = new Product;
$manufacture = new manufacture;
$protypes = new protypes;
if(isset($_POST['submit'])){
    $type_name = $_POST['type_name'];
    
    $protypes->addprotypes($type_name);
    header('location:protypes.php');
}