<!-- resources/views/rental/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Perentelan</div>

                    <body>

                        <div class="card-body">
                            <form action="{{ route('rental.update', $rental->id) }}" method="POST">
                                @csrf
                                @method('PUT')

                                <label for="customer_name">Nama Pelanggan:</label><br>
                                <input type="text" id="customer_name" name="customer_name"
                                    value="{{ $rental->customer_name }}"><br><br>

                                <label for="contact_number">Nomor Kontak:</label><br>
                                <input type="text" id="contact_number" name="contact_number"
                                    value="{{ $rental->contact_number }}"><br><br>

                                <label for="playstation_id">Pilih Playstation:</label><br>
                                <select name="playstation_id" id="playstation_id">
                                    @foreach ($playstations as $playstation)
                                        <option value="{{ $playstation->id }}"
                                            {{ $rental->playstation_id == $playstation->id ? 'selected' : '' }}>
                                            {{ $playstation->device_type }} - {{ $playstation->device_name }}
                                            ({{ $playstation->device_model }})
                                        </option>
                                    @endforeach
                                </select><br><br>

                                <label for="rental_duration">Durasi Penyewaan (jam):</label><br>
                                <input type="number" id="rental_duration" name="rental_duration" min="1"
                                    value="{{ $rental->rental_duration }}"><br><br>

                                <button type="submit">Update</button>
                            </form>
                        </div>
                    @endsection