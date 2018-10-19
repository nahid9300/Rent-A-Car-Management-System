<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "rent_a_car_management_system");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$aa = mysqli_real_escape_string($link, $_REQUEST['a']);
$bb = mysqli_real_escape_string($link, $_REQUEST['b']);
$cc = mysqli_real_escape_string($link, $_REQUEST['c']);
$dd = mysqli_real_escape_string($link, $_REQUEST['d']);
$ee = mysqli_real_escape_string($link, $_REQUEST['e']);
$ff = mysqli_real_escape_string($link, $_REQUEST['f']); 
// attempt insert query execution
$sql = "INSERT INTO Customer_Information (Customer_ID, Customer_Name, Sex,Cell,Email, Car_ID) VALUES ('$aa', '$bb', '$cc','$dd','$ee','$ff')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>