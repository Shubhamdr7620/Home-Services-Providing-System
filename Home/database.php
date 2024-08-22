<html>
<head>
    <style>
      body{
        
      }
      .none{
        opacity:0;
      }

        </style>
<body>
<?php
$host="localhost";
$username="root";
$password="";
$db_name="homeservices";
($GLOBALS["___mysqli_ston"] = mysqli_connect("$host",  "$username",  "$password"))or die("cannot connect"); 
((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE $db_name"))or die("cannot select DB");
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");
if($GLOBALS)
{
  ?><div class="none">
  echo " Connection successfully";</div>
  <?php
}

?>
</body>
</html>