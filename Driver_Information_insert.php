<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rent_a_car_management_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Car_ID = mysqli_real_escape_string($link, $_REQUEST['Car_ID']);
$Driver_ID = mysqli_real_escape_string($link, $_REQUEST['Driver_ID']);
$Driver_License_Number = mysqli_real_escape_string($link, $_REQUEST['Driver_License_Number']);
$Driver_Name = mysqli_real_escape_string($link, $_REQUEST['Driver_Name']);
$Driver_cell = mysqli_real_escape_string($link, $_REQUEST['Driver_cell']);
$Driver_Email = mysqli_real_escape_string($link, $_REQUEST['Driver_Email']);
 
// attempt insert query execution
$sql = "INSERT INTO Driver_Information (Car_ID, Driver_ID, Driver_License_Number, Driver_Name, Driver_cell, Driver_Email) VALUES ('$Car_ID', '$Driver_ID', '$Driver_License_Number', '$Driver_Name', '$Driver_cell', '$Driver_Email')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>