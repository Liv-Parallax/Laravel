<x-layout title="Login page">

    @if ($ideas->count())
        <div>
            <h2>Your ideas</h2>
         
            <ul>
                @foreach($ideas as $idea)
                    <a href="/ideas/{{$idea->id}}">{{ $idea->description }}</a>
                    <br />
                @endforeach
            </ul>
        </div>
    @else
        <p>No ideas yet... <a href="/ideas/create">Create a new one HERE</a></p>
    @endif
</x-layout>