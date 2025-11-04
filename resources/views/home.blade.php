@extends('layouts.app') {{-- Mewarisi layout app.blade.php --}}

@section('title', 'Home') {{-- Mengisi @yield('title') --}}

{{-- Mengisi @yield('content') --}}
@section('content')
    <h1 class="main-title">
        Halaman ini dibuat oleh: 2301010012 - RATNO JULIONO
    </h1>

    <div class="gallery-container">

        {{-- Loop data dari Controller --}}
        @foreach ($galleryItems as $item)
        <div class="gallery-card glass-card">
            <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}">
            <div class="card-caption">
                <h3>{{ $item['title'] }}</h3>
            </div>
        </div>
        @endforeach

    </div>

    {{-- Contoh penggunaan data count --}}
    {{-- <p style="text-align: center; margin-top: 20px;">Total Gambar: {{ $itemCount }}</p> --}}
@endsection
