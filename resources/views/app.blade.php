<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel Livewire Poll</title>

  <script src="https://cdn.tailwindcss.com"></script>

  {{-- blade-formatter-disable --}}
  <style type="text/tailwindcss">
    .btn {
      @apply rounded-md px-2 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
    }

    label {
      @apply block uppercase text-slate-700 mb-2
    }

    input,
    textarea {
      @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
    }

    .error {
      @apply text-red-500 text-sm
    }
  </style>
  {{-- blade-formatter-enable --}}

    {{-- @livewireStyles //////this does not work in http://127.0.0.1:8000 page F12 network -all
    need to use the correct HTML syntax! --}}
    <livewire:styles />
</head>

<body class="container mx-auto mt-10 mb-10 max-w-lg">
  {{-- @livewireScripts //////this does not work in http://127.0.0.1:8000 page F12 network -all
  need to use the correct HTML syntax! it would turn some js scripts --}}
  <livewire:scripts />

    {{-- @livewire('create-poll') --}}

    <div>
        <h2 class="mb-4 mt-4 text-2xl">Create Poll</h2>
        @livewire('create-poll')
</div>
<div>
    <h2 class="mb-4 mt-4 text-2xl">Available Polls</h2>
    @livewire('create-poll')
</div>
</body>


</html>
