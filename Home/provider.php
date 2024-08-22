<html>
    <head>
    
		<style>
			.center{
				width:80%;
				height:auto;
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
				
			     $sql="SELECT * FROM provider";
					$result=mysqli_query($GLOBALS["___mysqli_ston"],$sql);
				if($result)
				{
                   // for($i=$result;$i>null;$i++)
                  //  {
					 echo '<tr><th>NAME</th>

                            <th>CONTACTS</th>
                            <th>EMAIL</th>
                            <th>ADD</th>
                            <th>CITY</th>
                            <th>PROFESSION</th>
                            <th>PROFILE</th></tr>
                            ';
				 while($row=mysqli_fetch_assoc($result))
        	{
				 echo '<tr><td>'.$row['Name'].'</td>
                        <td>'.$row['contact'].'</td>
                        <td>'.$row['Email'].'</td>
                        <td>'.$row['Add'].'</td>
						<td>'.$row['city'].'</td>
                        <td>'.$row['profession'].'</td>
    					<td><a href="">Update</a></td></tr>';
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