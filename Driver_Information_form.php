<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="Driver_Information_insert.php" method="post">
<p>
        <label for="Car_ID">Car_ID:</label>
        <input type="text" name="Car_ID" id="Car_ID">
    </p>
    <p>
        <label for="Driver_ID">Driver_ID:</label>
        <input type="text" name="Driver_ID" id="Driver_ID">
    </p>
    <p>
        <label for="Driver_License_Number">Driver_License_Number:</label>
        <input type="text" name="Driver_License_Number" id="Driver_License_Number">
    </p>
  
        <label for="Driver_Name">Driver_Name:</label>
        <input type="text" name="Driver_Name" id="Driver_Name">
    </p>
 <p>
        <label for="Driver_cell">Driver_cell:</label>
        <input type="text" name="Driver_cell" id="Driver_cell">
    </p>
 <p>
        <label for="Driver_Email">Driver_Email:</label>
        <input type="text" name="Driver_Email" id="Driver_Email">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>