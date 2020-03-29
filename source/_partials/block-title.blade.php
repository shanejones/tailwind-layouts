<main class="p-6 my-12 bg-blue-900 md:px-16 md:py:8">
    <div class="flex items-center justify-between">
        <h2 class="inline-block text-2xl font-light text-white">{{ $title }}</h2>
        <p class="inline-block text-right text-white"><a class="underline view-source" href="#" data-block="{{ $view_source }}">View Source</a></p>
    </div>
    <pre class="p-4 mt-2 text-xs bg-gray-200 rounded"><code class="language-html hidden block-{{ $view_source }} "></code></pre>
</main>