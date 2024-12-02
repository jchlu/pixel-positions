<!DOCTYPE html>
<html lang="en" class="h-full">

<head>
  <meta charset="UTF-8">
  <title>Pixel Positions</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..600;1,100..600&display=swap"
    rel="stylesheet">
</head>

<body class="h-full bg-black pb-20 text-white">
  <div class="px-10">
    <nav class="flex items-center justify-between border-b border-white/25 py-4">
      <div>
        <a href="/">
          <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
        </a>
      </div>
      <div class="space-x-6 font-bold">
        <x-nav-a href="/">Jobs</x-nav-a>
        <x-nav-a>Careers</x-nav-a>
        <x-nav-a>Salaries</x-nav-a>
        <x-nav-a href="/employers">Companies</x-nav-a>
      </div>
      <div class="flex items-center space-x-2">
        @auth
          <form method="POST" action="/logout">
            @csrf
            @method('DELETE')

            <button
              class="rounded-xl border border-transparent px-2 py-1 transition-colors duration-300 hover:border-indigo-400 hover:text-indigo-400">Log
              Out</button>
          </form>
          <x-nav-a href="/jobs/create">Post a Job</x-nav-a>
        @endauth
        @guest
          <x-nav-a href="/login">Login</x-nav-a>
        @endguest
      </div>
    </nav>
    <main class="mx-auto mt-10 max-w-[986px]">
      {{ $slot }}
    </main>
  </div>
</body>

</html>
