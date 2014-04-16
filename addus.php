<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Top King Health</title>
	<link rel="stylesheet" type="text/css" href="http://getbootstrap.com/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	
</head>
<body>
<div class="container" id="article">
	<div class="header">
		<div class="logo">
			<img width="100px" height="100px" src="clearlogo.png">
		</div>
		<div class="title">
			<h1>尊王养生</h1>
		</div>	
	</div>
	<div class="navbar navbar-default">
        <ul class="nav nav-pills">
        	<li class><a href="#">養生的開端</a></li>
	  		<li class><a href="#">走进我们</a></li>
	       	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">療愈系列<b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">伯爵養生系列三日</a></li>
	              <li><a href="#">尊爵療癒系列四天</a></li>
	              <li><a href="#">靈芝膠原白净化調理</a></li>
	            </ul>
	      	</li>
	      	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">产品展馆<b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">療愈系列功能性設備</a></li>
	              <li><a href="#">滋养再生系列</a></li>
	              <li><a href="#">机能食品系列</a></li>
				  <li><a href="#">美容美颜系列</a></li>
	            </ul>
	     	</li>
	     	<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">自然養生園地<b class="caret"></b></a>
	            <ul class="dropdown-menu">
	              <li><a href="#">blue</a></li>
	              <li><a href="#">yellow</a></li>
	              <li><a href="#">green</a></li>
	            </ul>
	      	</li>
	        <li><a href="#">互动园区</a></li>
	        <li><a href="#">客服中心</a></li>
	       
	        <li class="active"><a href="#">加入我們</a></li>
		</ul>
	</div>
	<div class="contactus">
		<form action="process.php" method="post">
			<div class="check"><input type="checkbox" name="contact" value="1">加入我們志工服務行列</div>
			<div class="check"><input type="checkbox" name="contact" value="2">加入我們自然養生系列事業</div><br>
			<div class="check"><input type="checkbox" name="contact" value="3">學習自然醫學領域</div>
			<div class="check"><input type="checkbox" name="contact" value="4">加入功能性食品推廣行列</div><br>

			<label> <h3>Name</h3></label>
			<input type="text" name="name">
			<br>
			<label> <h3>Email</h3></label>
			<input type="text" name="email">
			<br>
			<label> <h3>Phone Number</h3></label>
			<input type="text" name="phone">
			<br>
			<label> <h3>Country</h3></label>
			<input type="text" name="country">
			<br>
			<label> <h3>About You</h3></label>
			<input type="text" name="about">
			<br>
			<input class="contactbutton" type="submit" value="submit">
		</form>
	</div>
	<div class="copyright">
		<p>Copyright 2014 Top King Corporation. All rights reserved.</p>
	</div>
</div>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
 <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
</body>
</html>