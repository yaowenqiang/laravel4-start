<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    @include('partial.menu')
    @yield('content')
    @section('sidebar')
        <h2>Links</h2>
    @show
</body>
</html>

