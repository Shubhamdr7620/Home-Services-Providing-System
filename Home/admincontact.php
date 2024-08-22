<html>
    <head>
    
		<style>
			.center{
				width:60%;
				height:40%;
				background-color:white;
				margin-top:100px;
                margin-left:150px;  
			}
			table{
				border:2px solid black;
			padding:5px;
			display:center;
			margin-left:20px;
			margin-top:20%;	
            width:90%;
			}
			th{
				border:2px solid black;
                margin-top:20%;
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
	<table>
		<?php
				
			     $sql="SELECT * FROM contact";
				 //for( $i=1;$i<=$sql;$i++)
				 
				 $result=mysqli_query($GLOBALS["___mysqli_ston"],$sql);
				if($result)
				{
				

				
					 echo '<tr><th>ID</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>email</th>
                            <th>Subject</th>
                            <th>Message</th></tr>
                            ';
				while( $row=mysqli_fetch_assoc($result))
				{
                  echo '<tr><td>'.$row['id'].'</td>
                        <td>'.$row['Name'].'</td>
                        <td>'.$row['mobile'].'</td>
                        <td>'.$row['email'].'</td>
						<td>'.$row['subject'].'</td>
    					<td>'.$row['message'].'</td></tr>';
				}
                    
                    }
			     else{
			        	echo '<h2> data not found<h2>';
				 }
			
			
		?>
        </table>
        </form>
        </body>
        </html>