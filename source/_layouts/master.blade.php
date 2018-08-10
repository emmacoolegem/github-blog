<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        <title>{{ !empty($page->title) ? $page->title . ' | ' : '' }}Emma Coolegem</title>
    </head>
    <body>
        <div id="app">
            @include('_partials.header')
            @include('_partials.nav_overlay')

            <main class="container">
                @yield('body')
            </main>
        </div>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </body>
</html>
