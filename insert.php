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
$Car_Licence_Number = mysqli_real_escape_string($link, $_REQUEST['Car_Licence_Number']);
$Car_Engine_Number = mysqli_real_escape_string($link, $_REQUEST['Car_Engine_Number']);
$Car_Name = mysqli_real_escape_string($link, $_REQUEST['Car_Name']);
$Car_Brand = mysqli_real_escape_string($link, $_REQUEST['Car_Brand']);
$Driver_ID = mysqli_real_escape_string($link, $_REQUEST['Driver_ID']);
$Total_sit = mysqli_real_escape_string($link, $_REQUEST['Total_sit']);
 
// attempt insert query execution
$sql = "INSERT INTO car_information (Car_ID, Car_Licence_Number, Car_Engine_Number, Car_Name, Car_Brand, Driver_ID, Total_sit) VALUES ('$Car_ID', '$Car_Licence_Number', '$Car_Engine_Number', '$Car_Name', '$Car_Brand', '$Driver_ID', '$Total_sit')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>