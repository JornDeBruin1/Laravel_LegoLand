@extends('layout')

@section('content')
<div class="lg:flex lg:items-center ml-[100px] flex-col custom2Xl:h-[919px]" >
    <div class="pt-5 mt-16">
        <h1 class="text-2xl font-bold">Openingstijden </h1>
    </div>
    <div class="mt-5">
        <table class="border border-black">
            <tr class="">
                <th>Dag</th>
                <th>Openingstijd</th>
                <th>Sluitingstijd</th>
                @auth
                <th>Admin</th>
                @endauth
            </tr>
            @foreach ($openingstijden as $openingstijd)
          <tr>
                <td>{{ $openingstijd->dag }} </td>
                <td>{{ $openingstijd->opening }}</td>
                <td>{{ $openingstijd->sluiting }}</td>
                @auth
                <td>
                    <a href="/openingstijden/{{$openingstijd->id}}" class="bg-green-500 text-white px-4 py-2 rounded-lg mt-4 block text-center">Bijwerken</a>
                </td>
                @endauth
          </tr>
          @endforeach
        </table>
        
    </div>
</div>

@endsection