
<!DOCTYPE html>
<html>
<head>
	<title>po</title>
	<style type="text/css">
		body {background:url(background2.jpg); color:moccasin;}
			* { font-weight: bold;}
			h1 {text-align: center; font-size: 25px; font-style: italic; color: red;}
			h3 {text-align: center;
			}
			label {font-size: 40px;}
			.a{
				color:red;
			}
			input {width: 400px; height: 35px; font-size: 20px; border-color: black;
			border-radius: 20px; }
			#upper{
				width: 600px;
				height: 300px;
				
			}
			#lower{
				width: 600px;
			
				height: 500px;
			}
			#left{
				
				width: 380px;
				height: 800px;
				float: left;
			}
			#center{
				background-color:#F2F0E6;
				width: 620px;
				height: 800px;
				float: left;
				border: 20px solid;
				border-radius: 40px;
			}
			#right{
				
				width: 380px;
				height: 800px;
				float: right;
			}
			#a{
				
				height: 200px;
			}
			body{
				border: 2px solid black;
			}
			#rooster{
				font-size: 3em;
				color: red;
			}
           #b{
           	border: 20px solid;
           	border-radius: 40px;
           }
	</style>
	
</head>
<body>

	<center id="rooster"><i>Rooster</i></center>
<div style="width: 100%;height: 50px">
</div>

	<div id="left">
           <div id="a"></div>
           <div>
		<center>
		<img id="b" src="place1st.jpg " width="300px" height="450px"></center></div>
	</div>
	<div id="center">
		<div id="upper">
			<div style="height: 100px"></div>

		<h1><u>Enter your Address,Name and Mobile Number</u></h1>
	   </div>
		<div id="lower" >
		<form action="place.php" method="post">
			<center>
	<input type="text" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$" name="name" placeholder="Full Name" required><br>
	<br>
	<input type="text" pattern="^[789]\d{9}$" name="mobilenumber" maxlength="10" placeholder="Mobile number" required><br><br>
	<input type="email" name="email" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required><br><br>
	<input type="text"  name="street" placeholder="Street" required><br><br>
	<input type="text"  name="pincode" placeholder="Pincode" maxlength="6" max="599999" required><br><br>
	<input type="text"  name="landmark" placeholder="Landmark" required><br><br>
	<input type="text" name="city" placeholder="City" required><br><br>
    <input type="submit">
</center>
     </div>
   </div>

</form>
<div id="right">
	<div id="a"></div>
	<div>
	<center>
	<img id="b" src="place2.jpg "></center></div>
</div>

<img src="last.png" width="100%">
</body>
</html>