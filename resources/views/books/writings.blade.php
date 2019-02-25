@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <h4 class="display-4 text-warning">مؤلفات الشيخ د. حسن الحجاجي</h4>
    <div class="row mt-5">
        @foreach($files as $file)
            <?php $ext = pathinfo($file, PATHINFO_EXTENSION);
            $filename = basename($file,'.'.$ext); ?>

        <div class="col-md-3 col-sm-12">
            <div class="card border-primary mb-3">
                <div class="card-header">{{$filename}}</div>
                <div class="card-body">
                    <p class="card-title text-muted">
                        <span>المؤلف: </span><span>حسن</span>
                    </p>
                    <p class="card-text text-muted">
                        <span>تحميل: </span><span><a href="{{$file}}" role="button" download>رابط الكتاب</a></span>
                    </p>
                    <p class="card-text text-muted">
                        <span>عدد التحميل: </span><span>44</span>
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>


    <div class="row">
        @foreach($files as $file)
            <?php $ext = pathinfo($file, PATHINFO_EXTENSION);
            $filename = basename($file,'.'.$ext); ?>

        <div class="col-md-4">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="https://graphics8.nytimes.com/images/2012/12/19/books/20favorite-book-covers-slide-DQPY/20favorite-book-covers-slide-DQPY-slide.jpg" style="height: 100%" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$filename}}</h5>
                            <p class="card-text text-muted">
                                <span>المؤلف: </span><span class="text-primary">د. حسن الحجاجي</span>
                            </p>
                            <p class="card-text text-muted">
                                <span>تحميل: </span><span><a href="{{$file}}" role="button" download>رابط الكتاب</a></span>
                            </p>
                            <p class="card-text text-muted">
                                <small class="text-muted">تم النشر في </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>





@endsection
