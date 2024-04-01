<x-guest-layout>
    <div class="py-4">
        <div>
            @if(url()->current() === route('admin.create'))
                <h2 class="text-3xl font-bold text-zinc-800 uppercase text-center tracking-wide">
                    Admin Login
                </h2>
            @elseif(url()->current() === route('student.create'))
                <h2 class="text-3xl font-bold text-zinc-800 uppercase text-center tracking-wide">
                    Student Login
                </h2>
            @elseif(url()->current() === route('teacher.create'))
                <h2 class="text-3xl font-bold text-zinc-800 uppercase text-center tracking-wide">
                    Teacher Login
                </h2>
            @endif
        </div>

        <form action="{{ route('admin.login') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <x-forms.input-label for="email" :value="__('Email')" />
                <x-forms.text-input
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    class="w-full"
                />
                <x-forms.validation-error :field="__('email')" />
            </div>

            <div>
                <x-forms.input-label for="password" :value="__('Password')" />
                <x-forms.text-input
                    type="password"
                    name="password"
                    id="password"
                    class="w-full"
                />
                <x-forms.validation-error :field="__('password')" />
            </div>

            <div class="flex items-center gap-2">
                <input
                    type="checkbox"
                    name="remember"
                    id="remember"
                    class="accent-zinc-950"
                />
                <label for="remember" class="text-zinc-800">Remember me</label>
            </div>

            <div class="flex justify-end items-center">
                <x-forms.primary-button class="uppercase">
                    {{ __('Login') }}
                </x-forms.primary-button>
            </div>

        </form>
    </div>

</x-guest-layout>
