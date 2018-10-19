 <?php
      $username = "root";
      $password = "";
      $host = "localhost";

      $connector = mysqli_connect($host,$username,$password)
          or die("Unable to connect");
        echo "";
      $selected = mysqli_select_db($connector,"rent_a_car_management_system")
        or die("Unable to connect");

      //execute the SQL query and return records
      $result = mysqli_query($connector,"SELECT * FROM time_location ORDER BY Booking_ID");
      ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


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
.p {
    background: #f5f3f3;
    z-index: 9999;
    height: 380px;
    width: 400px;
    position: absolute;
    margin-top: -114px;
    border: 10px solid grey;
    padding: 10px;
    border-radius: 30px;
    margin-left: 315px;
}
</style>
  </head>

  <body>
    <div class="container">
		<div class="bg-faded p-4 my-4">
			<!-- <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-2 main Myback"> -->
        <div class="panel panel-primary Myback">
            <div class="panel-heading panel-head"><h2><center>Time & Location Information Update Table</center></h2></div>
			</br>
			</br>
            <div class="panel-body">
                <div class="top-buffer"></div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Departure Time</th>
                            <th>Arrival Time</th>
                            <th>Departure Location</th>
                            <th>Arrival Location</th>
                            <th>Rent Deadline</th>
                           <th>Action Perform</th>
                            
                        </tr>
                    </thead>
                    <tbody>
		<?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['Booking_ID']}</td>
              <td>{$row['Departure_Time']}</td>
              <td>{$row['Arrival_Time']}</td>
              <td>{$row['Departure_Location']}</td>
              <td>{$row['Arrival_Location']}</td>
              <td>{$row['Rent_Deadline']}</td>
			  <td>
				<form action='' method='GET'>
					<input type='submit' name=".$row['sl']." value='Edit'> | 
					<input type='submit' name='delete".$row['sl']."' value='Delete' onClick=\"return confirm('Are you sure you want to delete?')\"> 
					
				</form>
				
			</td>
			 
            </tr>\n";
			// UPDATE CODE STARTS FROM HERE
				if(isset($_GET[$row['sl']])){
					echo"<form action='' method='POST'><div class='p' id='close'>";// CLASS P IS USED TO DECORATION AND ID CLOSE IS USED TO CLOSE THE POPUP PAGE
					echo"Update Information Form</br></br>";
					echo "Booking ID: <input type='text'  name='Booking_ID' value=".$row['Booking_ID'].">";
					echo "</br></br>";
					echo "Departure Time : <input type='text'  name='Departure_Time' value=".$row['Departure_Time'].">";
					echo "</br></br>";
					echo "Arrival Time: <input type='text' name='Arrival_Time' value=".$row['Arrival_Time'].">";
					echo "</br></br>";
					echo "Departure Location : <input type='text' name='Departure_Location' value=".$row['Departure_Location'].">";
					echo "</br></br>";
					echo "Arrival Location: <input type='text' name='Arrival_Location' value=".$row['Arrival_Location'].">";
					echo "</br></br>";
					echo "Rent Deadline: <input type='text' name='Rent_Deadline' value=".$row['Rent_Deadline'].">";
					echo "</br></br>";

					echo"<input type='submit' name = 'submit' value='Update'>";
					echo"<input type='submit' name = 'cancle' value='Cancel'>";
					echo "</div></form>";

					if(isset($_POST['submit'])){
						$Booking_ID = $_POST["Booking_ID"];
						$Departure_Time = $_POST["Departure_Time"];
						$Arrival_Time = $_POST["Arrival_Time"];
						$Departure_Location = $_POST["Departure_Location"];
						$Arrival_Location = $_POST["Arrival_Location"];
						$Rent_Deadline = $_POST["Rent_Deadline"];

						$ssql = "UPDATE time_location SET Booking_ID='$Booking_ID', Departure_Time='$Departure_Time', Arrival_Time='$Arrival_Time', Departure_Location='$Departure_Location', Arrival_Location='$Arrival_Location', Rent_Deadline='$Rent_Deadline'
						WHERE sl=".$row['sl']."";
						
						if ($connector->query($ssql) === TRUE) {
						echo "<script type='text/javascript'>alert('Submitted successfully!!!')</script>";
						} else {
						echo "Upadate Unsucessful!!!". $connector->error;
						}

					}
					if(isset($_POST['cancle'])){
						echo "<script>document.getElementById('close').style.display='none'</script>";
					}
				}
				// DELETE CODE STARTS FORM HERE
				if(isset($_GET['delete'.$row['sl']])){
					$delete = "DELETE FROM time_location WHERE sl=".$row['sl']."";
					if ($connector->query($delete) === TRUE) {
					echo "<script type='text/javascript'>alert('Deleted successfully!')</script>";
					echo "<meta http-equiv='refresh' content='0'>"; // THIS IS FOR AUTO REFRESH CURRENT PAGE
					} else {
					echo "Delete Unsucessful". $connector->error;
					}
				}
			
          }
        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
        </div>
      </div>
	  <br>
 <a href="Time_&_Location_Form.php">Insert Cars time and location information</a>
  </body>

</html>

