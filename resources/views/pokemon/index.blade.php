<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ポケモン | index</title>
</head>
<body>
    <h2>Currently Available ポケモン</h2>

    {{-- <p>{{ $greeting }}</p> --}}

    @if($greeting == "hello")
        <p>Hi from inside the if statement</p>
    @endif

    <ul>
        @foreach($pokemon as $mon)
            <li>
                <p>{{ $mon['name'] }}</p>
                <a href="/pokemon/{{ $mon['id'] }}">View Details</a>
            </li>
        @endforeach
    </ul>

</body>
</html>