<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
<div class="min-h-full grid place-items-center">
    <div class="flex justify-center items-center gap-8">
        <x-card href="{{ route('student.create') }}">
            <div class="bg-indigo-500 h-24 rounded-t-lg"></div>
                <div class="-mt-28 p-8 text-center">
                    <img src="image/student.png" alt="Student" class="rounded-full h-36 w-36 border-4 border-white shadow-sm" />
                    <h1 class="text-base font-semibold tracking-tight text-zinc-800">Student Login</h1>
                </div>
        </x-card>
        <x-card href="{{ route('admin.create') }}">
            <div class="bg-red-500 h-24 rounded-t-lg"></div>
                <div class="-mt-28 p-8 text-center">
                    <img src="image/admin.png" alt="Student" class="rounded-full h-36 w-36 border-4 border-white shadow-sm" />
                    <h1 class="text-base font-semibold tracking-tight text-zinc-800">Admin Login</h1>
                </div>
        </x-card>
    </div>
</div>
</body>
</html>
