<x-layout>
@section('title', 'Create Ninja')
  <form action="{{ route('ninjas.store') }}" method="POST">
    @csrf

    <h2>Create a New Ninja</h2>

    <!-- ninja Name -->
    <label for="name">Ninja Name:</label>
    <input 
      type="text" 
      id="name" 
      name="name" 
      value="{{ old('name') }}" 
      required
    >

    <!-- ninja Age -->
    <label for="age">Ninja Age:</label>
    <input 
      type="number" 
      id="age" 
      name="age" 
      value="{{ old('age') }}" 
      required
    >


    <!-- ninja Specialty -->
    <label for="specialty">Ninja Specialty:</label>
      <select id="specialty" name="specialty" required>
          <option value="" disabled {{ old('specialty') ? '' : 'selected' }}>Select specialty</option>
          <option value="Stealth" {{ old('specialty') == 'Stealth' ? 'selected' : '' }}>Stealth</option>
          <option value="Espionage" {{ old('specialty') == 'Espionage' ? 'selected' : '' }}>Espionage</option>
          <option value="Assasination" {{ old('specialty') == 'Assasination' ? 'selected' : '' }}>Assasination</option>
          <option value="Martial Arts" {{ old('specialty') == 'Martial Arts' ? 'selected' : '' }}>Martial Arts</option>
          <option value="Thievery" {{ old('specialty') == 'Thievery' ? 'selected' : '' }}>Thievery</option>
      </select>

    <!-- ninja Strength -->
    <label for="skill">Ninja Skill (30-100):</label>
    <input 
      type="number" 
      id="skill" 
      name="skill" 
      value="{{ old('skill') }}" 
      required
    >

    <!-- ninja Bio -->
    <label for="bio">Biography:</label>
    <textarea
      rows="5"
      id="bio" 
      name="bio" 
      required
    >
    {{ old('bio') }}
  </textarea>

    <!-- select a dojo -->
    <label for="dojo_id">Dojo:</label>
    <select id="dojo_id" name="dojo_id" required>
      <option value="" disabled selected>Select a dojo</option>
      @foreach ($dojoList as $dojo)
        <option value="{{ $dojo->id }}" {{ old('dojo_id') == $dojo->id ? 'selected' : '' }}>
          {{ $dojo->name }}
        </option>
      @endforeach
    </select>

    <button type="submit" class="btn mt-4">Create Ninja</button>

    <!-- validation errors -->
    @if ($errors->any())
        <div class="error-messages">
            <ul class="px-4 py-3 mb-4 bg-red-100 border border-red-400 text-red-700 rounded">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
    
</form>
</x-layout>