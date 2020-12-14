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
require 'header.php';
//session_start();
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
		<div class="main-1">
			<div class="container">
				<div class="login-page">
					<div class="account_grid">
						<div class="col-md-6 login-left">
							<h3>new customers</h3>
							<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
							<a class="acount-btn" href="account.php">Create an Account</a>
						</div>
						<div class="col-md-6 login-right">
							<h3>registered</h3>
							<p>If you have an account with us, please log in.</p>
							<form>
								<div>
									<span>Email Address<label>*</label></span>
									<input type="text" id="email" required>
								</div>
								<div>
									<span>Password<label>*</label></span>
									<input type="password" id="password" required>
								</div>
								<a class="forgot" href="#">Forgot Your Password?</a>
								<input type="submit" id="submit" value="LOG IN">
							</form>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- login -->
	<!---footer--->
	<?php
	require 'footer.php';
	?>