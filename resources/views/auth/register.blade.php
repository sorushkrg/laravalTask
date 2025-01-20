@extends('layout.app')

@push('namePage')
    {{ $title }}
@endpush

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h2 class="text-center mb-4">ثبت نام</h2>
                <form action="{{ route('auth.register_post') }}" method="POST" class="card p-4 shadow-sm">
                    @error('general')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">نام کامل</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">ایمیل</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">رمز عبور</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary w-100">ثبت نام</button>
                </form>
            </div>
        </div>
    </div>
@endsection
