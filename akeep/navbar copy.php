<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 3 ขีด -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- Kanit font start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/font.css">
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

        /* --------------------------------------------------------------------------- */
        .dentalName {
            background: #00316b;
            color: #fff;
            display: flex;
            flex-direction: row;
            justify-content: center;
        }

        .dentalName>div>h1 {
            text-align: center;
            border-top: 1px solid #fff;
            border-bottom: 1px solid #fff;
            margin: 30px 0 10px 0;
            padding: 5px 0 5px 0;
            font-size: 35px;
        }

        .dentalName>div>h4 {
            text-align: center;
            padding-bottom: 20px;
            font-size: 20px;
        }
        /* --------------------------------------------------------------------------- */

        nav {
            background: #00316b;
            height: 60px;
            width: 100%;
        }

        nav ul {
            float: none;
            text-align: center;
            /* margin-right: 20px; */
        }

        nav ul li {
            display: inline-block;
            line-height: 60px;
            margin: 0 5px;
        }

        nav ul li a {
            color: white;
            font-size: 22px;
            padding: 7px 13px;
            border-radius: 3px;
            text-transform: uppercase;
        }

        li a.active,
        li a:hover {
            background: #1b9bff;
            transition: .5s;
        }

        .checkbtn {
            position: fixed;
            top: 20px;
            right: 2px;
            font-size: 30px;
            color: white;
            float: right;
            line-height: 80px;
            margin-right: 30px;
            cursor: pointer;
            display: none;
        }

        #check {
            position: fixed;
            top: 20px;
            right: 2px;
            display: none;
        }
        @media (max-width: 952px) {
            label.logo {
                font-size: 30px;
                padding-left: 50px;
            }

            nav ul li a {
                font-size: 16px;
            }
        }

        @media (max-width: 858px) {
            nav {
                height: 0px;
            }

            .checkbtn {
                display: block;
            }

            ul {
                position: fixed;
                width: 100%;
                height: 100vh;
                background: #00316b;
                top: 120px;
                left: -100%;
                text-align: center;
                transition: all .5s;
            }

            nav ul li {
                display: block;
                margin: 50px 0;
                line-height: 30px;
            }

            nav ul li a {
                font-size: 20px;
            }

            a:hover,
            a.active {
                background: none;
                color: #1b9bff;
            }

            #check:checked~ul {
                left: 0;
            }
        }
    </style>

</head>

<body>
    <div class="dentalName">
        <div>
            <h1>BoonChai</h1>
            <h4>Dental Clinic</h4>
        </div>
    </div>

    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a class="active" href="http://localhost/BoonChaiDentalClinic/index.php">หน้าแรก</a></li>
            <li><a href="http://localhost/BoonChaiDentalClinic/price.php">อัตราค่ารักษา</a></li>
            <li><a href="http://localhost/BoonChaiDentalClinic/promotion.php">โปรโมชั่น</a></li>
            <li><a href="http://localhost/BoonChaiDentalClinic/aboutUs.php">เกี่ยวกับเรา</a></li>
            <li><a href="http://localhost/BoonChaiDentalClinic/contactUs.php">ติดต่อเรา</a></li>
            <li><a href="http://localhost/BoonChaiDentalClinic/comingSoon.php">EN</a></li>
        </ul>
    </nav>

</body>

</html>