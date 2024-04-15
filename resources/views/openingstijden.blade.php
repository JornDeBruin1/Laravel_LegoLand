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
          <tr>
                <td>Maandag</td>
                <td>09:00</td>
                <td>17:00</td>
          </tr>
          <tr>
                <td>Dinsdag</td>
                <td>09:00</td>
                <td>17:00</td>
          </tr>
          <tr>
                <td>Woensdag</td>
                <td>09:00</td>
                <td>17:00</td>
          </tr>
          <tr>
                <td>Donderdag</td>
                <td>09:00</td>
                <td>17:00</td>
          </tr>
          <tr>
                <td>Vrijdag</td>
                <td>09:00</td>
                <td>22:00</td>
          </tr>
          <tr>
                <td>Zaterdag</td>
                <td>09:00</td>
                <td>22:00</td>
          </tr>
          <tr>
                <td>Zondag</td>
                <td>09:00</td>
                <td>20:00</td>
          </tr>
        </table>
    </div>
</div>

@endsection