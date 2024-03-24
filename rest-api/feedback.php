<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

$conn = new mysqli($servername, $username, $password, $dbname);

$name = $_POST['name'];
$feedback = $_POST['feedback'];

$sql = "INSERT INTO feedback (name, feedback) VALUES ('$name', '$feedback')";

if ($conn->query($sql) === TRUE) {

  header("Location: http://localhost/law-with-chatbot/about/index.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

