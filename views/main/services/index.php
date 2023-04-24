<?php
include_once('views/main/navbar.php');
?>
  <main id="main">
    <!-- Modal -->
    <?php
      foreach ($products as $product) {
        echo
        '<div class="modal fade" id="exampleModal'. $product->id .'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">' . $product->name . '</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <img src="' . $product->img . '" class="card-img-top" alt="..." style="width: 70%; height=70%; margin-left: 15%;">
                  <br></br>
                  <h6 class="card-text"><strong>' . $product->description . '</strong></h6>
                  <p>' . $product->content . '</p>
                <p>Bosch cung cấp nhiều phụ tùng thay thế khác nhau cho các cửa hàng phụ tùng aftermarket và cửa hàng sửa chữa - từ các bộ phận mới và đổi trả cho đến các giải pháp sửa chữa - cũng như các thiết bị của cửa hàng sửa chữa như phần mềm chẩn đoán và phần cứng. Với các khóa đào tạo nhân viên và các chương trình đối tác cho các cửa hàng sửa chữa, Bosch cung cấp các kiến thức và kỹ năng bảo dưỡng ô tô cho các kỹ thuật viên dịch vụ trên toàn thế giới. Do đó, các cửa hàng sửa chữa có thể kiểm tra và sửa chữa hiệu quả, an toàn và nhanh chóng hơn. </p>

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
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">
      <div class="section-title" data-aos="zoom-out">
          <h2>Sản phẩm</h2>
          <p>Các sản phẩm nổi bật</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">

        <?php
          foreach ($products as $product) {
            echo
              '<!-- Card 1 -->
              <div class="col" data-aos="zoom-in" data-aos-delay="100" data-bs-toggle="modal" data-bs-target="#exampleModal'.$product->id.'">
                <div class="card h-100">
                  <img src="' . $product->img . '" class="card-img-top" alt="..." style="width="300" height="300"";>
                  <div class="card-body">
                    <h5 class="card-title">' . $product->name .'</h5>
                    <p class="card-text">' . $product->description .'</p>
                  </div>
                </div>
              </div>';
          }
        ?>

        </div>
      </div>

  </main><!-- End #main -->

<?php
include_once('views/main/footer.php');
?>