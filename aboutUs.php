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
    .aboutUs-grid-container {
      display: grid;
      grid-template-columns: 60% 40%;
      background-color: #f8f8f8;
    }

    .aboutUs-grid-item {
      margin: auto;
    }

    .aboutUs-grid-item h2 {
      margin-left: 60px;
      font-size: 40px;
      margin-bottom: 10px;
      color: #00316b;
    }

    .aboutUs-grid-item h1 {
      font-size: 55px;
      margin-left: 60px;
      color: #00316b;
    }

    .aboutUs-grid-item p {
      margin-left: 60px;
      padding: 25px 60px 10px 0;
      font-size: 22px;
      line-height: 40px;
      color: #00316b;
    }

    .aboutUs-grid-item img {
      width: 100%;
      height: auto;
    }

    /* doctor-flex-container start */
    .doctor p {
      font-size: 50px;
      color: #fff;
      text-align: center;
      background-color: #00316b;
      padding-top: 50px;
    }

    .doctor-flex-container {
      padding: 100px 10% 0 10%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      background-color: #00316b;
      color: #fff;
    }

    .doctor-flex-item {
      margin: 0 0 100px 0;
      text-align: center;
    }

    .doctor-flex-item img {
      width: 300px;
      height: auto;
      border-radius: 200px;
      margin-bottom: 50px;
    }

    .doctor-flex-item p {
      font-size: 20px;
      padding: 5px 20px;
    }

    /* clinic-grid-container start */

    .clinic {
      padding: 50px 12.5% 100px 12.5%;
      text-align: center;
      background-color: #f8f8f8;
    }

    .clinic p {
      font-size: 50px;
      color: #00316b;
    }

    .clinic-branch {
      padding-bottom: 100px;
    }

    .clinic-grid-container {
      padding: 0 20px;
      display: grid;
      grid-template-columns: auto auto;
      grid-row-gap: 40px;

    }

    .clinic-flex-item-pic {
      flex: 50%;
      margin-bottom: 50px;
    }

    .clinic-flex-item-pic img {
      display: block;
      margin: auto;
      width: 100%;
      height: auto;
    }

    .clinic-flex-item-detail {
      flex: 50%;
      text-align: center;
      margin: auto;
    }

    .clinic-flex-item-detail p {
      font-size: 30px;
      margin-bottom: 50px;
    }

    .clinicBtn {
      padding: 20px 40px;
      border-radius: 15px;
      background-color: #00316b;
      color: #fff;
    }

    .clinic-img-flex-container {
      display: flex;
      flex-direction: row;
      justify-content: center;
      margin-top: 50px;

    }

    .clinic-img-flex-item img {
      width: 150px;
      height: 100px;
      margin: 10px;
    }
  </style>
</head>

