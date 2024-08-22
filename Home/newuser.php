<html>
    <head>
    
		<style>
			.center{
				width:80%;
				height:auto;
				background-color:white;
				margin-top:100px;
                margin-left:50px;  
			}
			table{
				border:2px solid black;
			padding:5px;
			display:center;
			margin-left:20px;
			margin-top:20%;	
            width:auto;
			height:auto;
			}
			table th{
				border:2px solid black;
                margin-top:20%;
				border-collapse:collapse;
			}
			
			td{
				border:2px solid black;
                margin-top:40px;
			}
		</style>

        <?php 
include "database.php";
include "admindashboard.php";
?>
<form action="admindashboard.php" method="POST"></form>
<div class="center">
	<center>
	<table>
		<?php
				
			     $sql="SELECT * FROM user";
				 //for( $i=1;$i<=$sql;$i++)
				 
				 $result=mysqli_query($GLOBALS["___mysqli_ston"],$sql);
				
				// $data=mysqli_fetch_assoc($result);
				if($result)
				{
				

				
					 echo '<tr><th>UID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>UPass</th>
                            <th>Address</th>
                            <th>Profile</th></tr>
                            ';
				 while($row=mysqli_fetch_assoc($result))
				 {
	
                  echo '<tr><td>'.$row['UID'].'</td>
                        <td>'.$row['UName'].'</td>
                        <td>'.$row['UMail'].'</td>
                        <td>'.$row['UPass'].'</td>
						<td>'.$row['UAdd'].'</td>
    					<td><a href="updateprofile.php">Update</a></td></tr>';
				
				 }
                    }
			     else{
			        	echo '<h2> data not found<h2>';
				 }
			
			
		?>
        </table></center>
        </form>
        </body>
        </html>