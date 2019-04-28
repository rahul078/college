
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

        <style media="screen">
          #border_maker{
            border: 2px solid black;
            box-shadow: 5px 10px #888888;
            min-height: 200px;
          }
        </style>

        <script>
        function showCustomer(str) {
          var xhttp;

          xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
          };
          xhttp.open("GET", "students_name.php?q="+str, true);
          xhttp.send();
        }
        </script>
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
                                <!-- Main Menu Start -->
                                <div class="main-menu">
                                    <nav>
                                        <ul>

                                            <li><a href="logout.php">Logout</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                <!--Search Form Start-->

                                <!--End of Search Form-->
                                <!-- Main Menu End -->
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

<div class="col-lg-5" id="border_maker">
  <br />
  <br />
          <form target="_blank" method="post" action="view_marks.php">


            <div class="input-group">
              <label>Choose Subject to display marks</label>
              <select name="subject">
            <?php
            session_start();
            $name=$_SESSION["name"];
            $conn =  mysqli_connect('localhost', 'root', '', 'college');
            if (!$conn) {
                  die("Connection failed: " . mysqli_connect_error());
              }
            $sql = "SELECT * FROM subject_total where teacher_name='$name'";
            $result1 = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_assoc($result1)){ ?>
              <option value="<?php echo $row['sub_name'] ?>"><?php echo $row['sub_name'] ?></option>

                            <?php  }  ?>

</select>

            </div>
            <div class="input-group">
              <input type="submit" value="See marks">
            </div>
          </form>


        </div>
        <div class="col-lg-2">

        </div>



        <div class="col-lg-5" id="border_maker">

          <form action="change_marks.php" method="post">


          <div class="form-group">
          <label for="usr1">Subject:</label>
          <select name="subject" onchange="showCustomer(this.value)"><option value=""></option>
                <?php    $sql = "SELECT * FROM subject_total where teacher_name='$name'";
                  $result2 = mysqli_query($conn, $sql);
                  while($row = mysqli_fetch_assoc($result2)){ ?>
                        <option value="<?php echo $row['sub_name']; ?>"><?php echo $row['sub_name'] ?></option>
                  <?php  }  ?>
          </select>
          </div>
          <div id="txtHint"></div>

          <div class="form-group">
            <label>marks:</label>
            <input type="number" class="form-control" name="marks" id="marks">
          </div>
          <input type="submit" value="Change marks">
          </form>
          <br>




        </div>


      </div>
        </div>

</body>
</html>
