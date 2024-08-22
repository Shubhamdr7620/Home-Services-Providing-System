<html>
    <body>
        <form action="request.php" method="POST">

<?php
Session_start();
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$add=$_POST['add'];
$date=$_POST['date'];
$day=$_POST['day'];
$descr=$_POST['descr'];

if(isset($_POST['proname'])&&isset($_POST['procity'])){
$_SESSION['proname']=$_POST['proname'];
$_SESSION['procity']=$_POST['procity'];
}
$proname=$_SESSION['proname'];
$procity=$_SESSION['procity'];

include "database.php";

$query = "INSERT INTO book VALUES ('','$name','$contact','$email','$add','$date','$day','$descr','$proname','$procity','')";


$data= mysqli_query($GLOBALS["___mysqli_ston"], $query);

if($data)

{
     echo "data Inserted";
     echo ("<script language='javascript'>window.alert('requested successfully'); window.location.href='userdashboard.php';</script>");
	
}
else
{
    echo "faild to Insert";
    echo ("<script language='javascript'>window.alert('Not Successful Try Again'); window.location.href='serproregister.html';</script>");

}

?>
</form>
</body>
</html>