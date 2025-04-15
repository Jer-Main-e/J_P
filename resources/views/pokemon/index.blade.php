<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポケモン | index</title>
</head>
<body>
    <h2>Currently Available ポケモン</h2>

    <p>{{ $greeting }}</p>

    <ul>
        <li>
            <a href="">
                {{ $pokemon[0]["name"]}}
            </a>
        </li>
        <li>
            <a href="">
                {{ $pokemon[1]["name"]}}
            </a>
        </li>
        <li>
            <a href="">
                {{ $pokemon[2]["name"]}}
            </a>
        </li>
    </ul>

</body>
</html>