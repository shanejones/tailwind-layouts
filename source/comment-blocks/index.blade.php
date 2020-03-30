@extends('_layouts.code-page')

@section('head-meta')
    <title>Comment Blocks - TailwindCSS Layouts</title>
    <meta name="description" content="The following will be a selection of comment blocks which you can use your to site to feature comments on blog posts or reviews on products. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6  bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">Comment Blocks in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a selection of comment blocks which you can use your to site to feature comments on blog posts or reviews on products. </p>
</header>


@include('_partials.block-section')

@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    
// Block here

</div>


@include('_partials.footer')

@endsection
