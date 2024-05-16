@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit PlayStation</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('playstation.update', $playstation->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="device_name">Device Name</label>
                            <input id="device_name" type="text" class="form-control" name="device_name" value="{{ $playstation->device_name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="device_type">Device Type</label>
                            <input id="device_type" type="text" class="form-control" name="device_type" value="{{ $playstation->device_type }}" required autofocus>
                        </div>

                        <div class="form-group">
                            <label for="device_model">Device Model</label>
                            <input id="device_model" type="text" class="form-control" name="device_model" value="{{ $playstation->device_model }}" required>
                        </div>

                        <button type="submit" class="btn btn-primary mt-3">Update PlayStation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
