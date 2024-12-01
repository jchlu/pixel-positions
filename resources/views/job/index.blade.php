@props(['jobs', 'featuredJobs'])
<x-layout>

  <div class="space-y-10">
    <section class="pt-6 text-center">
      <x-forms.form action="/search">
        <x-page-heading>Let's Find Your Next Job</x-page-heading>
        <x-forms.input name="q" :label='false' class="mt-6" placeholder="Web Developer..." />
      </x-forms.form>
    </section>
    <section class="pt-10">
      <x-section-heading>Featured Jobs</x-section-heading>

      <div class="mt-6 grid gap-8 lg:grid-cols-3">
        @foreach ($featuredJobs->shuffle() as $job)
          <x-job-card :$job />
        @endforeach
      </div>

    </section>

    <section>
      <x-section-heading>Tags</x-section-heading>

      <div class="mt-6 space-x-2">
        @foreach ($tags as $tag)
          <x-tag :$tag />
        @endforeach
      </div>

    </section>
    <section>
      <x-section-heading>Recent Jobs</x-section-heading>
      <div class="mt-6 space-y-6">
        @foreach ($jobs->shuffle() as $job)
          <x-job-card-wide :$job />
        @endforeach
      </div>
    </section>
  </div>
</x-layout>
