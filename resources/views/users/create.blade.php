@extends('layouts.app')
@section('title', 'Signup')
@section('content')
    
    @if (Auth::guest())
        <form action="{{ route('store') }}" method="POST">
            @csrf

            <div class="my-10">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="p-2 bg-gray-200 @error('name') is-invalid @enderror" />
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="my-10">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="p-2 bg-gray-200 @error('email') is-invalid @enderror" />
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="my-10">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="p-2 bg-gray-200 @error('password') is-invalid @enderror" />
                @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-blue">Login</button>
        </form>
    @else
        <p>You are already registered!</p>
    @endif
@endsection