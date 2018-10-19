<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rent_a_car_management_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Booking_ID = mysqli_real_escape_string($link, $_REQUEST['Booking_ID']);
$Car_ID = mysqli_real_escape_string($link, $_REQUEST['Car_ID']);
$Customer_ID = mysqli_real_escape_string($link, $_REQUEST['Customer_ID']);
$Booking_Date = mysqli_real_escape_string($link, $_REQUEST['Booking_Date']);
 
// attempt insert query execution
$sql = "INSERT INTO Booking_Information(Booking_ID,Car_ID,Customer_ID,Booking_Date) VALUES ('$Booking_ID', '$Car_ID', '$Customer_ID','$Booking_Date')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>