<!DOCTYPE html>
<html>
<head>
	<title>Index Page</title>
</head>
<?php
include 'includes/links.php'
?>
<style type="text/css">
	body  {
  background-image: url(workplace2.jpg);
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  background-color: rgba(0,0,0,0.4);
}
a{
	list-style: none;
	text-decoration: none;
	text-align: center;
}
.heading{
	text-align: center;
	color: white;
	margin-top: 14%;
	background-color: rgba(0,0,0,0.9);
	padding: 12px 0px;
}
.heading h1
{
	font-family: 'Montserrat', sans-serif;
	font-size: 36px;
}
.heading p
{
	font-family: 'Rubik', sans-serif;
	font-size: 18px;
}
.heading h3
{
	font-family: 'Montserrat', sans-serif;
}
.heading button
{
	margin-right:4%;
}
.link1{
color: white;
}
.link1:hover{
text-decoration: none;
list-style: none;
color: white;
}
.link2{
color: white;
}
.link2:hover{
text-decoration: none;
list-style: none;
color: white;
}
</style>
<body>
<?php
include 'includes/navbar.php'
?>
<div class="container">
<div class="heading">
<h1>Welcome To Hayat Hotel</h1>
<h3>Enjoy your stay</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<button type="button" class="btn btn-dark"><a href="Index/register.php" class="link1">REGISTER</a></button><button type="button" class="btn btn-dark"><a href="Index/login.php" class="link2">LOGIN</a></button>
</div>
</div>
</body>
</html>