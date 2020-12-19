<?php
session_start();

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    echo'<script>alert($id)</script>';
    // unset($_SESSION['cart'][$id]);
    //print_r($_SESSION['cart']);
    // header('Location:cart.php');
}
?>