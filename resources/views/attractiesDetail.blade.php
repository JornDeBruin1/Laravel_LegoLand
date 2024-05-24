@extends('layout')
@section('content')
    <div class="w-full "> 
                <h1 class="text-2xl font-bold text-center mb-5">{{ $attractie->title }}</h1>
            </div>
            <div class="">
                <div class="flex justify-center">
                    <img class="mx-4 w-1/2" src="{{ Vite::asset($attractie->image_path) }}" alt="Attractie  afbeelding"/>
                </div>
                    <p class=" text-lg lg:w-[40%] lg:ml-[31%]">{{$attractie->description}}</p>
                <table class="border border-black ml-[37%] mt-[2%]">
                    <tr class="">
                        <th>Duur van rit</th>
                        <th>Minimale lengte</th>
                        <th>Lengte zonder ouder</th>
                    </tr>
                    <tr class="">
                        <td>{{$attractie->duration}} minuten</td>
                        <td>{{$attractie->min_height}} cm</td>
                        <td>{{$attractie->height}} cm</td>
                    </tr>
                </table>
            </div>
        </div>
@endsection