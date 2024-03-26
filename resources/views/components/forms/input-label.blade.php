@props(['value'])

<label {{ $attributes->merge(['class' =>  'block text-sm text-zinc-800 font-medium mb-1']) }}>
    {{ $value ?? $slot }}
</label>
