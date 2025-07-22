@extends('layouts.app')

@section('title', 'Login - Sistem Informasi Inventaris Sekolah')

@section('content')
<div class="max-w-md mx-auto">
    <div class="bg-white rounded-lg shadow-lg p-8">
        <h2 class="text-2xl font-bold text-center mb-6">Login Sistem Inventaris</h2>
        
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 font-medium mb-2" for="email">Email</label>
                <input type="email" name="email" id="email" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            
            <div class="mb-6">
                <label class="block text-gray-700 font-medium mb-2" for="password">Password</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
            </div>
            
            @if($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    {{ $errors->first() }}
                </div>
            @endif
            
            <button type="submit" class="w-full bg-blue-600 text-white font-medium py-2 px-4 rounded-md hover:bg-blue-700">
                Login
            </button>
        </form>
    </div>
</div>
@endsection
