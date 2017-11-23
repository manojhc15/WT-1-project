


<html>
<style type="text/css">
	#upper{
				width: 600px;
				height: 100px;
			 font-size: 20px;
			 font-weight: bold;
			 font-style: italic; 	
			 text-shadow: 3px 2px #8ffc50;

			}
			#lower{
				width: 600px;
			    font-size: 20px;
			 font-weight: bold;
			 font-style: italic; 
				height: 340px;
				 
				border: 10px solid #FF3800;
				border-radius: 80px;

			}

			body {background:url(background2.jpg);}
			#a{
				width:100%;
				height: 100px;
			

			}
			#b{
				width:100%;
				height: 800px;
				
             
			}
			#c{
				width:300px;
				height: 800px;
				
               float: left;
			}
			#d{
				background-color:#C9FFE5;
				width:800px;
				height: 800px;
				
               border: 20px solid #F2B400;
               border-radius: 40px;
              float: left;
			}
			#e{
				width:300px;
				height: 400px;
				
              float: left;
			}
			h1 {
    border-left: 6px solid red;
    background-color: lightgrey;
}
</style>
<body>

	<div id="a"></div>
    <div id="b">
    	<div id="c"></div>
    	<div id="d">
    	<center>
<div id="upper">
<h1>Thank you !!!!</h1>
<h1>you order has been Placed</h1>
</div>
<div id="upper">
<h3>You order will be deliver with in 30 minutes to below address.</h3>
<hr>
<p>please pay at the time of delivery as on receipt</p>
</div>
<div id="lower">
	<br>
	<address style="font-style: oblique">
 <?php echo $_POST["name"]; ?><br><br>
 <?php echo $_POST["mobilenumber"]; ?><br><br>
 <?php echo $_POST["email"]; ?><br><br>
 <?php echo $_POST["street"]; ?><br><br>
 <?php echo $_POST["landmark"]; ?><br><br>
 <?php echo $_POST["city"]; ?><br><br>
pincode: <?php echo $_POST["pincode"]; ?><br><br>
 <?php echo $_GET["city"]; ?><br>


 </address>
</div>
<hr>
<p style="text-shadow:3px 2px yellow; font-size: 2em "> Continue Shopping</p>
<a href="index.php" style="color: red">Home</a>
</center>	



    	</div>
    	<div id="e"></div>
    </div>
  <div id="a">
  	
  </div>

</body>
</html>
