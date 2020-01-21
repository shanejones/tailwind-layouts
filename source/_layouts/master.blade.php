<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        @yield('head-meta')
        <link rel="stylesheet" href="{{ mix('/css/main.css') }}">

        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <link rel="manifest" href="/site.webmanifest">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#0058ff">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async defer src="https://www.googletagmanager.com/gtag/js?id=UA-153176661-1"></script>
        <script async defer>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-153176661-1');
        </script>

    </head>
    <body class="font-sans antialiased">

        @yield('content')

        <script async defer src="{{ mix('/js/main.js') }}"></script>
    </body>
</html>
