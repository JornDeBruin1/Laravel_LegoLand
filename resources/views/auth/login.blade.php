@extends('layout')

@section('content')
<h1 class="text-center text-2xl font-bold py-6">Login</h1>
    @if ($errors->any())
        <div class="bg-red-600 rounded w-1/2 m-auto text-center border-black border">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-white text-lg m-2">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="flex pt-1 ">
            <div class=" flex flex-col mb-6 border w-full items-center">
                <div class="w-2/3 lg:w-1/5 mt-6">
                    <div class="max-w-md">
                        <label for="email" class="block text-md font-medium text-gray-700 mb-2">Email: </label>
                        <div class="flex border border-gray-300 rounded-md my-2">
                            <input type="text" class="w-full px-4 py-2 bg-white border-l border-r border-gray-300 focus:outline-none" name="email" id="email" autofocus required placeholder="Vul je email in...">
                        </div>
                    </div>
                </div>
                <div class="w-2/3 lg:w-1/5">
                    <div class="max-w-md">
                        <label for="password" class="block text-md font-medium text-gray-700 mb-2">Password:</label>
                        <div class="flex border border-gray-300 rounded-md my-2">
                            <input type="password" id="password" class="w-full rounded px-4 py-2 bg-white border-l border-r border-gray-300 focus:outline-none" required name="password" placeholder="Vul hier je wachtwoord in...">
                        </div>
                    </div>
                </div>               
                <button class="mt-7 mb-8 bg-transparent hover:bg-customDarkBlue text-blue-700 font-semibold hover:text-white py-2 px-4 border border-customDarkBlue hover:border-transparent rounded">
                    Login
                </button>             
            </div>
        </div>





        {{-- <div class="">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required autofocus>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>

        <button type="submit">Login</button> --}}
    </form>
@endsection
