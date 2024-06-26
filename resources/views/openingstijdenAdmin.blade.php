@extends('layout')
@section('content')
<div class="w-full"> 
                <h1 class="text-2xl font-bold text-center mb-5">{{ $openingstijd->dag }}</h1>
            </div>
        <form class="flex flex-col" action="/openingstijden/{{$openingstijd->id}}/edit" method="POST">
        @csrf
            <div class="mt-6 w-1/3 p-6">
                <label for="opening">Openingstijd: </label>
                <input class="border border-black w-1/3" type="text" name="opening" id="opening" value="{{ $openingstijd->opening}}">
            </div>
            <div class="mt-6 w-1/3 p-6">
                <label for="sluiting">Sluitingstijd: </label>
                <input class="border border-black w-1/3" type="text" name="sluiting" id="sluiting" value="{{ $openingstijd->sluiting}}">
            </div>
            <div class="mt-6 w-1/3 p-6">
                <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4 block text-center">Opslaan</button>
            </div>
        </form>
@endsection