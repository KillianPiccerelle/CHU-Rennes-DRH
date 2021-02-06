@extends('layouts.app')

@section('content')

    <!-- component -->

    <div class="container my-12 mx-auto px-4 md:px-12">
        <div class="flex flex-wrap -mx-1 lg:-mx-4">


            <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
            @if($formations != null)
                @foreach($formations as $formation)
                    <!--Card 1-->
                        <div class="rounded overflow-hidden shadow-lg">
                            <a href="">
                                <img class="w-full" src="https://picsum.photos/600/400/?random" alt="Mountain">
                            </a>
                            <div class="px-6 py-4">
                                <a class="font-bold no-underline hover:underline text-black"
                                   href="{{ route('formationsAvailables.show', $formation) }}">{{$formation->title}}</a>
                                <p class="text-gray-700 text-base">
                                    {{$formation->description}}
                                </p>
                            </div>
                            <a class="bg-blue-500 rounded-full font-bold text-white px-4 py-3 transition duration-300 ease-in-out hover:bg-blue-600 mr-6 ml-5" href="{{$formation->url}}">Vers la formation</a>
                            <div class="px-6 pt-4 pb-2">
                            </div>
                        </div>
                    @endforeach
                @else
                <p>Vous n'êtes inscrit à aucune formation</p>
                @endif

            </div>


        </div>
    </div>
@endsection
