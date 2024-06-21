@props(['team'])

<div class="text-center">
            <img src="{{ $team['picture'] }}" class="w-32 rounded-full"/>

            <p class="font-semibold text-l">{{ $team['name']}}</p>
            <p>{{ $team['job']}}</p>
        </div>