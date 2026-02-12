<x-layout title="tasks">
    @if (count($tasks))
        <h1>{{ count($tasks) }} tasks remaining!</h1>
    @endif

    <h2>Tasks:</h2>
    @forelse($tasks as $task)
        <li> {{ $task }}
    @empty
        <h2>There are no tasks remaining</h2>
    @endforelse
</x-layout>
