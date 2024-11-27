<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Pixel Positions</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..600&display=swap"
    rel="stylesheet">
</head>

<body class="bg-black text-white">
  <div class="px-10">
    <nav class="flex items-center justify-between border-b border-white/25 py-4">
      <div>
        <a href="">
          <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
        </a>
      </div>
      <div class="space-x-6 font-bold">
        <a href="#">Jobs</a>
        <a href="#">Careers</a>
        <a href="#">Salaries</a>
        <a href="#">Companies</a>
      </div>
      <div><a href="#">Post a Job</a></div>
    </nav>
    <main class="mx-auto mt-10 max-w-[986px]">
      {{ $slot }}
    </main>
  </div>
</body>

</html>
