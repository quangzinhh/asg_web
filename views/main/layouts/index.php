<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BOSCH COMPANY</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="https://www.logolynx.com/images/logolynx/94/94174906fca1b19e84305fa6f5160ddb.png" rel="icon">

   
</head>

<body>
   
<?php
  include_once('views/main/navbar.php');
?>
    <!-- Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="./public/img/layouts/bosch_1.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Tại Bosch</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Bạn thay đổi cuộc sống</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="./public/img/layouts/bosch_2.png" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h5 class="text-white text-uppercase mb-3 animated slideInDown">Tại Bosch</h5>
                            <h1 class="display-1 text-white mb-md-4 animated zoomIn">Chúng tôi coi trọng các giá trị</h1>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Cộng sự trên toàn thế giới</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">402600</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">Nhà nghiên cứu và kỹ sư</h5>
                            <h1 class="mb-0" data-toggle="counter-up">76100</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="ps-4">
                            <h5 class="text-white mb-0">Chi nhánh và công ty con</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">440</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5 mb-5">
          <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0">Thương hiệu của chúng tôi</h1>
            </div>
            <div class="bg-white">
                <div class="owl-carousel vendor-carousel">
                    <img src="./public/img/layouts/vendor-1.png" alt="">
                    <img src="./public/img/layouts/vendor-2.png" alt="">
                    <img src="./public/img/layouts/vendor-3.png" alt="">
                    <img src="./public/img/layouts/vendor-4.png" alt="">
                    <img src="./public/img/layouts/vendor-5.png" alt="">
                    <img src="./public/img/layouts/vendor-6.png" alt="">
                    <img src="./public/img/layouts/vendor-7.png" alt="">
                    <img src="./public/img/layouts/vendor-8.png" alt="">
                    <img src="./public/img/layouts/vendor-9.png" alt="">
                    <img src="./public/img/layouts/vendor-10.png" alt="">
                    <img src="./public/img/layouts/vendor-11.png" alt="">
                    <img src="./public/img/layouts/vendor-12.png" alt="">
                    <img src="./public/img/layouts/vendor-13.png" alt="">
                    <img src="./public/img/layouts/vendor-14.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor End -->

    <?php
    include_once('views/main/footer.php');
    ?>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="./public/js/layouts/wow/wow.min.js"></script>
    <script src="./public/js/layouts/easing/easing.min.js"></script>
    <script src="./public/js/layouts/waypoints/waypoints.min.js"></script>
    <script src="./public/js/layouts/counterup/counterup.min.js"></script>
    <script src="./public/js/layouts/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="./public/js/layouts/main.js"></script>
</body>

</html>
