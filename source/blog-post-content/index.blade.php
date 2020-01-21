@extends('_layouts.master')

@section('head-meta')
    <title>Blog Post Content - TailwindCSS Layouts</title>
    <meta name="description" content="A selection of blog post content layouts which you can use to display long content blocks with images and other features. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6  bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">Blog Post Content in TailwindCSS</h1>
    <p class="mt-4 text-white">A selection of blog post content layouts which you can use to display long content blocks with images and other features.</p>
</header>


@include('_partials.block-section')

@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    


</div>


@include('_partials.footer')

@endsection
