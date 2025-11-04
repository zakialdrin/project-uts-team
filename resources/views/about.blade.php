@extends('layouts.main')

@section('title', 'About')

@section('content')
<div class="card p-4 shadow">
    <h2 class="mb-3">Tentang Penulis</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nama:</strong> {{ $nama }}</li>
        <li class="list-group-item"><strong>NIM:</strong> {{ $nim }}</li>
        <li class="list-group-item"><strong>Jurusan:</strong> {{ $jurusan }}</li>
        <li class="list-group-item"><strong>Hobi:</strong> {{ $hobi }}</li>
    </ul>
</div>
@endsection
