<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("location: ../task_20/login.php");
}

unset($_SESSION['login']);
header("location: ../task_20/login.php");
