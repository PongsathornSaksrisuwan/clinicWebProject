<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="assets/css/style.css"/>

  <!-- Kanit font start -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font.css">
  <link rel="stylesheet" href="assets/css/navbar.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <!-- Kanit font end -->
  <title>Boonchai Dental Clinic</title>

</head>

<body>
  <?php include 'navbar.php'; ?>
  <section id="section-carousel">
    <!-- ที่มาของ  carousel -->
    <!-- https://www.youtube.com/watch?v=0wvrlOyGlq0&t=447s -->
    <!-- Image Silder start -->
    <div class="slider">
      <div class="slides">
        <!-- radio buttons start -->
        <input type="radio" name="radio-btn" id="radio1" />
        <input type="radio" name="radio-btn" id="radio2" />
        <input type="radio" name="radio-btn" id="radio3" />
        <input type="radio" name="radio-btn" id="radio4" />
        <!-- radio buttons End -->
        <!-- slide Image Start -->
        <div class="slide first">
          <img src="assets/images/slideImg1.png" alt="" />
        </div>
        <div class="slide">
          <img src="assets/images/slideImg2.png" alt="" />
        </div>
        <div class="slide">
          <img src="assets/images/slideImg3.png" alt="" />
        </div>
        <div class="slide">
          <img src="assets/images/slideImg4.png" alt="" />
        </div>
        <!-- slide Image End -->
        <!-- automatic navigation-auto start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!-- automatic navigation-auto End-->
      </div>
      <!-- manual navigation Start -->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!-- manual navigation End -->
    </div>
    <!-- Image slider End -->
  </section>

  <!-- section-card Start -->
  <section class="section-card">
    <!-- card Start -->
    <div class="card">
      <div class="card-item">
        <a href="#">
          <img src="assets/images/card/card-1.jpg" alt="">
          <p>บริการทันตกรรม</p>
        </a>
      </div>
      <div class="card-item">
        <a href="#">
          <img src="assets/images/card/card-2.jpg" alt="">
          <p>โปรโมชั่น</p>
        </a>
      </div>
      <div class="card-item">
        <a href="#">
          <img src="assets/images/card/card-3.jpg" alt="">
          <p>ข่าวสาร</p>
        </a>
      </div>
      <!-- card End -->
    </div>
    <!-- section-card End -->
  </section>
  <!-- section-booking Start -->
  <section class="section-booking">
    <!-- booking Start -->
    <div class="booking">
      <p>เลือกเวลานัดหมายของกับเราได้ง่ายๆ</p>
      <a href="#">
        <p id="lineAdd">Add Line Official</p>
      </a>
    </div>
    <!-- booking End -->
  </section>
  <!-- section-booking End -->
  <!-- section-priceServices Start -->
  <section class="servicesPrice-flex-container">
    <!-- services start -->
    <div class="services">
      <p class="services-header">อัตราค่าบริการ</p>
      <div class="services-grid">
        <div class="services-grid-item services-topic">
          <p>Pricing</p>
          <p>Price</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ถอนฟัน</p>
          <p class="services-price">xxx บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ขูดหินปูน</p>
          <p class="services-price">xxx บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">X-ray</p>
          <p class="services-price">xxx บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">X-ray พานอรามิก</p>
          <p class="services-price">xxx บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">X-ray 3 มิติ</p>
          <p class="services-price">xxx บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ขูดหินปูน</p>
          <p class="services-price">xxx บาท</p>
        </div>
        <div class="services-grid-item creditCard">
          <div>
            <img src="assets/images/visa.png" alt="">
            <img src="assets/images/visa.png" alt="">
            <img src="assets/images/visa.png" alt="">
          </div>
          <p id="bigScreen">ราคาอัพเดทเมื่อวันที่ 32 ธันวาคม 2570</p>
          <p id="SmallScreen">ราคาอัพเดทเมื่อ <br> วันที่ 32 ธันวาคม 2570</p>
        </div>
      </div>
    </div>



    </div>
    <!-- services End -->
    <!-- price start -->
    <div class="services">

      <p class="services-header"> คำนวณค่าบริการ</p>
      <div class="services-grid">
        <div class="servicesBtn-grid-container">
          <!-- ตัวเลขใน func. changeValue คือ ราคา -->
          <button class="servicesBtn" id="serviceBtn1" onclick="changeValue('2,000')">จัดฟัน 1</button>
          <button class="servicesBtn" id="serviceBtn2" onclick="changeValue('5,000')">จัดฟัน 2</button>
          <button class="servicesBtn" id="serviceBtn3" onclick="changeValue('6,000')">จัดฟัน 3</button>
          <button class="servicesBtn" id="serviceBtn4" onclick="changeValue('7,000')">จัดฟัน 4</button>
          <button class="servicesBtn" id="serviceBtn5" onclick="changeValue('12,000')">จัดฟัน 5</button>
          <button class="servicesBtn" id="serviceBtn6" onclick="changeValue('32,400')">จัดฟัน 6</button>
        </div>



        <div class="serviceDetails">
          <p id="servicePrice">0 บาท</p>
          <p>ติดต่อสอบถามเพิ่มเติมได้ที่</p>
          <p>02 - 467 - 1135</p>
          <p>หรือ </p>
          <p>Add Line @xxxxxx</p>
          <p>หรือ </p>
          <p>Facebook xxxxx</p>
        </div>

      </div>
    </div>


    </div>
    <!-- price End -->
  </section>
  <!-- section-priceServices End -->

  <!-- section-knowleage start -->
  <section class="knowleage">
    <div class="knowleage-grid-container">
      <!-- knowleage-grid-item start -->
      <div class="knowleage-grid-item">
        <img src="assets/images/knowleage/know1.jpg" alt="">
        <div>
          <p> การดูแลสุขภาพช่องปากในผู้ป่วยติดบ้าน ติดเตียง
            <br>
            <a href="http://localhost/BoonChaiDentalClinic/knowleage/know1.php">อ่านเพิ่มเติม</a>
          </p>
        </div>
      </div>
      <!-- knowleage-grid-item end -->
      <!-- knowleage-grid-item start -->
      <div class="knowleage-grid-item">
        <img src="assets/images/knowleage/know1.jpg" alt="">
        <div>
          <p> การดูแลสุขภาพช่องปากในผู้ป่วยติดบ้าน ติดเตียง
            <br>
            <a href="#">อ่านเพิ่มเติม</a>
          </p>
        </div>
      </div>
      <!-- knowleage-grid-item end -->
      <!-- knowleage-grid-item start -->
      <div class="knowleage-grid-item">
        <img src="assets/images/knowleage/know1.jpg" alt="">
        <div>
          <p> การดูแลสุขภาพช่องปากในผู้ป่วยติดบ้าน ติดเตียง
            <br>
            <a href="#">อ่านเพิ่มเติม</a>
          </p>
        </div>
      </div>
      <!-- knowleage-grid-item end -->
    </div>
  </section>
  <!-- section-knowleage End -->



  <?php include 'footer.php'; ?>
</body>

<script type="text/javascript">
  // ควบคุม Sildes รูปภาพ
  var counter = 1;
  setInterval(function() {
    document.getElementById('radio' + counter).checked = true;
    counter++;
    if (counter > 4) {
      counter = 1;
    }
  }, 5000);

  // ควบคุม ปุ่มเปลี่ยนราคาทำฟัน
  function changeValue(price) {
    let changePrice = document.querySelector('#servicePrice');
    changePrice.innerHTML = price + ' บาท';
  }
</script>

</html>