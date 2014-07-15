<?php
	$username = 'root';
	$password = 'password';


	session_start();

	if($_POST['submit']){

		$post_usernnaame = $_POST['apt_username'];
		$post_password = $_POST['apt_username']=$_POST['apt_username'];

		if($post_usernnaame!=$username && $post_password!=$password){
			//incurrect username/password

			return;
		}

		$_SESSION['isEditor'] = $_POST['apt_username'];

		
		$host  = $_SERVER['HTTP_HOST'];
		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		$extra = '';//'mypage.php';


		header("Location: http://$host$uri/$extra");
		exit;

	}




?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Paper Stack</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
<body>
<div class="container">
	<section id="content">
		<form method="post">
			<h1>Login Form</h1>
			<div>
				<input type="text" placeholder="Username" required="" id="username" name="apt_username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="password" name="apt_password"/>
			</div>
			<div>
				<input type="submit" value="Log in" name="submit" />
				<!-- <a href="#">Lost your password?</a> -->
				<!-- <a href="#">Register</a> -->
			</div>
		</form><!-- form -->
		<!-- <div class="button">
			<a href="#">Download source file</a>
		</div> --><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>