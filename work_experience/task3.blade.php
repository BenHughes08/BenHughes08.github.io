<link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"
        rel="stylesheet"/>
<link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/tw-elements.min.css"/>
<script src="https://cdn.tailwindcss.com/3.3.0"></script>
<script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            fontFamily: {
                sans: ["Roboto", "sans-serif"],
                body: ["Roboto", "sans-serif"],
                mono: ["ui-monospace", "monospace"],
            },
        },
        corePlugins: {
            preflight: false,
        },
    };
</script>


<!-- Section: Design Block -->
<section>
    <h2 class="text-3xl font-bold text-center py-8">Latest articles</h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-2 place-items-center">
        
        @foreach ($articles as $article)
            <div>
                <x-article :article="$article"/> 
            </div>
        @endforeach
</section>

<section>
    <h2 class="text-2xl font-black text-center pb-5 pt-12">
        Meet the <span class="underline decoration-sky-600 text-sky-600">team</span> 
    </h2>

    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 2xl:grid-cols-5 gap-5 place-items-center px-2">

        @foreach ($teams as $team)
            <div>
                <x-staff :team="$team"/>
            </div>
        @endforeach
        
</section>