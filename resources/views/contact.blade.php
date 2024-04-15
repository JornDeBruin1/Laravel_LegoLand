@extends('layout')

@section('content')
<div class="w-[80%] mx-auto custom2Xl:h-[657px]">
    <div>
        <h1 class="text-2xl font-bold text-center m-7">Contact</h1>
    </div>
    {{-- confirmation bericht --}}
    @if(\Session::has('bericht'))
        <div class="bg-green-600 rounded w-1/2 m-auto text-center border-black border">
        
            <p class="text-white text-lg m-2">{!! \Session::get('bericht') !!}</p>
        
        </div>
    @endif
    <form method="POST" action="/contact/save">
        @csrf
        <div class="flex pt-1 ">
            <div class=" flex flex-col mb-6 border w-full items-center">
                <div class="w-2/3 lg:w-1/5 mt-6">
                    <div class="max-w-md">
                        <label for="naam" class="block text-md font-medium text-gray-700 mb-2">Naam</label>
                        <div class="flex border border-gray-300 rounded-md my-2">
                            <input type="text" id="naam" class="w-full px-4 py-2 bg-white border-l border-r border-gray-300 focus:outline-none" name="naam" id="" required placeholder="Vul hier je naam...">
                        </div>
                    </div>
                </div>
                <div class="w-2/3 lg:w-1/5">
                    <div class="max-w-md">
                        <label for="email" class="block text-md font-medium text-gray-700 mb-2">Email</label>
                        <div class="flex border border-gray-300 rounded-md my-2">
                            <input type="text" id="email" class="w-full rounded px-4 py-2 bg-white border-l border-r border-gray-300 focus:outline-none" required name="email" id="" placeholder="Vul hier je email...">
                        </div>
                    </div>
                </div>
                <div class="w-2/3 mb-5 lg:w-1/5">
                    <div class="max-w-md">
                        <label for="onderwerp" class="block text-md font-medium text-gray-700 mb-2">Onderwerp</label>
                        <input type="text" id="onderwerp" class="w-full rounded px-4 py-2 bg-white border border-gray-300 focus:outline-none" required name="onderwerp" id="" placeholder="Vul hier het onderwerp...">
                    </div>
                </div>
                <div class="w-2/3 lg:w-1/5">
                    <div class="max-w-md">
                        <label for="bericht" class="block text-md font-medium text-gray-700 mb-2">Bericht</label>
                        <textarea id="bericht" class="w-full pb-24 rounded resize-none px-4 py-2 bg-white border border-gray-300 focus:outline-none" name="bericht" id="" required placeholder="Geef hier je bericht..."></textarea>
                    </div>
                </div>
                
                <button class="mt-7 mb-8 bg-transparent hover:bg-customDarkBlue text-blue-700 font-semibold hover:text-white py-2 px-4 border border-customDarkBlue hover:border-transparent rounded">
                    Verstuur
                </button>             
            </div>
        </div>
    </form>
</div>
<div>
    <div class="m-auto w-4/5 border">
        <div class="text-center flex flex-col">
            <h1 class="text-2xl font-bold text-center m-7">Contactgegevens</h1>
            <div class="flex p-3 m-auto">
                <h4>telefoonnummer:</h4>
                <p>&nbsp; +1234567890</p>
            </div>
            <div class="flex p-3 m-auto">
                <h4>Email: &nbsp;</h4>
                <p>&nbsp;info@website.com</p>   
            </div>
            <div class="flex p-3 m-auto">
                <h4>Adres: &nbsp;</h4>
                <p>&nbsp;J.F. Kennedylaan 49</p>   
            </div>
        </div>
    </div>
</div>
@endsection