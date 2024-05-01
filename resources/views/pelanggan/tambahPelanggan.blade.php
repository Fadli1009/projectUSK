@extends('template.base')
@section('content')
    <h1>Tambah Pelanggan</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pelanggan.store') }}" method="POST">
                @csrf
                <div class="form-group  mb-3">
                    <label for="nama">Id Pelanggan:</label>
                    <input type="text" class="form-control" id="nama" name="a2122102_idPelanggan" required
                        value="{{ $nextcode }}" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="nama">Nama Pelanggan:</label>
                    <input type="text" class="form-control" id="nama" name="2122102_nmPelanggan" required>
                </div>
                <div class="form-group mb-3">
                    <label for="telepon">Telepon:</label>
                    <input type="text" class="form-control" id="telepon" name="2122102_noTelp" required>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="2122102_alamat" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Pelanggan</button>
            </form>
        </div>
    </div>
@endsection
