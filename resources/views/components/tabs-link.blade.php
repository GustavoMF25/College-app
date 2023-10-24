@props([
'href' => "#"
])
@php
$classes = 'p-7 py-3 flex items-center bg-[#f6f7f8] dark:bg-transparent border-transparent border-t-2 dark:hover:bg-[#191e3a] hover:border-primary hover:text-primary';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} href="{{$href}}">
    {{ $slot }}
</a>