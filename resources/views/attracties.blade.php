@extends('layout')
@section('content')
<div class="w-full lg:flex lg:flex-col attracties">
     {{-- laat alle attracties zien  --}}
    @foreach ($attracties as $attractie)
    <a href="/attracties/{{$attractie->id}}">
        <div class="my-20 attractie">
            <div class="left"> 
                <h1 class="text-2xl font-bold text-center mb-5">{{ $attractie->title }}</h1>
            </div>
            <div class="flex right">
                <img class="mx-4 w-[85%]" src="{{ Vite::asset($attractie->image_path) }}" alt="Attractie  afbeelding"/>
                <p class="mx-10 text-lg lg:w-[40%] lg:ml-[23%]">{{$attractie->description}}</p>
            </div>
        </div>
    </a>
    @endforeach
    
</div>
@endsection