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
    /* clinic-grid-container start */
    .clinic {
      padding: 50px 12.5% 100px 12.5%;
      text-align: center;
      background-color: #f8f8f8;
    }

    .clinic h3 {
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

    .clinic-flex-item-detail iframe {
      display: block;
      margin: 40px auto 0 auto;
    }

    .clinicBtn {
      padding: 20px 40px;
      border-radius: 15px;
      background-color: #00316b;
      color: #fff;
    }
  </style>

</head>

<body>
  <?php include 'navbar.php'; ?>

  <div class="clinic">
    <h3 class="clinic-branch">สาขาของเรา</h3>
    <div class="clinic-grid-container">
      <div class="clinic-flex-item-pic">
        <img src="assets/images/aboutUs/clinic.png" alt="" style="width: 600px; height:auto">
      </div>

      <div class="clinic-flex-item-detail">
        <p>คลินิกทันตกรรมบุญชัยทันตแพทย์<br>
          สาขา บางหว้า (ปากซอยเพชรเกษม 46)<br>
          โทร 02-467-1135
        </p>
        <a href="" class="clinicBtn">ไปที่ Facebook</a>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251.76280425183845!2d100.44805334733891!3d13.716461401438798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29822604a48e7%3A0x9a0107bb94ef6874!2z4LiE4Lil4Li04LiZ4Li04LiB4Lia4Li44LiN4LiK4Lix4Lii4LiX4Lix4LiZ4LiV4LmB4Lie4LiX4Lii4LmM!5e0!3m2!1sth!2sth!4v1639548425294!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>

      <div class="clinic-flex-item-detail">
        <p>คลินิกทันตกรรมเด้นท์สไมล์<br>
          สาขา เอกชัย (ปากซอยเอกชัย 40/1)<br>
          โทร 02-893-5466-7 / 8
        </p>
        <a href="" class="clinicBtn">ไปที่ Facebook</a>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.5842224648122!2d100.43920621527366!3d13.683027602568922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2a2ad140bf413%3A0x2a2dfa2ba0cc3143!2z4LiE4Lil4Li04LiZ4Li04LiB4LmA4LiU4LmJ4LiZ4LiX4LmM4Liq4LmE4Lih4Lil4LmM!5e0!3m2!1sth!2sth!4v1639548494130!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
      <div class="clinic-flex-flex-pic">
        <img src="assets/images/aboutUs/clinic2.png" alt="" style="width: 600px; height:auto">
      </div>

    </div>
  </div>

  <?php include 'footer.php'; ?>
</body>


</html>