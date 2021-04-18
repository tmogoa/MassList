@extends('layouts.app')

@section('content')
    <div class="flex flex-col shadow border sm:rounded p-6 mt-6 w-full sm:w-6/12 sm:mx-auto items-center">
        <p class="text-2xl text-gray-500 mb-10">Register as a user</p>

        <form action="{{ route('register') }}" method="POST">
            
            @csrf

            <div class="mb-4 flex flex-col">
                <label for="firstname" class="text-sm text-gray-500 ml-2 mb-2">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="text-gray-900 py-2 px-4 rounded-3xl border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 @error('firstname') border-red-500 @enderror" placeholder="Your firstname" required value="{{ old('firstname')}}"/>
                @error('firstname')
                    <span class="ml-2 text-red-600 text-sm">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mb-4 flex flex-col">
                <label for="surname" class="text-sm text-gray-500 ml-2 mb-2">Surname</label>
                <input type="text" name="surname" id="surname" class="text-gray-900 py-2 px-4 rounded-3xl border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 @error('surname') border-red-500 @enderror" placeholder="Your Surname" required value="{{ old('surname')}}"/>
                @error('surname')
                    <span class="ml-2 text-red-600 text-sm">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mb-4 flex flex-col">
                <label for="password" class="text-sm text-gray-500 ml-2 mb-2">Password</label>
                <input type="password" name="password" id="password" class="text-gray-900 py-2 px-4 rounded-3xl border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 @error('password') border-red-500 @enderror" placeholder="Choose a password" autocomplete="new-password" required/>
                @error('password')
                    <span class="ml-2 text-red-600 text-sm">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="mb-4 flex flex-col">
                <label for="password_confirmation" class="text-sm text-gray-500 ml-2 mb-2">Confirm password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="text-gray-900 py-2 px-4 rounded-3xl border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 @error('password') border-red-500 @enderror" placeholder="Repeat the password" autocomplete="new-password" required/>
                @error('password')
                    <span class="ml-2 text-red-600 text-sm">
                        {{ $message }}
                    </span>
                @enderror
            </div>

            <div class="my-7">
                <button type="submit" class="w-full bg-gray-600 text-white font-md rounded py-2 px-4 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-400">Create account</button>
            </div>
        </form>
    </div>
@endsection