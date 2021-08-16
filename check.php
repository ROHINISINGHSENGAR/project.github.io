<?php

$con =mysqli_connect('localhost','root' ,'');
  mysqli_select_db($con,'regna');
  if($con){
      echo "connection successful";

  }else{
      echo"no connection";  }



?>