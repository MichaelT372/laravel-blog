<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LL5</title>
    <link rel="stylesheet" href="/css/all.css">
</head>
<body>
    @include('partials.nav')

    <div class="container">
        @include('partials.flash')
        @yield('content')
    </div>

    <script src="/js/all.js"></script>
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(1000);
    </script>
    @yield('footer')

</body>
</html>
