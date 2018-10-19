<!DOCTYPE html>
<html>

<style>

table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

table td, table th {
    border: 1px solid #ddd;
    padding: 8px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

</style>
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
  <li><a href="admin.php">Admin</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="car_info_search.php">Search</a></li>
</ul>


<h1 align=center> Car Info Search</h1>
<form method="post" action="car_info_search_view.php">
<table align=center>
       <tr>
           <td>Search By Car ID :</td>
           <td><input type="text" name="Car_ID" value=""></td>
       </tr>
	    <td></td>
           <td><input type="submit" name="register_btn" value="Search" value=""></td>
       </tr>
</table>
</form>
    

<?php
    $con= new mysqli("localhost","root","","rent_a_car_management_system");
    $name = $_POST['Car_ID'];
    //$query = "SELECT * FROM employees
   // WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'";

    // Check connection
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM car_information
    WHERE Car_ID LIKE '%{$name}%'");
	if ($result->num_rows > 0) {
    echo "<table align=center>
	<tr>
		<th>Car_ID</th>
		<th>Car_Name</th>
		<th>Car_Brand</th>		
	</tr>";
    // output data of each row

while ($row = mysqli_fetch_array($result))
{
        echo "<tr>
				<td>" . $row["Car_ID"]. "</td>
				<td>" . $row["Car_Name"]."</td>
				<td>" . $row["Car_Brand"]."</td>							
			</tr>";
}
 echo "</table>";
}
else {

    echo "No result Found";
}
    mysqli_close($con);
    ?>
	</article>
</body>
<br><br><br>
<br><br><br>
<footer>Developed by - Infinity | The students of IUBAT | Department of CSE</footer>
</html>