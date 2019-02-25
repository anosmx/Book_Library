@extends('layouts.app')

@section('content')
<div class="container">

    @auth()

        {!! Form::open(['action'=>'UploadController@store', 'method'=>'POST', 'file'=>true]) !!}
    <div class="form-group">
        {{Form::label('title', 'ارفع كتاباً')}}
        {{Form::file('book_name', ['class'=>'form-control-file'])}}
        <small class="form-text text-muted">small disl</small>
    </div>

    {{Form::submit('رفع', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}


    @else
        <div class="alert alert-dismissible alert-primary mt-3" style="border-radius: 3px;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h5>يجب عليك تسجيل الدخول أولاً لتتمكن من إضافة كتاب!</h5>
        </div>

            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    <div class="card shadow-lg" style="border-radius: 7px;">
                        <div class="card-header">{{ __('تسجيل الدخول') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('البريد الإلكتروني') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" style="border-radius: 4px;" required autofocus>

                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('كلمة المرور') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" style="border-radius: 4px;" required>

                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row mb-0 mt-5">
                                    <div class="col-md-8 offset-md-4">
                                        <button type="submit" class="btn btn-primary rounded-pill">
                                            {{ __('دخول') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                            <a class="btn text-warning" href="{{ route('password.request') }}">
                                                {{ __('نسيت كلمة المرور؟') }}
                                            </a>
                                        @endif
                                        @if (Route::has('register'))
                                                <a class="btn text-warning" href="{{ route('register') }}">
                                                    {{ __('تسجيل') }}
                                                </a>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    @endauth

</div>
@endsection
