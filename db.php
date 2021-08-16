<?php

$db = mysqli_connect("localhost","root","","Regna");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>