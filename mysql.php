<?php
if(isset($_POST['sub']))
{
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


 

}
$con =mysqli_connect('localhost','root' ,'');
  mysqli_select_db($con,'contacts');
  /if($con){
      echo "connection successful";

  }else{
      echo"no connection";  }
     
     


?>