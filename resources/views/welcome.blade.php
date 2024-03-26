<x-app-layout>
    <div class="flex justify-center items-center gap-8 mt-36">
        <x-card href="{{ route('student.create') }}">
            <div class="bg-indigo-500 h-24 rounded-t-lg"></div>
                <div class="-mt-28 p-8 text-center">
                    <img src="image/student.png" alt="Student" class="rounded-full h-36 w-36 border-4 border-white shadow-sm" />
                    <h1 class="text-base font-semibold tracking-tight text-zinc-800">Student Login</h1>
                </div>
        </x-card>
{{--        <x-card href="{{ route('teacher.create') }}">--}}
{{--            <div class="bg-blue-500 h-24 rounded-t-lg"></div>--}}
{{--                <div class="-mt-28 p-8 text-center">--}}
{{--                    <img src="image/teacher.png" alt="Student" class="rounded-full h-36 w-36 border-4 border-white shadow-sm" />--}}
{{--                    <h1 class="text-base font-semibold tracking-tight text-zinc-800">Teacher Login</h1>--}}
{{--                </div>--}}
{{--        </x-card>--}}
        <x-card href="{{ route('admin.create') }}">
            <div class="bg-red-500 h-24 rounded-t-lg"></div>
                <div class="-mt-28 p-8 text-center">
                    <img src="image/admin.png" alt="Student" class="rounded-full h-36 w-36 border-4 border-white shadow-sm" />
                    <h1 class="text-base font-semibold tracking-tight text-zinc-800">Admin Login</h1>
                </div>
        </x-card>

    </div>
</x-app-layout>
