<!DOCTYPE html>
<html lang="vi">
<head>
    <title>@yield('title')</title>
    @include('components.head')
</head>
<body>
    @include('components.header')

<div class="col-md-9 mx-auto">
    @yield('content')
</div>
    @include('components.footer')
</body>
</html>