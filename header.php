<?php
/**
 * Short description for code
 * php version 7.2.10
 * 
 * @category Category_Name
 * @package  PackageName
 * @author   Abhishek Singh <author@example.com>
 * @license  http://www.php.net/license/3_01.txt 
 * @link     http://pear.php.net/package/PackageName 
 * 
 * This is a "Docblock Comment," also known as a "docblock."  The class'
 * docblock, below, contains a complete description of how to write these.
 */
session_start();
require 'Admin/Productclass.php';
require 'dbcon.php';
$obj = new dbcon();
$data = $obj->connect();
$prodobjects = new Productclass();
$msg  = $prodobjects->displayService($data);
// print_r($msg);
?>
<!DOCTYPE html>
<html>
<head>
<title>Ced Hosting</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<!---fonts-->
<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>

<script src="js/modernizr.custom.97074.js"></script>
<script src="js/jquery.chocolat.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>


<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<div class="header">
            <div class="container">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <i class="sr-only">Toggle navigation</i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </button>				  
                            <div class="navbar-brand">
                                <h1><a href="index.php"><span id="ced">Ced</span> <span id="host">Hosting</span></a></h1>
                            </div>
                        </div>
 
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
                                        <ul class="dropdown-menu">
                                        <?php
                                        foreach ($msg as $key=>$val) {         
                                            ?>
                                            <li><a href="catpage.php?id=<?php echo $val['id']?>"><?php echo $val['prod_name'];?></a></li>
                                        <?php
                                        }
                                    ?>
                                          </ul>
                                        </li>                               
                                <li><a href="#">Blog</a></li>                                                           
                                <li><a href="#">Pricing</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="#"><i class='fas fa-shopping-cart' style='font-size:22px;color:#e7663f'></i></a></li>
                                <?php
                                if (empty($_SESSION['userdata'])) {
                                ?>
                                <li><a href="login.php">Log In</a></li>
                                <?php
                                } else {
                                    ?>
                                    <li><a href="logout.php">Log Out</a></li>
                                <?php
                                }
                                ?>
                            </ul>                                     
                        </div>
                    </div>
                </nav>
            </div>
        </div>


