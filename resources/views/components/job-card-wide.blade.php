@props(['job'])
<x-card class="gap-x-6">

  <div>
    <x-employer-logo />
  </div>

  <div class="flex flex-1 flex-col">
    <a href="#" class="self-start text-sm text-gray-400">{{ $job->employer->name }}</a>

    <h3 class="mt-2 text-xl font-bold transition-colors duration-300 group-hover:text-blue-600">{{ $job->title }}</h3>
    <p class="mt-auto text-sm text-gray-400">{{ $job->schedule . ' ' . $job->salary }}</p>
  </div>

  <div class="">
    @foreach ($job->tags as $tag)
      <x-tag :$tag size='small' />
    @endforeach
  </div>

</x-card>
