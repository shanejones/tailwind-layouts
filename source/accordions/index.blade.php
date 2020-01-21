@extends('_layouts.master')

@section('head-meta')
    <title>Accordions - TailwindCSS Layouts</title>
    <meta name="description" content="The following will be a selection of accordion layouts along with any Vanilla JS that will be needed. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6  bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">Accordions in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a selection of accordion layouts along with any Vanilla JS that will be needed. </p>
</header>


@include('_partials.block-section')


@include('_partials.footer')

@endsection
