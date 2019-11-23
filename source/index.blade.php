@extends('_layouts.master')

@section('head-meta')
    <title>TailwindsCSS Layouts and Templates</title>
    <meta name="description" content="A selection of layouts, blocks and full templates using Flat HTML, Tailwind CSS and VanillaJS. Built by Shane Jones.">
@endsection

@section('content')

<main class="p-16">
    <h1 class="text-3xl font-light text-black">TailwindsCSS Layouts and Templates</h1>
    <p class="mt-4 text-gray-600">A selection of layouts, blocks and full templates using Flat HTML, Tailwind CSS and VanillaJS. Built by Shane Jones.</p>
</main>

@include('_partials.footer')

@endsection
