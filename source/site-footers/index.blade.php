@extends('_layouts.master')

@section('head-meta')
    <title>Site Footers - TailwindCSS Layouts</title>
    <meta name="description" content="The following will be a selection of complete site footers. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6 md:p-16">
    <h1 class="text-3xl text-white font-semi">Site Footers in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a selection of complete site footers. </p>
</header>


@include('_partials.block-section')

@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    
// Block here

</div>


@include('_partials.footer')

@endsection
