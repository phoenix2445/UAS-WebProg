<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "electronix";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product_id = $_POST['product_id'];
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$payment_method = $_POST['payment_method'];

$sql = "INSERT INTO payments (product_id, name, email, amount, payment_method) VALUES (?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("issds", $product_id, $name, $email, $amount, $payment_method);

if ($stmt->execute()) {
    echo "Payment successful!";
    header("Location: shop.html");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
