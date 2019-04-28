<?php
session_start();
$usn = $_SESSION["usn"];
$comment=$_GET["description"];
$conn = mysqli_connect('localhost', 'root', '', 'college');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO comment VALUES ('$usn', 'comment')";

if (mysqli_query($conn, $sql)) {
  header('Refresh: 3; URL=student_welcome.php');
  echo "Action will be taken soon";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

 ?>
