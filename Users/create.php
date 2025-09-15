<?php
require_once '../includes/db.php';
$db = new DB();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];

    $db->run("INSERT INTO products (name, price, stock) VALUES (:name, :price, :stock)", [
        'name' => $name,
        'price' => $price,
        'stock' => $stock
    ]);

    header('Location: ../index.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>
</head>
<body>
    <h1>Create Producten</h1>
    <form action="create.php" method="post">
        <h4>name of product</h4>
        <input type="text" name="name" placeholder="name" required> <br>
        <h4>price of product</h4>
        <input type="number" name="price" placeholder="price" min="0.01" required> <br>
        <h4>stock of product</h4>
        <input type="number" name="stock" placeholder="stock" required> <br>
        <button type="submit">Create</button> <br>
</body>
</html>