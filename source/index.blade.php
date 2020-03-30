@extends('_layouts.main')

@section('head-meta')
    <title>TailwindCSS Layouts and Templates</title>
    <meta name="description" content="A selection of layouts, blocks and full templates using Flat HTML, Tailwind CSS and VanillaJS. Built using TailwindCSS by Shane Jones.">
@endsection

@section('content')

<header class="p-6 mb-8 bg-tile md:p-16">
    <h1 class="text-3xl text-white font-semi">TailwindCSS Layouts and Templates</h1>
    <p class="mt-4 text-white">A selection of layouts, blocks and full templates using Flat HTML, Tailwind CSS and VanillaJS. These layouts will use the standard TailwindCSS styles from the latest version.
        <br><br>    
        This site is in active development. Want to add to it? Throw me a pull request over at <a href="" rel="nofollow">github</a>.
    </p>
</header>

<main class="container mx-auto p6 md:flex md:flex-wrap">

    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="">
                <h2 class="font-semibold">Site Headers</h2></a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="site-footers/">
                <h2 class="font-semibold">Site Footers</h2></a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="navigation/">
                <h2 class="font-semibold">Navigation</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="buttons/">
                <h2 class="font-semibold">Buttons</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="blog-archive-lists/">
                <h2 class="font-semibold">Blog Posts / Archive Lists</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="blog-post-content/">
                <h2 class="font-semibold">Blog Post Content</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="product-lists/">
                <h2 class="font-semibold">Product Lists</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="lists/">
                <h2 class="font-semibold">Lists</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="profile-author-bios/">
                <h2 class="font-semibold">Profile / Author Bios</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="comment-blocks/">
                <h2 class="font-semibold">Comment Blocks</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="accordions/">
                <h2 class="font-semibold">Accordions</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="breadcrumbs/">
                <h2 class="font-semibold">Breadcrumbs</h2>
            </a>
    </div>
    
    <div class="md:w-1/2 lg:w-1/3">
        <a class="block p-4 m-4 text-center bg-gray-200 rounded md:h-24 md:flex md:items-center md:justify-center md:text-xl hover:bg-blue-200" 
            href="forms/">
                <h2 class="font-semibold">Forms</h2>
            </a>
    </div>

</main>

@include('_partials.footer')

@endsection
