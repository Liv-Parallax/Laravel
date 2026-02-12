<!doctype html>
<html lang-="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, inital-scale=1">
        <title>{{$title}}</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body class="bg-gray-700 p-6 max-w-xl mx-auto text-white">
        <nav class="mb-6 border-b border-white/10 pb-3">
            <ul class="flex gap-4 list-none m-0 p-0">
                <li>
                    <a href="/" class="hover:text-indigo-300">Home</a>
                </li>
                <li>
                    <a href="/about" class="hover:text-indigo-300">About us</a>
                </li>
                <li>
                    <a href="/contact" class="hover:text-indigo-300">Contact us</a>
                </li>
                <li>
                    <a href="/ideas" class="hover:text-indigo-300">Enter a NEW idea</a>
                </li>
            </ul>
        </nav>

        <main>
            {{$slot}}
        </main>
    </body>
</html>