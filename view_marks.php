<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CMRIT</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="apple-touch-icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/meanmenu.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/et-line-icon.css">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/ionicons.min.css">
  <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

  <style>
  table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  }

  td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  }

  tr:nth-child(even) {
  background-color: #dddddd;
  }
  </style>
  <title>Marks</title>
  <?php
  $sub=$_POST["subject"];
  session_start();
  $name=$_SESSION["name"];
  $conn =  mysqli_connect('localhost', 'root', '', 'college');
  if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
  $sql = "SELECT * FROM undertaken_sub where sub_name='$sub'";
  $result = mysqli_query($conn, $sql);
?>
</head>



<body>
<center>  <h2>Subject<i> <?php echo $sub ?></i></h2>
  <h4>Undertaken by <i><?php echo $name ?></i></h4></center>
<br />
<br />
<section style="width:70%;position:absolute;top:15%; left:15%;">
  <table>
<tr style="background:#6CFF52">
<th style="font:italic bold 20px arial;text-align:center;">Student USN</th>
<th style="font:italic bold 20px arial;text-align:center;">Marks</th>

</tr>


  <?php
    while($row = mysqli_fetch_assoc($result)){ ?>
<tr>
  <td style="text-align:center;"><?php echo $row['student_usn']?></td>
  <td style="text-align:center;"><?php echo $row['marks']?></td>
</tr>
    <?php }
   ?>

 </table>
</section>
</body>
</html>
