<x-layout title="Show record">

    <h1>Ideas</h1>

    <div>
        {{ $idea->description }}
    </div>

    <div class="mt-6 flex items-center justify-end gap-x-6">
        <a href="/ideas" class="text-sm/6 font-semibold text-white">Back</a>
        <a href="/ideas/{{$idea->id}}/edit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Edit</a>
    </div>

</x-layout>