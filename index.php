<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>

	<link rel="icon" href="bottle.png" type="image/icon">
	<title>Home</title>
    <style type="text/css">
    	#heading {background-color:#2e3192;
						height: 100px;
						width:100%;
					   
						 }
					.lp{
					    width: 49.6%;
					    height: 950px;
					    float: left;
					 background-color: orange;
					    border-collapse: collapse;	
					}

					.mp{
					   width: 49.6%;
					   height: 950px;
					   float: right;
					   background-color: royalblue;
					   border-collapse: collapse;
					}
					.lp1{
					    width: 49.6%;
					    height: 950px;
					    float: left;
					  background-color: royalblue;
					    border-collapse: collapse;
					}

					.mp1{
					   width: 49.6%;
					   height: 950px;
					   float: right;
					   background-color: orange;
					   border-collapse: collapse;
					}
			        .align{
						float: left;
						font-size: 3em;
					}
					.ol{
						font-size: 0.5em;;
					}
					.align2{
						 
						font-size: 5em;
						color:red;
						letter-spacing: 3px;
						text-shadow: 3px 2px yellow;
						font-style:italic;
						text-align: center;
					}
			a:hover{color:red;}
					.a{color:coral;}

	table, th, td {
				    border: 1px solid black;
					padding: 5px;
					border-spacing: 120px;
				    border-collapse:20px;
					}

					#space{
						width: available;
						height: 500px;
					}
					#image{
						float: left;
					}
					#nextimage{
						float: left;
					}
					#align{
						position: fixed;
						bottom:0;
						right:0;
					}
					#space{
						width: available;
						height: 30px;
					}
					#space1{
						width: available;
						height: 300px;
					}
					#screen{
					width: 100%;
					height: 100%;
					}
					#right11{
						
						width:500px;
					
						height: 10px;
					}
					#right12{
						
						width:500px;
					
						height: 60px;
					}
					#left{
						float: left;
						width:170px;
						height: 100px;
						
					}
					#right1{
						float: left;
						width:500px;
						height: 100px;
					}
					
					#right2{
                         float: right;
                        
						  display: block;
						  color: #f2f2f2;
						  text-align: center;
						  padding: 14px 16px;
						  text-decoration: none;
						  font-size: 17px;
                         
						height: 100px;
					}
					#right3{
                         float: left;
                         width:125px;
                         
						height: 100px;
					}
					#right4{
                         float: left;
                         width:100px;
                         
						height: 100px;
					}
					#logout{
						font-size: 20px;
						float: left;
						align-items: right;
					}
					#welcome
					{
						color: Fluorescent Pink;
						background-color:#EEDC82;
						font-size: 50px;
			 font-weight: bold;
			 font-style: italic; 
					}

    </style>
</head>
<body>
	<body id="screen">
	<div id="heading">
		<div id="left"><img src="download.png" height="100px" width="170" ></div>
		<div id="right1" width="100%"><div id="right11"></div><div id="right12"><span class="align2"> ROOSTER</span></div></div>
		<div style="width: 100%;height: 1px"></div>
		<div id="right2"><span class="align"><?php  if (isset($_SESSION['username'])) : ?>
			<!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
			 <a id="logout" href="index.php?logout='1'" style="color:red;">logout</a>		<?php endif ?></span></div>
		<div id="right2" width="100%"><!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--><u><a href="#" onclick="alert('Call 1800-600-009');" style="font-size: 20px;color: red">help</a></u></div><div id="right2"><!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--><u><a href="#" onclick="alert('Leading Softdrinks supplier currently in market  The customer service being excellent and rating compared to other suppliers is marginally high. And you will find a reason to buy at us');" style="font-size: 20px;color: red">about us</a></u></div>
	</div>
	<div style="width:100%; height: 60px" id="welcome"><center><a>Welcome <strong><?php echo $_SESSION['username']; ?>!!</strong></a></center></div>
