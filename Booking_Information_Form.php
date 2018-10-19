<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="Booking_Information_Insert.php" method="post">
    <p>
        <label for="Booking_ID">Booking_ID:</label>
        <input type="text" name="Booking_ID" id="Booking_ID">
    </p>
    <p>
        <label for="Car_ID">Car_ID:</label>
        <input type="text" name="Car_ID" id="Car_ID">
    </p>
    <p>
        <label for="Customer_ID">Customer_ID:</label>
        <input type="text" name="Customer_ID" id="Customer_ID">
    </p>
	
    <p>
        <label for="Booking_Date">Booking_Date:</label>
        <input type="text" name="Booking_Date" id="Booking_Date">
    </p>
	
   
    
    <input type="submit" value="Submit">
</form>
</body>
</html>