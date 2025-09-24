<x-layout>
@section('title', 'Ninja Details')
    <h2>Ninja ID - {{ $ninja->id }}</h2>

    <div class="bg-gray-200 p-6 rounded-lg shadow-md">
        <h3 class="text-2xl font-bold mb-4">{{ $ninja->name }}</h3>
        <p class="mb-2"><strong>Age:</strong> {{ $ninja->age }}</p>
        <p class="mb-2"><strong>Skill Level:</strong> {{ $ninja->skill }}</p>
        <p class="mb-2"><strong>Description:</strong> {{ $ninja->bio }}</p>
    </div>

    <p></p>

    <div class="bg-gray-200 p-6 rounded-lg shadow-md">
        <p class="mb-2"><strong>Dojo Name:</strong> {{ $ninja->dojo->name }}</p>
        <p class="mb-2"><strong>Dojo Location:</strong> {{ $ninja->dojo->location }}</p>
        <p class="mb-2"><strong>Dojo Description:</strong> {{ $ninja->dojo->description }}</p>
    </div>

    <p></p>

    <div class="bg-gray-200 p-6 rounded-lg shadow-md">
            <a href="/ninjas" class="text-blue-500 hover:underline">Back to Ninjas List</a>

    </div>

</x-layout>