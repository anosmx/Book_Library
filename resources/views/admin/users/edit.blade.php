@extends('admin.layouts.app')
@section('content')
    @include('includes.form_errors')

    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title ">تعديل المستخدمين</h4>
            <p class="card-category"> قائمة جميع المستخدمين المسجلين</p>
        </div>
        <div class="card-body">
            {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}

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
                {!! Form::select('is_active', array(1 => 'فعال', 0 => 'إيقاف العضوية'), null , ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'كلمة المرور:', ['class'=>'bmd-label-floating']) !!}
                {!! Form::password('password', ['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('file_id', 'الكتاب:') !!}
                <h5>{{$user->file ? $user->file->file_path : 'لا يوجد كتاب'}}</h5>
            </div>

            {{--Line up the two buttons--}}
            <div class="row">
                <div class="col-sm-6">
            <div class="form-group">
                {!! Form::submit('تحديث البيانات', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}
                </div>

                <div class="col-sm-6">
                {!! Form::open(['method'=>'DELETE', 'action'=> ['AdminUsersController@destroy', $user->id]]) !!}
                    <div class="form-group">
                        {!! Form::submit('حذف المستخدم', ['class'=>'btn btn-danger pull-left']) !!}
                    </div>
                {!! Form::close() !!}
                </div>
            </div>
            {{--End of line up--}}
        </div>
    </div>
@endsection

