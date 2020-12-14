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
if (!isset($_SESSION)) { 
    session_start(); 
} 
class Userclass
{
    public $userid;
    public $name;
    public $password;
    public $ques;
    public $ans;
    public $mobile;
    public $email;

    public function registration($name, $mobile, $email, $password, $ques, $ans, $data)
    {
        $msg='';
        $u = 'SELECT * FROM `tbl_user` WHERE `email`="'.$email.'"';
        $un = mysqli_query($data, $u);
        $unamecount = mysqli_num_rows($un);
        // // if ($unamecount>0) {
        // //     $msg = 'Email already exist';
        // //     return false;
        // // }
        $nu = 'SELECT * FROM `tbl_user` WHERE `mobile`="'.$mobile.'"';
        $mo = mysqli_query($data, $nu);
        $mobnamecount = mysqli_num_rows($mo);
        // // if ($mobnamecount>0) {
        // //     $msg = 'Mobile already exist';
        // //     return false;
        // // }   
        if ($unamecount>0 || $mobnamecount >0) {

            $msg = "Mobile or Email already exists";

        } else {

            $sql = "INSERT INTO `tbl_user` (`name`,`mobile`,`email`, `password`, `security_question`,`security_answer`) 
            VALUES ('".$name."','".$mobile."','".$email."', '".$password."','".$ques."','".$ans."')";  
            if ($data->query($sql) === true) {    
                $msg = 'Your Record added succesfully';  
            } else {
                $msg =  'Error';
            }              
        }
        return $msg;
    }   
    
    public function login($username, $password, $data)
    {
        $sql= "SELECT * FROM `tbl_user` WHERE 
        `email`='$username' AND `password`='$password'"; 
        //require_once 'header.php';
        $res = $data->query($sql);
        if ($res->num_rows >0) {
            while ($row = $res->fetch_array()) {
                $who = $row['is_admin'];
                if ($who=='1') {
                    $_SESSION['admindata']=array('name' => $row['name'],
                    'id' => $row['id'],'is_admin'=>$row['is_admin']);
                    $output = 1;

                } elseif ($who=='0') {
                    $_SESSION['userdata']=array('name'=>$row['name'],'mobile'=>$row['mobile'], 'email' => $row['email'],
                    'id' => $row['id'],'is_admin'=>$row['is_admin']);
                    $output = 2;
                }
            }
        } else {
            $output = 'Invalid Details'; 
        }
        return $output;
    }

   
}
?>