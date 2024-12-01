@props(['employer'])
<x-card class="gap-x-6">

  <div>
    <x-employer-logo />
  </div>

  <div class="flex flex-1 flex-col">
    <a href="/employers/{{ $employer->name }}" class="self-start text-sm text-gray-400">{{ $employer->name }}</a>

    <h3 class="mt-2 text-xl font-bold transition-colors duration-300 group-hover:text-blue-600">{{ $employer->url }}</h3>
  </div>

</x-card>
