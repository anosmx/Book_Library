<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/fav.png') }}"/>

    <!-- Description -->
    <meta name="description" content="مكتبة الكترونية للشيخ الدكتور حسن بن علي الحجاجي -رحمه الله-. يوجد بالمكتبة جميع مؤلفات الدكتور وكتب متنوعة أخرى.">
    <meta name="keywords" content="كتب, الدكتور حسن, الحجاجي, حسن الحجاجي, موسوعة">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/normalize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title> {{ config('app.name', 'Laravel') }} </title>
</head>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <a class="navbar-brand my-1" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>

        @auth()
            <div class="col-sm-6 text-left">
                <div class="dropdown m-2">
                    <button class="btn-sm btn-secondary dropdown-toggle rounded-pill" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('خروج') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        @endauth
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">الكتب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/addbook') }}">أضف كتاباً</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/writings') }}">مؤلفاته</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">مغلق</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<body>
<main>
    @yield('content')
</main>

{{-- Date Function --}}
<div class="mt-5" style="text-align: center;">
    <script language="JavaScript">
            var fixd;
            function isGregLeapYear(year)
            {
                return year%4 == 0 && year%100 != 0 || year%400 == 0;
            }

            function gregToFixed(year, month, day)
            {
                var a = Math.floor((year - 1) / 4);
                var b = Math.floor((year - 1) / 100);
                var c = Math.floor((year - 1) / 400);
                var d = Math.floor((367 * month - 362) / 12);
                if (month <= 2)
                    e = 0;
                else if (month > 2 && isGregLeapYear(year))
                    e = -1;
                else
                    e = -2;
                return 1 - 1 + 365 * (year - 1) + a - b + c + d + e + day;
            }
            function Hijri(year, month, day)
            {
                this.year = year;
                this.month = month;
                this.day = day;
                this.toFixed = hijriToFixed;
                this.toString = hijriToString;
            }
            function hijriToFixed()
            {
                return this.day + Math.ceil(29.5 * (this.month - 1)) + (this.year - 1) * 354 +
                    Math.floor((3 + 11 * this.year) / 30) + 227015 - 1;
            }
            function hijriToString()
            {
                var months = new Array("محرم","صفر","ربيع أول","ربيع ثانى","جمادى أول","جمادى ثانى","رجب","شعبان","رمضان","شوال","ذو القعدة","ذو الحجة");
                return this.day + " " + months[this.month - 1]+ " " + this.year;
            }
            function fixedToHijri(f)
            {
                var i=new Hijri(1100, 1, 1);
                i.year = Math.floor((30 * (f - 227015) + 10646) / 10631);
                var i2=new Hijri(i.year, 1, 1);
                var m = Math.ceil((f - 29 - i2.toFixed()) / 29.5) + 1;
                i.month = Math.min(m, 12);
                i2.year = i.year;
                i2.month = i.month;
                i2.day = 1;
                i.day = f - i2.toFixed() + 1;
                return i;
            }
            var tod=new Date();
            var weekday=new Array("الأحد","الإثنين","الثلاثاء","الأربعاء","الخميس","الجمعة","السبت");
            var monthname=new Array("يناير","فبراير","مارس","إبريل","مايو","يونيو","يوليوز","أغسطس","سبتمبر","أكتوبر","نوفمبر","ديسمبر");
            var y = tod.getFullYear();
            var m = tod.getMonth();
            var d = tod.getDate();
            var dow = tod.getDay();
            // document.write(weekday[dow] + " " + d + " " + monthname[m] + " " + y);
            m++;
            fixd=gregToFixed(y, m, d);
            var h=new Hijri(1421, 11, 28);
            h = fixedToHijri(fixd);
            document.write(" " + h.toString() + "هـ");
        </script>
</div>


<nav class="navbar sticky-bottom navbar-dark bg-dark mt-1">
    <div class="mx-auto">
        <small><a class="btn text-info" role="button" href="http://anasdev.com">Anas Dev</a>Developed by</small>
    </div>
</nav>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{ asset('js/jquery.slim.min.js') }}" defer></script>
<script src="{{ asset('js/popper.min.js') }}" defer></script>
<script src="{{ asset('js/bootstrap.min.js') }}" defer></script>

</body>
</html>
