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
$Departure_Time = mysqli_real_escape_string($link, $_REQUEST['Departure_Time']);
$Arrival_Time = mysqli_real_escape_string($link, $_REQUEST['Arrival_Time']);
$Departure_Location = mysqli_real_escape_string($link, $_REQUEST['Departure_Location']);
$Arrival_Location = mysqli_real_escape_string($link, $_REQUEST['Arrival_Location']);
$Rent_Deadline = mysqli_real_escape_string($link, $_REQUEST['Rent_Deadline']);
 
// attempt insert query execution
$sql = "INSERT INTO Time_Location (Booking_ID, Departure_Time, Arrival_Time, Departure_Location, Arrival_Location, Rent_Deadline) VALUES ('$Booking_ID', '$Departure_Time', '$Arrival_Time', '$Departure_Location', '$Arrival_Location', '$Rent_Deadline')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>