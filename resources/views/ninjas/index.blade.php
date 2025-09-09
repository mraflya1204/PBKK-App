<x-layout>
    <h2>Currently Available Ninjas</h2>
    <p>{{ $greeting }}, here is a list of our top ninjas:</p>

    @if($greeting == "Hello")
        <p>Welcome back, esteemed guest!, this is from inside the if statement</p>
    @endif

    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <x-card href="/ninjas/{{ $ninja['id'] }}" :highlight="$ninja['skill'] >= 80">
                    <h3>{{ $ninja['name'] }}
                </x-card>
            </li>
        @endforeach
        <li>
            <h3>And many more...</h3>
        </li>
    </ul>
</x-layout>
