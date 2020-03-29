@extends('_layouts.code-page')

@section('head-meta')
    <title>Breadcrumbs - TailwindCSS Layouts</title>
    <meta name="description" content="The following will be a selection of breadcrumb layouts which you can use your in your site to show users where they are in the site. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6 bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">Breadcrumbs in TailwindCSS</h1>
    <p class="mt-4 text-white">The following will be a selection of breadcrumb layouts which you can use your in your site to show users where they are in the site. </p>
</header>


@include('_partials.block-title',['title' => 'Block 1', 'view_source' => '1'])

<div class="code-block-1">
    
    <div class="container p-2 mx-auto">
        <p>
            <a href="#" class="underline hover:text-teal-700">Home</a>
            /
            <a href="#" class="underline hover:text-teal-700">Second Level</a>
            /
            <span class="font-semibold">Current Page</span>
        </p>
    </div>
    
</div>

@include('_partials.block-title',['title' => 'Block 2', 'view_source' => '2'])

<div class="code-block-2">
    
    <div class="p-2 bg-gray-200">
        <div class="container mx-auto">
            <p>
                <a href="#" class="underline hover:text-teal-700">Home</a>
                /
                <a href="#" class="underline hover:text-teal-700">Second Level</a>
                /
                <span class="font-semibold">Current Page</span>
            </p>
        </div>
    </div>

</div>

@include('_partials.block-title',['title' => 'Block 3', 'view_source' => '3'])

<div class="code-block-3">
    
    <div class="p-2 bg-black">
        <div class="container mx-auto">
            <p class="text-white">
                <a href="#" class="underline hover:text-red-700">Home</a>
                &gt;
                <a href="#" class="underline hover:text-red-700">Second Level</a>
                &gt;
                <span class="font-semibold">Current Page</span>
            </p>
        </div>
    </div>

</div>

@include('_partials.block-title',['title' => 'Block 4', 'view_source' => '4'])

<div class="code-block-4">
    
    <div class="container mx-auto">
        <p class="text-white">
            <a href="#" class="relative z-20 py-2 pl-4 pr-8 bg-blue-900 rounded-tr-full rounded-br-full hover:bg-green-900">Home</a>
            <a href="#" class="relative z-10 px-8 py-2 -ml-6 bg-blue-800 rounded-tr-full rounded-br-full hover:bg-green-800">Second Level</a>
            <span class="relative z-0 px-8 py-2 -ml-6 bg-blue-700 rounded-tr-full rounded-br-full">Current Page</span>
        </p>
    </div>

</div>


@include('_partials.block-title',['title' => 'Block 5', 'view_source' => '5'])

<div class="code-block-5">
    
    <div class="container p-2 mx-auto">
        <p>
            <a href="#" class="hover:text-teal-700">
                <svg aria-hidden="true" focusable="false" data-icon="home" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="inline-block w-5 h-5"><path fill="currentColor" d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z" class=""></path></svg>
            </a>
            /
            <a href="#" class="underline hover:text-teal-700">Second Level</a>
            /
            <span class="font-semibold">Current Page</span>
        </p>
    </div>
    
</div>


@include('_partials.footer')

@endsection
