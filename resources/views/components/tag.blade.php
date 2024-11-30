@props(['tag', 'size' => 'base'])
@php
  $class = 'font-bold rounded-xl bg-white/10 px-3 py-1 transition-colors duration-300 hover:bg-white/25 ';
  $class .= $size === 'small' ? 'text-2xs px-3' : 'text-sm px-5';
@endphp
<a class="{{ $class }}" href="/tags/{{ strtolower($tag->name) }}">{{ $tag->name }}</a>
