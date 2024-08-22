<?php
$name=$_POST['un'];
$pass=$_POST['pass'];

if($name=="user" && $pass=="user123"){



    echo ("<script language='javascript'>window.alert('Successfully Login'); window.location.href='admindashboard.php';</script>");

}
else
{
   // echo "not success";
echo ("<script language='javascript'>window.alert('Not Successfully'); window.location.href='home.html';</script>");
//header('Location: AdminLogin.php');
}
?>