@extends('layout')
@section('content')
    @if(\Session::has('bericht'))
        <div class="bg-green-600 rounded w-1/2 m-auto text-center border-black border">
            <p class="text-white text-lg m-2">{!! \Session::get('bericht') !!}</p>
        </div>
    @endif
    <h1 class="text-center text-2xl font-bold py-6">Bestelling Admin</h1>
    <div class="w-full pl-10">
        <form class="flex flex-col" action="/bestellingAdmin/save" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="p-5">
                <label for="naam">leeftijd: </label>
                <input class="border border-black w-1/3" type="text" name="naam" id="naam">
            </div>
            <div class="p-5">
                <label for="prijs">Prijs per nacht: </label>
                <input class="border border-black w-1/4" type="text" name="prijs" id="prijs">
            </div>

            <div>
                <label for="image">Afbeelding: </label>
                <input type="file" name="image" id="image" accept="image/*" >
            </div>

            <div class="p-5">
                <input type="submit" value="Voeg accomodatie toe" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4 block text-center cursor-pointer">
            </div>
        </form>
    </div>
@endsection
