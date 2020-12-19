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
 * This is a "Docblock Comment,"
 */
require 'header.php';
// require 'dbcon.php';
require 'userclass.php';
$obj = new dbcons();
$data = $obj->connect();
//session_start();
$errors = array();
$msg = '';

// if (isset($_POST['submit'])) {
//     $name = isset($_POST['name'])?$_POST['name']:'';
//     $mobile = isset($_POST['mobile'])?$_POST['mobile']:'';
//     $email = isset($_POST['email'])?$_POST['email']:'';
//     $password = md5(isset($_POST['pass'])?$_POST['pass']:'');
//     $repassword = md5(isset($_POST['repass'])?$_POST['repass']:'');
   
 
//     if ($password==$repassword) {
//         $con = new Userclass();
//         $msg = $con->registration($username, $name, $password, $repassword, $mobile, $data);
//     } else {
//         $errors = array('input'=>'form','msg'=>'Password does not match');
//     }
// }
?>
<!---fonts-->
<!--script-->
<link rel="stylesheet" href="css/swipebox.css">
            <script src="js/jquery.swipebox.min.js"></script> 
                <script type="text/javascript">
                    jQuery(function($) {
                        $(".swipebox").swipebox();
                    });
                </script>
<!--script-->
</head>
<body>
    <!---header--->
        
    <!---header--->
        <!---login--->
            <div class="content">
                <!-- registration -->
    <div class="main-1">
        <div class="container">
            <div class="register">
                <form action="#" id="mf" method="post"> 
                 <div class="register-top-grid">
                    <h3>personal information</h3>
                     <div>
                        <span>Name<label>*</label></span>
                        <input type="text" id="names" required> 
                     </div>
                     <div>
                        <span>Mobile<label>*</label></span>
                        <input type="text" id="mob" required> 
                     </div>
                     <div>
                         <span>Email Address<label>*</label></span>
                         <input type="text" id="mail" name="email" required> 
                     </div>
                     <div class="clearfix"> </div>
                       <a class="news-letter" href="#">
                         <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
                       </a>
                     </div>
                     <div class="register-bottom-grid">
                     
                            <h3>login information</h3>
                             <div>
                                <span>Password<label>*</label></span>
                                <input type="password" id="pass" required>
                             </div>
                             <div>
                                <span>Confirm Password<label>*</label></span>
                                <input type="password" id="repass" required>
                             </div>
                             <div class="register-bottom-grid">
                             <span>Security Question<label>*</label></span>
                                <select name="" id="que">
                                    <option value="">Select Your Question </option>
                                    <option value="What is Your Nick Name?">What is Your Nick Name?</option>
                                    <option value="What is Your Favourite Sport?">What is Your Favourite Sport?</option>
                                    <option value="Who is Your Favourite Actor?">Who is Your Favourite Actor?</option>
                                    <option value="What is Your Favourite Movie?">What is Your Favourite Movie?</option>
                                </select>
                             </div>
                             <div class="register-bottom-grid">
                                <span>Your Answer<label>*</label></span>
                                <input type="text" id="ans" required>
                             </div>
                             <div class="register-but">
                             <input type="submit" name="submit" id="submits" value="submit">
                             <div class="clearfix"> </div>
                             </div>
                     </div>
                
                <div class="clearfix"> </div>
                </form>
                <!-- <div class="register-but">
                
                       <input type="submit" name="submit" value="submit">
                       <div class="clearfix"> </div>
                  
                </div> -->
           </div>
         </div>
    </div>
<!-- registration -->

            </div>
<!-- <script>
$(document).ready(function(){
    var name;
    var mobile;
    var email;
    var password;
    var repassword;
    var sec_ques;
    var sec_ans;
    var message;

    $("#submits").click(function(){
        name = $('#names').val();
        mobile = $('#mob').val();
        email = $('#mail').val();
        password = $('#pass').val();
        repassword = $('#repass').val();
        sec_ques = $('#que').val();
        sec_ans = $('#ans').val();

        if (name == "") {
            alert('Name Is Required !');
            $('#name').focus();
            // return false;

        } else if ( mobile =="") {
            alert('Mobile Is Required !');
            $('#name').focus();
            // return false;

        } else if ( mobile.length <9) {
            alert('Mobile Number must be of 10 digits !');
            $('#mobile').focus();
            // return false;    

        } else if ( email =="") {
            alert('Mobile Is Required !');
            $('#email').focus();
            // return false;

        } else if (password =="") {
            alert('Password Is Required !');
            $('#pass').focus();
            // return false;
        }
        else if ( repassword =="") {
            alert('Confirm Password Is Required !');
            $('#repass').focus();
            // return false;

        } else if ( sec_ques =="") {
            alert('Question Is Required !');
            $('#que').focus();
            // return false;

        } else if ( sec_ans =="") {
            alert('Answer Is Required !');
            $('#ans').focus();
            // return false;

        } else if (password != repassword) {
            alert('Password does not matched !');
            // return false;

        } else if (password.length < 9) {
            alert("Password must be of 10 digit !");
            $('#password').focus();
            // return false;
            
        // } else {
            // if(name == ''|| mobile ==''|| email == '' || sec_ques == ''|| sec_ans =='' || password=='' ||repassword =='') {
            //     alert("feilds are required");
            // } else {
                var action = "signup";
            $.ajax({
                //alert(name)
                url: 'ajaxaction.php',
                type: 'POST',
                data : {
                    name : name,
                    email : email,
                    mobile : mobile,
                    password : password,
                    sec_ques : sec_ques,
                    sec_ans : sec_ans,
                    action : action 
                }, 
                
                success : function(data) {
                    alert(data);
                    //console.log(data);
                }
            });
        }
    });
        $("#name").keypress(function(event) {
        var character = String.fromCharCode(event.keyCode);
        return isValid(character);     
        });

       function isValid(str) {
        return !/[~`!@.0-9#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
        }
        $("#mob").keypress(function(event) {
        var character = String.fromCharCode(event.keyCode);
        return isValidMob(character);     
        });

       function isValidMob(str) {
        return !/[~`!@.a-zA-Z#$%\^&*()+=\-\[\]\\';,/{}|\\":<>\?]/g.test(str);
        }
 });
</script> -->
<?php
require 'footer.php';
?>