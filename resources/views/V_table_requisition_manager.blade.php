{{--
It manager
fix history table
@Author : Nattawut Somdulyakanok 64160066
@Create Date: 2023-03-05
--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT Support</title>
    <link rel="stylesheet" href="style_fix_request.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css" rel="stylesheet"/>


</head>
<body>

    <div class="container">
        <!-- sidebar start -->
        <div class="navigation">

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
                <li class="list">
                    <b></b>
                    <b></b>
                    <a href="{{ Route('dash_manager') }}">
                        <span class="icon"><ion-icon name="newspaper-outline"></ion-icon></span>
                        <span class="title">หน้าหลัก</span>
                    </a>
                </li>
                <li class="list active">
                    <b></b>
                    <b></b>
                    <a href="{{ Route('repair_manager') }}">
                        <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                        <span class="title_2">ตารางซ่อม</span>
                    </a>
                </li>
                <li class="list">
                    <b></b>
                    <b></b>
                    <a href="{{route('requsition_manager')}}">
                        <span class="icon"><ion-icon name="cube-outline"></ion-icon></span>
                        <span class="title_3">ตารางเบิก</span>
                    </a>
                </li>
                <li class="list">
                    <b></b>
                    <b></b>
                    <a href="#">
                        <span class="icon"><ion-icon name="refresh-circle-outline"></ion-icon></span>
                        <span class="title_4">อัพเดทคลัง</span>
                    </a>
                </li>
                <li class="list">
                    <b></b>
                    <b></b>
                    <a href="#">
                        <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                        <span class="title_5">เพิ่มผู้ใช้</span>
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
                    <a href="#" class="sub-menu-link">
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

    <div class="sort">
        <header>
            <nav>
                <ul class="nav__links">
                    <li class="lists active"><a href="#">ทั้งหมด</a></li>
                    <li class="lists"><a href="#">จอง</a></li>
                    <li class="lists"><a href="#">กำลังดำเนินการ</a></li>
                    <li class="lists"><a href="#">ดำเนินการเสร็จสิ้น</a></li>
                    <li class="lists"><a href="#">ดำเนินการไม่สำเร็จ</a></li>
                </ul>
            </nav>
        </header>
    </div>

    <div class="main">

        <!-- content start -->
        <div class="content-box">
            <table>
                <thead>
                    <tr>
                        <td>เลขที่จอง</td>
                        <td>ชื่อ</td>
                        <td>อุปกรณ์</td>
                        <td>วันที่รับเครื่องเข้าระบบ</td>
                        <td>สถานะ</td>
                    </tr>
                </thead>
                <tbody>
                        <?php
                        $users = DB::table('users')
                        ->join('task_requests', 'users.id', '=', 'task_repuest.tr_emp_id')
                        ->join('equipments', 'task_requests.tr_eqm_id', '=', 'equipments.eqm_id')
                        ->select('users.*', 'task_requests.tr_eqm_id','equipments.eqm_type')
                        ->get();
                        $count = count($users);


                    ?>
                    @foreach ($users as $user)
                     <tr>
                        <td>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}&nbsp;&nbsp;{{ $user->emp_lname }}</td>
                            <td>{{ $user->epm_type}}</td>
                            <td>{{ $user->tr_approved}}</td>
                            <select>
                                <option>🟣 จอง</option>
                                <option>🟡 กำลังดำเนินการ</option>
                                <option>🟢 ดำเนินการเสร็จสิ้น</option>
                                <option>🔴 ดำเนินการไม่สำเร็จ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>000158</td>
                        <td>สมชาย หยิ่งผยอง</td>
                        <td>เครื่องพิมพ์</td>
                        <td>11-03-23</td>
                        <td>
                            <select>
                                <option>🟣 จอง</option>
                                <option>🟡 กำลังดำเนินการ</option>
                                <option>🟢 ดำเนินการเสร็จสิ้น</option>
                                <option>🔴 ดำเนินการไม่สำเร็จ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>000159</td>
                        <td>สมชาย หยิ่งผยอง</td>
                        <td>เครื่องพิมพ์</td>
                        <td>11-03-23</td>
                        <td>
                            <select>
                                <option>🟣 จอง</option>
                                <option>🟡 กำลังดำเนินการ</option>
                                <option>🟢 ดำเนินการเสร็จสิ้น</option>
                                <option>🔴 ดำเนินการไม่สำเร็จ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>000160</td>
                        <td>สมชาย หยิ่งผยอง</td>
                        <td>เครื่องพิมพ์</td>
                        <td>11-03-23</td>
                        <td>
                            <select>
                                <option>🟣 จอง</option>
                                <option>🟡 กำลังดำเนินการ</option>
                                <option>🟢 ดำเนินการเสร็จสิ้น</option>
                                <option>🔴 ดำเนินการไม่สำเร็จ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>000161</td>
                        <td>สมชาย หยิ่งผยอง</td>
                        <td>เครื่องพิมพ์</td>
                        <td>11-03-23</td>
                        <td>
                            <select>
                                <option>🟣 จอง</option>
                                <option>🟡 กำลังดำเนินการ</option>
                                <option>🟢 ดำเนินการเสร็จสิ้น</option>
                                <option>🔴 ดำเนินการไม่สำเร็จ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>000162</td>
                        <td>สมชาย หยิ่งผยอง</td>
                        <td>เครื่องพิมพ์</td>
                        <td>11-03-23</td>
                        <td>
                            <select>
                                <option>🟣 จอง</option>
                                <option>🟡 กำลังดำเนินการ</option>
                                <option>🟢 ดำเนินการเสร็จสิ้น</option>
                                <option>🔴 ดำเนินการไม่สำเร็จ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>000163</td>
                        <td>สมชาย หยิ่งผยอง</td>
                        <td>เครื่องพิมพ์</td>
                        <td>11-03-23</td>
                        <td>
                            <select>
                                <option>🟣 จอง</option>
                                <option>🟡 กำลังดำเนินการ</option>
                                <option>🟢 ดำเนินการเสร็จสิ้น</option>
                                <option>🔴 ดำเนินการไม่สำเร็จ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>000164</td>
                        <td>สมชาย หยิ่งผยอง</td>
                        <td>เครื่องพิมพ์</td>
                        <td>11-03-23</td>
                        <td>
                            <select>
                                <option>🟣 จอง</option>
                                <option>🟡 กำลังดำเนินการ</option>
                                <option>🟢 ดำเนินการเสร็จสิ้น</option>
                                <option>🔴 ดำเนินการไม่สำเร็จ</option>
                            </select>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>

        <!-- content end -->
    </div>

    </div>








    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="my_chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
