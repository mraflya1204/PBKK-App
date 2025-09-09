<x-layout>
    <h2>Currently Available Ninjas</h2>
    <p>{{ $greeting }}, here is a list of our top ninjas:</p>

    @if($greeting == "Hello")
        <p>Welcome back, esteemed guest!, this is from inside the if statement</p>
    @endif

    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <a href="/ninjas/{{ $ninja['id'] }}">
                    {{ $ninja['name'] }} - Age: {{ $ninja['age'] }}, Specialty: {{ $ninja['specialty'] }}
                </a>
            </li>
        @endforeach
        <li>
            And many more...
        </li>
    </ul>
</x-layout>