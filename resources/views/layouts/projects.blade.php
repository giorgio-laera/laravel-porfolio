<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    @Vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <header>
        <h1 class="m-3">
            @yield('title')
        </h1>
    </header>

    <main class="m-3">
        @yield('content')
    </main>
</body>

</html>
