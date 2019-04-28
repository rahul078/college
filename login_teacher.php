<?php
$email=$_POST['username'];
$pwd=$_POST['password'];
$dept=$_POST['dept'];

$conn =  mysqli_connect('localhost', 'root', '', 'college');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM teacher where email='$email' and password='$pwd' and dept='$dept'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
  session_start();
  $row = mysqli_fetch_assoc($result);
    $_SESSION["name"] = $row["name"];
  $_SESSION["email"] = $row["email"];
  $_SESSION["dept"]=$row["dept"];

  header("location:lectures_welcome.php");
}
else {
  header("location:logout.php");
}
 ?>
