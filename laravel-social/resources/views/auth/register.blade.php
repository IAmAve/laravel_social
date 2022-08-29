@extends('layouts.app')

@section('content')
  <div class="flex justify-center">
    <div class="w-4/12 bg-white p-6 rounded-lg">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="mb-4">
                <label class="sr_only" for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Your name" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                @error('name')
                    border-red-500
                @enderror" value="{{old('name')}}">

                @error('name')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="sr_only" for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Your username" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                @error('username')
                    border-red-500
                @enderror" value="{{old('username')}}">

                @error('username')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="sr_only" for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="Your email" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                @error('email')
                    border-red-500
                @enderror" value="{{old('email')}}">

                @error('email')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="sr_only" for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                @error('password')
                    border-red-500
                @enderror">

                @error('password')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <label class="sr_only" for="password_confirmation">Repeat Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat your password" class="bg-gray-100 border-2 w-full p-4 rounded-lg 
                @error('password_confirmation')
                    border-red-500
                @enderror">

                @error('password_confirmation')
                    <div class="text-red-500 mt-2 text-sm">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-4">
                <button type="submit" class="bg-black text-white px-4 py-4 rounded font-medium w-full">Register</button>
            </div>
        </form>
    </div>
  </div>
@endsection