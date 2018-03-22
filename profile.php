<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
  <!--<link href="css/site.css" rel="stylesheet" type="text/css">-->
<style>
.img-circle{
border-radius: 50%;
width: 20%;
height: 30%;
margin-top: 10%;
}

#adv{
  float:right;
  margin-top: -25%;
  margin-right: 5%;

}
p.spin{
  float: right;
  margin-top:-30%;
  margin-right: 10%;
  
}
h1.name,h2.name{color: white;}
</style>
<script type="text/javascript">
	function randomFromInterval(from, to) {
     return Math.floor(Math.random() * (to - from + 1) + from);
}

$(document).ready(function () {
  var ranNumber = randomFromInterval(1, 5)
  var picture = null;
  switch(ranNumber) {
    case 1:
    picture = '<img src="pics/redvelvet.jpg">'
    break;
    case 2:
    picture = '<img src="pics/nothing.jpg">'
    break;
    case 3:
    picture = '<img src="pics/cake.jpg">'
    break;
    case 3:
    picture = '<img src="pics/gb.jpg">'
    break;
    case 3:
    picture = '<img src="pics/choc.jpg">'
    break;
    case 3:
    picture = '<img src="pics/shake.jpg">'
    break;  
  }
  $("#adv").html(picture);
 });
</script>
<?php
session_start();
 $conn=mysql_connect("localhost","root","");
 $db=mysql_select_db("cafe",$conn);
 $name=$_POST["username"];
 $pwd=$_POST["password"];
 if($name!=''&&$pwd!='')
 {
   $query=mysql_query("SELECT * from register where username='".$name."' and password='".$pwd."'",$conn);
   $res=mysql_fetch_row($query);
   if($res)
   { include 'mypage.php'; 
    
    $name=$_POST['username'];     
  $result = mysql_query("SELECT photo FROM register WHERE username='".$name."'");
$data = mysql_fetch_assoc($result);


echo'<img src='.$data['photo'].' class="img-circle" />';


         echo'<h1 class="name">Hi, '. $name.'</h1>';
         $query=mysql_query("SELECT * from register where username='".$name."'",$conn);
         while($res=mysql_fetch_array($query))
         {
          echo'<h2 class="name">coupons: '.$res['coupon'].'<br>';
          echo'<h2 class="name">last ordered: '.$res['last_ordered'].'<br>';
         }
         ?>
   <p class="spin">Your Lucky Spin:</p>
          <div class="onSideSmall" id="adv">
         
          </div>
         <?php
          
       }
   else
   {
    $message = "wrong username or password";
echo "<script type='text/javascript'>alert('$message');</script>"; 
include 'login.html';  
   }
 }
 else
 {
  $message = "Enter username and password";
  echo "<script type='text/javascript'>alert('$message');</script>";
  include 'login.html';
 }

?>
