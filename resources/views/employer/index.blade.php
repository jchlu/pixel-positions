@props(['employers'])
<x-layout>

  <div class="space-y-10">
    <section class="pt-6 text-center">
      <h1 class="text-4xl font-bold">Employers List</h1>
      <form class="mt-6" action="">
        <input placeholder="Acme Corp..." class="border-white/15 w-full max-w-xl rounded-xl border bg-white/5 px-5 py-4"
          type="text" />
      </form>
    </section>

    <section>
      <div class="mt-6 space-y-6">
        @foreach ($employers->shuffle() as $employer)
          <x-employer-card-wide :$employer />
        @endforeach
      </div>
    </section>
  </div>
</x-layout>
