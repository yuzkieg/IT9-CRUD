<?php include 'database/database.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DEGARA_CRUD</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.js"></script>
    <style>
        body {
            background-color: rgb(0, 0, 0);
            color: #fff;
            font-family: sans-serif;
        }
        .table-container {
            overflow-x: auto;
        }
        th,
        td {
            text-align: center;
            vertical-align: middle; 
        }
        .btn-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        .table-bordered { 
            min-height: 200px; 
        }

        .table-bordered > :not(caption) > * > th,
        .table-bordered > :not(caption) > * > td {
            padding: 1rem 5rem;
            border: 1px solid #dee2e6; 
        }

        .table-bordered > :not(caption) > * > th {
            background-color: white;
            color: black;
        }

    </style>
</head>

<body>
    <div class="container-fluid content">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row">
                    <p class="display-5 fw-bold text-center">Inventory System</p>
                </div>
                <div class="table-container">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th scope="col">Product Name</th>
                                <th scope="col">Specifications</th>
                                <th scope="col">Prices</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $res = $conn->query("SELECT * FROM todo");
                            if ($res->num_rows > 0) :
                                while ($row = $res->fetch_assoc()) : ?>
                                    <tr>
                                        <td><?= $row['productName']; ?></td>
                                        <td><?= $row['specs']; ?></td>
                                        <td>₱ <?= $row['price'] ; ?></td>
                                        <td>
                                            <div class="btn-container">
                                                <a href="views/update_todo.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                                <a href="handlers/delete_todo_handler.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endwhile;
                            else : ?>
                                <tr>
                                    <td colspan="4" class="text-center py-3">🎉 No products available!</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="d-grid gap-2 col-4 mx-auto">
                    <a href="views/add_todo.php" class="btn btn-outline-success fw-bold btn-light" type="button">Add Product</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>