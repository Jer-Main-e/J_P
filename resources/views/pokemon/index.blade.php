<x-layout>
    <h2>Currently Available ポケモン</h2>

    {{-- <p>{{ $greeting }}</p> --}}

    {{-- @if($greeting == "hello")
        <p>Hi from inside the if statement</p>
    @endif --}}

    <ul>
        @foreach($pokemon as $mon)
            <li>
                <x-card href="/pokemon/{{ $mon['id'] }}" :highlight="$mon['level'] > 10">
                    <h3>{{ $mon['name'] }}</h3>
                </x-card>
            </li>
        @endforeach
    </ul>
</x-layout>