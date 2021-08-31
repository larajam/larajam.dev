@props(['size' => 'base'])

@php
    $iconSize = match ($size) {
        'lg' => 'w-8 h-8',
        default => 'w-4 h-4'
    };

    $fontSize = match ($size) {
        'lg' => 'text-3xl',
        default => 'text-xl',
    };
@endphp

<div {{ $attributes->merge(['class' => 'text-red-600 flex items-center space-x-2']) }}>
    <div class="{{ $iconSize }} bg-current rounded-tr-full"></div>

    <p class="{{ $fontSize }} font-bold">Larajam</p>
</div>
