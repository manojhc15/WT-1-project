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
		}
</head>
<body>
<div id="upper">
	<center id="welcome">Welcome to Rooster.......!</center>
</div>

	<div id="set">
	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<i><label>Username</label></i>
			<input type="text" name="username" placeholder="Username" >
		</div>
		<div class="input-group">
			<i><label>Password</label></i>
			<input type="password" name="password" placeholder="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a style="font-style: italic;" href="register.php">Sign up</a>
		</p>
	</form>
    </div>
</body>
</html>