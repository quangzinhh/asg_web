<?php
include_once('views/main/navbar.php');
?>
  <main id="main">
    <!-- Modal -->
    <?php
      foreach ($products as $product) {
        echo
        '<div class="modal fade" id="exampleModal'. $product->id .'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"  style="padding-top: 5em">
          <div class="modal-dialog modal-dialog-scrollable" style="max-width: 60%">
            <div class="modal-content">
              <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">' . $product->name . '</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body" style="text-align: center">
                  <img src="' . $product->img . '" class="card-img-top" alt="..." style="width: 30%; height=30%;">
                  <br></br>
                  <h4 class="card-text"><strong>' . $product->description . '</strong></h4>
                  <p>' . $product->content . '</p>
                </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
              </div>
            </div>
          </div>
        </div>';
      }
    ?>

    

    <!-- ======= Services Section ======= -->
    <section id="services" class="services my-5 mx-5">
        <div class="pb-3 mb-5" style="margin-top:10em; text-align:center">
            <h5 class="fw-bold text-primary text-uppercase">Service</h5>
            <h1 class="mb-0">Các sản phẩm nổi bật</h1>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
        <?php
          foreach ($products as $product) {
            echo
              '<div class="col-md-4 wow slideInUp" data-wow-delay="0.6s">
              <div class="blog-item bg-light rounded overflow-hidden">
                  <div class="blog-img position-relative overflow-hidden" style="text-align: center;">
                      <img class="img-fluid" src="' . $product->img . '" alt="" class="card-img-top" style="height: 10em;">
                  </div>
                  <div class="p-4">
                      <h4 class="mb-3">' . $product->name . '</h4>
                      <p>' . $product->description . '</p>
                      <a class="text-uppercase" href="" data-bs-toggle="modal" data-bs-target="#exampleModal'.$product->id.'">Read More <i class="bi bi-arrow-right"></i></a>
                  </div>
              </div>
          </div>';
          }
        ?>
<!-- Card 1
<div class="col" data-aos="zoom-in" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#exampleModal'.$product->id.'">
                <div class="card h-100">
                  <img src="' . $product->img . '" class="card-img-top" alt="..." style="width="300" height="300"";>
                  <div class="card-body">
                    <h5 class="card-title">' . $product->name .'</h5>
                    <p class="card-text">' . $product->description .'</p>
                  </div>
                </div>
              </div> -->

  </main><!-- End #main -->

<?php
include_once('views/main/footer.php');
?>