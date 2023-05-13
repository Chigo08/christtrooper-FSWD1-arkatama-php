<?php
include 'includes/dbh.inc.php';

$query = "SELECT * FROM users;";
$sql = mysqli_query($conn, $query);
$no = 0;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <!-- Fontawesome -->
  <script src="https://kit.fontawesome.com/88325827eb.js" crossorigin="anonymous"></script>
  <title>CRUD</title>
</head>

<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        Tugas SIB - CRUD
      </a>
    </div>
  </nav>
  <div class="container-fluid mt-4">
    <h1>Data Pengguna</h1>
    <a href="includes/task_19_edit.php" type="button" class="btn btn-primary mt-3">
      <i class="fa fa-plus me-1"></i>
      Tambah Data</a>
    <div class="table-responsive mt-5">
      <table class="table table-hover">
        <thead class="table-secondary">
          <tr>
            <th>#</th>
            <th>Action</th>
            <th>Avatar</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Phone</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
          <?php
          while ($result = mysqli_fetch_assoc($sql)) {
          ?>
            <tr>
              <td class="text-center">
                <?php echo ++$no; ?>.
              </td>
              <td>
                <a href="includes/task_19_edit.php?ubah=<?php echo $result['id']; ?>" type="button" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                <a href="includes/process.php?hapus=<?php echo $result['id']; ?>" type="button" class="btn btn-danger btn-sm" onclick="return confirm(`Do you really want to delete this?`)"><i class="fa fa-trash"></i></a>
              </td>
              <td>
                <img src="../../assets/img/task_19/<?php echo $result['avatar']; ?>" alt="" style="width: 80px; height: 80px;">
              </td>
              <td>
                <?php echo $result['name']; ?>
              </td>
              <td>
                <?php echo $result['email']; ?>
              </td>
              <td>
                <?php echo $result['role']; ?>
              </td>
              <td>
                <?php echo $result['phone']; ?>
              </td>
              <td>
                <?php echo $result['address']; ?>
              </td>
            </tr>
          <?php
          }
          ?>
          <tr>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>