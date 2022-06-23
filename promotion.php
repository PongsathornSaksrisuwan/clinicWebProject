<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <!-- Kanit font start -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/font.css">
  <link rel="stylesheet" href="assets/css/navbar.css">
  <link rel="stylesheet" href="assets/css/footer.css">
  <!-- Kanit font end -->
  <title>Boonchai Dental Clinic</title>

  <style>
    section {
      padding: 0 18%;
    }

    .promotion-header {
      text-align: center;
      margin: 50px 0;
      font-size: 40px;
      color: #00316b;
    }

    .promotion-grid-container {
      display: grid;
      grid-template-columns: auto auto auto;
      grid-gap: 20px;
    }

    .promotion-grid-item {
      text-align: center;
      margin-bottom: 50px;
      box-shadow: 1px 1px 5px #B3B3B3;
      padding: 0 0 20px 0;
      width: 405px;
      border-radius: 8px;
    }

    .promotion-grid-item img {
      width: 380px;
      height: 200px;
      object-fit: cover;
      border-radius: 8px;

    }

    .promotion-grid-item-topic {
      padding: 25px 0;
      width: 75%;
      margin: auto;
      font-size: 22px;
    }

    .promotion-grid-item-date {
      width: 75%;
      margin: auto;
      color: #AAAAAA;
      font-size: 20px;
      margin-bottom: 5px;
    }

    .promotionBtn {
      display: flex;
      flex-direction: row;
      justify-content: space-evenly;
      align-items: center;
      font-size: 20px;

    }

    .promotionBtn a {
      width: 160px;
      height: 60px;
      display: flex;
      justify-content: center;
      align-items: center;
      border-radius: 8px;
      margin-top: 20px;
    }

    .promotion-grid-item .seeMore {
      background-color: #1b9bff;
      color: #fff;
    }

    .promotion-grid-item .book {
      color: #fff;
      background-color: #00316b;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <!-- section start -->
  <section>
    <h2 class="promotion-header">โปรโมชั่น</h2>
    <!-- promotion-grid-container Start -->
    <div class="promotion-grid-container">
      <!-- promotion-grid-item start -->
      <div class="promotion-grid-item">
        <img src="assets/images/promotion/promo1.png" alt="">
        <p class="promotion-grid-item-topic">จัดฟันใส invisalign - โดยคุณหมอเฉพาะทางจัดฟันตัวจริง</p>
        <p class="promotion-grid-item-date" style="color: red;">ผ่อนเบาๆ เพียงเดือนละ 1,000 บาท</p>
        <p class="promotion-grid-item-date" style="color: white;">- </p>
        <p class="promotion-grid-item-date">ตั้งแต่วันนี้จนถึง 2 ธันวาคม 2565</p>
        <div class="promotionBtn">
          <a href="" class="seeMore">
            <p>อ่านเพิมเติม</p>
          </a>
          <a href="" class="book">
            <p>จองเลย</p>
          </a>
        </div>
      </div>
      <!-- promotion-grid-item End -->
      <!-- promotion-grid-item start -->
      <div class="promotion-grid-item">
        <img src="assets/images/promotion/promo1.png" alt="">
        <p class="promotion-grid-item-topic">จัดฟันใส invisalign - โดยคุณหมอเฉพาะทางจัดฟันตัวจริง</p>
        <p class="promotion-grid-item-date" style="text-decoration:line-through">ราคา 36,000 บาท</p>
        <p class="promotion-grid-item-date" style="color: red;">ราคาพิเศษ เพียง 32,400 บาท</p>
        <p class="promotion-grid-item-date">ตั้งแต่วันนี้จนถึง 2 ธันวาคม 2565</p>
        <div class="promotionBtn">
          <a href="" class="seeMore">
            <p>อ่านเพิมเติม</p>
          </a>
          <a href="" class="book">
            <p>จองเลย</p>
          </a>
        </div>
      </div>
      <!-- promotion-grid-item End -->
      <!-- promotion-grid-item start -->
      <div class="promotion-grid-item">
        <img src="assets/images/promotion/promo1.png" alt="">
        <p class="promotion-grid-item-topic">จัดฟันใส invisalign - โดยคุณหมอเฉพาะทางจัดฟันตัวจริง</p>
        <p class="promotion-grid-item-date" style="color: red;">จ่ายครั้งเดียวจัดเต็ม 32,400 บาท</p>
        <p class="promotion-grid-item-date" style="color: white;">- </p>
        <p class="promotion-grid-item-date">ตั้งแต่วันนี้จนถึง 2 ธันวาคม 2565</p>
        <div class="promotionBtn">
          <a href="" class="seeMore">
            <p>อ่านเพิมเติม</p>
          </a>
          <a href="" class="book">
            <p>จองเลย</p>
          </a>
        </div>
      </div>
      <!-- promotion-grid-item End -->
      <!-- promotion-grid-item start -->
      <div class="promotion-grid-item">
        <img src="assets/images/promotion/promo1.png" alt="">
        <p class="promotion-grid-item-topic">จัดฟันใส invisalign - โดยคุณหมอเฉพาะทางจัดฟันตัวจริง</p>
        <p class="promotion-grid-item-date" style="color: red;">ผ่อนเบาๆ เพียงเดือนละ 1,000 บาท</p>
        <p class="promotion-grid-item-date" style="color: white;">- </p>
        <p class="promotion-grid-item-date">ตั้งแต่วันนี้จนถึง 2 ธันวาคม 2565</p>
        <div class="promotionBtn">
          <a href="" class="seeMore">
            <p>อ่านเพิมเติม</p>
          </a>
          <a href="" class="book">
            <p>จองเลย</p>
          </a>
        </div>
      </div>
      <!-- promotion-grid-item End -->
      <!-- promotion-grid-item start -->
      <div class="promotion-grid-item">
        <img src="assets/images/promotion/promo1.png" alt="">
        <p class="promotion-grid-item-topic">จัดฟันใส invisalign - โดยคุณหมอเฉพาะทางจัดฟันตัวจริง</p>
        <p class="promotion-grid-item-date" style="text-decoration:line-through">ราคา 36,000 บาท</p>
        <p class="promotion-grid-item-date" style="color: red;">ราคาพิเศษ เพียง 32,400 บาท</p>
        <p class="promotion-grid-item-date">ตั้งแต่วันนี้จนถึง 2 ธันวาคม 2565</p>
        <div class="promotionBtn">
          <a href="" class="seeMore">
            <p>อ่านเพิมเติม</p>
          </a>
          <a href="" class="book">
            <p>จองเลย</p>
          </a>
        </div>
      </div>
      <!-- promotion-grid-item End -->
      <!-- promotion-grid-item start -->
      <div class="promotion-grid-item">
        <img src="assets/images/promotion/promo1.png" alt="">
        <p class="promotion-grid-item-topic">จัดฟันใส invisalign - โดยคุณหมอเฉพาะทางจัดฟันตัวจริง</p>
        <p class="promotion-grid-item-date" style="color: red;">จ่ายครั้งเดียวจัดเต็ม 32,400 บาท</p>
        <p class="promotion-grid-item-date" style="color: white;">- </p>
        <p class="promotion-grid-item-date">ตั้งแต่วันนี้จนถึง 2 ธันวาคม 2565</p>
        <div class="promotionBtn">
          <a href="" class="seeMore">
            <p>อ่านเพิมเติม</p>
          </a>
          <a href="" class="book">
            <p>จองเลย</p>
          </a>
        </div>
      </div>
      <!-- promotion-grid-item End -->
    </div>
    <!-- promotion-grid-container End -->
  </section>
  <!-- section End -->

  <?php include 'footer.php'; ?>
</body>


</html>