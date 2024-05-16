<!-- resources/views/rental/index.blade.php -->
@extends('layouts.layout')

@section('header')
<header id="header" class="page-header sticky-top navbar-light bg-light">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between">
            <button id="toggle-btn" class="btn btn-light">
                <img src="../assets/icons/list.svg" alt="Menu" style="width: 25px;">
            </button>
            <div class="logo">
                <img src="../assets/icons/logo.png" alt="Header Logo" class="logo-img">
                <h1 class="logo-text">{{ config('app.name', 'Laravel') }}</h1>
            </div>
        </div>
    </div>
</header>
@endsection

@section('sidebar')
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("sidebar").style.height = "100vh";
        const toggleBtn = document.getElementById("toggle-btn");
        const sidebar = document.getElementById("sidebar");
        const content = document.getElementById("content");

        toggleBtn.addEventListener("click", () => {
            sidebar.classList.toggle("collapsed");
            content.classList.toggle("expanded");
        });
    });
</script>
<div id="sidebar" class="bg-light sticky-top">
    <div class="p-3 profile">
        <a class="mb-3 w-75" data-bs-toggle="modal" data-bs-target="#profileModal" href="#profileModal">
            <img src="../assets/icons/avatar.jpg" class="img-fluid" alt="Profile Picture" style="border-radius: 100px; border: 0.5px solid #d9d9d9;">
        </a>
        <h5 class='mb-1'>Username</h5>
        <p class='text-muted mb-1'>ID ADMIN</p>
    </div>
    <ul class="flex-column d-block list-group w-100 align-items-center justify-content-center">
        <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action sidebar-item"><i class="fas fa-home fa-fw me-4"></i>Dashboard</a>
        <a href="{{ route('rental.index')}}" class="list-group-item list-group-item-action sidebar-item active"><i class="fas fa-gamepad fa-fw me-4"></i>Rental</a>
        <a href="{{ route('playstation.index') }}" class="list-group-item list-group-item-action sidebar-item"><i class="fas fa-plus fa-fw me-4"></i>Inventaris</a>
        <a href="#" class="list-group-item list-group-item-action sidebar-item"><i class="fas fa-gift fa-fw me-4"></i>Paket</a>
        <a href="#" class="list-group-item list-group-item-action sidebar-item"><i class="fas fa-list fa-fw me-4"></i>Log</a>
        <a href="#" id="logout-link" class="list-group-item list-group-item-action sidebar-item"><i class="fas fa-sign-out fa-fw me-4"></i>Logout</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        <script>
            document.getElementById('logout-link').addEventListener('click', function(e) {
                e.preventDefault();
                document.getElementById('logout-form').submit();
            });
        </script>
    </ul>
    <div class="p-5 h-100"></div>
</div>
@endsection

@section('content')
<div id="content" class="content-t flex-grow-1 p-4">
    <!-- Content Section -->
    <div class="container">
        <h2 class="mb-3">Daftar Rental</h2>

        <!-- Tambahkan tombol untuk membuat rental baru -->
        <a href="{{ route('rental.create') }}" class="btn btn-primary mb-3">Tambah Rental Baru</a>

        <!-- Tampilkan daftar rental jika ada -->
        @if($rentals->isEmpty())
            <p>Tidak ada rental yang tersedia.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pelanggan</th>
                        <th>Kontak</th>
                        {{-- <th>Konsol</th> --}}
                        <th>Durasi</th>
                        <!-- Tambahkan kolom lain sesuai kebutuhan -->
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Loop untuk menampilkan setiap entri rental -->
                    @foreach($rentals as $rental)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $rental->customer_name }}</td>
                            <td>{{ $rental->contact_number }}</td>
                            <td>{{ $rental->rental_duration }} Jam</td>
                            <!-- Tambahkan kolom lain sesuai kebutuhan -->
                            <td>
                                <!-- Tambahkan tombol untuk mengedit dan menghapus -->
                                <a href="{{ route('rental.edit', $rental->id) }}" class="btn btn-primary">Edit</a>
                                <!-- Tambahkan form untuk menghapus -->
                                <form action="{{ route('rental.destroy', $rental->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</div>
@endsection

@section('footer')
<script>
    </script>
<footer class="footer bg-light">
    <div class="container">
        <span><strong>&copy; 2023 </strong>TYR. All rights reserved.</span>
    </div>
</footer>

<!-- Profile Dialog -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="profileModalLabel">Profile</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="p-3 profile">
                    <img src="../assets/icons/avatar.jpg" class="img-fluid w-75" alt="Profile Picture" style="border-radius: 1000px; border: 0.5px solid #d9d9d9;">
                    <div class="form-group p-2 my-2">
                        <div class="input-group py-2">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>
                        <div class="">
                            <label for="formFile" class="form-label fw-bold">Profile Picture</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-dark">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection