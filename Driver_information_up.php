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
      $result = mysqli_query($connector,"SELECT * FROM driver_information ORDER BY 	Driver_ID");
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
            <div class="panel-heading panel-head"><h2><center>Driver Information Update Table</center></h2></div>
			</br>
			</br>
            <div class="panel-body">
                <div class="top-buffer"></div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Driver ID</th>
                            <th>Car ID</th>
                            <th>Driver License Number</th>
                            <th>Driver Name</th>
                            <th>Driver cell</th>
                            <th>Driver Email</th>
							<th>Action Perform</th>
                            
                        </tr>
                    </thead>
                    <tbody>
		<?php
          while( $row = mysqli_fetch_array( $result ) ){
            echo
            "<tr>
              <td>{$row['Driver_ID']}</td>
              <td>{$row['Car_ID']}</td>
              <td>{$row['Driver_License_Number']}</td>
              <td>{$row['Driver_Name']}</td>
              <td>{$row['Driver_cell']}</td>
              <td>{$row['Driver_Email']}</td>
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
					echo "Driver ID : <input type='text'  name='Driver_ID' value=".$row['Driver_ID'].">";
					echo "</br></br>";
					echo "Car ID : <input type='text'  name='Car_ID' value=".$row['Car_ID'].">";
					echo "</br></br>";
					echo "Driver License Number : <input type='text' name='Driver_License_Number' value=".$row['Driver_License_Number'].">";
					echo "</br></br>";
					echo "Driver Name : <input type='text' name='Driver_Name' value=".$row['Driver_Name'].">";
					echo "</br></br>";
					echo "Driver cell : <input type='text' name='Driver_cell' value=".$row['Driver_cell'].">";
					echo "</br></br>";
					echo "Driver Email : <input type='text' name='Driver_Email' value=".$row['Driver_Email'].">";
					echo "</br></br>";

					echo"<input type='submit' name = 'submit' value='Update'>";
					echo"<input type='submit' name = 'cancle' value='Cancel'>";
					echo "</div></form>";

					if(isset($_POST['submit'])){
						$Driver_ID = $_POST["Driver_ID"];
						$Car_ID = $_POST["Car_ID"];
						$Driver_License_Number = $_POST["Driver_License_Number"];
						$Driver_Name = $_POST["Driver_Name"];
						$Driver_cell = $_POST["Driver_cell"];
						$Driver_Email = $_POST["Driver_Email"];

						$ssql = "UPDATE driver_information SET Driver_ID='$Driver_ID', Car_ID='$Car_ID', Driver_License_Number='$Driver_License_Number', Driver_License_Number='$Driver_License_Number', Driver_Name='$Driver_Name', Driver_cell='$Driver_cell', Driver_Email='$Driver_Email'
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
					$delete = "DELETE FROM driver_information WHERE sl=".$row['sl']."";
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
 <a href="Driver_Information_form.php">Insert Driver Information</a>
  </body>

</html>

