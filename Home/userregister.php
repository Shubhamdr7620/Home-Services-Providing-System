<?php
$name=$_POST['name'];
$add=$_POST['add'];
$mail=$_POST['email'];
$pass=$_POST['pass'];

$conn=mysqli_connect('localhost','root','','homeservices');

$query="INSERT INTO user VALUES('','$name','$mail','$pass','$add')";
$data=mysqli_query($conn,$query);



if($data)

{
     echo "data Inserted";
     echo ("<script language='javascript'>window.alert('Successfully inserted'); window.location.href='userdashboard.php';</script>");
	
}
else
{
    echo "faild to Insert";
    echo ("<script language='javascript'>window.alert('Not Successful Try Again'); window.location.href='login.html';</script>");

}

?>
</form>