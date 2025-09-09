@props(['highlight' => false])

<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a href="{{ $attributes }}" class="btn"> <p>View Details<p></a>
</div>