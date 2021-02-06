@extends('layouts.app')

@section('content')

    <!-- component -->


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
                        <p class="text-sm text-center px-3 bg-green-200 text-green-800 rounded-full" style=" width: 6rem">
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
