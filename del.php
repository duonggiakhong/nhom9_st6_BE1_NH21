<?php 
session_start();
if(isset($_GET['id'])){
    unset($_SESSION['Wishlist'][$_GET['id']]);
    header('location:Wishlist.php');
}