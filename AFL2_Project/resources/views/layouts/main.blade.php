<!DOCTYPE html>
<html lang="en">

<head>
    <title> {{ $pageTitle }} </title>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="container-xl" style="padding: 0px">
        <div>
            @include('layouts.navbar')
        </div>
        <div>
            @yield('content')
        </div>
    </div>
    <div class="container-fluid" style="padding: 0px">
        @include('layouts.footer')
    </div>
</body>

</html>
