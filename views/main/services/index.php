<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bosch</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="./public/img/services/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./public/js/services/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./public/js/services/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./public/css/services/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./public/css/services/style.css" rel="stylesheet">
</head>

<body>
    <?php
  include_once('views/main/navbar.php');
?>
<?php
// Connect to database (replace dbname, username, password with your own info)
$conn = new PDO("mysql:host=localhost;dbname=web", "root", "");

// Retrieve data from services table
$stmt = $conn->query("SELECT service_name, service_description, service_img FROM services");
$services = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $conn->query("SELECT services_place_name, services_place_description, services_place_img, services_place_button FROM services_place");
$services_place = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt = $conn->query("SELECT services_info_name, services_info_description, services_info_img FROM services_info");
$services_info = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>
    <div class="container-xxl bg-white p-0" style="margin-top: 100px;">

                <!-- Property List Start -->
                <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="container">
                        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h1 class="mb-3">Convenience Everywhere</h1>
                            <p>In your car, at home, or at work — Bosch technology shapes many areas of life.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <?php foreach ($services_place as $service): ?>
                                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="property-item rounded overflow-hidden">
                                        <div class="position-relative overflow-hidden">
                                            <a href=""><img class="img-fluid" src="<?php echo $service['services_place_img']; ?>" alt=""></a>
                                            <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3"><?php echo $service['services_place_name']; ?></div>
                                            <div class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3"><a class="d-block h5 mb-2" href="" style="margin: 0;"><?php echo $service['services_place_button']; ?></a></div>
                                        </div>
                                        <div class="p-4 pb-0">
                                            <p><?php echo $service['services_place_description']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Property List End -->
        
        <!-- Category Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Market-specific solutions</h1>
                    <p>From a single source — cutting-edge technologies from a global provider.</p>
                </div>
                <div class="row g-4">
                    <?php foreach ($services as $service): ?>
                        <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a class="cat-item d-block bg-light text-center rounded p-3" href="">
                                <div class="rounded p-4">
                                    <div class="icon mb-3">
                                        <img class="img-fluid" src="<?php echo $service['service_img']; ?>" alt="Icon">
                                    </div>
                                    <h6><?php echo $service['service_name']; ?></h6>
                                    <span><?php echo $service['service_description']; ?> ></span>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Category End -->



        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">What else might be interesting for you?</h1>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <?php foreach ($services_info as $service): ?>
                        <div class="testimonial-item bg-light rounded p-3">
                            <div class="testimonial-item-in bg-white border rounded p-4">
                                <div class="d-flex align-items-center">
                                    <img class="img-fluid flex-shrink-0 rounded" src="<?php echo $service['services_info_img']; ?>" style="width: 50px; height: 50px;">
                                    <div class="ps-3">
                                        <h6 class="fw-bold mb-1"><?php echo $service['services_info_name']; ?></h6>
                                    </div>
                                </div>
                                <p><?php echo $service['services_info_description']; ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php
        include_once('views/main/footer.php');
    ?>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/js/services/wow/wow.min.js"></script>
    <script src="./public/js/services/easing/easing.min.js"></script>
    <script src="./public/js/services/waypoints/waypoints.min.js"></script>
    <script src="./public/js/services/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./public/js/services/main.js"></script>
</body>

</html>