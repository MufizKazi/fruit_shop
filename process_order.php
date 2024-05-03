<?php
// Establish connection to your MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fruit_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$email = $_POST['email'];
$address = $_POST['address'];
$mangoQty = intval($_POST['mango']);
$orangeQty = intval($_POST['orange']);
$watermelonQty = intval($_POST['watermelon']);
$pineappleQty = intval($_POST['pineapple']);
$strawberryQty = intval($_POST['strawberry']);
// Calculate total price
$mangoPrice = 150;
$orangePrice = 90;
$watermelonPrice = 50;
$pineapplePrice = 80;
$strawberryPrice = 90;

$totalPrice = ($mangoQty * $mangoPrice) + ($orangeQty * $orangePrice) + ($watermelonQty * $watermelonPrice) +
    ($pineappleQty * $pineapplePrice) + ($strawberryQty * $strawberryPrice);

// Prepare SQL statement
$sql = "INSERT INTO fruit_table (email, fruit_name, quantity, price, address) VALUES ('$email',  
        'Mango, Orange, Watermelon, Pineapple, Strawberry', '$mangoQty, $orangeQty, $watermelonQty, 
        $pineappleQty, $strawberryQty', '$totalPrice','$address')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    header("Location: order_details.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
