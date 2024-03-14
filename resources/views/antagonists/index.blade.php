@extends('layouts.app')

@section('content')
<div class="bg-drop-9">
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl text-gray-300 font-mono uppercase">
            Characters
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-1/6 mb-4 text-center text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto border-b-30">
        <a 
            href="/antagonists/create"
            class="bg-drop-6 uppercase bg-transparent text-gray-100 text-xs font-mono font-extrabold py-3 px-5 rounded-3xl">
            Add Character Blog
        </a>
    </div>
@endif
</div>

@foreach ($antagonist_posts as $antagonist_post)
<div class="bg-drop-9">
    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-transparent">
        <div>
            <img src="{{ asset('images/' . $antagonist_post->image_path) }}" alt="">
        </div>
        <div>
            <h2 class="text-gray-500 font-bold font-mono text-4xl pb-4">
                {{ $antagonist_post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-600">{{ $antagonist_post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($antagonist_post->updated_at)) }}
            </span>

            <p class="text-xl text-gray-400 pt-8 pb-10 leading-8 font-mono font-light">
                {{ $antagonist_post->description }}
            </p>

            <a href="/antagonists/{{ $antagonist_post->slug }}" class="uppercase bg-drop-1 text-gray-100 text-lg font-mono font-extrabold py-4 px-8 rounded-3xl">
                Keep Reading
            </a>

            @if (isset(Auth::user()->id) && Auth::user()->id == $antagonist_post->user_id)
                <span class="float-right">
                    <a 
                        href="/antagonists/{{ $antagonist_post->slug }}/edit"
                        class="text-gray-500 italic hover:text-gray-600 pb-1 border-b-2">
                        Edit
                    </a>
                </span>

                <span class="float-right">
                     <form 
                        action="/antagonists/{{ $antagonist_post->slug }}"
                        method="POST">
                        @csrf
                        @method('delete')

                        <button
                            class="text-red-500 pr-3"
                            type="submit">
                            Delete
                        </button>

                    </form>
                </span>
            @endif
        </div>
    </div>  
</div>  
@endforeach

@endsection