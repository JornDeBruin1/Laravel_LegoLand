@php
    
@endphp
@extends(" layout")
@section('content')
<div class="w-full">
    @auth
        <div class="mx-5 mt-5 flex justify-center">
            <a href="/accomodatiesAdmin/{{$accomodatie->id}}/edit" class="bg-blue-500 text-white p-2 rounded-lg mr-3">Bewerk</a>
            <a href="/accomodatiesAdmin/{{$accomodatie->id}}/delete" class="bg-red-500 text-white p-2 rounded-lg">Verwijder</a>
        </div>
    @endauth
    <div class="flex flex-wrap">
        <div class="w-1/2 rounded-lg shadow-lg m-auto mt-12">
            <img src="{{Vite::asset($accomodatie->image_path)}}" alt="{{$accomodatie->verblijf}}">
            
        </div>
        <div class="w-1/3 p-4">
            <div class="bg-white rounded-lg shadow-lg mt-12">
                <div class="p-4">
                    <h2 class="text-2xl font-semibold text-gray-800">{{$accomodatie->verblijf}}</h2>
                    <p class="text-md text-gray-600">aantal badkamers: {{$accomodatie->aantal_badkamers}}</p>
                    <p class="text-md text-gray-600">aantal slaapkamers: {{$accomodatie->aantal_slaapkamers}}</p>
                    <div class="mt-3">
                        <p class="text-xl text-gray-800 font-semibold">€ {{$accomodatie->prijs}}</p>
                    </div>
                    <form action="/accomodaties/save" method="POST">
                        @csrf
                    <div class="mt-6">
                        <label class="block text-sm text-gray-600">Aantal personen</label>
                        <input name="personen" type="number" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" />
                    </div>
                    <div class="mt-6">
                        <label class="block text-sm text-gray-600">Datum van aankomst</label>
                        <input name="aankomst" type="date" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" />
                    </div>
                    <div class="mt-6">
                        <label class="block text-sm text-gray-600">Datum van vertrek</label>
                        <input name="vertrek" type="date" class="w-full mt-2 p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" />
                    </div>
                    <input type="hidden" name="accomodatie" value="{{$accomodatie->id}}">
                    <div class="mt-6">
                        <button class="w-full bg-indigo-600 text-gray-100 p-3 rounded-lg font-semibold hover:bg-indigo-500">Reserveer</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection