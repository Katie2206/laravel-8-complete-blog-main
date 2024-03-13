@extends('layouts.app')

@section('content')
<div class="bg-drop-9">
<div class="w-4/5 m-auto text-left">
    <div class="py-15">
        <h1 class="text-6xl font-mono text-gray-400 text-center">
           Add A Character
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
        action="/blog"
        method="POST"
        enctype="multipart/form-data">
        @csrf

        <input 
            type="text"
            name="title"
            placeholder="Name..."
            class="bg-transparent block border-b-2 w-full h-20 text-5xl outline-none font-mono text-gray-300">

        <textarea 
            name="description"
            placeholder="Character Information..."
            class="py-20 bg-transparent block border-b-2 w-full h-60 text-xl outline-none font-mono text-gray-300"></textarea>

        <div class="bg-grey-lighter pt-15">
            <label class="rounded-2xl bg-drop-6 w-44 items-center px-2 py-3 bg-white-rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer">
                <span class="p-4 mt-2 text-base leading-normal font-mono">
                    Select a file
                </span>
                <input 
                    type="file"
                    name="image"
                    class="hidden">
            </label>
        </div>

        <button    
            type="submit"
            class="uppercase bg-drop-6 mt-15 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl font-mono">
            Submit Post
        </button>
        <div class="border-b-30"></div>
    </form>
</div>
</div>

@endsection