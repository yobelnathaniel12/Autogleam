<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="x-icon" href="image/autogleam_logo_white_ver.png">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title> {{ $pageTitle }} </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="/resources/js/toggle.js"></script>
    {{-- <script src="/resources/js/flowbite.min.js"></script> --}}
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">
</head>

<body class="font-Poppins">

    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')

</body>

</html>
