<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network | @yield('title', 'Home')</title>

    @vite('resources/css/app.css')
</head>
<body>
    <header>
        <nav>
            <h1>Ninja Network</h1>
            <a href="/">Home</a>
            <a href="/ninjas">Available Ninjas</a>
            <a href="/ninjas/create">Create New Ninja</a> 
            <a href="/about">About</a>
        </nav>
    </header>
    <main class = "container">
        {{ $slot }}
    </main>
</body>
</html>