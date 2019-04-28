<?php
$email=$_POST['username'];
$pwd=$_POST['password'];


$conn =  mysqli_connect('localhost', 'root', '', 'college');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM student where usn='$email' and password='$pwd'";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
  session_start();
  $row = mysqli_fetch_assoc($result);
    $_SESSION["usn"] = $row["usn"];
    $_SESSION["name"] = $row["name"];
  header("location:student_welcome.php");
}
else {
  header("location:logout.php");
}
 ?>
