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
$Total_Payment = mysqli_real_escape_string($link, $_REQUEST['Total_Payment']);
$Paid = mysqli_real_escape_string($link, $_REQUEST['Paid']);
$Due = mysqli_real_escape_string($link, $_REQUEST['Due']);
$Fine = mysqli_real_escape_string($link, $_REQUEST['Fine']);
$Customer_ID = mysqli_real_escape_string($link, $_REQUEST['Customer_ID']);
 
// attempt insert query execution
$sql = "INSERT INTO Payment_Information (Booking_ID, Total_Payment, Paid, Due, Fine, Customer_ID) VALUES ('$Booking_ID', '$Total_Payment', '$Paid', '$Due', '$Fine', '$Customer_ID')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>