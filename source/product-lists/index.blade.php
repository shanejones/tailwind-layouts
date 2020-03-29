@extends('_layouts.code-page')

@section('head-meta')
    <title>Product List Layouts - TailwindCSS Layouts</title>
    <meta name="description" content="A selection of product list layouts which you can use your to display list of products on an ecommerce store. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6  bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">Product List Layouts built in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a selection of product list layouts which you can use your to display list of products on an ecommerce store. </p>
</header>


@include('_partials.block-section')

@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    
// Block here

</div>


@include('_partials.footer')

@endsection
