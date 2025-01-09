@props([
    'header' => null, 
    'footer' => null, 
    'image' => null, 
    'padding' => 'p-4',
    'shadow' => 'shadow-md',
    'rounded' => 'rounded-lg',
    'border' => null, 
])

<div {{ $attributes->merge(['class' => "bg-teal-50 $rounded $shadow $border"]) }}>
    @if ($image)
        <img src="{{ $image }}" alt="Card Image" class="w-full {{ $rounded }}-t">
    @endif

    @if ($header)
        <div class="border-b px-4 py-2 font-semibold text-lg">
            {{ $header }}
        </div>
    @endif

    <div class="{{ $padding }}">
        {{ $slot }}
    </div>

    @if ($footer)
        <div class="border-t px-4 py-2 text-sm text-gray-500">
            {{ $footer }}
        </div>
    @endif
</div>
