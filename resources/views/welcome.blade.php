{{-- {{ !! !! }} - this is traditional php syntax - Will allow other methods to work, {{ $person }}! in this case protects the string --}}

<x-layout title="Home">
    <h1>{{ $title }}</h1>

    <p>Hello {{ $person }}!</p>

    @if (count($tasks))
        <a href="/tasks">You have {{ count($tasks) }} tasks!</a>
    @endif

</x-layout>