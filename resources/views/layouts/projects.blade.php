<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    @Vite(['resources/scss/app.scss','resources/js/app.js'])
</head>
<body><h1>
    @yield('title')
</h1>

@yield('content')
</body>
</html>