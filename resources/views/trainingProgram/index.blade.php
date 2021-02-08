@extends('layouts.app')

@section('content')

    <!-- component -->
    @if(Session::get('success'))
        <div class="flex items-center justify-between shadow-md rounded-full bg-green-500 text-white py-2 px-4 my-2">
            <!-- Icon -->
            <svg class="fill-current flex-shrink-0 text-green-700 w-4 md:w-6 lg:w-4 h-4 md:h-6 lg:h-4 mr-2"
                 xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path
                    d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"/>
            </svg>
            <p class="flex-grow text-sm md:text-xs xl:text-md">{{Session::get('success')}}</p>
            <a onclick="this.parentElement.remove()" href="#" class="text-sm ml-4 md:text-xs xl:text-md">
                x
            </a>
        </div>
    @endif
    <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
    @foreach($formations as $formation)
        <!--Card 1-->
            <form method="POST" action="{{route('formationsAvailables.store')}}">
                @csrf
                <div class="rounded overflow-hidden shadow-lg">
                    <label>
                        <input hidden name="idFormation" value="{{$formation->id}}">
                    </label>
                    <a href="{{ $formation->url }}">
                        <img class="w-full" src="https://picsum.photos/600/400/?random" alt="Mountain">
                    </a>
                    <div class="px-6 py-4">
                        <a class="font-bold no-underline hover:underline text-black"
                           href="{{ route('formationsAvailables.show', $formation) }}">{{$formation->title}}</a>
                        <p class="text-gray-700 text-base">
                            {{$formation->description}}
                        </p>
                        <p class="text-sm text-center px-3 bg-green-200 text-green-800 rounded-full"
                           style=" width: 6rem">
                            {{$formation->statut->libelle}}
                        </p>
                    </div>
                    <div class="px-6 pt-4 pb-2">
                        <p>utilisateur</p>
                        <select name="user">
                            <option value=""></option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <button type="submit"
                                class="p-3 bg-blue-900 hover:bg-blue-700 text-center text-white uppercase rounded-lg ">
                            Inscrire
                        </button>
                    </div>
                </div>
            </form>
        @endforeach
    </div>


@endsection
