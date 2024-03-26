@props(['field'])

@error($field)
    <p class="block text-sm text-red-500 font-medium mt-1">{{ $message }}</p>
@enderror
