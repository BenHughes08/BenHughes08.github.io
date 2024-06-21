@props([
    'article',
])


<div class="relative">
    <img src="{{ $article['image'] }}" class="rounded-lg w-full h-full"/>
    <a href="/blog/{{ $article['id']}}" class="hover:bg-slate-900/[.2] bg-slate-900/[.5] w-full h-full absolute top-0 rounded-lg">
        <div class="absolute bottom-5 left-8">
            <h5 class="left-5 text-white text-l font-medium">{{ $article['title'] }}</h5>
            <p class=" left-5 text-white z-40">
                <small>Published
                    <u>{{ $article['date'] }}</u>
                    by {{ $article['author'] }}
                </small>
            </p>
        </div>
    </a>
</div>

