<?php       
    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $sub=$_POST['sub'];
    $msg=$_POST['msg'];

    include "database.php";
session_start();
$query = "INSERT INTO contact VALUES ('','$name','$mobile','$email','$sub','$msg')";


$data= mysqli_query($GLOBALS["___mysqli_ston"], $query);

if($data)

{
     echo "data Inserted";
     echo ("<script language='javascript'>window.alert('send successfully'); window.location.href='home.html';</script>");
	
}
else
{
    echo "faild to Insert";
    echo ("<script language='javascript'>window.alert('Not Successful Try Again'); window.location.href='home.html';</script>");

}

?>
