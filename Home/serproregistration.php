<?php
$name=$_POST['name'];
$cont=$_POST['contact'];
$Email=$_POST['email'];
$add=$_POST['add'];
$city=$_POST['city'];
$date=$_POST['date'];
$des=$_POST['descr'];
$pwd=$_POST['password'];
$proff=$_POST['profession'];

include "database.php";

$query = "INSERT INTO provider VALUES ('','$name','$cont','$Email','$add','$city','$date','$des','$pwd','$proff','')";
$data= mysqli_query($GLOBALS["___mysqli_ston"], $query);

if($data)

{
     echo "data Inserted";
     echo ("<script language='javascript'>window.alert('Successfully inserted'); window.location.href='serprodashboard.php';</script>");
	
}
else
{
    echo "faild to Insert";
    echo ("<script language='javascript'>window.alert('Not Successful Try Again'); window.location.href='serproregister.html';</script>");

}

?>