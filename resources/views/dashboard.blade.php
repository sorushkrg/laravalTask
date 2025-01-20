@extends('layout.app')

@push('namePage')
    {{$title}}
@endpush

@push('logOut')
    <a href="{{ route('auth.logOut') }}" class="btn btn-light btn-sm">خروج</a>
@endpush

@section('content')
    <div class="container mt-5">
        <h2 class="text-center"> {{ checkLogin() ? $user['name'] : 'کاربر' }} به داشبرد خوش امدید</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <a href="{{route("task.create")}}" class="btn btn-success w-100">ایجاد تسک</a>
            </div>
            <div class="col-md-4">
                <a href="./tasks/index.html" class="btn btn-primary w-100">تسک ها</a>
            </div>
            <div class="col-md-4">
                <a href="./admin/index.html" class="btn btn-warning w-100">پنل مدیریت</a>
            </div>
        </div>
    </div>
@endsection
