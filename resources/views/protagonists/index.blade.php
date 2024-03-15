@extends('layouts.app')

@section('content')
    <div class="bg-drop-9">
        <div class="w-4/5 m-auto text-center">
            <div class="py-15 border-b border-gray-200">
                <h1 class="text-6xl text-gray-300 font-mono uppercase">
                    Protagonists
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
                <a href="/protagonists/create"
                    class="bg-drop-6 uppercase bg-transparent text-gray-100 text-xs font-mono font-extrabold py-3 px-5 rounded-3xl">
                    Add Protagonists Blog
                </a>
            </div>
        @endif
    </div>

    @foreach ($posts as $post)
        <div class="bg-drop-9">
            <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-transparent">
                <div>
                    <img src="{{ asset('images/' . $post->image_path) }}" alt="">
                </div>
                <div>
                    <h2 class="text-gray-500 font-bold font-mono text-4xl pb-4">
                        {{ $post->title }}
                    </h2>

                    <span class="text-gray-500">
                        By <span class="font-bold italic text-gray-600">{{ $post->user->name }}</span>, Created on
                        {{ date('jS M Y', strtotime($post->updated_at)) }}
                    </span>

                    <p class="text-xl text-gray-400 pt-8 pb-10 leading-8 font-mono font-light">
                        {{ $post->description }}
                    </p>
                    <div class="flexbutton">
                        <div>
                            <a href="/protagonists/{{ $post->slug }}"
                                class="uppercase bg-drop-1 text-gray-100 text-lg font-mono font-extrabold py-4 px-8 rounded-3xl">
                                Keep Reading
                            </a>
                        </div>
                    </div>
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <span class="float-right">
                            <a href="/protagonists/{{ $post->slug }}/edit"
                                class="text-gray-500 italic hover:text-gray-600 pb-1 border-b-2">
                                Edit
                            </a>
                        </span>

                        <span class="float-right">
                            <form action="/protagonists/{{ $post->slug }}" method="POST">
                                @csrf
                                @method('delete')

                                <button class="text-red-500 pr-3" type="submit">
                                    Delete
                                </button>

                            </form>
                        </span>
                        {{-- <div class="py-12">
                    <form id="like" method="POST">
                        <select name="Likeability">
                            <option value="1">1</option>
                            <option value="1">2</option>
                            <option value="1">3</option>
                            <option value="1">4</option>
                            <option value="1">5</option>
                        </select>
                        <input type="submit" name="Submit" value="Submit">
                    </form>
            // if(isset($_POST[Likeability])){
            //     echo "Likeability: ".htmlspecialchars($_POST['Likeability']);
            // } --}}
                </div>
    @endif
    </div>
    </div>
    </div>
    @endforeach
@endsection
