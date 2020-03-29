@extends('_layouts.code-page')

@section('head-meta')
    <title>Lists - TailwindCSS Layouts</title>
    <meta name="description" content="The following will be a selection of geniric list and alternaive ways to formal lists of date. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6  bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">Lists in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a selection of geniric list and alternaive ways to formal lists of date. </p>
</header>


@include('_partials.block-section')

@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    
// Block here

</div>


@include('_partials.footer')

@endsection