<body>
  <?php include 'navbar.php'; ?>
  <section>
    <!-- aboutUs-grid-container start -->
    <div class="aboutUs-grid-container">
      <div class="aboutUs-grid-item">
        <div>

          <h2>เกี่ยวกับเรา</h2>
          <h1>คลินิกทันตกรรมบุญชัยทันตแพทย์</h1>
          <h2>เปิดมานานมากกว่า 25 ปี</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aspernatur non omnis? Porro maxime dicta, beatae molestias aperiam est laudantium perspiciatis ratione? Iste labore molestias voluptatibus sint rem aut vitae placeat. Aliquid veniam aut hic ipsa facere quos, nostrum praesentium velit dicta voluptatibus saepe illo necessitatibus distinctio placeat omnis quidem numquam architecto explicabo consequuntur perspiciatis neque aliquam repudiandae. Beatae, similique.</p>
        </div>
      </div>
      <div class="aboutUs-grid-item">
        <img src="assets/images/aboutUs/doc1.png" alt="">
      </div>
    </div>
    <!-- aboutUs-grid-container end -->
    <div class="doctor">
      <p>ทันตแพทย์ของเรา</p>
      <div class="doctor-flex-container">
        <div class="doctor-flex-item">
          <img src="assets/images/aboutUs/doc1.png" alt="">
          <p class="doctor-name">ทพ.xxxxx xxxxxxxxxx</p>
          <p class="doctor-name">Dr. xxxx xxxxxxxxx</p>
          <p class="doctor-uni">มหาวิทยาลัยรังสิต Doctor of Dental Surgery , Rangsit University</p>
          <p class="doctor-clinic">คลินิกทันตกรรมบุญชัยทันตแพทย์</p>
        </div>
        <div class="doctor-flex-item">
          <img src="assets/images/aboutUs/doc1.png" alt="">
          <p class="doctor-name">ทพ.xxxxx xxxxxxxxxx</p>
          <p class="doctor-name">Dr. xxxx xxxxxxxxx</p>
          <p class="doctor-uni">มหาวิทยาลัยรังสิต Doctor of Dental Surgery , Rangsit University</p>
          <p class="doctor-clinic">คลินิกทันตกรรมบุญชัยทันตแพทย์</p>
        </div>
        <div class="doctor-flex-item">
          <img src="assets/images/aboutUs/doc1.png" alt="">
          <p class="doctor-name">ทพ.xxxxx xxxxxxxxxx</p>
          <p class="doctor-name">Dr. xxxx xxxxxxxxx</p>
          <p class="doctor-uni">มหาวิทยาลัยรังสิต Doctor of Dental Surgery , Rangsit University</p>
          <p class="doctor-clinic">คลินิกทันตกรรมเด้นสไมล์</p>
        </div>
        <div class="doctor-flex-item">
          <img src="assets/images/aboutUs/doc1.png" alt="">
          <p class="doctor-name">ทพ.xxxxx xxxxxxxxxx</p>
          <p class="doctor-name">Dr. xxxx xxxxxxxxx</p>
          <p class="doctor-uni">มหาวิทยาลัยรังสิต Doctor of Dental Surgery , Rangsit University</p>
          <p class="doctor-clinic">คลินิกทันตกรรมบุญชัยทันตแพทย์</p>
        </div>
        <div class="doctor-flex-item">
          <img src="assets/images/aboutUs/doc1.png" alt="">
          <p class="doctor-name">ทพ.xxxxx xxxxxxxxxx</p>
          <p class="doctor-name">Dr. xxxx xxxxxxxxx</p>
          <p class="doctor-uni">มหาวิทยาลัยรังสิต Doctor of Dental Surgery , Rangsit University</p>
          <p class="doctor-clinic">คลินิกทันตกรรมบุญชัยทันตแพทย์</p>
        </div>
        <div class="doctor-flex-item">
          <img src="assets/images/aboutUs/doc1.png" alt="">
          <p class="doctor-name">ทพ.xxxxx xxxxxxxxxx</p>
          <p class="doctor-name">Dr. xxxx xxxxxxxxx</p>
          <p class="doctor-uni">มหาวิทยาลัยรังสิต Doctor of Dental Surgery , Rangsit University</p>
          <p class="doctor-clinic">คลินิกทันตกรรมเด้นสไมล์</p>
        </div>
      </div>
    </div>


    <div class="clinic">
      <p class="clinic-branch">สาขาของเรา</p>
      <div class="clinic-grid-container">
        <div class="clinic-flex-item-pic">
          <img src="assets/images/aboutUs/clinic.png" alt="" style="width: 600px; height:auto">
        </div>

        <div class="clinic-flex-item-detail">
          <p>คลินิกทันตกรรมบุญชัยทันตแพทย์<br>
            สาขา บางหว้า (ปากซอยเพชรเกษม 46)<br>
            โทร 02-467-1135
          </p>
          <a href="" class="clinicBtn">ติดต่อเพิ่มเติม</a>
          <div class="clinic-img-flex-container">
            <div class="clinic-img-flex-item">
              <img src="assets/images/aboutUs/clinic.png" alt="">
            </div>
            <div class="clinic-img-flex-item">
              <img src="assets/images/aboutUs/clinic.png" alt="">
            </div>
            <div class="clinic-img-flex-item">
              <img src="assets/images/aboutUs/clinic.png" alt="">
            </div>
          </div>
        </div>

        <div class="clinic-flex-item-detail">
          <p>คลินิกทันตกรรมเด้นท์สไมล์<br>
            สาขา เอกชัย (ปากซอยเอกชัย 40/1)<br>
            โทร 02-893-5466-7 / 8
          </p>
          <a href="" class="clinicBtn">ติดต่อเพิ่มเติม</a>
          <div class="clinic-img-flex-container">
            <div class="clinic-img-flex-item">
              <img src="assets/images/aboutUs/clinic.png" alt="">
            </div>
            <div class="clinic-img-flex-item">
              <img src="assets/images/aboutUs/clinic.png" alt="">
            </div>
            <div class="clinic-img-flex-item">
              <img src="assets/images/aboutUs/clinic.png" alt="">
            </div>
          </div>
        </div>

        <div class="clinic-flex-flex-pic">
          <img src="assets/images/aboutUs/clinic2.png" alt="" style="width: 600px; height:auto">
        </div>

      </div>
    </div>

  </section>
  <?php include 'footer.php'; ?>
</body>


</html>