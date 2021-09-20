@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl ">
                This was a <span class="text-pink-500 ">fun</span>
            </h2>
            <h3 class="text-2xl italic sm:text-4xl">experiment</h3>
        </div>
        <div class="absolute bottom-0 left-0 right-0">
            <p class="text-center text-white">Scroll for more</p>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
              So this was a little side project to introduce myself into using Laravel as a web dev framework.. so far I haven't gotten too far into the mechanics of it. I'm still working on styling so I think all the page linking and programming logic comes later.
            </p>
            <a href="{{route('about')}}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500  transition">Learn More</a>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Things I've learnt</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full">
                        <h3 class="text-xl font-bold mb-3">Game Dev</h3>
                        <p class="text-gray-200 mb-3">
                            This part was about something to do with game dev in the tutorial not quite sure what it was really.
                        </p>
                        <a href="{{url('https://youtube.com/MuddyWolf')}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500  transition">A game development channel here</a>
                        <h3 class="text-xl font-bold mb-3">Web Dev</h3>
                        <p class="text-gray-200 mb-3">
                            The link below takes you to a bunch of tutorials for coding, even I haven't visited it.
                        </p>
                        <a href="{{url('https://youtube.com/TylerPotts')}" class="bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500  transition">A coding channel here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection