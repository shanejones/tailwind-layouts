@extends('_layouts.master')

@section('head-meta')
    <title>Blog Post Archive Layouts - TailwindCSS Layouts</title>
    <meta name="description" content="A selection of blog index layouts which you can use your archive or index pages pages. These can also be used in featured block areas. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6  bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">Blog Post Archive layouts built in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a selection of blog index layouts which you can use your archive or index pages or even anywhere you might want to present a list of items in a more visual way. These can also be used in featured block areas or anywhere where you need to show people a list of pages to link people to.</p>
</header>


@include('_partials.block-section')

@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    
    // Block here

</div>


@include('_partials.footer')

@endsection
