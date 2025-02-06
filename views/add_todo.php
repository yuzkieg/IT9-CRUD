<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Product</title>
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
        <p class="display-5 fw-bold">Add Product</p>
      </div>
      <div class="row">
        <form class="form" action="../handlers/add_todo_handler.php" method="POST" required>
          <div class="my-3">
            <label class="form-label">Product Name</label>
            <input class="form-control" type="text" name="productName" required>
          </div>
          <div class="my-3">
            <label class="form-label">Specifications</label>
            <textarea class="form-control" name="specs" required></textarea>
          </div>
          <div class="my-3">
            <label class="form-label">Price</label>
            <input type="number" class="form-control" name="price" step="0.01" required>
          </div>
          <div class="d-grid gap-2 col-4 mx-auto">
            <button type="submit" class="btn btn-outline-success fw-bold btn-light">Add Product</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>