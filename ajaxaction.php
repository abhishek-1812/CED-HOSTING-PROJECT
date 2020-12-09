<?php
require 'dbcon.php';
require 'userclass.php';
$obj = new dbcon();
$data = $obj->connect();
$userobjects = new Userclass();

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
case 'login':
    $username = $_POST['username'];
    $password = $_POST['password'];
    $msg = $userobjects->login($username, $password, $data);
    echo $msg;
}
?>