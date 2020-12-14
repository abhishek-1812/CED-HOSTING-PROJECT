$(document).ready(function(){
    var name;
    var mobile;
    var email;
    var password;
    var repassword;
    var sec_ques;
    var sec_ans;
    

    $("#submits").click(function(){

        var letter = /^([a-zA-Z]+\s?)*$/;

        var pattern = /^(0)?[4-9]{1}[0-9]{9}$/;

        var pattemail = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9]+\.[a-zA-Z]{2,4}$/;

        var pattpass = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*-])\S{8,16}$/;
      

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
            return false;

        } else if (!(name.match(letter))) {
            alert("Please enter a valid name !");
            $('#name').focus();
            return false;
        
        } else if ( mobile =="") {
            alert('Mobile Is Required !');
            $('#name').focus();
            return false;

        } else if (!(mobile.match(pattern))) {
            alert("Please Enter a valid mobile number !");
            $('#mobile').focus();
            return false;

        } else if ( mobile.length <9) {
            alert('Mobile Number must be of 10 digits !');
            $('#mobile').focus();
            return false;    

        } else if ( email =="") {
            alert('Mobile Is Required !');
            $('#mail').focus();
            return false;

        } else if (!(email.match(pattemail))) {
            alert('Please Enter a valid Email Like: email@gmail.com !');
            $('#mail').focus();
            return false;

        } else if (password =="") {
            alert('Password Is Required !');
            $('#pass').focus();
            return false;

        } else if (!(password.match(pattpass))) {
            alert("Please Enter a Strong password Like: Password@101 !");
            $('#pass').focus();
            return false;

        } else if ( repassword =="") {
            alert('Confirm Password Is Required !');
            $('#repass').focus();
            return false;

        } else if ( sec_ques =="") {
            alert('Question Is Required !');
            $('#que').focus();
            return false;

        } else if ( sec_ans =="") {
            alert('Answer Is Required !');
            $('#ans').focus();
            return false;

        } else if (password != repassword) {
            alert('Password does not matched !');
            return false;

        } else if (password.length < 9) {
            alert("Password must be of 10 digit !");
            $('#password').focus();
            return false;
            
        } else {
            var action = "signup";
            $.ajax({
                //alert(name)
                url: 'ajaxaction.php',
                type: 'POST',
                data: {
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

        $("#submit").click(function(){
            // e.preventDefault();
            
            username = $('#email').val();
            password = $('#password').val();

            if (username == "") {
                alert('Email Is Required !');
                $('#email').focus();
                return false;
    
            } else if (password =="") {
                alert('Password Is Required !');
                $('#password').focus();
                return false;
            } 

            var action = "login";
            $.ajax({
                url: 'ajaxaction.php',
                type: 'POST',
                data: {
                    username : username,              
                    password : password,               
                    action : action 
                }, 
                
                success : function(data) {
                    debugger;
                    if(data == 1) {
                        window.location.href="Admin/index.php";
                    } else if(data == 2) {
                        window.location.href = "index.php";
                    } else {
                        alert(data);
                    }
                }
            });
        });
 });