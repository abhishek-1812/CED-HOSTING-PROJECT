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

require '../dbcon.php';

require 'Productclass.php';
$obj = new dbcons();
$data = $obj->connect();

$prodobjects = new Productclass();



$row=$prodobjects->viewProduct($data);
if ($row!=false) {
    print_r($row);
} else {
    echo false;
}

?>