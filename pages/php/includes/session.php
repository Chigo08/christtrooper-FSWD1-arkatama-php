<?php

session_start();
if (!isset($_SESSION['email'])) {
  header("location: ../task_20/login.php");
}
