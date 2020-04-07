<?php

session_start();

include_once("database.php");


if(!($_SESSION['admin_id'])){
     header('location:login.php');
   }
   
?>