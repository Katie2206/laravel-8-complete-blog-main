@extends('layouts.app')

@section('content')
<div class="bg-drop-9">
<div class="w-4/5 m-auto text-left font-mono text-gray-300">
    <div class="py-15">
        <h1 class="text-6xl">
            {{ $antagonist_post->title }}
        </h1>
    </div>
</div>
<div class="pl-36">
    <img src="{{ asset('images/' . $antagonist_post->image_path) }}" alt="">
</div>

<div class="w-4/5 m-auto pt-20">
    <span class="text-gray-400">
        By <span class="font-bold italic text-gray-600">{{ $antagonist_post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($antagonist_post->updated_at)) }}
    </span>

    <p class="text-xl text-gray-500 pt-8 pb-10 leading-8 font-mono font-light">
        {{ $antagonist_post->description }}
    </p>
</div>
</div>
@endsection 