@props(['course'])
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<article
    class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
    <div class="py-6 px-5 lg:flex">
        <div class="flex-1 lg:mr-8">
            <img src="{{ asset('images') . '/' . $course->picture }}" alt="Blog Post illustration" class="rounded-xl">
        </div>

        <div class="flex-1 flex flex-col justify-between">
            <header class="mt-8 lg:mt-0">
                <div class="space-x-2">
{{--                    <a href="/?category={{$post->category->slug}}" class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"--}}
{{--                       style="font-size: 10px">Category: {{ $post->category->name}}--}}
{{--                    </a>--}}
                    <p class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
                       style="font-size: 10px">{{ $course->services->name}}</p>

                </div>

                <div class="mt-4">
                    <h1 class="text-3xl">
{{--                        <a href="/posts/{{ $post->slug }}">--}}
{{--                            {{ $post->title }}--}}
{{--                        </a>--}}
                        {{ $course->title}}

                    </h1>

                    <span class="mt-2 block text-gray-400 text-xs">
                                        Published <time>{{$course->created_at->diffForHumans()}}</time>
                                    </span>
                </div>
            </header>

            <div class="text-sm mt-2">
                <p>
                    {{$course->description}}
                </p>

{{--                <p class="mt-4">--}}
{{--                    {{$post->excerpt}}--}}
{{--                </p>--}}
            </div>

            <footer class="flex justify-between items-center mt-8">
{{--                <div class="flex items-center text-sm">--}}
{{--                    <img src="/images/lary-avatar.svg" alt="Lary avatar">--}}
{{--                    <div class="ml-3">--}}

{{--                            <h5 class="font-bold"> <a href="/?authors={{$post->author->name}}">{{$post->author->name}}</a> </h5>--}}
{{--                            <h6>Mascot at Laracasts</h6>--}}

{{--                    </div>--}}
{{--                </div>--}}

                <div class="hidden lg:block">
                    <a href="{{--/posts/{{$post->slug}}--}}"
                       class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                    >Register here</a>
                </div>
                <div>
                    <p>Price: {{$course->price}}$</p>
                </div>
            </footer>
        </div>
    </div>
</article>
