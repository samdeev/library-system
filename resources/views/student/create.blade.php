<x-app-layout>
    <div>
        <div class="flex items-start gap-3">
            <a href="{{ url()->previous() }}" class="text-zinc-950 hover:text-zinc-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                </svg>
            </a>
            <div>
                <h2 class="text-xl font-semibold">Add new student</h2>
                <p class="text-sb text-zinc-700 mt-1">Provide the necessary information in the required field below.</p>
            </div>
        </div>
    </div>

    <div class="mt-16 max-w-xl">
        <form action="#" method="POST" class="space-y-6">
            @csrf

            <div>
                <x-forms.input-label for="name" :value="__('Name')" />
                <x-forms.text-input
                    name="name"
                    id="name"
                    class="shadow-none bg-transparent w-full" />
                <x-forms.validation-error :field="__('name')" />
            </div>

            <div>
                <x-forms.input-label for="email" :value="__('Email')" />
                <x-forms.text-input
                    name="email"
                    id="email"
                    class="shadow-none bg-transparent w-full" />
                <x-forms.validation-error :field="__('email')" />
            </div>

            <div>
                <x-forms.primary-button>
                    {{ __('Create') }}
                </x-forms.primary-button>
            </div>
        </form>
    </div>
</x-app-layout>
