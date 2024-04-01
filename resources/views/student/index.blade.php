<x-app-layout>
    <div class="flex justify-between">
        <div>
            <h2 class="text-xl font-semibold">Students</h2>
            <p class="text-zinc-700 text-sb mt-1">
                A list of all the students including their name, email, role and date added.
            </p>
        </div>
        <div class="flex items-center">
            <a href="{{ route('student.create') }}" class="px-4 py-2 bg-zinc-950 text-white rounded-md hover:bg-zinc-900 transition
            duration-150 ease-in shadow">
                Add student
            </a>
        </div>
    </div>

    {{-- Table --}}
    <div class="mt-16 border border-zinc-300 p-6 rounded-lg shadow">
        <table class="w-full">
            <thead class="text-left h-12">
            <tr class="text-zinc-900/90 text-base">
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Date Added</th>
            </tr>
            </thead>

            <tbody>
            <tr class="h-14 border-t border-zinc-300">
                <td class="text-zinc-900 font-medium">Malcolm Lockyer</td>
                <td class="text-sb text-zinc-700">test@test.com</td>
                <td class="text-sb text-zinc-700">Student</td>
                <td class="text-sb text-zinc-700">1961</td>
                <td class="text-sb">
                    <a href="#" class="text-indigo-600 font-medium hover:text-zinc-900 transition">Edit</a>
                </td>
            </tr>
            <tr class="h-14 border-t border-zinc-300">
                <td class="text-zinc-900 font-medium">Malcolm Lockyer</td>
                <td class="text-sb text-zinc-700">test@test.com</td>
                <td class="text-sb text-zinc-700">Student</td>
                <td class="text-sb text-zinc-700">1961</td>
                <td class="text-sb">
                    <a href="#" class="text-indigo-600 font-medium hover:text-zinc-900 transition">Edit</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>
