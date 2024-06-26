@extends('layout')
@section('content')

<div class="w-full"> 
    
                <h1 class="text-2xl font-bold text-center mb-5">{{ $attractie->title }}</h1>
            </div>
        <form class="flex flex-col" action="/attractiesAdmin/{{$attractie->id}}/update" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mt-6 w-1/3 p-6">
                <label for="title">Titel: </label>
                <input class="border border-black w-1/3" type="text" name="title" id="title" value="{{ $attractie->title }}">
            </div>
            <div class="mt-6 w-1/3 p-6">
                <label for="description">Beschrijving: </label>
                <textarea class="border border-black w-1/3" name="description" id="description">{{ $attractie->description}}</textarea>
            </div>
            <div class="mt-6 w-1/3 p-6">
                <label for="image">Afbeelding: </label>
                <input type="file" name="image" id="image" accept="image/*" >
            </div>
            <div class="mt-6 w-1/3 p-6">
                <label for="duration">Duur: </label>
                <input class="border border-black w-1/3" type="text" name="duration" id="duration" value="{{ $attractie->duration}}">
            </div>
            <div class="mt-6 w-1/3 p-6">
                <label for="min_height">Minimale lengte: </label>
                <input class="border border-black w-1/3" type="text" name="min_height" id="min_height" value="{{ $attractie->min_height}}">
            </div>
            <div class="mt-6 w-1/3 p-6">
                <label for="height">Lengte zonder toezicht: </label>
                <input class="border border-black w-1/3" type="text" name="height" id="height" value="{{ $attractie->height}}">
            </div>
            <div class="p-5">
                <input type="submit" value="Voeg accomodatie toe" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4 block text-center cursor-pointer">
            </div>
        </form>
@endsection