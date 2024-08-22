<html>
    <head>
        <link rel="stylesheet" href="dashbord.css" >
    <style>body{
        background-image:url("Homeser/banner1.jpg");
        width:100%;
        height:100%;
    }
        table{
            background-color:white;
            width:80%;
            height:auto;
            margin-left:125px;

        }
        td{
            border:2px solid black;
            margin-left:15px;
        }

    </style>


    </head>

    <body>
        
    <nav id="home">
   
        <ul>
            
            <li><a href="response.php">Booking</a>
               </li>
            <li><a href="contactus.html">Contact Us</a></li>
            <li><a href="logout.php" >Logout</a></li>
        </ul>

    </nav>

   

    <?php   
    include "database.php";
    ?>
    <div id="container" >
        <form method="POST">
            <label class="label" >City</label>
            <input type="text" placeholder="Search Here" name="search" id="Iknow" >
            <label class="label">Required Service</label>
            <input type="text" placeholder="Enter Required Servise" name="servise" id="servise">
            <button id="search"name="submit">Search</button>
    </div>

    <div class="center">
	<table>
		<?php
			if(isset($_POST['submit']))
			{
				 $city=$_POST['search'];
                $proff=$_POST['servise'];
				
			     $sql="SELECT * FROM provider WHERE city='$city' and profession='$proff'";
					$result=mysqli_query($GLOBALS["___mysqli_ston"],$sql);
				if(mysqli_num_rows($result)>0)

                {
					 echo '<tr><th>Name</th>
                            <th>City</th>
                            <th>Proffession</th>
                            <th>Contact</th>
                            <th>Book</th></tr>
                            ';
				 $row=mysqli_fetch_assoc($result);
                  echo '<tr><td>'.$row['Name'].'</td>
                        <td>'.$row['city'].'</td>
                        <td>'.$row['profession'].'</td>
                        <td>'.$row['contact'].'</td>
                        <td><a href="booking.html">Click Here</a></td></tr>';
                    echo "<h3>we got service provider </h3>";
                    }
			     else{
			        	echo '<h2> data not found</h2>';
			}
			}
		?>
	
        </div>
		</body>
		</html>
