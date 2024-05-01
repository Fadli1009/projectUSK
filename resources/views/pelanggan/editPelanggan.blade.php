@extends('template.base')
@section('content')
    <h1>Edit Pelanggan</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('pelanggan.update', $data['a2122102_idPelanggan']) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-group  mb-3">
                    <label for="nama">Id Pelanggan:</label>
                    <input type="text" class="form-control" id="nama" name="a2122102_idPelanggan" required
                        value="{{ $data['a2122102_idPelanggan'] }}" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="nama">Nama Pelanggan:</label>
                    <input type="text" class="form-control" id="nama" name="2122102_nmPelanggan" required
                        value="{{ $data['2122102_nmPelanggan'] }}">
                </div>
                <div class="form-group mb-3">
                    <label for="telepon">Telepon:</label>
                    <input type="text" class="form-control" id="telepon" name="2122102_noTelp" required
                        value="{{ $data['2122102_noTelp'] }}">
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat:</label>
                    <textarea class="form-control" id="alamat" name="2122102_alamat" required>{!! $data['2122102_alamat'] !!}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Edit Pelanggan</button>
            </form>
        </div>
    </div>
@endsection
