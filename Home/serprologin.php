
<?php


include "database.php";

$email=$_POST['email'];
$password=$_POST['pwd'];

$sql = "SELECT * FROM provider WHERE Email='$email' and pwd='$password'";
$result  = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

$count= mysqli_num_rows($result);

if($count==1)
{
   // echo "success";
	echo ("<script language='javascript'>window.alert('Successfully Login'); window.location.href='serprodashboard.php';</script>");
	session_regenerate_id();
    
}
else
{
   // echo "not success";
echo ("<script language='javascript'>window.alert('Not Successfully'); window.location.href='serprologin.html';</script>");
//header('Location: AdminLogin.php');
}
?>
	
