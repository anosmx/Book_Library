@extends('admin.layouts.app')
@section('content')

<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">المستخدمين</h4>
        <p class="card-category"> قائمة جميع المستخدمين المسجلين</p>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class=" text-primary">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">الاسم</th>
                        <th scope="col">البريد</th>
                        <th scope="col">الجوال</th>
                        <th scope="col">كتاب</th>
                        <th scope="col">الدور</th>
                        <th scope="col">الحالة</th>
                        <th scope="col">تم الإنشاء</th>
                        <th scope="col">تم التحديث</th>
                    </tr>
                </thead>
                <tbody>
                    @if($users)
                        @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td><a href="{{route('users.edit', $user->id)}}">{{$user->name}}</a></td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->file ? $user->file->file_path : 'لم يرفع كتاب'}}</td>
                        <td>{{$user->role ? $user->role->name : 'المستخدم بلا دور'}}</td>
                        <td>{{$user->is_active == 1 ? 'فعال' : 'غير فعال'}}</td>
                        <td>{{$user->created_at->diffForHumans()}}</td>
                        <td>{{$user->updated_at->diffForHumans()}}</td>
                    </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
