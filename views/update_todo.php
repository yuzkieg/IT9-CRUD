<?php
include '../database/database.php';

try {
  $id = $_GET['id'];
  $stmt = $conn->prepare("SELECT * FROM todo WHERE id = ?");
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result && $result->num_rows > 0) {
    $todo = $result->fetch_assoc();
  } else {
    die("Todo not found");
  }
  $stmt->close();
} catch (\Exception $e) {
  echo "Error: " . $e;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Todo</title>
  <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <style>
    body {
      background-color: rgb(0, 0, 0);
      color: #fff;
      font-family: sans-serif;
    }
  </style>
</head>

<body>
  <div class="container d-flex justify-content-center mt-5">
    <div class="col-6">
      <div class="row">
        <p class="display-5 fw-bold">Update Product</p>
      </div>
      <div class="row">
        <form class="form" action="../handlers/update_todo_handler.php" method="POST" required>
          <input name="id" value="<?= $todo['id'] ?>" hidden />
          <div class="my-3">
            <label class="form-label">Product Name</label>
            <input class="form-control" type="text" name="productName" value="<?= $todo['productName'] ?>" required />
          </div>
          <div class="my-3">
            <label class="form-label">Specifications</label>
            <textarea class="form-control" type="text" name="specs" required><?= $todo['specs'] ?></textarea>
          </div>
          <div class="my-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price" value="<?= $todo['price'] ?>" step="0.01" required />
          </div>

          <div class="d-grid gap-2 col-4 mx-auto">
            <button type="submit" class="btn btn-outline-success fw-bold btn-light">Save Product</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>