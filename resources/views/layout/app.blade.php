<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{env("APP_NAME")}}| @stack('namePage')</title>
    <link href="{{ asset('asset/bootstrap-5.3.3-dist/css/bootstrap.rtl.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('iranYekan/iranyekan.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/custom.css') }}">
    @stack('datePicker_style')
</head>

<body>
    @include('layout.header')

    @yield('content')

    @include('layout.footer')

    <script src="{{ asset('asset/bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js') }}"></script>
</body>
@stack('datePicker_script')
</html>
