<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'border-none bg-zinc-950 text-white px-6 py-2 tracking-wide rounded-md hover:bg-zinc-900 transition
    duration-150 ease-in active:ring-2 active:ring-offset-2 active:ring-zinc-950 focus:ring-2 focus:ring-offset-2
    focus:ring-zinc-950 shadow'
    ]) }}>
    {{ $slot }}
</button>
