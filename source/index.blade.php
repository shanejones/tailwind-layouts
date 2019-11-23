@extends('_layouts.master')

@section('head-meta')
    <title>TailwindsCSS Layouts and Templates</title>
    <meta name="description" content="A selection of layouts, blocks and full templates using Flat HTML, Tailwind CSS and VanillaJS. Built by Shane Jones."">
@endsection

@section('content')

<main class="p-16 main">
    <h1 class="text-3xl font-light text-black">TailwindsCSS Layouts and Templates</h1>
    <p class="mt-4 text-gray-600">A selection of layouts, blocks and full templates using Flat HTML, Tailwind CSS and VanillaJS. Built by Shane Jones.</p>
</main>

<footer class="fixed bottom-0 left-0 w-screen p-4 bg-blue-400 text-center">
    <p class="font-bold">Follow <a href="http://twitter.com/shanejones" rel="nofollow" class="border-b-2 border-black hover:text-gray-300 hover:border-gray-300">Shane Jones on Twitter</a> for updated on more layouts.
    <a href="http://twitter.com/shanejones" rel="nofollow" class="ml-6 px-4 py-2 font-bold text-gray-600 bg-white rounded hover:bg-gray-200"><svg class="inline fill-current w-4 h-4 mr-2 mb-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Twitter</title><path d="M6.29 18.25c7.55 0 11.67-6.25 11.67-11.67v-.53c.8-.59 1.49-1.3 2.04-2.13-.75.33-1.54.55-2.36.65a4.12 4.12 0 0 0 1.8-2.27c-.8.48-1.68.81-2.6 1a4.1 4.1 0 0 0-7 3.74 11.65 11.65 0 0 1-8.45-4.3 4.1 4.1 0 0 0 1.27 5.49C2.01 8.2 1.37 8.03.8 7.7v.05a4.1 4.1 0 0 0 3.3 4.03 4.1 4.1 0 0 1-1.86.07 4.1 4.1 0 0 0 3.83 2.85A8.23 8.23 0 0 1 0 16.4a11.62 11.62 0 0 0 6.29 1.84"></path></svg>Follow</a></p>
</footer>

@endsection
