
<?php


include "database.php";

$name=$_POST['un'];
$pass=$_POST['pass'];

$sql = "SELECT * from user WHERE UMail='$name' and Upass='$pass'";
$result  = mysqli_query($GLOBALS["___mysqli_ston"], $sql);

$count= mysqli_num_rows($result);

if($count==1)
{
   // echo "success";
	echo ("<script language='javascript'>window.alert('Successfully Login'); window.location.href='userdashboard.php';</script>");
	session_regenerate_id();
    
}
else
{
   // echo "not success";
echo ("<script language='javascript'>window.alert('Not Successfully'); window.location.href='home.html';</script>");
//header('Location: AdminLogin.php');
}
?>
	
