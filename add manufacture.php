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
    
    $manu_name = $_POST['manu_name'];
    
    $manufacture->addmanufacture($manu_name);

    header('location:manufactures.php');
}