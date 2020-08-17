<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    <title>@yield('page_title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark container mb-4">
        <ul class="navbar-nav d-flex">
            <li class="nav-item">
            <a class="nav-link" href="{{ route('user.index') }}"><button class="btn btn-primary">Quản lý thành viên</button></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href=" {{ route('user.create') }}"><button class="btn btn-success">Thêm thành viên</button></a>
            </li>
        </ul>
    </nav>
    
    @yield('main')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/home.js') }}"></script>
</body>
</html>
