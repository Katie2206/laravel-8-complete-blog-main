@extends('layouts.app')

@section('content')
<div class="bg-drop-9">
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl font-mono text-gray-400 text-center">
           Add A Comment
        </h1>
    </div>
</div>
 
@if ($errors->any())
    <div class="w-4/5 m-auto">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<div class="w-4/5 m-auto pt-20">
    <form 
        action="/comment"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="overview"
            placeholder="Overview..."
            class="bg-transparent block border-b-2 w-full h-20 text-5xl outline-none font-mono text-gray-300">

        <textarea 
            name="comment"
            placeholder="Comment..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none font-mono text-gray-300"></textarea>

        <button    
            type="submit"
            class="uppercase bg-drop-6 mt-15 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl font-mono">
            Submit Comment
        </button>
        <div class="border-b-30"></div>
    </form>
</div>
</div>

@endsection