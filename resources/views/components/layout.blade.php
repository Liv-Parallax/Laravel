<!doctype html>
<html lang-="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>{{$title}}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-gray-700 p-6 max-w-xl mx-auto">
        <nav>
            <a href="/">Home</a>
            <a href="/about">About us</a>
            <a href="/contact">Contact us</a>
            <a href="/tasks">Tasks remaining!</a>
            <a href="/ideas">Enter an idea</a>
        </nav>
    </body>

    <main>
        {{$slot}}
    </main>
</html>