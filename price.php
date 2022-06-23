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

    #priceHeader{
      text-align: center;
      color: #00316b;
      font-size: 40px;
      margin-top: 50px;
    }
    /* scroll-behavior ควบคุม scroll ให้ smooth */
    html {
      scroll-behavior: smooth;
    }

    /* ควบคุมปุ่ม back to top Start */
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: #00316b;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }

    /* ควบคุมปุ่ม back to top End */

    section {
      padding: 0 12%;
    }

    .price-menu-item {
      margin-top: 50px;
      cursor: pointer;
      text-align: center;
    }

    .price-menu-item img:hover{
      opacity: 0.8;
    }

    .price-menu-item p {
      margin-top: 20px;
      font-size: 24px;
      color: #00316b;
    }


    .price-menu-item p:hover {
      color: #1d77e2;
      font-size: 26px;
    }


    .price-flex-container {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin: 50px 0;
    }

    .services-header {
      font-size: 50px;
      margin: 80px 0 0 50px;
      padding-left: 25px;
    }

    .services-grid {
      display: grid;
      grid-template-columns: auto;
      border: 1.5px dotted black;
      margin: 25px;
      width: 600px;
    }

    .services-grid-item {
      display: flex;
      justify-content: space-between;
    }

    .services-topic {
      font-size: 26px;
      padding: 20px 35px;
      background-color: #00316b;
      color: #fff;
      align-items: center;
    }

    .services-name,
    .services-price {
      font-size: 19px;
      line-height: 30px;
      padding: 20px 35px;
      margin: auto 0;
    }

    .services-grid-item:nth-child(even) {
      background-color: #f8f8f8;
      border-top: 1px dotted black;
      border-bottom: 1px dotted black;
    }

    .services-grid-item:nth-child(8) {
      display: grid;
      grid-template-columns: auto auto;
    }

    .services-grid-item:nth-child(8)>div>.services-name-special,
    .services-price-special {
      padding: 3px 50px 0 60px;
      font-size: 16px;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <section>
    <h2 id="priceHeader">อัตราค่ารักษา</h2>
  
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

    <div class="price-menu" style="display: grid; grid-template-columns: auto auto auto auto;">
      <div class="price-menu-item">
        <a href="#common-price-topic">
          <img src="assets/images/price/x-ray.jpg" alt="" style="width: 250px; height:200px">
          <p>เบ็ดเตล็ด</p>
        </a>
      </div>
      <div class="price-menu-item">
        <a href="#toothFilling-price-topic">
          <img src="assets/images/price/อุดฟัน.jpg" alt="" style="width: 250px; height:200px">
          <p>อุดฟันทั่วไป</p>
        </a>

      </div>
      <div class="price-menu-item">
        <a href="#kids-price-topic">
          <img src="assets/images/price/ทันตกรรมเด็กก.jpg" alt="" style="width: 250px; height:200px">
          <p>ทันตกรรมสำหรับเด็ก</p>
        </a>

      </div>
      <div class="price-menu-item">
        <a href="#braces-price-topic">
          <img src="assets/images/price/จัดฟัน.jpg" alt="" style="width: 250px; height:200px">
          <p>จัดฟัน</p>
        </a>

      </div>
      <div class="price-menu-item">
        <a href="#tooth-extraction-price-topic">
          <img src="assets/images/price/ถอนฟัน.jpg" alt="" style="width: 250px; height:200px">
          <p>การผ่าตัด</p>
        </a>

      </div>
      <div class="price-menu-item">
        <a href="#gum-disease-price-topic">
          <img src="assets/images/price/รักษาโรคเหงือก.jpg" alt="" style="width: 250px; height:200px">
          <p>รักษาโรคเหงือก <br>& รักษาคลองรากฟัน(RCT)</p>
        </a>

      </div>
      <div class="price-menu-item">
        <a href="#denture-price-topic">
          <img src="assets/images/price/ฟันปลอม.jpg" alt="" style="width: 250px; height:200px">
          <p>ฟันปลอม</p>
        </a>

      </div>
      <div class="price-menu-item">
        <a href="#implant-price-topic">
          <img src="assets/images/price/รากเทียม.jpg" alt="" style="width: 250px; height:200px">
          <p>ทันตกรรมรากเทียม</p>
        </a>

      </div>
    </div>
    <div class="price-flex-container">
      <!-- services-grid-start -->
      <div class="services-grid">
        <div class="services-grid-item services-topic" id="common-price-topic">
          <p>เบ็ดเตล็ด</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ตรวจสุขภาพช่องปาก</p>
          <p class="services-price">ฟรี</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ค่าปลอดเชื้อ (Sterile)</p>
          <p class="services-price">ฟรี</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">X-Ray ฟิล์มเล็กในปาก</p>
          <p class="services-price">150 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">X-Ray ฟิล์มใหญ่หน้าข้าง</p>
          <p class="services-price">400 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">X-Ray ฟิล์มใหญ่หน้าตรง</p>
          <p class="services-price">400 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">พิมพ์ปากสำหรับวิเคราะห์การจัดฟัน</p>
          <p class="services-price">800 บาท</p>
        </div>
        <div class="services-grid-item" style="border-bottom: none;">
          <p class="services-name">ฟอกสีฟันที่บ้าน (น้ำยา 4 หลอด + ฟลูออไรด์)</p>
          <p class="services-price">4,500 บาท</p>
          <div class="">
            <p class="services-name-special">*กรณีทำเพิ่ม ถอดฟอกสีฟัน (ชิ้น)</p>
            <p class="services-name-special">**กรณีทำเพิ่ม น้ำยา 4 หลอด + ฟลูออไรด์</p>
          </div>
          <div class="" style="padding-bottom: 20px;">
            <p class="services-price-special">1,500 บาท</p>
            <p class="services-price-special">2,000 บาท</p>
          </div>
        </div>
      </div>

      <!-- services-grid-End -->
      <!-- services-grid-start -->
      <div class="services-grid">
        <div class="services-grid-item services-topic" id="toothFilling-price-topic">
          <p>อุดฟันทั่วไป</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">อุดฟันชั่วคราว (ซี่)</p>
          <p class="services-price">300 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">อุดฟันพร้อมเคลือบหลุมร่องฟัน (PRR)</p>
          <p class="services-price">700 - 900 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">วัสดุสีเหมือนฟัน/สีเงิน 1 ด้าน</p>
          <p class="services-price">600 - 900 บาท</p>
        </div>
        <div class="services-grid-item" style="justify-content: right;">
          <p class="services-name" style="margin-right: 75px;">2 ด้าน</p>
          <p class="services-price">1,000 - 1,200 บาท</p>
        </div>
        <div class="services-grid-item" style="justify-content: right;">
          <p class="services-name" style="margin-right: 75px;">3 ด้าน</p>
          <p class="services-price">1,300 - 1,500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">อุดปิดช่องว่างระหว่างฟัน</p>
          <p class="services-price">1,500 - 3,000 บาท</p>
        </div>
      </div>
      <!-- services-grid-End -->

      <!-- services-grid-start -->
      <div class="services-grid">
        <div class="services-grid-item services-topic" id="kids-price-topic">
          <p>ทันตกรรมสำหรับเด็ก</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ถอนฟัน (ซี่)</p>
          <p class="services-price">400 - 600 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ขัดฟันเคลือบฟลูออไรด์ (PRR)</p>
          <p class="services-price">400 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เคลือบหลุมร่องฟัน (ซี่)</p>
          <p class="services-price">400 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">รักษาโพรงประสาทฟัน (Pulpotomy)</p>
          <p class="services-price">1,500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">รักษาโพรงประสาทฟัน (Pulpectomy)</p>
          <p class="services-price">2,500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ครอบฟันโลหะ (ซี่)</p>
          <p class="services-price">2,000 บาท</p>
        </div>
      </div>
      <!-- services-grid-End -->

      <!-- services-grid-start -->
      <div class="services-grid">
        <div class="services-grid-item services-topic" id="braces-price-topic">
          <p>จัดฟัน</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ถอดเครื่องมือ + ขัดกาว (จากที่อื่น)</p>
          <p class="services-price">400 - 600 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">จัดฟันติดแน่น</p>
          <p class="services-price">36,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">จัดฟันติดแน่น (ชำระครั้งเดียว)</p>
          <p class="services-price">32,400 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">จัดฟันแบบใส (Invisalign go)</p>
          <p class="services-price">120,000 - 150,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เครื่องมือคงสภาพฟัน Retainer(ชิ้น) ธรรมดา</p>
          <p class="services-price">2,500 บาท</p>
        </div>
        <div class="services-grid-item" style="justify-content: right;">
          <p class="services-name" style="margin-right: 20px;">แบบลาย</p>
          <p class="services-price">3,000 บาท</p>
        </div>
        <div class="services-grid-item" style="justify-content: right; border-bottom: none;">
          <p class="services-name" style="margin-right: 20px;">แบบใส</p>
          <p class="services-price">2,500 บาท</p>
        </div>
      </div>
      <!-- services-grid-End -->

      <!-- services-grid-start -->
      <div class="services-grid">
        <div class="services-grid-item services-topic" id="tooth-extraction-price-topic">
          <p>การผ่าตัด</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ถอนฟัน</p>
          <p class="services-price">500 - 700 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ถอนฟันแบบยาก</p>
          <p class="services-price">800 - 1,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ผ่าฟันคุดในเหงือก</p>
          <p class="services-price">1,500 - 2,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ผ่าฟันคุดในกระดูก</p>
          <p class="services-price">2,000 - 4,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ตัดแต่งปุ่มกระดูก</p>
          <p class="services-price">1,000 - 2,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ตัดแต่งเหงือก (Frenectomy)</p>
          <p class="services-price">2,000 - 3,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ตัดเหงือกคลุมฟัน (Pericoronitis)</p>
          <p class="services-price">800 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ตัดไหม , ล้างแผล (จากที่อื่น)</p>
          <p class="services-price">100 - 200 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ใส่ยาแผลถอนฟันที่ปวด (Dry Socket)</p>
          <p class="services-price">100 บาท</p>
        </div>
      </div>
      <!-- services-grid-End -->

      <!-- services-grid-start -->
      <div class="services-grid">
        <div class="services-grid-item services-topic" id="gum-disease-price-topic">
          <p>รักษาโรคเหงือก</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ขูดหินปูน + ขัดฟัน</p>
          <p class="services-price">600 - 1,200 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">รักษาโรคเหงือก<br>(เกลารากฟัน)/quadrant(ครั้ง)</p>
          <p class="services-price">1,000 - 1,500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ตัดแต่งเหงือกเพื่อการใส่ฟัน/ตำแหน่ง</p>
          <p class="services-price">1,000 บาท</p>
        </div>
        <div class="services-grid-item services-topic">
          <p>รักษาคลองรากฟัน (RCT)</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ฟันหน้า</p>
          <p class="services-price">4,500 - 5,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ฟันกรามน้อย</p>
          <p class="services-price">5,500 - 7,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ฟันกรามใหญ่</p>
          <p class="services-price">7,500 - 9,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">รักษาคลองรากฟันฉุกเฉิน</p>
          <p class="services-price">1,500 - 2,000 บาท</p>
        </div>
      </div>
      <!-- services-grid-End -->

      <!-- services-grid-start -->
      <div class="services-grid">
        <div class="services-grid-item services-topic" id="denture-price-topic">
          <p>ฟันปลอม (Prosthesis)</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ฟันปลอมฐานพลาสติกชนิดถอดได้ (ชิ้น)</p>
          <p class="services-price">2,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ซี่ต่อไป</p>
          <p class="services-price">400 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เสริมตะแกรง</p>
          <p class="services-price">1,200 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ฟันปลอมฐานโลหะชนิดถอดได้ (ชิ้น) ซี่แรก</p>
          <p class="services-price">7,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ซี่่ต่อไป</p>
          <p class="services-price">400 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ฟันปลอมฐานพลาสติดแบบยืดหยุ่น (ชั้น) ซี่แรก</p>
          <p class="services-price">7,500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ซี่ต่อไป</p>
          <p class="services-price">500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ฟันปลอมทั้งปาก (ชิ้น)</p>
          <p class="services-price">8,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">พลาสติกเหนียวเพิ่มชิ้นละ</p>
          <p class="services-price">2,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ซ่อมฟันปลอมในคลินิก</p>
          <p class="services-price">700 - 1,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ซ่อมฟันปลอมส่ง Lab</p>
          <p class="services-price">800 - 1,500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ครอบฟัน</p>
          <p class="services-price">7,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ครอบฟันทอง 50% (Semi)</p>
          <p class="services-price">13,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ครอบฟันทอง 80% (Gold)</p>
          <p class="services-price">16,000 บาท</p>
        </div>
      </div>
      <!-- services-grid-End -->

      <!-- services-grid-start -->
      <div class="services-grid">
        <div class="services-grid-item services-topic">
          <p>ฟันปลอม (Prosthesis)</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เซรามิกขาว (ครอบฟันทั้งซี่)</p>
          <p class="services-price">10,000 - 12,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เดือยฟันพลาสติก</p>
          <p class="services-price">3,500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เดือยฟันโลหะ</p>
          <p class="services-price">4,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เติมฟันพลาสติก (TP) ซี่แรก</p>
          <p class="services-price">1,800 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ซี่ต่อไป</p>
          <p class="services-price">400 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เติมฟันแบบยืดหยุ่น ซี่แรก</p>
          <p class="services-price">3,500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ซี่ต่อไป</p>
          <p class="services-price">500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">รื้อครอบฟัน (ซี่)</p>
          <p class="services-price">500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เสริมฐานฟันปลอม (ครั้ง)</p>
          <p class="services-price">1,500 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">เฝือกฟัน (ชิ้น)</p>
          <p class="services-price">3,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ครอบฟันชั่วคราว</p>
          <p class="services-price">2,000 บาท</p>
        </div>
        <div class="services-grid-item services-topic" id="implant-price-topic">
          <p>ทันตกรรมรากเทียม</p>
          <p>ราคา</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ฝังรากเทียม USA (ซี่)</p>
          <p class="services-price">50,000 บาท</p>
        </div>
        <div class="services-grid-item">
          <p class="services-name">ครอบฟันหลังฝั่งรากเทียม</p>
          <p class="services-price">10,000 - 15,000 บาท</p>
        </div>
      </div>
      <!-- services-grid-End -->



    </div>
  </section>
  <?php include 'footer.php'; ?>
</body>

<script>
  // ----------------------------------------------------------------------------

  // ควบคุม ปุ่ม Back to top
  //Get the button
  var mybutton = document.getElementById("myBtn");

  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
    scrollBackToTopFunction()
  };

  function scrollBackToTopFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      mybutton.style.display = "block";
    } else {
      mybutton.style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>

</html>