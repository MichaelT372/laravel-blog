<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>LL5</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/all.css">
</head>
<body>
    <div class="container">
        @include('partials.flash')
        @yield('content')
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
    <script>
        $('div.alert').not('.alert-important').delay(3000).slideUp(1000);
    </script>
    @yield('footer')

</body>
</html>