<div style="width: 100%;height: 1px"></div>
<marquee align="right" loop="infinte" behaviour="slide" bgcolor="red" direction="left" height=60 width=100%>
<h1>
Welcome  to the Rooster..........!                                   
</h1>
</marquee>
<div id="space1" width="100%">
<img src="nosugar.jpg" width="100%">
</div>
<table style="width:100%" >
  <tr>
     <th colspan="3" onclick="location.href='pepsi.html'">
       <div id="image" > <img src="product11.png" width="200px" height="250px" align="left">	</div>
       <h1><i><u>Minute Maid Orange</u></i></h1>
		  <div id="nextimage">
       <p>Net Quantity (Per Tetrapak) : 1 L </p>
       <p>Pack Of : 1 Tetrapak</p>
       <p style="color: red">ONLINE PRICE : RS. 89.00</p>
        </div>
    </th>
  </tr>
  <tr>
     <th colspan="3" onclick="location.href='pepsi7.html'">
       <div id="image" > <img src="product27.png" width="200px" height="250px" align="left">	</div>
       <h1><i><u>Limca 750 ML Pack</u></i></h1>
		  <div id="nextimage">
       <p>Net Quantity (Per bottle) : 750mL </p>
       <p>Pack Of : 1 Bottle</p>
       <p style="color: red">ONLINE PRICE : RS. 40.00</p>
        </div>
    </th>
  </tr>
  <tr>
     <th colspan="3" onclick="location.href='pepsi10.html'">
       <div id="image" > <img src="product30.png" width="200px" height="250px" align="left">	</div>
       <h1><i><u>Minute Maid Apple Family Pack</u></i></h1>
		  <div id="nextimage">
       <p>Net Quantity (Per bottle) : 1 L </p>
       <p>Pack Of : 1 bottle</p>
       <p style="color: red">ONLINE PRICE : RS. 60.00</p>
        </div>
    </th>
  </tr>
  <tr>
     <th colspan="3" onclick="location.href='pepsi5.html'">
       <div id="image" > <img src="product25.png" width="200px" height="250px" align="left">	</div>
       <h1><i><u>Maaza 250 ML Pack</u></i></h1>
		  <div id="nextimage">
       <p>
Net Quantity (Per Bottle):  250 ml</p>
       <p>Pack Of : 1 bottle</p>
       <p style="color: red">ONLINE PRICE : RS. 20.00</p>
        </div>
    </th>
  </tr>
  <tr>
     <th colspan="3" onclick="location.href='pepsi3.html'">
       <div id="image" > <img src="product23.png" width="200px" height="250px" align="left">	</div>
       <h1><i><u>FANTA ORANGE FLAVOURED CAN</u></i></h1>
		  <div id="nextimage">
       <p>Net Quantity (Per Can) : 300mL </p>
       <p>Pack Of : 1 Can</p>
       <p style="color: red">ONLINE PRICE : RS. 35.00</p>
        </div>
    </th>
  </tr>
  <tr>
     <th colspan="3" onclick="location.href='pepsi1.html'">
       <div id="image" > <img src="product21.png" width="200px" height="250px" align="left">	</div>
       <h1><i><u>Coca cola</u></i></h1>
		  <div id="nextimage">
       <p>Net Quantity (Per Can) : 300 mL </p>
       <p>Pack Of : 1 Can</p>
       <p style="color: red">ONLINE PRICE : RS. 35.00</p>
        </div>
    </th>
  </tr>
  <tr>
     <th colspan="3" onclick="location.href='pepsi4.html'">
       <div id="image" > <img src="product24.png" width="200px" height="250px" align="left">	</div>
       <h1><i><u>Limca Can</u></i></h1>
		  <div id="nextimage">
       <p>Net Quantity (Per Can) : 300 mL </p>
       <p>Pack Of : 1 can</p>
       <p style="color: red">ONLINE PRICE : RS. 34.00</p>
        </div>
    </th>
  </tr>
  <tr>
     <th colspan="3" onclick="location.href='pepsi14.html'">
       <div id="image" > <img src="product34.png" width="200px" height="250px" align="left">	</div>
       <h1><i><u>Minute Maid Nimbu Fresh Family Pack</u></i></h1>
		  <div id="nextimage">
       <p>Net Quantity (Per Bottle) : 1 L </p>
       <p>Pack Of : 1 Bottel</p>
       <p style="color: red">ONLINE PRICE : RS. 55.00</p>
        </div>
    </th>
  </tr>
  <tr>
     <th colspan="3" onclick="location.href='pepsi8.html'">
       <div id="image" > <img src="product28.png" width="200px" height="250px" align="left">	</div>
       <h1><i><u>Minute Maid Gritty Guava</u></i></h1>
		  <div id="nextimage">
       <p>Net Quantity (Per bottel) : 500 mL </p>
       <p>Pack Of : 2  bottle</p>
       <p style="color: red">ONLINE PRICE : RS. 40.00</p>
        </div>
    </th>
  </tr>
</table>
<div align="center" style="font-size: 20px"><a href="nextpage1.html"> next>></a></div>
<div id="space">

</div>

	<img src="lower.jpg" width="100%">		
<div style="background-color: black;color:white; width:100%;height: 120px ">
	<p><sup>*</sup>Terms and conditions apply</p>
	<center>Coca-Cola, Coke, Diet Coke, Coca-Cola Zero, Coke Zero, Dynamic Ribbon and Contour Bottle are the registered trademarks of The Coca-Cola Company</center>

    <center>&copy; 2017 The Coca-Cola Company. All Rights Reserved.</center>




</div>		
</body>
</html>