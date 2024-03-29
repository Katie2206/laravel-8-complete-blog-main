@extends('layouts.app')

@section('content')
    <div class="bg-drop-9">
        <div class="w-4/5 m-auto text-left font-mono text-gray-300">
            <div class="py-15">
                <h1 class="text-6xl">
                    {{ $post->title }}
                </h1>
            </div>
        </div>
        <div class="pl-36">
            <img src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div class="bg-drop-9 py-3">
            <div class="w-4/5 m-auto pt-20 pb-9">
                <span class="text-gray-400">
                    By <span class="font-bold italic text-gray-600">{{ $post->user->name }}</span>, Created on
                    {{ date('jS M Y', strtotime($post->updated_at)) }}
                </span>

                <p class="text-xl text-gray-500 pt-8 pb-10 leading-8 font-mono font-light">
                    {{ $post->description }}
                </p>
                <a href="/antagonists/"
                    class="bg-drop-6 uppercase bg-transparent text-gray-100 text-xs font-mono font-extrabold py-3 px-5 rounded-3xl">
                    Back
                </a>
            </div>
            {{-- <div class="bg-gray-300 rounded-3xl mx-96 border-gray-500 border-4 py-4">
                <div>
                    <h3 class="text-xl italic text-center font-mono sm:font-bold text-gray-700">
                        We'd Love To Hear Your Opinions On This Character! Leave A Comment Below!
                    </h3>
            
                    <div class="py-4 sm:text-s pt-4 text-gray-800">
                        <form class="pl-72 pb-4" action="{{ url('comments') }}" method="POST">
                            @csrf
                            <input type="hidden" name="post_slug" value={{ $post->slug }}>
                            <textarea name="comment_body" class="form-control" rows="3" required></textarea>
                        </form>
                        <div class="pl-80">
                        <button type="submit" class="uppercase bg-drop-1 text-center text-gray-900 text-s font-mono font-extrabold py-1 px-7 rounded-3xl border-2 border-brown1">Submit</button>
                        </div>
                    </div>
                    @forelse($post->comments as $comment)
                    <div>
                    <h3 class="text-left font-mono text-gray-300">
                        @if($comment->user)
                        {{ $post->user->name }}
                        @endif
                        <p class="text-left font-mono text-gray-300" ></p>Commentted on {{ date('jS M Y', strtotime($post->updated_at)) }}</p>
                    </h3>
                    <p class="text-left font-mono text-gray-300">
                        {!!  $comment->comment_body !!}
                    </p>
                    </div> --}}
                    {{-- @if(Auth::check() && Auth::id() == $comment->user_id)
                    <div>
                        <a href="" class="text-gray-500 italic hover:text-gray-600 pb-1 border-b-2">Edit</a>
                        <a href="" class="text-red-500 pr-3">Delete</a>
                    </div>
                    @endif --}}
                {{-- </div>
                    @empty
                    <h3 class="text-center bg-drop-6 text-gray-1000 py-2 px-4 font-mono font-bold text-xl uppercase mx-24 border-2 border-gray-900">No Comments Yet</h3>
                    @endforelse --}}
        </div>
    </div>
@endsection
