<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Startup - Startup Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="./public/img/layouts/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="./public/js/layouts/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="./public/js/layouts/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="./public/css/layouts/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="./public/css/layouts/style.css" rel="stylesheet">
</head>

<body>
   
<?php
  include_once('views/main/navbar.php');
?>
    <!-- Navbar & Carousel Start -->
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
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Navbar & Carousel End -->




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


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">About Us</h5>
                        <h1 class="mb-0">Bốn lĩnh vực kinh doanh, một mục tiêu: xây dựng tương lai</h1>
                    </div>
                    <p class="mb-4">Bosch là một công ty hàng đầu về công nghệ và dịch vụ. Hãy xem bạn có thể thiết lập nên những cột mốc kỹ thuật mới trong lĩnh vực nào.</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Giải pháp Di động</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Công nghệ Công nghiệp</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Hàng tiêu dùng</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>Năng lượng và Năng lượng Xây dựng</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="./public/img/layouts/about.png" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 700px;">
                <h5 class="fw-bold text-primary text-uppercase">Why Choose Us</h5>
                <h1 class="mb-0">Sự phát triển và nâng tầm của bạn</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>Không chỉ là công việc</h4>
                            <p class="mb-0">Một loạt các khóa đào tạo do công ty chi trả và miễn phí dành cho tất cả mọi người. Nếu cần, chúng tôi cũng cung cấp hỗ trợ tài chính cho bạn và việc giáo dục chính thức của gia đình bạn</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Đại học Robert Bosch</h4>
                            <p class="mb-0">Nơi bạn có thể học về các công nghệ tương lai, các thực tiễn đổi mới và kỹ năng lãnh đạo</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="./public/img/layouts/choose.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>Làm việc tại nước ngoài với chúng tôi</h4>
                            <p class="mb-0">Luôn có sự chuẩn bị tốt với các chuyến đi thăm quan, học ngôn ngữ và đào tạo liên văn hóa</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>Một tương lai được xây dựng trên quá khứ của chúng tôi</h4>
                            <p class="mb-0">Một công ty có quá khứ, một công việc có tương lai</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Custom IT Solutions for Your Successful Business</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-car text-white"></i>
                        </div>
                        <h4 class="mb-3">Giải pháp mobility</h4>
                        <p class="m-0">Giải pháp truyền động điện cho phương tiện hai bánh</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-car text-white"></i>
                        </div>
                        <h4 class="mb-3">Giải pháp mobility</h4>
                        <p class="m-0">Hệ thống điều khiển động cơ cho phương tiện hai bánh</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-car text-white"></i>
                        </div>
                        <h4 class="mb-3">Giải pháp mobility</h4>
                        <p class="m-0">Hệ thống chống bó cứng phanh (ABS) cho xe gắn máy</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-car text-white"></i>
                        </div>
                        <h4 class="mb-3">Giải pháp mobility</h4>
                        <p class="m-0">Two-wheelers and powersports</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-home text-white"></i>
                        </div>
                        <h4 class="mb-3">Thiết bị gia dụng</h4>
                        <p class="m-0">Công nghệ hoàn hảo cho ngôi nhà và khu vườn của bạn</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.6s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-industry text-white"></i>
                        </div>
                        <h4 class="mb-3">Công nghiệp và thương mại</h4>
                        <p class="m-0">Bosch cung cấp các sản phẩm và dịch vụ tiên tiến cho công nghiệp và thương mại</p>
                        <a class="btn btn-lg btn-primary rounded" href="">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


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
