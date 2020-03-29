@extends('_layouts.code-page')

@section('head-meta')
    <title>Navigation - TailwindCSS Layouts</title>
    <meta name="description" content="The following will be a variety of site navigation and menus, including the mobile versions. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6  bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">Navigation in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a variety of site navigation and menus, including the mobile versions. All Vanilla JS will also be included </p>
</header>


@include('_partials.block-section')

@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    
// Block here

</div>


@include('_partials.footer')

@endsection
