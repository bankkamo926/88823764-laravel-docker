<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Support</title>
    <link rel="stylesheet" href="styledash.css">


</head>
<body>

    <div class="container">
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
            <li><h4>{{Auth::user()->name}}{{' '}}{{Auth::user()->emp_lname}}</h4></li>
                <li><a>เจ้าหน้าที่ฝ่ายเทคนิค</a></li>

            </ul>
            <div class="line"></div>
            <img src="imgpro/{{Auth::user()->emp_picture}}" class="profile" onclick="toggleMenu()">

            <div class="sub-menu-wrap" id="subMenu">
                <div class="sub-menu-swap">
                    <a href="/userhome" class="sub-menu-link">
                        <img src="img/it-icon.png">
                        <img src="img/white-it-icon.png">
                        <p>หน้าจอผู้ใช้บริการ</p>
                    </a>
                </div>

                <div class="sub-menu-logout">
                    <a href="{{ route('logout') }}" class="sub-menu-link"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        <img src="img/logout-icon.png">
                        <img src="img/whiite-logout-icon.png">
                        <p>ออกจากระบบ</p>

                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>


            </div>
        </nav>

    </div>
    <!-- topbar end -->

    <div class="main">

        <!-- content start -->
        <div class="content-box">
            <!-- Add  Charts -->
            <div class="graphBox">
                <div class="task">
                    <h2>ตารางงาน</h2>
                </div>
                <div class="box">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="legend">
                    <div class="legend first">
                        <div class="cir first"></div>
                        <div class="fix-title">กำลังซ่อม</div>
                    </div>
                    <div class="legend second">
                        <div class="cir second"></div>
                        <div class="request-title">จอง</div>
                    </div>
                    <div class="legend third">
                        <div class="cir third"></div>
                        <div class="progress-title">รอดำเนินการ</div>
                    </div>
                </div>
            </div>

            <div class="cardBox">
                <div class="card one">
                    <div>
                        <div class="cardName"><h3>กำลังซ่อม</h3></div>
                    </div>
                    <div>
                        <div class="numbers one"><h1>2</h1></div>
                    </div>
                    <div>
                        <div class="meter"><h3>รายการ</h3></div>
                    </div>

                </div>

                <div class="card two">
                    <div>
                        <div class="cardName"><h3>จอง</h3></div>
                    </div>
                    <div>
                        <div class="numbers two"><h1>15</h1></div>
                    </div>
                    <div>
                        <div class="meter"><h3>รายการ</h3></div>
                    </div>
                </div>

                <div class="card three">
                    <div>
                        <div class="cardName"><h3>รอดำเนินการ</h3></div>
                    </div>
                    <div>
                        <div class="numbers three"><h1>30</h1></div>
                    </div>
                    <div>
                        <div class="meter"><h3>รายการ</h3></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- content end -->
    </div>

    </div>








    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="scriptMA.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="my_chart.js"></script>

</body>
</html>
