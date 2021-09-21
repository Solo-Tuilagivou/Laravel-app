@extends('layouts.default')

@section('page-content')
    <section class="relative min-h-screen flex items-center">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl sm:text-8xl ">
               Just a <span class="text-red-700 hover:text-pink-600 transition">fun</span> little
            </h2>
            <h3 class="text-2xl italic sm:text-4xl">experiment</h3>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-20">
            <p class="text-center ">Scroll for more</p>
        </div>
    </section>

    <section class="">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Introduction</h3>
            <h4 class="text-xl mb-3 text-gray-200">Short Description</h4>
            <p class="mb-6">
              So this was a little side project to introduce myself into using Laravel as a web dev framework.. so far I haven't gotten too far into the mechanics of it. I'm still working on styling so I think all the page linking and programming logic comes later.
            </p>
            <a href="{{route('about')}}" class="bg-red-700 hover:bg-pink-500 text-center py-2 px-4 rounded   transition">Learn More</a>
        </div>
    </section>

    <section class=" py-20 ">
        <div class="max-w-screen-md mx-auto">
            <h3 class="text-4xl font-bold mb-6">Things I've learnt</h3>
            <div class="flex flex-wrap -mx-2">
                <div class="w-full sm:w-1/2 mb-3 px-2">
                    <div class="p-4 bg-gray-500 h-full">
                        <h3 class="text-xl font-bold mb-3">Game Dev</h3>
                        <p class="text-gray-200 mb-3">
                            This channel is where I learnt how to make a website using Laravel
                        </p>
                        <a href="{{'https://www.youtube.com/c/TylerPotts'}}" class="bg-red-700 hover:bg-pink-500 text-center py-2 px-4 rounded  transition">Tyler Potts</a>    
                    </div>
                </div>
                <div class="w-full sm:w-1/2 mb-3 px-2 ">
                    <div class="p-4 bg-gray-500 h-full">
                        <h3 class="text-xl font-bold mb-3">Web Dev</h3>
                                <p class="text-gray-200 mb-3">
                                    This takes you to a youtuber who I refer to tutorials on subjects like React and Tailwind
                                </p>
                                <a href="{{'https://www.youtube.com/c/TheNetNinja'}}" class="bg-red-700 hover:bg-pink-500 text-center py-2 px-4 rounded   transition">The Net Ninja</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection