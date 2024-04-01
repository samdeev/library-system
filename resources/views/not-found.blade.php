<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 - Page Not Found</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="text-center">
            <p class="text-2xl font-bold text-zinc-900">404</p>
            <h1 class="mt-4 text-3xl font-bold tracking-tight text-zinc-900 sm:text-5xl">
                {{ __('Page not found') }}
            </h1>
            <p class="mt-6 text-base leading-7 text-zinc-700">
                {{ __('Sorry, we couldn\'t find the page you\'re looking for.') }}
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                @auth
                    <a href="{{ route('dashboard') }}" class="rounded-md bg-zinc-950 px-3.5 py-2.5 text-sm font-semibold text-white
                    shadow-sm hover:bg-zinc-900 focus-visible:outline focus-visible:outline-2 transition">
                        Go back to dashboard
                    </a>
                @endauth
                @guest
                        <a href="{{ route('login') }}" class="rounded-md bg-zinc-950 px-3.5 py-2.5 text-sm font-semibold text-white
                    shadow-sm hover:bg-zinc-900 focus-visible:outline focus-visible:outline-2 transition">
                            Go to login
                        </a>
                @endguest
            </div>
        </div>
    </main>
</body>
</html>
