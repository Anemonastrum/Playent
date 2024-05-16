@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">Tambah Bilik Baru</div>

                    <div class="card-body">
                        <form action="{{ route('rental.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="customer_name" class="form-label">Nama Pelanggan:</label>
                                <input type="text" id="customer_name" name="customer_name" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Nomor Kontak:</label>
                                <input type="text" id="contact_number" name="contact_number" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="playstation_id" class="form-label">Pilih Playstation:</label>
                                <select name="playstation_id" id="playstation_id" class="form-select">
                                    @foreach ($playstations as $playstation)
                                        <option value="{{ $playstation->id }}">{{ $playstation->device_type }} -
                                            {{ $playstation->device_name }}
                                            ({{ $playstation->device_model }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="paket_id">Pilih Paket:</label><br>
                                <select name="paket_id" id="paket_id" class="form-select">
                                    @foreach ($pakets as $paket)
                                        <option value="{{ $paket->id }}">{{ $paket->paket_name }} - {{ $paket->waktu }}
                                            (Rp {{ $paket->harga }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- <div class="mb-3">
                                <label for="rental_duration" class="form-label">Durasi Penyewaan (jam):</label>
                                <input type="number" id="rental_duration" name="rental_duration" class="form-control"
                                    min="1">
                            </div> --}}

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
