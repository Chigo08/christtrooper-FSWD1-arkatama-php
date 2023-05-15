<?php
session_start();

// if (session_destroy()) {
//   header("location: ../task_20/index.php");
// }

if (!isset($_SESSION['login'])) {
  header("location: ../task_20/login.php");
}

unset($_SESSION['login']);
header("location: ../task_20/login.php");
