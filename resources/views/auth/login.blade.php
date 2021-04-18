@extends('layouts.app')

@section('content')
    <div class="flex flex-col shadow border sm:rounded p-6 mt-6 w-full sm:w-6/12 sm:mx-auto items-center">
        <p class="text-2xl text-gray-500 mb-10">Login into MassList</p>

        @if (session('status'))
            <div class="bg-red-500 text-white px-4 py-2 rounded mb-4 w-5/12 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">

            @csrf

            <div class="mb-4 flex flex-col">
                <label for="firstname" class="text-sm text-gray-500 ml-2 mb-2">Firstname</label>
                <input type="text" name="firstname" id="firstname" class="text-gray-900 py-2 px-4 rounded-3xl border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300" placeholder="Your firstname" required/>
            </div>

            <div class="mb-4 flex flex-col">
                <label for="password" class="text-sm text-gray-500 ml-2 mb-2">Password</label>
                <input type="password" name="password" id="password" class="text-gray-900 py-2 px-4 rounded-3xl border focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300" placeholder="Your password" autocomplete="new-password" required/>
            </div>

            <div class="mb-4 flex flex-row items-center">
                <input type="checkbox" name="remember" id="remember" class="mr-2">
                <label for="remember" class="text-sm text-gray-500">Remember me</label>
            </div>

            <div class="my-7">
                <button type="submit" class="w-full bg-gray-600 text-white font-md rounded py-2 px-4 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-400">Login</button>
            </div>
        </form>
    </div>
@endsection