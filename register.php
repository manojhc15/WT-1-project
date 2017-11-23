<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
				#upper
		{
			width: 100%;
			height: 150px;
			
			
		}
		#welcome{
			font-size: 3em;
						color:red;
						letter-spacing: 3px;
						text-shadow: 3px 2px yellow;
						font-style:italic;
						text-align: center;
		}
		body{
			background:url(background2.jpg);
		}
		#set{
         
        width: 600px;
        float: center;
        padding-left: 450px;

		}
		.header{
         	background-color: #EFDECD;
		   color:white;
		   text-align:center;
		   top:0px;
		   width:460px;
		   padding:5px;
         }
         form
			{
			width:460px;
			padding:3px;
			border:1px solid #efd240;
			margin:5px auto;
			background-color: #F2F0E6;
		}
		.textInput
{
margin-top:2px;
height:28px;
border:1px solid #74dded;
font-size:16px;
padding:1px;
width:100%;
}
	</style>
</head>
<body>

<div id="upper">
	<center id="welcome">Welcome to Rooster.......!</center>
</div>
	<div id="set">
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>
       
		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>" placeholder="username">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $email; ?>" placeholder="email" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1" placeholder="password">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2" placeholder="confirm password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</div>	
</body>
</html>