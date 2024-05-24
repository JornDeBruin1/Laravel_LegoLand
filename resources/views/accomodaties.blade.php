@extends(" layout")
@section('content')
    <h1 class="text-center text-2xl font-bold py-6">Accomodaties</h1>
    <div class="w-full">
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
        <div class="flex flex-wrap">
            @foreach($accomodaties as $accomodatie)
                <div class="w-1/3 p-4">
                    <div class="bg-white rounded-lg shadow-lg">
                        <img src="{{ Vite::asset($accomodatie->image_path) }}" alt="{{ $accomodatie->verblijf }}" class="rounded-t-lg w-full">
                        <div class="p-4">
                            <h2 class="text-xl font-bold">{{ $accomodatie->verblijf }}</h2>
                            <p class="text-sm">Aantal badkamers: {{ $accomodatie->aantal_badkamers }}</p>
                            <p class="text-sm">Aantal Slaapkamers: {{ $accomodatie->aantal_slaapkamers }}</p>
                            <p class="text-sm">€{{ $accomodatie->prijs }} per nacht</p>
                            <a href="/accomodaties/{{$accomodatie->id}}" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4 block text-center">Bekijk</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection