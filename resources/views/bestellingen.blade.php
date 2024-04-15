@extends('layout')

@section('content')
<div class="w-[80%] mx-auto custom2Xl:h-[891px]">
    <div>
        <h1 class="text-2xl font-bold text-center m-7">Prijzen</h1>
    </div>
    {{-- confirmation bericht --}}
    @if(\Session::has('bericht'))
    <div class="bg-green-600 rounded w-1/2 m-auto text-center border-black border">
        <p class="text-white text-lg m-2">{!! \Session::get('bericht') !!}</p>
    </div>
    @endif
    @if(\Session::has('error'))
        <div class="bg-red-600 rounded w-1/2 m-auto text-center border-black border"> 
            <p class="text-white text-lg m-2">{!! \Session::get('error') !!}</p>
        </div>
    @endif
        <form method="POST" action="/bestellingen/save">
            @csrf
            <div class="flex pt-1">
                {{-- laat alle tickets zien --}}
                @foreach ($tickets as $ticket)
                    <div class=" flex flex-col mb-6 border w-full items-center">
                        <div class="w-[85%]">
                            <img class="w-full mt-4" src="{{ Vite::asset($ticket->image_path) }}" alt="Leeftijd Images" alt="">
                            <h2 class="text-xl font-bold">{{$ticket->naam}}</h2>
                            <p class="text-gray-600">{{$ticket->beschrijving}}</p>
                        </div>
                        <div class="w-1/3 text-center">
                            <h2 class="text-xl font-bold">€{{$ticket->prijs}}</h2>
                        </div>
                        <div class="w-2/3 lg:w-1/3">
                            <div class="max-w-md">
                                <label for="aantal" class="block text-md font-medium text-gray-700 mb-2">Enter the amount of tickets</label>
                                <div class="flex border border-gray-300 rounded-md my-2">                                    
                                    {{-- Input form maken voor ticket --}}
                                    <input type="number" id="aantal" class="w-full px-5 py-2 bg-white border border-gray-300 focus:outline-none" min="0" value="0" name="tickets[{{$ticket->id}}]" id="">
                                    <input type="hidden" name="ticket-{{$ticket->id}}" value="{{$ticket->id}}">
                                </div>
                            </div>
                        </div>
                    </div>
                  
                    
                @endforeach 
               
            </div>
            <div class="mt-4 lg:ml-[40%]">
                <label>Achternaam</label>
                <input class="rounded border-2 border-gray-400 ml-[3.7rem]" type="text" name="achternaam" id="achternaam">
                <br><br>
                <label>Telefoon nummer</label>
                <input class="rounded border-2 border-gray-400 ml-5" type="text" name="telefoonnummer" id="telefoonnummer">
                <br><br>
                <label>Email</label>
                <input class="rounded border-2 border-gray-400 ml-[6.6rem]" type="text" name="email" id="email">
                <br><br>
                <label>Adres</label>
                <input class="rounded border-2 border-gray-400 ml-[6.5rem]" type="text" name="adres" id="adres">
                <br><br>
                <button class="bg-transparent hover:bg-customDarkBlue text-blue-700 font-semibold hover:text-white py-2 px-4 border border-customDarkBlue hover:border-transparent rounded">
                    Bestel
                </button>
            </div>
        </form>
</div>
@endsection
