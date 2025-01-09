@props([
    'type' => 'button', 
    'color' => 'primary',
    'size' => 'md', 
    'outline' => false, 
])

@php
    $baseClass = 'inline-flex items-center justify-center font-medium rounded-lg transition focus:outline-none';
    $colorClasses = $outline
        ? "border text-$color-500 hover:bg-$color-500 hover:text-white focus:ring-$color-300"
        : "bg-$color-500 text-white hover:bg-$color-600 focus:ring-$color-300";
    $sizeClasses = match ($size) {
        'sm' => 'px-3 py-1 text-sm',
        'lg' => 'px-5 py-3 text-lg',
        default => 'px-4 py-2 text-md',
    };
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "$baseClass $colorClasses $sizeClasses"]) }}>
    {{ $slot }}
</button>
