@extends('layouts.default')

@section('page-content')
    <section class="py-20 min-h-screen flex items-center">
        <div class="max-w-screen-lg mx-auto">
            <h2 class="text-6xl text-center mb-6">About</h2>
            <h3 class="text-4xl text-center text-gray-200 mb-6">A bit about the author</h3>
            <p class="mb-3 text-center">
                I'm Solo. I am an aspiring web developer.
            </p>
            <div class="text-center mt-5">
                <a href="{{route('home')}}" class="inline-lock bg-red-700 hover:bg-pink-500 text-center py-2 px-4 rounded hover:bg-purple-500 transition ease-linear duration-300">Back Home..</a>
            </div>
        </div>
    </section>