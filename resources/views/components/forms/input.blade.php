@props(['label', 'name'])

@php
  $defaults = [
      'type' => 'text',
      'id' => $name,
      'name' => $name,
      // 'class' => 'rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full',
      'class' =>
          'block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6',
      'value' => old($name),
  ];
@endphp

<x-forms.field :$label :$name>
  <input {{ $attributes($defaults) }}>
</x-forms.field>
