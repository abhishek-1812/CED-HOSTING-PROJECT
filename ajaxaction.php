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
require 'dbcon.php';
require 'userclass.php';
require 'Admin/Productclass.php';
$obj = new dbcons();
$data = $obj->connect();
$userobjects = new Userclass();
$prodobjects = new Productclass();

if (isset($_POST['action'])) {

    $action = $_POST['action'];

    switch ($action) {

    case 'signup':
        $name = $_POST['name'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ques = $_POST['sec_ques'];
        $ans = $_POST['sec_ans'];
        $msg = $userobjects->registration($name, $mobile, $email, $password, $ques, $ans, $data);
        echo ($msg);
        break;

    case'login':
        $username = $_POST['username'];
        $password = $_POST['password'];
        $msg = $userobjects->login($username, $password, $data);
        echo $msg;
        break;

    case'enterProduct':
        $name = $_POST['name'];
        $link = $_POST['link'];
        $avail = $_POST['available'];
        $msg = $prodobjects->enterProduct($name, $link, $avail, $data);
        echo $msg;
        break;

    case 'deleteProduct':
        $id = $_POST['id'];
        $msg =  $prodobjects->deleteProduct($id, $data);
        echo $msg;
        break;

    case 'editProduct':
        $id = $_POST['id'];
        $msg =  $prodobjects->editProduct($id, $data);
        echo $msg;
        break;

    case 'UpdateProduct':
        $id = $_POST['id'];
        $name = $_POST['pname'];
        $link = $_POST['plink'];
        $avail = $_POST['pavailable'];
        $msg = $prodobjects->updateProduct($id, $name, $link, $avail, $data);
        echo $msg;
        break;

    case 'InsertProduct':

        $sel = $_POST['sel'];
        $pname = $_POST['pname'];
        $url = $_POST['url'];
        $monthprice = $_POST['monthprice'];
        $annualprice = $_POST['annualprice'];
        $sku = $_POST['sku'];
        $space = $_POST['space'];
        $domain = $_POST['domain'];
        $band = $_POST['band'];
        $tech = $_POST['tech'];
        $mailbox = $_POST['mailbox'];
        $description=array(
            "webspace"=>$space,
            "bandwidth"=>$band,
            "domain"=>$domain,
            "lang"=>$tech,
            "mail"=>$mailbox,
        );
        $desc=json_encode($description);
        $msg = $prodobjects->insertProduct($sel, $pname, $url, $monthprice, $annualprice, $sku, $desc, $data);
        print_r($msg);

        break;
    
    case 'editAllProduct':
        $id = $_POST['id'];
        $msg =  $prodobjects->editAllProduct($id, $data);
        echo $msg;
        break;

    case 'updateProduct':
        $sel = $_POST['sel'];     
        $pname = $_POST['name'];
        $url = $_POST['url'];
        $monthprice = $_POST['monthprice'];
        $annualprice = $_POST['annualprice'];
        $sku = $_POST['sku'];
        $space = $_POST['space'];
        $domain = $_POST['domain'];
        $band = $_POST['band'];
        $tech = $_POST['tech'];
        $mail = $_POST['mail'];
        $pid = $_POST['pid'];
        
        $msg = $prodobjects->updatedProduct($sel, $pname, $url, $monthprice, $annualprice, $sku, $space, $domain, $band, $tech, $mail, $pid, $data);
        echo $msg;
        break;

    case 'deleteAllProduct':
        $id = $_POST['id'];
        $msg =  $prodobjects->deleteAllProduct($id, $data);
        echo $msg;
        break;
    }

   
}
if (isset($_GET['fetchData'])) {
    $row = $prodobjects->fetchProduct($data);
    if ($row!=false) {
        print_r($row);
    } else {
        echo false;
    }
}
 
if (isset($_GET['viewProduct'])) {
    $row=$prodobjects->viewProduct($data);
    // if ($row!=false) {
    //    echo $row;
    // } else {
    //     echo false;
    // }
    echo $row;
}

?>