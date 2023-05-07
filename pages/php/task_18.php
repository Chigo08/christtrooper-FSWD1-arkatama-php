<?php
// include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../assets/css/style2.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <title>Task 18</title>
</head>

<body class=" bg-secondary text-light">
  <h1 class="text-center pb-4">Inner Join Table Products and Categories</h1>
  <div class="container">
    <div style="height: 100%;" class="text-center">
      <?php

      $hostname = '127.0.0.1';
      $username = 'root';
      $password = '';
      $database = 'arkatama_dummy';

      $conn = new mysqli($hostname, $username, $password, $database);
      if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
      }

      $sql = "SELECT products.id, categories.name FROM products INNER JOIN categories ON products.category_id = categories.id;";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "id: " . $row["id"] . " - Name: " . $row["name"] . "<br>";
        }
      } else {
        echo "0 Result";
      }

      $conn->close();
      ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>