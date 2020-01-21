<main class="p-6 my-12 bg-black md:px-16 md:py:8">
    <h2 class="text-2xl font-light text-white">{{ $title }}</h2>
    <p class="text-white"><a class="underline view-source" href="#" data-block="{{ $view_source }}">View Source</a></p>
    <pre><code class="hidden block-{{ $view_source }} bg-gray-200 rounded p-4 mt-2 text-xs"></code></pre>
</main>