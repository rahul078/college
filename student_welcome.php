<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from demo.devitems.com/eduhome/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Apr 2019 17:32:50 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>CMRIT</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<link rel="stylesheet" type="text/css" href="style.css">
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
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Header Area Start -->
		<header class="top">
			<div class="header-area two header-sticky">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6">
							<div class="logo">
								<img src="img/logo/logo2.png" alt="eduhome" />
							</div>
						</div>
						<div class="col-md-9 col-sm-9 col-xs-6">
                            <div class="content-wrapper text-right">

                                <div class="main-menu">
                                    <nav>
                                        <ul>

                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>
						</div>
                        <div class="col-xs-12">
                            <div class="mobile-menu hidden-lg hidden-md hidden-sm"></div>
                        </div>
					</div>
				</div>
			</div>
		</header>
    <div class="container">
      <div class="row">

          <table>
          <tr style="background:#6CFF52">
          <th style="font:italic bold 20px arial;text-align:center;">Subject</th>
          <th style="font:italic bold 20px arial;text-align:center;">Marks</th>
          </tr>
          <?php
          session_start();
          $usn=  $_SESSION["usn"];
          $name=  $_SESSION["name"];
          $conn =  mysqli_connect('localhost', 'root', '', 'college');
          $sql = "SELECT * FROM undertaken_sub where student_usn='$usn'";
          $result = mysqli_query($conn, $sql);
          while($row = mysqli_fetch_assoc($result)){ ?>
          <tr>
          <td style="text-align:center;"><?php echo $row['sub_name']?></td>
          <td style="text-align:center;"><?php echo $row['marks']?></td>
          </tr>
            <?php }
           ?>

          </table>
          <br />
          <br />

      <form action = "add_comment.php" method = "get">
          <label>Enter if marks entered is wrong</label>
          <br />
          <textarea rows = "5" cols = "50" name = "description"></textarea>
                   <input type="submit" name="" value="submit">
</form>
</body>
</html>
