<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Kanit font start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/navbar.css">
    <!-- Kanit font end -->
    <title>Boonchai Dental Clinic</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            text-decoration: none;
            list-style: none;
        }

        .container {
            padding: 0 10% 30px 10%;
            background-color: #00316b;
        }

        .aboutUs h3 {
            text-align: center;
            padding: 10px 0;
            color: #fff;
            font-size: 30px;
        }

        .aboutUs_flex-container {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
        }

        .flex-item-left {
            flex: 1;
            padding: 30px;
        }

        .flex-item-left p {
            color: #fff;
            padding: 0 0 0 15px;
            line-height: 18px;
            font-size: 0.9rem;
        }

        .flex-item-left img {
            width: 100%;
            height: auto;
            padding: 0 0 15px 0;
        }

        .flex-item-center {
            flex: 1;
            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 30px;
        }

        .flex-item-center iframe {
            position: relative;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 47.5%;
        }

        .flex-item-right {
            flex: 1;
            position: relative;
            width: 100%;
            overflow: hidden;
            padding: 30px;
        }

        .flex-item-right iframe {
            position: relative;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 858px) {
            .aboutUs_flex-container {
                flex-direction: column;
            }

            .flex-item-left p {
                text-align: center;
            }
        }
    </style>


</head>

<body>
    <div class="container">
        <div class="aboutUs aboutUs_flex-container">
            <div class="flex-item-left">
                <h3>เกี่ยวกับเรา</h3>
                <img src="assets/images/Logo1.png" alt="">
                <p> คลินิกทันตกรรมบุญชัยทันตแพทย์ </br>
                    สาขา บางหว้า (ปากซอยเพชรเกษม 46)</br>
                    โทร 02-467-1135</br></br>
                </p>
                <p>
                    คลินิกทันตกรรมเด้นท์สไมล์</br>
                    สาขา เอกชัย (ปากซอยเอกชัย 40/1)</br>
                    โทร 02-893-5466-7 / 8</br></br>
                </p>
                <p>เวลาทำการ : จันทร์ - อาทิตย์ 10.00 - 20.00 น.</p>
            </div>

            <div class="flex-item-center">
                <h3>แผนที่</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d251.76280425183845!2d100.44805334733891!3d13.716461401438798!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29822604a48e7%3A0x9a0107bb94ef6874!2z4LiE4Lil4Li04LiZ4Li04LiB4Lia4Li44LiN4LiK4Lix4Lii4LiX4Lix4LiZ4LiV4LmB4Lie4LiX4Lii4LmM!5e0!3m2!1sth!2sth!4v1639548425294!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.5842224648122!2d100.43920621527366!3d13.683027602568922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2a2ad140bf413%3A0x2a2dfa2ba0cc3143!2z4LiE4Lil4Li04LiZ4Li04LiB4LmA4LiU4LmJ4LiZ4LiX4LmM4Liq4LmE4Lih4Lil4LmM!5e0!3m2!1sth!2sth!4v1639548494130!5m2!1sth!2sth" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>

            <div class="flex-item-right">
                <h3>Facebook</h3>
                <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FBoonchaidentalclinic%2Fposts%2F1281162378746535&show_text=false&width=500" width="500" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
    </div>


</body>

</html>