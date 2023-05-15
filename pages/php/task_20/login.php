<?php
include '../includes/dbh.inc.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Login</title>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Login Form
      </a>
    </div>
  </nav>
  <form method="POST" action="">
    <div class="container mt-5">
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email Address</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="">
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" name="password" id="password" class="form-control" aria-labelledby="passwordHelpBlock">
        <div id="passwordHelpBlock" class="form-text">
          Insert your password
        </div>
      </div>
      <div class="mt-4 mb-3">
        <input type="submit" name="submit" value="Login" class="btn btn-primary">
      </div>
      <div>
        <?php
        if (isset($_POST['submit'])) {
          $email = $_POST['email'];
          $password = $_POST['password'];

          $query = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email' AND password = '$password';");
          $data = mysqli_fetch_array($query);

          if (is_array($data)) {
            $_SESSION['email'] = $data['email'];
            $_SESSION['password'] = $data['password'];
            if (isset($_SESSION['email'])) {
              $_SESSION['login'] == TRUE;
              header("location: ../task_19.php");
            }
          } else {
            echo "Your email or password is invalid!";
          }
        }

        ?>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>