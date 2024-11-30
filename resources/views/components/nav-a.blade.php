@props(['href' => '#', 'class' => ''])
<a href="{{ $href }}"
  {{ $attributes(['class' => 'rounded-xl border border-transparent hover:text-indigo-400 hover:border-indigo-400 px-2 py-1 transition-colors duration-300']) }}>{{ $slot }}</a>
