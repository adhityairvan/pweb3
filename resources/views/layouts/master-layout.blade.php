<!DOCTYPE html>
<head>
    <title>@yield('title')</title>
    <link href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @yield('assets')
</head>
<body>
<div class="wrapper">
    @include('include.nav')
    @yield('content')
    @yield('script')
</div>

</body>
</html>