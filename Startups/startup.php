<?php 


include("includes/header.php");

?>
<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #47E116;
  color: black;
  padding: 16px;
  font-size: 20px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #00FFFF;}
</style>
</head>
<body>
    <body background="hello.jpg">
<center>

<div class="dropdown">
  <button class="dropbtn">Select District</button>
  <div class="dropdown-content">
    <a href="Startups/Dindugal.html">Dindugal</a>
    <a href="Erode.html">Erode</a>
    <a href="Kanniyakumari.html">Kanniyakumari</a>
    <a href="Karur.html">Karur</a>
    <a href="Nilgiris.html">Nilgiris</a>
    <a href="Perambalur.html">Perambalur</a>
    <a href="Salem.html">Salem</a>
    <a href="Theni.html">Theni</a>
    <a href="Tiruppur.html">Tiruppur</a>
    <a href="Vellore.html">Vellore</a>
  </div>
</div>

</center>


</body>
</html>
