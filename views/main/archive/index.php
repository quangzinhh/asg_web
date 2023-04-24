<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bosch</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

	<!-- Additional CSS Files -->
	<link rel="stylesheet" type="text/css" href="./public/css/achievements/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="./public/css/achievements/font-awesome.css">

	<link rel="stylesheet" href="./public/css/achievements/style.css">

	<link rel="stylesheet" href="./public/css/achievements/owl-carousel.css">

	<link rel="stylesheet" href="./public/css/achievements/lightbox.css">

</head>

<body>
    <?php
  include_once('views/main/navbar.php');
?>
<?php
$conn = new mysqli("localhost", "root", "", "web");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Select data from the "achievements_main" table
$sql = "SELECT achievements_main_name, achievements_main_description, achievements_main_src FROM achievements_main";
$result = $conn->query($sql);
$sql2 = "SELECT achievements_awards_name, achievements_awards_description, achievements_awards_src FROM achievements_awards";
$result2 = $conn->query($sql2);

?>
<div style="margin-top: -30px;">
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4 style="text-align: center">Our Awards are Your Rewards.</h4>
                                <span>Our award-winning products reward customers daily with their dependability, efficiency and ease-of-use.</span>
                                <div class="main-border-button">
                                    <a href="#">Discover More</a>
                                </div>
                            </div>
                            <img src="./public/img/achievements/left-banner-image.jpg" alt="">
                        </div>
                    </div>
                </div>
				<div class="col-lg-6">
					<div class="right-content">
					<?php
					foreach($result as $row) {
						echo '
						<div class="row"	>
							<div class="col-lg-6">
							<div class="right-first-image">
								<div class="thumb">
								<div class="inner-content">
									<h4>Award</h4>
									<span>' . $row["achievements_main_name"]. '</span>
								</div>
								<div class="hover-content">
									<div class="inner">
									<h4>' . $row["achievements_main_name"]. '</h4>
									<p>' . $row["achievements_main_description"]. '</p>
									<div class="main-border-button">
										<a href="#">Discover More</a>
									</div>
									</div>
								</div>
								<img src="' . $row["achievements_main_src"]. '">
								</div>
							</div>
							</div>
						</div>
						';
					}
						?>
					</div>
				</div>

            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="awardB">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Awards & Accolades for Bosch Home Appliances</h2>
                        <span>Bosch Home Appliances has won numerous awards for their innovative product design, energy efficiency, reliability, and cutting-edge technology.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
				<div class="awardB-item-carousel"><div class="owl-men-item owl-carousel">
				<?php
				foreach($result2 as $row2) {
					echo '<div class="item">
							<div class="thumb">
							<div class="hover-content">
								<a href="#">
								<span style="background-color: #091E3E; color: white; padding: 3px 6px; font-size: 13px; font-weight: bold; border-radius: 3px;">
									'.$row2["achievements_awards_description"].'
								</span>
								</a>
							</div>
							<img src="'.$row2["achievements_awards_src"].'" alt="">
							</div>
							<div style="text-align: center;">
							<div class="down-content" style="display: inline-block; text-align: left;">
								<h4>'.$row2["achievements_awards_name"].'</h4>
							</div>
							</div>
						</div>';
				}
				echo '</div></div>';
				?>

                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
</div>
    <?php
        include_once('views/main/footer.php');
    ?>

    <!-- jQuery -->
    <script src="./public/js/achievements/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="./public/js/achievements/popper.js"></script>
    <script src="./public/js/achievements/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="./public/js/achievements/owl-carousel.js"></script>
    <script src="./public/js/achievements/accordions.js"></script>
    <script src="./public/js/achievements/datepicker.js"></script>
    <script src="./public/js/achievements/scrollreveal.min.js"></script>
    <script src="./public/js/achievements/waypoints.min.js"></script>
    <script src="./public/js/achievements/jquery.counterup.min.js"></script>
    <script src="./public/js/achievements/imgfix.min.js"></script> 
    <script src="./public/js/achievements/slick.js"></script> 
    <script src="./public/js/achievements/lightbox.js"></script> 
    <script src="./public/js/achievements/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="./public/js/achievements/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
</body>

</html>