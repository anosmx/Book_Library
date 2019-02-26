@extends('admin.layouts.app')
@section('content')
    @include('includes.form_errors')

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">انشاء مستخدم</h4>
            <p class="card-category"> قائمة جميع المستخدمين المسجلين</p>
        </div>
        <div class="card-body">
            {!! Form::open(['method'=>'POST', 'action'=> 'AdminUsersController@store','files'=>true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'الاسم:', ['class'=>'bmd-label-floating']) !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'البريد الإلكتروني:', ['class'=>'bmd-label-floating']) !!}
                {!! Form::email('email', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'الدور:', ['class'=>'bmd-label-floating']) !!}
                {!! Form::select('role_id', [''=>'Choose Options'] + $roles , null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'الحالة:', ['class'=>'bmd-label-floating']) !!}
                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Not Active'), 0 , ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'كلمة المرور:', ['class'=>'bmd-label-floating']) !!}
                {!! Form::password('password', ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('file_id', 'رفع كتاب:') !!}
                {!! Form::file('file_id', null, ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::submit('انشاء مستخدم', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection

