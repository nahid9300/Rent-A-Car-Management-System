<!DOCTYPE html>
<html>
<head>
	<title>Rent A Car Management System</title>
	<link rel="stylesheet" type="text/css" href="styleindex.css">
</head>
<body>

<div class="flex-container">

<header align="center">
<h1>Rent A Car Management System</h1>
</header>

<ul>
  <li><a href="index.php">Home</a></li>
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">Insert Data</a>
    <div class="dropdown-content">	
      <a href="Booking_Information_Form.php">Car Booking</a>
      <a href="Customer_Information_Form.php">Customer Information</a>
      <a href="Driver_Information_form.php">Driver Information</a> 
	  <a href="form.php">Car Information</a>
	  <a href="Payment_Information_Form.php">Payment Information</a>
	  <a href="Time_&_Location_Form.php">Car Time & Location</a>
	  
    </div>
  </li>
  
  <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">View Information</a>
    <div class="dropdown-content">     
	  <a href="Booking_view.php">Booked Car</a>
      <a href="car_view.php">Car Information</a>
      <a href="Customer_view.php">Customer Information</a> 
	  <a href="Driver_view.php">Driver Information</a>
	  <a href="payment_view.php">Car's Payment Information</a>
	  <a href="Time_&_Location_view.php">Time & Location Information</a>	  
    </div>	
  </li>
  <li><a href="inner_join.php">Car List</a></li>
  <li><a href="car_info_search.php">Search Car</a></li>
  <li><a href="admin.php">Admin</a></li>
  <li><a href="about.php">About</a></li>
  
  
</ul>


<article class="article">
<img src="index.jpg" alt="medi" width="1400"height="550"></article>

<footer>Developed by - Infinity | The students of IUBAT | Department of CSE</footer>

</body>
</html>