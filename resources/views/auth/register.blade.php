@extends('layout')

@section('content')
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="flex pt-1 ">
            <div class=" flex flex-col mb-6 border w-full items-center">
                <div class="w-2/3 lg:w-1/5 mt-6">
                    <div class="max-w-md">
                        <label for="naam" class="block text-md font-medium text-gray-700 mb-2">Naam: </label>
                        <div class="flex border border-gray-300 rounded-md my-2">
                            <input class="w-full px-4 py-2 bg-white border-l border-r border-gray-300 focus:outline-none" type="text" name="name" id="name" value="{{ old('name') }}" required autofocus placeholder="Vul je naam in...">
                        </div>
                    </div>
                </div>
                <div class="w-2/3 lg:w-1/5">
                    <div class="max-w-md">
                        <label for="email" class="block text-md font-medium text-gray-700 mb-2">Email: </label>
                        <div class="flex border border-gray-300 rounded-md my-2">
                            <input class="w-full px-4 py-2 bg-white border-l border-r border-gray-300 focus:outline-none"  type="email" name="email" id="email" value="{{ old('email') }}" required placeholder="Vul je email in...">
                        </div>
                    </div>
                </div>
                <div class="w-2/3 lg:w-1/5">
                    <div class="max-w-md">
                        <label for="password" class="block text-md font-medium text-gray-700 mb-2">Password:</label>
                        <div class="flex border border-gray-300 rounded-md my-2">
                            <input type="password" id="password" class="w-full rounded px-4 py-2 bg-white border-l border-r border-gray-300 focus:outline-none" required name="password" id="password" placeholder="Vul hier je wachtwoord in...">
                        </div>
                    </div>
                </div>               
                <div class="w-2/3 lg:w-1/5">
                    <div class="max-w-md">
                        <label for="password_confirmation" class="block text-md font-medium text-gray-700 mb-2">Confirm Password:</label>
                        <div class="flex border border-gray-300 rounded-md my-2">
                            <input type="password" id="password_confirmation" class="w-full rounded px-4 py-2 bg-white border-l border-r border-gray-300 focus:outline-none" required name="password_confirmation" id="password" placeholder="Vul nog een keer je wachtwoord in...">
                        </div>
                    </div>
                </div>               
                <button type="submit" class="mt-7 mb-8 bg-transparent hover:bg-customDarkBlue text-blue-700 font-semibold hover:text-white py-2 px-4 border border-customDarkBlue hover:border-transparent rounded">
                    Register
                </button>             
            </div>
        </div>
    </form>
@endsection
