@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="text-gray-1000 pt-8">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <a 
                    href="/protagonists"
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
            <h2 class="text-3xl font-mono font-bold text-gray-1000">
                Resident Evil Village
            </h2>
            
            <p class="py-8 font-mono text-gray-1000 text-2xl">
                "Years after the tragic events of Resident Evil 7 biohazard, Ethan Winters has started over with his wife Mia, finally living in peace and putting the past behind them. However, Chris Redfield, the legendary hero from previous Resident Evil games, suddenly disrupts their life, throwing a devastated Ethan into a new and twisted nightmare in search of answers."
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
            href="/protagonists"
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
            href="/"
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
                        Want to learn more about the Resident Evil franchise? Why not check out the previous game?
                    </span>

                    <h3 class="text-xl font-bold py-8">
                        Resident Evil 7: Biohazard
                    </h3>

                    <h3 class="text-xl font-mono">
                        Resident Evil 7: Biohazard is set in mid-2017 somewhere in the southern United States, where there have been reports of "ghosts" sighted around the bayou of the town, Dulvey. The game proper takes place after the events of Beginning Hour, which ended with the murder of a three-man TV crew by the infected Baker family members Jack and Mia. It features a new protagonist named Ethan Winters, a civilian who offers fewer combat skills than most previous Resident Evil protagonists. Ethan is searching for his missing wife, Mia, which leads him to a derelict plantation mansion, home of the Baker family.
                    </h3>
                </div>
            </div>
            <div>
                <img src="https://wallpapercave.com/wp/wp2074015.jpg" alt="">
            </div>
        </div>
    </div>
@endsection