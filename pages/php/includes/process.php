<?php
include 'dbh.inc.php';

// Add Data
if (isset($_POST['aksi'])) {
  if ($_POST['aksi'] == "add") {

    $name = $_POST['name'];
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $address = $_POST['address'];
    $avatar = $_FILES['avatar']['name'];

    $dir = "../../../assets/img/task_19/";
    $tmpFile = $_FILES['avatar']['tmp_name'];

    move_uploaded_file($tmpFile, $dir . $avatar);

    $query = "INSERT INTO users VALUES (null, '$email', '$name', '$role', '$avatar', '$phone', '$address', '$password', null, null);";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
      header("location: ../task_19.php");
    } else {
      echo $query;
    };

    // Change Data
  } else if ($_POST['aksi'] == "edit") {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $role = $_POST['role'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $address = $_POST['address'];

    $queryShow = "SELECT * FROM users WHERE id = '$id';";
    $sqlShow = mysqli_query($conn, $queryShow);
    $result = mysqli_fetch_assoc($sqlShow);

    if ($_FILES['avatar']['name'] == "") {
      $avatar = $result['avatar'];
    } else {
      $avatar = $_FILES['avatar']['name'];
      unlink("../../../assets/img/task_19/" . $result['avatar']);
      move_uploaded_file($_FILES['avatar']['tmp_name'], '../../../assets/img/task_19/' . $_FILES['avatar']['name']);
    }

    echo "<br> <a href=../task_19.php>Home</a>";

    $query = "UPDATE users SET name='$name', role='$role', phone='$phone', email='$email', password='$pass', address='$address', avatar='$avatar' WHERE id = '$id';";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
      header("location: ../task_19.php");
    } else {
      echo $query;
    }
  }
}

// Delete Data
if (isset($_GET['hapus'])) {
  $delete = $_GET['hapus'];

  $queryShow = "SELECT * FROM users WHERE id = '$delete';";
  $sqlShow = mysqli_query($conn, $queryShow);
  $result = mysqli_fetch_assoc($sqlShow);


  unlink("../../../assets/img/task_19/" . $result['avatar']);

  $query = "DELETE FROM users WHERE id = '$delete';";
  $sql = mysqli_query($conn, $query);

  if ($sql) {
    header("location: ../task_19.php");
  } else {
    echo $query;
  };
}
