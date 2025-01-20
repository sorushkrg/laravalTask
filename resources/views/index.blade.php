@extends('layout.app')

@push('namePage')
    {{ $title }}
@endpush

@section('content')
    <div class="container text-center mt-5">
        <h1>به سیستم مدیریت وظایف خوش آمدید</h1>
        <p class="lead">با سیستم ما وظایف خود را به طور موثر مدیریت کنید.</p>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('auth.login') }}" class="btn btn-primary me-3">ورود</a>
            <a href="{{ route('auth.register') }}" class="btn btn-secondary me-3">ثبت نام</a>

            <a href="{{ route('dashboard') }}" class="btn btn-success">داشبرد</a>
        </div>
    </div>
@endsection
