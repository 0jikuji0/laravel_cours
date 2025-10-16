@props([
    'active' => false,
])
<a {{ $attributes->class([
    'btn-primary' => $active,
])}}>
    {{ $slot }}
</a>