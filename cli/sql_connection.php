<?php
$servername = "localhost";
$username = "php_app";
$password = "1234";
$db = "sql_store";

$conn = new mysqli($servername, $username, $password, $db);

if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "connection successful <br>";

$sql = "SELECT customer_id, first_name, last_name FROM customers";
$result = $conn->execute_query($sql);
var_dump($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Customers</h1>
    <ul>
    <?php
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<li>";
                echo($row["first_name"]);
                echo " ";
                echo($row["last_name"]);
                echo "</li><br>";
            }
        }
        else {
            echo "No customers found..";
        }
    ?>
    </ul>
</body>
</html>