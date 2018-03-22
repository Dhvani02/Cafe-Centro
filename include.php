<?php
$conn=mysql_connect("localhost","root","");
echo "You're our member";
$db=mysql_select_db("cafe",$conn);

$query="INSERT INTO register (username, password, email, bday, gender, landline, mobile, country, photo)
        VALUES ('".$_POST["user"]."','".$_POST["pass"]."','".$_POST["email"]."','".$_POST["bday"]."','".$_POST["radiobutton"]."','".$_POST["landline"]."','".$_POST["mobile"]."','".$_POST["country"]."','".$_POST["photo"]."')";
$result=mysql_query($query,$conn);
include 'login.html';

/*mysql_close($conn);*/ 
?>