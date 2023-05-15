<!-- Ini Tugas Arkatama PHP Task 19 -->

<!DOCTYPE html>

<?php
include 'dbh.inc.php';

$id = '';
$name = '';
$role = '';
$phone = '';
$email = '';
$pass = '';
$address = '';

if (isset($_GET['ubah'])) {
  $id_users = $_GET['ubah'];

  $query = "SELECT * FROM users WHERE id = '$id_users';";
  $sql = mysqli_query($conn, $query);

  $result = mysqli_fetch_assoc($sql);

  $id = $result['id'];
  $name = $result['name'];
  $role = $result['role'];
  $phone = $result['phone'];
  $email = $result['email'];
  $pass = $result['password'];
  $address = $result['address'];

  // var_dump($result);
  // die();
}
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/88325827eb.js" crossorigin="anonymous"></script>
  <title>Edit Data</title>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Tugas SIB - CRUD
      </a>
    </div>
  </nav>
  <div class="container mt-4">
    <form method="POST" action="process.php" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $id ?>">
      <h1>Edit your Profile</h1>
      <div class="mt-4 mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input required type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" value="<?php echo $name; ?>">
      </div>
      <div class="row">
        <div class="col-6">
          <label for="role" class="form-label">Role</label>
          <select required id="role" name="role" class="form-select" aria-label="Default select example" value="<?php echo $role; ?>">
            <option <?php if ($role == 'staff') {
                      echo "selected";
                    }; ?> value="staff">Staff</option>
            <option <?php if ($role == 'admin') {
                      echo "selected";
                    }; ?> value="admin">Admin</option>
          </select>
        </div>
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Phone Number</label>
          <input required type="tel" name="phone" class="form-control" id="phoneInput" placeholder="Enter your phone number" value="<?php echo $phone; ?>">
        </div>
      </div>
      <div class="row mt-4 mb-2">
        <div class="col-6">
          <label for="exampleFormControlInput1" class="form-label">Email address</label>
          <input required type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" value="<?php echo $email; ?>">
        </div>
        <div class="col-6">
          <label for="inputPassword5" class="form-label">Password</label>
          <input required type="password" name="password" id="inputPassword5" class="form-control" placeholder="Enter your password" aria-labelledby="passwordHelpBlock" <?php echo $pass; ?>>
          <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
        <textarea required class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"><?php echo $address; ?></textarea>
      </div>
      <div class="mb-5">
        <label for="formFileMultiple" class="form-label">Upload Photo</label>
        <input <?php if (!isset($_GET['ubah'])) {
                  echo "required";
                }; ?> class="form-control" type="file" name="avatar" id="formFileMultiple" accept="image/*" multiple>
      </div>
      
      <!-- Button -->
      <div class="row">
        <div class="col mt-4">
          <a href="../task_19.php" type="button" class="btn btn-danger"><i class="fa fa-reply me-2"></i>Cancel</a>
          <?php
          if (isset($_GET['ubah'])) {
          ?>
            <button type="submit" name="aksi" value="edit" class="btn btn-primary"><i class="fa fa-plus me-2"></i>Save</button>
          <?php
          } else {
          ?>
            <button type="submit" name="aksi" value="add" class="btn btn-primary"><i class="fa fa-plus me-2"></i>Add</button>
          <?php
          }
          ?>
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>