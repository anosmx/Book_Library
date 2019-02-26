<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title> لوحة التحكم </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Markazi Text font include just for persian demo purpose, don't include it in your project -->
    <link href="https://fonts.googleapis.com/css?family=Cairo&amp;subset=arabic" rel="stylesheet">

    <!-- CSS Files -->
    <link href="{{asset('admin/css/material-dashboard.min.css')}}?v=2.1.0" rel="stylesheet" />
    <link href="{{asset('admin/css/material-dashboard-rtl.css')}}?v=1.1" rel="stylesheet" />

    <!-- Style Just for persian demo purpose, don't include it in your project -->
    <style>
        body,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .h1,
        .h2,
        .h3,
        .h4 {
            font-family: "Cairo";
        }
    </style>
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="azure" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo">
            <a href="{{url('/')}}" class="simple-text logo-normal">
                مكتبة د. حسن الحجاجي
            </a>
        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="nav-item ">
                    <a class="nav-link" href="{{route('users.index')}}">
                        <i class="material-icons">dashboard</i>
                        <p>لوحة التحكم</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="{{url('admin/users')}}">
                        <i class="material-icons">person</i>
                        <p>المستخدمين</p>
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('admin/users/create')}}">مستخدم جديد</a>
                    </li>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./tables.html">
                        <i class="material-icons">content_paste</i>
                        <p>جدول</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./typography.html">
                        <i class="material-icons">library_books</i>
                        <p>خطوط</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./icons.html">
                        <i class="material-icons">bubble_chart</i>
                        <p>شارت</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./map.html">
                        <i class="material-icons">location_ons</i>
                        <p>نقشه</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./notifications.html">
                        <i class="material-icons">notifications</i>
                        <p>اعلان‌ها</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="./rtl.html">
                        <i class="material-icons">language</i>
                        <p>پشتیبانی از راست به چپ</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#">لوحة التحكم</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end">
                    <form class="navbar-form">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="بحث ...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                <i class="material-icons">search</i>
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="material-icons">dashboard</i>
                                <p class="d-lg-none d-md-block">
                                    آمارها
                                </p>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">notifications</i>
                                <span class="notification">9</span>
                                <p class="d-lg-none d-md-block">
                                    اعلان‌ها
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">محمدرضا به ایمیل شما پاسخ داد</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="material-icons">person</i>
                                <span class="notification">4</span>
                                {{ Auth::user()->name }}
                                <p class="d-lg-none d-md-block">
                                    اعلان‌ها
                                </p>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('خروج') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="#">
                                تیم خلاق
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                درباره ما
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                بلاگ
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                اجازه نامه
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, ساخته شده با
                    <i class="material-icons">favorite</i> توسط
                    <a href="#" target="_blank">تیم خلاق</a> برای وب بهتر.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('admin/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/core/bootstrap-material-design.min.js')}}" type="text/javascript"></script>
<script src="{{asset('admin/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    -->
{{--<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
<!-- Chartist JS -->
<script src="{{asset('admin/js/plugins/chartist.min.js')}}"></script>
<!--  Notifications Plugin    -->
<script src="{{asset('admin/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{asset('admin/js/material-dashboard.min.js')}}?v=2.1.0" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
{{--<script src="../assets/demo/demo.js"></script>--}}
{{--<script>--}}
    {{--$(document).ready(function () {--}}
        {{--// Javascript method's body can be found in assets/js/demos.js--}}
        {{--md.initDashboardPageCharts();--}}

    {{--});--}}
{{--</script>--}}
</body>

</html>
