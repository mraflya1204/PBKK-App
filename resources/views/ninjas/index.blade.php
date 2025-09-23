<x-layout>
@section('title', 'Available Ninjas')
    <h2>Currently Available Ninjas</h2>

    <p> Hello, esteemed guest!, this is our top ninjas</p>


    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{ $ninja->id }}" :highlight="$ninja['skill'] >= 80">
                    <h3>{{ $ninja->name }}</h3>
                </x-card>
            </li>
        @endforeach
        <li>
            <h3>And many more...</h3>
        </li>
    </ul>
</x-layout>