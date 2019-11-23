@extends('_layouts.master')

@section('head-meta')
    <title>CNN Style Layouts</title>
    <meta name="description" content="A selection of layouts inspired by the CNN website. These are built in Flat HTML, Tailwind CSS and VanillaJS. ">
@endsection

@section('content')

<main class="p-16">
    <h1 class="text-3xl font-light text-black">CNN Style Templates</h1>
    <p>Built in Flat HTML, TailwindCSS and VanillaJS where needed
</main>

<div class="px-16 flex">

    <div class="w-1/5">
        <a href="homepage" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded">CNN Style Homepage</a>
        
    </div>

</div>

@include('_partials.footer')

@endsection
