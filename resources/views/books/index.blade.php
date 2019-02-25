@extends('layouts.app')

@section('content')


    <div class="container my-4">
            <div class="row">
                <div class="col-md-8">
                    <h3 class="text-warning mb-4">نبذة عن د. حسن بن علي الحجاجي -رحمه الله-</h3>
                    <p style="line-height: 30px;"> كان الشيخ الدكتور حسن بن علي الحجاجي رحمه الله محباً للعلم وللعلماء وكان يرحمه الله يخصص وقتاً من يومه لقراءة ثلاثة كتب وهي: القرآن الكريم وكتابُ في الحديث وكتابُ في الفقه. دائماً يقول بالعلم تقوم الأمم وتُبنى الحضارات، مكتبته تشتمل على الكثير من الكتب في مجالات مختلفة نحاول توفيرها لطلبة العلم والحث على قراءة الكتب من الجيل الحاضر كما كان يردد الدكتور حسن بن علي الحجاجي يرحمه الله ويتغمد روحه الجنة.</p>
                </div>
                <div class="col-md-4 text-center">
                    <img class=" img-fluid" src="{{ asset('images/book.png') }}" width="300" height="300" alt="Responsive image">
                </div>
            </div>
        </div>

    <div class="container mb-5 mt-5">
        <h4 class="text-warning">الكتب الأكثر قراءةً وتحميلاً:</h4>
        <div class="books">
            @foreach($files as $file)

            <a href="{{$file}}" id="bok" role="button" download><img src="https://graphics8.nytimes.com/images/2012/12/19/books/20favorite-book-covers-slide-ORTM/20favorite-book-covers-slide-ORTM-slide.jpg" alt=""></a>
            @endforeach

            <img src="https://graphics8.nytimes.com/images/2012/12/19/books/20favorite-book-covers-slide-DQPY/20favorite-book-covers-slide-DQPY-slide.jpg" alt="">

            <div class="shelf"></div>
        </div>
    </div>

    <div class="container mb-5">
        <h4 class="text-warning mb-4">المكتبات:</h4>
        <div class="row text-center">
            <div class="col-md-4 pt-4">
                <a href="{{ url('/') }}" class="btn btn-lg btn-secondary rounded-pill" role="button">مكتبة كتب أصول الفقه</a>
            </div>
            <div class="col-md-4 mt-4">
                <a href="{{ url('/') }}" class="btn btn-lg btn-secondary rounded-pill" role="button">مكتبة كتب الحديث</a>
            </div>
            <div class="col-md-4 mt-4">
                <a href="{{ url('/') }}" class="btn btn-lg btn-secondary rounded-pill" role="button">مكتبة التفسير</a>
            </div>
            <div class="col-md-4 mt-4">
                <a href="{{ url('/') }}" class="btn btn-lg btn-secondary rounded-pill" role="button">مكتبة علوم القران</a>
            </div>
            <div class="col-md-4 mt-4">
                <a href="{{ url('/') }}" class="btn btn-lg btn-secondary rounded-pill" role="button">كتب منوعة</a>
            </div>
            <div class="col-md-4 mt-4">
                <a href="{{ url('/') }}" class="btn btn-lg btn-secondary rounded-pill" role="button">كتب اللغات والترجمة</a>
            </div>
        </div>
    </div>

    <div class=" mt-5">
        <h4 class="text-warning text-center">حسابات مواقع التواصل الإجتماعي للدكتور</h4>
        <div class="text-center mt-4">
                <button href="#" role="button" class="btn btn-lg rounded-pill mx-2" style="width: 60px; height: 60px; background-color: #3b5998;"><i class="fab fa-facebook-f"></i></button>
                <button type="button" class="btn btn-lg rounded-pill mx-2" style="width: 60px; height: 60px; background-color: #55acee;"><i class="fab fa-twitter"></i></button>
                <button type="button" class="btn btn-lg rounded-pill mx-2" style="width: 60px; height: 60px; background-color: #55acee;"><i class="fab fa-twitter"></i></button>
                <button type="button" class="btn btn-lg rounded-pill mx-2" style="width: 60px; height: 60px; background-color: #55acee;"><i class="fab fa-twitter"></i></button>
        </div>
    </div>

@endsection
