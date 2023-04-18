<?php
  session_start();
  if (isset($_SESSION['guest']))
  {
    require_once('models/user.php');
    $data = User::get($_SESSION['guest']);
  }
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Boosch Company</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="https://lezebre.lu/images/detailed/21/Sticker_bosch_logo_2.png" rel="icon">
  <link href="public/assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> -->

  <!-- Vendor CSS Files -->
  <!-- <link href="public/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="public/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="public/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <!-- <link href="public/css/index.css" rel="stylesheet">
  <link href="public/css/style.css" rel="stylesheet">
  <link href="public/css/style1.css" rel="stylesheet">
  <link href="public/assets/css/style.css" rel="stylesheet"> -->

  <!-- Remake -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css" rel="stylesheet"/>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></head>
</head>

<body>

<?php
  if (isset($_SESSION['guest']))
  {
  echo '
    <div class="modal fade" id="EditUserModal" tabindex="-1" role="dialog" aria-labelledby="EditUserModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Chỉnh sửa</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
        <form action="index.php?page=main&controller=register&action=editInfo" enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <input type="hidden" name="email">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row"> </div>
                  <label>Họ và tên lót</label>
                  <input class="form-control" type="text" placeholder="Họ và tên lót" name="fname" value="' . $data->fname . '"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <div class="row"> </div>
                  <label>Tên</label>
                  <input class="form-control" type="text" placeholder="Tên" name="lname" value="' . $data->lname . '"/>
                </div>
              </div>
            </div>

            <div class="row" style="margin-top: 5%;">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tuổi</label>
                  <input class="form-control" type="number" placeholder="Tuổi" name="age" value="' . $data->age . '"/>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label>Giới tính:</label>
                  <div class="row">
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '1')?'checked':"") . ' value="1" />
                        <label>Nam</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="gender"' . (($data->gender == '0')?'checked':"") . ' value="0" />
                        <label>Nữ</label>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group" style="margin-top: 5%;">
              <label>Số điện thoại</label>
              <input class="form-control" type="number" placeholder="Số điện thoại" name="phone" value="' . $data->phone . '"/>
            </div>
            <div class="form-group" style="margin-top: 5%;">
              <label>Hình ảnh hiện tại </label>
              <img style="width: 90%; height: auto; margin: 5%" src="' . $data->profile_photo . '">
              
            </div>
            <div class="form-group" style="margin-top: 5%;">
              <label>Hình ảnh mới</label>&nbsp
              <input type="file" name="fileToUpload" id="fileToUpload" />
            </div>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Đóng lại</button>
            <button class="btn btn-primary" type="submit">Cập nhật</button>
          </div>
        </form>
      </div>
    </div>
  </div>';
  }
  ?>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed;
    top: 0;
    width: 100%;
    z-index: 9999;">
  <div class="navbar-brand"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/Bosch-logo.svg/2560px-Bosch-logo.svg.png" style="max-height: 30px;" alt="logo"></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?page=main&controller=layouts&action=index">Home</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=main&controller=about&action=index">Intro</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=main&controller=archive&action=index">Achievements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=main&controller=services&action=index">Service</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=main&controller=blog&action=index">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=main&controller=contact&action=index">Connections</a>
      </li>
    </ul>
    <?php
    if(isset($_SESSION['username'])) {
      echo '<a class="nav-link" href="index.php?controller=editProfile&action=index">Edit Profile</a>';
      echo '
      <form method="post" class="form-inline my-2 my-lg-0">
        <button type="submit" name="logout">Log out</button>
      </form>';
  } else {
      // redirect user to login page if not logged in
      echo '
      <form class="form-inline my-2 my-lg-0">
        <a class="btn btn-outline-success my-2 my-sm-0" type="submit" href="index.php?page=main&controller=login&action=index">Login</a>
      </form>';
  }
  if (isset($_POST['logout'])) {
    // Unset all session variables
    $_SESSION = array();
  
    session_unset();
    // Destroy session
    session_destroy();
  
    // Redirect the user to the login page
    header("Location: index.php");
  }
    ?>
  </div>
</nav>
    
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  

</html>