@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Tambah Paket</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('paket.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="paket_name">Nama Paket</label>
                            <input id="paket_name" type="text" class="form-control" name="paket_name" required>
                        </div>

                        <div class="form-group">
                            <label for="waktu">Waktu</label>
                            <input id="waktu" type="text" class="form-control" name="waktu" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="harga">Harga Model</label>
                            <input id="harga" type="text" class="form-control" name="harga" required>
                        </div>
                        <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
