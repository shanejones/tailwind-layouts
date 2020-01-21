@extends('_layouts.master')

@section('head-meta')
    <title>Breadcrumbs - TailwindCSS Layouts</title>
    <meta name="description" content="The following will be a selection of breadcrumb layouts which you can use your in your site to show users where they are in the site. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6  bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">Breadcrumbs in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a selection of breadcrumb layouts which you can use your in your site to show users where they are in the site. </p>
</header>


@include('_partials.block-section')

@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    
// Block here

</div>


@include('_partials.footer')

@endsection
