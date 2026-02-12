<x-layout title="Login page">
    <form method="POST" action="/ideas">
        @csrf

        <div class="col-span-full">
          <label for="description" class="block text-sm/6 font-medium text-white">Ideas</label>
          <div class="mt-2">
            <textarea id="description" name="description" rows="3" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6"></textarea>


            @error('description')
                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
            @enderror
        
        </div>
          <p class="mt-3 text-sm/6 text-gray-400">Write an idea.</p>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-white">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
        </div>

    </form>

    @if ($ideas->count())
        <div>
            <h1 class="text-xl font-semibold underline underline-offset-4 decoration-white-400 pb-2">Your ideas</h1>

         
            <ul class="mt-3 space-y-1">
                @foreach($ideas as $idea)
                    <li>
                        <a href="/ideas/{{ $idea->id }}" class="text-indigo-300 hover:underline">
                            {{ $idea->description }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</x-layout>