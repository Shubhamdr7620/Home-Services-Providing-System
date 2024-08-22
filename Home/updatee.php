<?php

include "database.php";

	mysqli_query($GLOBALS["___mysqli_ston"],"UPDATE provider SET status='accept' WHERE Name='".$_POST['Name']."'");

?>	
		