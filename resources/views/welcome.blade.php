@extends('layout')
<style>

</style>
@section('content')
{{-- welcome container --}}
<div class="w-full ">
    {{-- banner titel --}}
    <div class="flex justify-center items-center h-[37rem] banner ">
        <h1 class="text-6xl font-bold text-customYellow pt-20 uppercase">Welkom bij legoland </h1>
    </div>
    {{-- about --}}
    <div class="flex ml-[30px] items-center h-[37rem] about">
        <div class="w-1/2">
            <img class="mb-[8rem]" src="{{ Vite::asset('resources/images/achtbaan_legoland.jpg') }}"></a>
        </div>
        <div class="w-1/2">
            <h1 class="text-4xl font-bold lg:pl-5 text-customDarkBlue">Over LegoLand Doetinchem</h1>
            <p class="text-black pt-10 lg:pl-5 lg:w-[450px]">Legoland Doetinchem verwelkomt jong en oud in een betoverende wereld vol bouwplezier en avontuur. Ontdek kleurrijke bouwstenen, meeslepende attracties en indrukwekkende bouwwerken. Laat je creativiteit de vrije loop in dit unieke LEGO-paradijs. Een onvergetelijke dag vol verbeelding en vermaak wacht op het hele gezin bij Legoland Doetinchem.</p>
        </div>
</div>

    
@endsection