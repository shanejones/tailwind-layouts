@extends('_layouts.master')

@section('head-meta')
    <title>Site Headers - TailwindCSS Layouts</title>
    <meta name="description" content="The following will be a selection of complete site and page headers. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6 bg-tile md:p-16"></header>
    <h1 class="text-3xl text-white font-semi">Site Headers in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a selection of complete site and page headers. </p>
</header>


@include('_partials.block-section')

@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    
// Block here

</div>


@include('_partials.footer')

@endsection
