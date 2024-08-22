

<html>
	<head>
		<style>
			.center{
				width:80%;
				height:40%;
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
		</style>
<link rel="stylesheet" href="dashbord.css" >
</head>

<body>
<form action="request.php" method="POST">
<?php
 include "database.php";
 include "serprodashboard.php";
 error_reporting(0);  
 session_start();
 
 ?>
    <div class="center">
	<table>
		<?php

				 $name=$_SESSION['proname'];
                $city=$_SESSION['procity'];
				
			     $sql="SELECT * FROM  book WHERE proname='$name' and procity='$city'";
					$result=mysqli_query($GLOBALS["___mysqli_ston"],$sql);
					//$data=mysqli_fetch_assoc($result);
				if($result)
				{
					 echo '<tr><th>Name</th>
                            <th>Contact No</th>
                            <th>Address</th>
                            <th>Date</th>
                            <th>Day</th>
							<th>Descreption</th>
							<th>status</th>
							</tr>
                            ';
							 echo "<h3>You Have An Request.. <h3>";
				while($row=mysqli_fetch_assoc($result)){
                  echo '<tr><td>'.$row['Name'].'</td>
                        <td>'.$row['con'].'</td>
                        <td>'.$row['Addr'].'</td>
                        <td>'.$row['date'].'</td>
						<td>'.$row['day'].'</td>
						<td>'.$row['descr'].'</td>
                        <td>
						<button name="pend" type="submit">Accept</button>
						<button name="accept"type="submit">Reject</button>
						</td></tr>';

						if(isset($_POST['pend'])){
							$q1="UPDATE book SET status='APPROVED' WHERE Name='".$row['Name']."'";
							$res=mysqli_query($GLOBALS['___mysqli_ston'],$q1);
						}
				
						elseif(isset($_POST['accept'])){
							$q2="UPDATE book SET status='REJECTED' WHERE Name='".$row['Name']."'";
							$res=mysqli_query($GLOBALS["___mysqli_ston"],$q2);
						}
						
						
                   
                    }
				}
			     else{
			        	echo '<h2> data not found<h2>';
			}
		
		 
		if(isset($_POST['pend'])){
			$q1="UPDATE book SET status='APPROVED' WHERE Name='".$row['Name']."'";
			$res=mysqli_query($GLOBALS['___mysqli_ston'],$q1);
		}

		elseif(isset($_POST['accept'])){
			$q2="UPDATE book SET status='REJECTED' WHERE Name='".$row['Name']."'";
			$res=mysqli_query($GLOBALS["___mysqli_ston"],$q2);
		}
		
				?>
</table>
		</form>

		
        </div>
		</body>
		</html>