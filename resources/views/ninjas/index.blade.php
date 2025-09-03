<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja Network | Home</title>
</head>
<body>
    <h2>Currently Available Ninjas</h2>
    <p>{{ $greeting }}, here is a list of our top ninjas:</p>
    <ul>
        <li>
            <a href="/ninjas/{{ $ninjas[0]["id"] }}">
                {{ $ninjas[0]['name'] }} - Age: {{ $ninjas[0]['age'] }}, Specialty: {{ $ninjas[0]['specialty'] }}
            </a>
        </li>
        <li>
            <a href="/ninjas/{{ $ninjas[1]["id"] }}">
                {{ $ninjas[1]['name'] }} - Age: {{ $ninjas[1]['age'] }}, Specialty: {{ $ninjas[1]['specialty'] }}
            </a>
        </li>
        <li>
            <a href="/ninjas/{{ $ninjas[2]["id"] }}">
                {{ $ninjas[2]['name'] }} - Age: {{ $ninjas[2]['age'] }}, Specialty: {{ $ninjas[2]['specialty'] }}
            </a>
        </li>
        <li>
            <a href="/ninjas/{{ $ninjas[3]["id"] }}">
                {{ $ninjas[3]['name'] }} - Age: {{ $ninjas[3]['age'] }}, Specialty: {{ $ninjas[3]['specialty'] }}
            </a>
        </li>
        <li>
            <a href="/ninjas/{{ $ninjas[4]["id"] }}">
                {{ $ninjas[4]['name'] }} - Age: {{ $ninjas[4]['age'] }}, Specialty: {{ $ninjas[4]['specialty'] }}
            </a>
        </li>
        <li>
            And many more...
        </li>
    </ul>
</body>
</html>