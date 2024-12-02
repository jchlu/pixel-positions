<x-layout>
  <x-page-heading>Create a Job Listing</x-page-heading>
  <x-forms.form method="POST" action="/jobs">
    <x-forms.input name="title" label="Title" placeholder="Web Developer..." />
    <x-forms.input name="salary" label="Salary" placeholder="$10,000 USD" />
    <x-forms.input name="location" label="Location" placeholder="Puente de Abundio" />

    <x-forms.select label="schedule" name="Schedule">
      <option>Full Time</option>
      <option>Part Time</option>
      <option>3 Days per Week</option>
      <option>4 Days per Week</option>
    </x-forms.select>

    <x-forms.input name="url" label="URL" placeholder="https://jobs.acme-company.test/job/345" />
    <x-forms.checkbox label="Feature on the home page (Additional Cost)" name="featured" />
    <x-forms.input name="tags" label="List of comma seperated tags" placeholder="laravel, php, sqlite" />

    <x-forms.button>Publish</x-forms.button>

  </x-forms.form>
</x-layout>
