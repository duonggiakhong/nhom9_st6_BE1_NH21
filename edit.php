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
    $name = $_POST['name'];
    $manu_id = $_POST['manu'];
    $type_id = $_POST['type'];
    $price = $_POST['price'];
    $image = $_FILES["image"]["name"];
    $description = $_POST['description'];
    $feature = $_POST['feature'];
    
    $product->editProduct($name,$manu_id,$type_id,$price,$image,$description,$feature);

    $target_dir = "../img";
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    header('location:products.php');
}