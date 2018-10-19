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
      $result = mysqli_query($connector,"SELECT * FROM booking_information ORDER BY Booking_ID");
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
            <div class="panel-heading panel-head"><h2><center>Booking Information Update Table</center></h2></div>
			</br>
			</br>
            <div class="panel-body">
                <div class="top-buffer"></div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Car ID</th>
                            <th>Customer ID</th>
                            <th>Booking Date</th>
							<th>Action Perform</th>
                        </tr>
                    </thead>
                    <tbody>
		<?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['Booking_ID']}</td>
              <td>{$row['Car_ID']}</td>
              <td>{$row['Customer_ID']}</td>
              <td>{$row['Booking_Date']}</td>
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
					echo "Booking ID : <input type='text'  name='Booking_ID' value=".$row['Booking_ID'].">";
					echo "</br></br>";
					echo "Car ID : <input type='text'  name='Car_ID' value=".$row['Car_ID'].">";
					echo "</br></br>";
					echo "Customer ID: <input type='text' name='Customer_ID' value=".$row['Customer_ID'].">";
					echo "</br></br>";
					echo "Booking Date : <input type='text' name='Booking_Date' value=".$row['Booking_Date'].">";
					echo "</br></br>";
					

					echo"<input type='submit' name = 'submit' value='Update'>";
					echo"<input type='submit' name = 'cancle' value='Cancel'>";
					echo "</div></form>";

					if(isset($_POST['submit'])){
						$Booking_ID = $_POST["Booking_ID"];
						$Car_ID = $_POST["Car_ID"];
						$Customer_ID = $_POST["Customer_ID"];
						$Booking_Date = $_POST["Booking_Date"];

						$ssql = "UPDATE booking_information SET Booking_ID='$Booking_ID', Car_ID='$Car_ID', Customer_ID='$Customer_ID',     
Booking_Date='$Booking_Date'
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
					$delete = "DELETE FROM booking_information WHERE sl=".$row['sl']."";
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
 <a href="Booking_Information_Form.php">Insert Booking Information</a>
  </body>

</html>

