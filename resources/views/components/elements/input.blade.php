@props([
    'type' => 'text', 
    'label' => null, 
    'placeholder' => '',
    'value' => '', 
    'error' => null,
    'name' => '', 
])

<div class="mb-4">
    @if ($label)
        <label for="{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1">
            {{ $label }}
        </label>
    @endif

    <input 
        type="{{ $type }}" 
        name="{{ $name }}" 
        id="{{ $name }}" 
        value="{{ old($name, $value) }}" 
        placeholder="{{ $placeholder }}" 
        {{ $attributes->merge(['class' => 'block w-full px-4 py-2 text-sm border rounded-md focus:ring focus:ring-blue-200 focus:outline-none focus:border-blue-500 '. ($error ? 'border-red-500' : 'border-gray-300')]) }}
    />

    @if ($error)
        <p class="mt-1 text-sm text-red-500">{{ $error }}</p>
    @endif
</div>
