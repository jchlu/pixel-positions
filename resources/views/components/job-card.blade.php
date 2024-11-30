@props(['job'])
<x-card class="flex-col">

  <div class="self-start text-sm">Laracasts</div>

  <div class="py-8">
    <h3 class="text-lg font-bold transition-colors duration-300 group-hover:text-blue-600">{{ $job->title }}</h3>
    <p class="mt-4 text-sm">{{ $job->schedule . ' ' . $job->salary }}</p>
  </div>

  <div class="mt-auto flex items-center justify-between">
    <div>
      @foreach ($job->tags as $tag)
        <x-tag :$tag size='small' />
      @endforeach
    </div>
    <x-employer-logo :width='42' />
  </div>

</x-card>
