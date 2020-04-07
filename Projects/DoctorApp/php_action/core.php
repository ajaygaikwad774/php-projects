<?php

session_start();

include_once("database.php");

if (!($_SESSION['patient_id'])) {
  header('location:login.php');
}