<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>MathHelp</title>
</head>
<body>
<div class="row">
<div class="col-3">
    <nav class="navbar navbar-dark bg-dark flex-column">
        <a class="navbar-brand" href="#"><h1>MathHelp</h1></a>
    <div class="navbar flex-column" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a href="{{ url('/round_square') }}" class="nav-link">Площадь круга</a>
            <a href="{{ url('/circle_length') }}" class="nav-link">Длина окружности</a>
            <a href="{{ url('/sphere_volume') }}" class="nav-link">Объём сферы</a>
            <a href="{{ url('/round_square') }}" class="nav-link">Площадь круга</a>
            <a href="{{ url('/circle_length') }}" class="nav-link">Длина окружности</a>
            <a href="{{ url('/sphere_volume') }}" class="nav-link">Объём сферы</a>
            <a href="{{ url('/round_square') }}" class="nav-link">Площадь круга</a>
            <a href="{{ url('/circle_length') }}" class="nav-link">Длина окружности</a>
            <a href="{{ url('/sphere_volume') }}" class="nav-link">Объём сферы</a>
            <a href="{{ url('/round_square') }}" class="nav-link">Площадь круга</a>
            <a href="{{ url('/circle_length') }}" class="nav-link">Длина окружности</a>
            <a href="{{ url('/sphere_volume') }}" class="nav-link">Объём сферы</a>
            <a href="{{ url('/round_square') }}" class="nav-link">Площадь круга</a>
            <a href="{{ url('/circle_length') }}" class="nav-link">Длина окружности</a>
            <a href="{{ url('/sphere_volume') }}" class="nav-link">Объём сферы</a>
        </div>
    </div>
</nav>
</div>
<div class="col-9" style="margin-top: 15px">
@yield('content')
</div>
</div>
</body>
</html>