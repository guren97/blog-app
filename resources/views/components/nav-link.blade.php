@props(['active' => false])

<a
    class="{{
        $active
            ? 'bg-gray-900 text-white'
            : 'text-gray-300 hover:bg-gray-700 hover:text-white'
    }} rounded-md px-4 py-2 p-0 text-sm font-semibold items-center"
    aria-current="{{ $active ? 'page' : 'false' }}"
    {{
    $attributes
    }}
>
    {{ $slot }}
</a>
