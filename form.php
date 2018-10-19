<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="Car_ID">Car_ID:</label>
        <input type="text" name="Car_ID" id="Car_ID">
    </p>
    <p>
        <label for="Car_Licence_Number">Car_Licence_Number:</label>
        <input type="text" name="Car_Licence_Number" id="Car_Licence_Number">
    </p>
    <p>
        <label for="Car_Engine_Number">Car_Engine_Number:</label>
        <input type="text" name="Car_Engine_Number" id="Car_Engine_Number">
    </p>
	<p>
        <label for="Car_Name">Car_Name:</label>
        <input type="text" name="Car_Name" id="Car_Name">
    </p>
	<p>
        <label for="Car_Brand">Car_Brand:</label>
        <input type="text" name="Car_Brand" id="Car_Brand">
    </p>
	<p>
        <label for="Driver_ID">Driver_ID:</label>
        <input type="text" name="Driver_ID" id="Driver_ID">
    </p>
	<p>
        <label for="Total_sit">Total_sit:</label>
        <input type="text" name="Total_sit" id="Total_sit">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>