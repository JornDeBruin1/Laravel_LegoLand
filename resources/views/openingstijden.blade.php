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
            </tr>
            @foreach ($openingstijden as $openingstijd)
          <tr>
                <td>{{ $openingstijd->dag }}</td>
                <td>{{ $openingstijd->opening }}</td>
                <td>{{ $openingstijd->sluiting }}</td>
          </tr>
          @endforeach
        </table>
    </div>
</div>

@endsection