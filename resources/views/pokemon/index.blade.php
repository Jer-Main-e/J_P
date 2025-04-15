<x-layout>
    <h2>Currently Available ポケモン</h2>

    {{-- <p>{{ $greeting }}</p> --}}

    {{-- @if($greeting == "hello")
        <p>Hi from inside the if statement</p>
    @endif --}}

    <ul>
        @foreach($pokemon as $mon)
            <li>
                <p>{{ $mon['name'] }}</p>
                <a href="/pokemon/{{ $mon['id'] }}">View Details</a>
            </li>
        @endforeach
    </ul>
</x-layout>