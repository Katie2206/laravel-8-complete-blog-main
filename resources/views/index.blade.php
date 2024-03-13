@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="text-gray-1000 pt-8">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <a 
                    href="/blog"
                    class="text-center bg-drop-6 text-gray-1000 py-2 px-4 font-mono font-bold text-xl uppercase rounded-2xl">
                    Learn More About The Resident Evil Village Characters
                </a>
            </div>
        </div>
    </div>
    <div class="sm:grid grid-cols-2 gap-20 py-15 bg-drop-8">
        <div class="border-l-8 border-gray">
            <img src="https://dailyplanetdc.com/wp-content/uploads/2021/05/resident-evil-village-4k-wallpaper-3840x2160-uhdpaper.com-60.1_a.jpg" width="700" alt="">
        </div>

        <div class="text-center m-auto sm:m-auto w-4/5 block">
            <h2 class="text-3xl font-mono font-bold text-gray-900">
                Interested In Learning More About The Characters In The Newest Installment In The Resident Evil Franchise?
            </h2>
            
            <p class="py-8 text-gray-700 text-s">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus.
            </p>

            <p class="text-gray-700 text-s pb-9">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sapiente magnam vero nostrum! Perferendis eos molestias porro vero. Vel alias.
            </p>

        </div>
    </div>

    <div class="background-image1">
        <div class="bg-transparent">
        
        <div class="sm:grid1 pt-15">
            <div class=" pb-4">
                <h2 class="text-2xl text-center font-mono p-2 text-l bg-drop-2 rounded-xl"> 
                    Protagonists
                </h2>
            </div>    
            <a 
            href="/blog"
            class="uppercase bg-drop-1 text-center text-gray-900 text-s font-mono font-extrabold py-3 px-8 rounded-3xl">
                Take A Look
            </a>
        </div>
            <div class="sm:grid1 pt-24">
                <div class=" pb-4">
                <h2 class="text-2xl text-center font-mono p-2 text-l bg-drop-3 rounded-xl"> 
                    Antagonists
                 </h2>
                </div> 
            <a 
            href="/blog"
            class="uppercase bg-drop-1 text-center text-gray-900 text-s font-mono font-extrabold py-3 px-8 rounded-3xl">
                Take A Look
            </a>
        </div>
    </div>
    </div>

    <div class="bg-drop-4">
    <div class="sm:grid grid-cols-2 w-4/5 m-auto py-15 bg-drop-4">
        <div class="flex bg-drop-5 text-gray-100">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://wallpapercave.com/wp/wp2074015.jpg" alt="">
        </div>
    </div>
</div>
@endsection