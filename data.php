<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inforest";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Під'єднання не вдалося: " . $conn->connect_error);
}

$name = $_POST['name'];
$number = $_POST['number'];
$time = $_POST['time'];

$sql = "INSERT INTO guest (Name, Phonenumber, Time) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $name, $number, $time);

if ($stmt->execute()) {

} else {
    echo "Помилка: " . $sql . "<br>" . $conn->error;
}

$stmt->close();
$conn->close();
?>
