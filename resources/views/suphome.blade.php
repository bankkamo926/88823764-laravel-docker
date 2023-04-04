<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Support</title>
    <link rel="stylesheet" href="styleMA.css">


</head>
<body>


    <!-- sidebar start -->
    <div class="navigation">
        <!-- <div class="logo">
            <img src="img/clicknext.webp" alt="clickn" class="clickn">
            <img src="img/onlyC.png" class="clicknS">
        </div> -->

        <!-- Title and toggle start -->

        <header>
            <div class="image-text">
                <span class="image">
                    <img src="img/onlyC.png" class="c">
                </span>

                <div class="logo-text">
                    <span class="name">Clicknext</span>
                </div>
            </div>

            <ion-icon name="chevron-forward-outline" class="toggle"></ion-icon>
        </header>

        <ul>
            <li class="list active">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                    <span class="title">หน้าหลัก</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                    <span class="title_2">ตารางซ่อม</span>
                </a>
            </li>
            <li class="list">
                <b></b>
                <b></b>
                <a href="#">
                    <span class="icon"><ion-icon name="cube-outline"></ion-icon></span>
                    <span class="title_3">ตารางเบิก</span>
                </a>
            </li>


        </ul>
    </div>

    <!-- sidebar end -->

    <!-- topbar start -->
    <div class="topbar">
        <nav>
            <ul>
                <li><h4>นาย เอ บี</h4></li>
                <li><a>เจ้าหน้าที่ฝ่ายเทคนิค</a></li>

            </ul>
            <div class="line"></div>
            <img src="img/xavier.png" class="profile" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu-swap">
                    <a href="/userhome" class="sub-menu-link">
                        <img src="img/it-icon.png">
                        <img src="img/white-it-icon.png">
                        <p>หน้าจอผู้ใช้บริการ</p>
                    </a>
                </div>
                <div class="sub-menu-logout">
                    <a href="#" class="sub-menu-link">
                        <img src="img/logout-icon.png">
                        <img src="img/whiite-logout-icon.png">
                        <p>ออกจากระบบ</p>
                    </a>
                </div>

            </div>
        </nav>

    </div>
    <!-- topbar end -->







    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="scriptMA.js"></script>

</body>
</html>
