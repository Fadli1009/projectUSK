@extends('template.base')
@section('content')
    <h1>Edit Barang</h1>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('barang.store') }}" method="POST">
                @csrf
                <div class="form-group  mb-3">
                    <label for="nama">Id Barang:</label>
                    <input type="text" class="form-control" id="nama" name="a2122102_idPelanggan" required
                        value="{{ $nextcode }}" readonly>
                </div>
                <div class="form-group mb-3">
                    <label for="nama">Nama Barang:</label>
                    <input type="text" class="form-control" id="nama" name="2122102_nmBarang" required>
                </div>
                <div class="form-group mb-3">
                    <label for="telepon">Satuan Barang</label>
                    <select name="2122102_satuan" id="">
                        <option value="PCS">PCS</option>
                        <option value="PACK">PACK</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Stok Barang</label>
                    <input type="text" class="form-control" id="nama" name="2122102_stok" required>
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Harga Barang</label>
                    <input type="text" class="form-control" id="nama" name="2122102_hrgbarang" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Barang</button>
            </form>
        </div>
    </div>
@endsection
