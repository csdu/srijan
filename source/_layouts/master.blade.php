<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Srijan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="stylesheet" href="{{ mix('css/style.css', 'assets/build') }}" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    </head>
    <body class="flex">
        @include('_layouts.header')
        @yield('body')
        @include('_layouts.footer')
        <script>
            function toggleShow(){document.getElementById('old').classList.toggle('active')}
            document.getElementById('showOld').addEventListener('click',toggleShow);
            document.getElementById('close').addEventListener('click',toggleShow);
        </script>
    </body>
</html>