
<html>
	<head>
		<style>
			.center{
				width:auto;
				height:auto;
				background-color:white;
				margin:100px;
			}
			table{
				border:2px solid black;
			padding:5px;
			display:center;
			margin-left:60px;
			margin-top:40px;	
			}
			th{
				border:2px solid black;
			}
			
			td{
				border:2px solid black;
			}
			body{
				background-color:teal;
			}

			h3, a{
				
				//color:white;
			}

		</style>
<link rel="stylesheet" href="dashbord.css" >
</head>

<body>
<form action="userdashboard.php" method="">
<?php
 include "database.php";
 
 error_reporting(0);
 
 session_start();

 ?>
    <div class="center">
	<center><table>
		<?php
			
				 $name=$_SESSION['proname'];
                $city=$_SESSION['procity'];
				
			     $sql="SELECT * FROM book WHERE proname='$name' and procity='$city'";
					$result=mysqli_query($GLOBALS["___mysqli_ston"],$sql);
					if($result)
					{
					 echo '<tr><th>Name</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Day</th>
							<th>PRONAME</th>
							<th>Status</th>
							</tr>
                            ';
							echo "<h3>Your Status.. <h3>";
				while($row=mysqli_fetch_assoc($result)){
                  echo '<tr><td>'.$row['Name'].'</td>
                        <td>'.$row['con'].'</td>
                        <td>'.$row['Addr'].'</td>
                        <td>'.$row['date'].'</td>
						<td>'.$row['day'].'</td>
						<td>'.$row['proname'].'</td>
						<td>'.$row['status'].'</td>
						
						</tr>';
                   
                    }
				}
			     else{
			        	echo '<h2> data not found<h2>';
			}
			
		?>

		<script> </script>
		</table>

		<center><h3><a href="userdashboard.php">click here</a>  to go on dashboard</h3></center>
	
		</center>
        </div>
		</form>

		
		</body>
		</html>
						
