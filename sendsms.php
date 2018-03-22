<?php
session_start();
$conn=mysql_connect("localhost","root","dhvani12");
$db=mysql_select_db("canteen",$conn);

$token = 'edw1NiDBkk';

$rfid=file_get_contents('id.txt');
$_SESSION["sendid"]=$rfid;
echo $rfid;
$result = mysql_query("SELECT mobile FROM register WHERE rfid='".$rfid."'");
$data = mysql_fetch_assoc($result);
$mobile=mysql_real_escape_string($data['mobile']);
echo $mobile;
echo "<br>";
$msg = mysql_real_escape_string(mt_rand(1000,10000));
echo "<script type='text/javascript'>confirm('OTP: $msg');</script>";
echo "<br>";
$site = 'dj';
$url = "http://api.fast2sms.com/sms.php?token=".$token."&mob=".$mobile."&mess=".$msg."&sender=".$site."&route=0";
$homepage = file_get_contents($url);
if($homepage)
{
  echo "Message Send Compleated...";
}
else{
  echo "Something Went Wrong...";
}

?>
