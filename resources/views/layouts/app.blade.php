<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NFT</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- /global stylesheets -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" type="image/png" href="https://bpndigital.com/wp-content/uploads/2019/10/favicon.png">
    <!-- Theme JS files -->
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <!-- /theme JS files -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
