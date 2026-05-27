<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     @Vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>
<body class="">
   <header class="m-3 ">
    <h1>@yield('title')</h1>

</header>

<main>
@yield('content')
</main>

</body>
</html>