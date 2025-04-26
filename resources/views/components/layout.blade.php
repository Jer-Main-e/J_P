<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jermaine's ポケモン</title>

    @vite('resources/css/app.css')
</head>
<body>
    
    <header>
        <nav>
            <h1>Jermaine's ポケモン</h1>
            <a href="/pokemon">All ポケモン</a>
            <a href="/pokemon/create">Create New ポケモン</a>
        </nav>
    </header>
    
    <main class="container">
        {{ $slot }}
    </main>

</body>
</html>