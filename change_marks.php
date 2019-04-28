<?php
$sub=$_POST["subject"];
$usn=$_POST["name"];
$marks=$_POST["marks"];

$conn = mysqli_connect('localhost', 'root', '', 'college');
$sql = "UPDATE undertaken_sub SET marks=$marks WHERE sub_name='$sub' and student_usn='$usn'";

if (mysqli_query($conn, $sql)) {

    header('Refresh: 3; URL=lectures_welcome.php');
    echo "Marks updated successfully";
} else {

    header('Refresh: 3; URL=lectures_welcome.php');
    echo "Error updating record";
}

 ?>
