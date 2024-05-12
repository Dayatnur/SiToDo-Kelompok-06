@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Halaman Beranda</h1>
    <p class="text-gray-900">Selamat datang di halaman Beranda!</p>
    <h2 class="text-xl">Box</h2>
    @livewire('my-unique-popup-component')
    <!-- Your Beranda content goes here -->
    <div class="flex flex-col items-center justify-center mt-8">
        <img src="{{ asset('img/picture-box.png') }}" alt="Picture Box" class="w-64 h-auto">
        <h2 class="text-xl mt-4">Your to-do list is empty.</h2>
        <h3 class="text-gray-600">It's time to dream big and make it happen</h3>

        <!-- Livewire Popup Component -->
        
    </div>
@endsection
