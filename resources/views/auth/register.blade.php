<x-layout>
  <div class="flex min-h-full flex-col justify-center px-6 py-6 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
      <h2 class="mt-6 text-center text-2xl/9 font-bold tracking-tight text-white">Register an Account</h2>
    </div>
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <x-forms.form action="/register" method="POST" enctype="multipart/form-data">
        <x-forms.input label="Name" name="name" id="name" autocomplete="name" required />
        <x-forms.input label="Email address" type="email" name="email" id="email" autocomplete="email"
          required />
        <x-forms.input label="Password" type="password" name="password" id="password" required />
        <x-forms.input label="Confirm Password" type="password" name="password_confirmation" id="password_confirmation"
          required />
        <x-forms.divider />
        <x-forms.input label="Employer Name" name="employer" />
        <x-forms.input label="Employer Logo" name="logo" type="file" autocomplete="logo" />
        <div>
          <x-forms.button>Register</x-forms.button>
        </div>
      </x-forms.form>
      <p class="mt-10 text-center text-sm/6 text-gray-400">
        Already a member?
        <a href="/login" class="font-semibold text-indigo-400 hover:text-indigo-300">Log In</a>
      </p>
    </div>
  </div>
</x-layout>
