@extends('template.base')
@section('content')
    <h1>Menu Transaksi</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container mt-4">
        <div class="card mb-3">
            <div class="card-body">

                <div class="form-group">
                    @csrf
                    <div class="d-flex justify-content-between w-100 align-items-center">
                        <select class="form-control" id="barang" name="a2122102_kdbarang">
                            @foreach ($barang as $item)
                                <option value="{{ $item['a2122102_kdbarang'] }}">{{ $item['a2122102_kdbarang'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    </form>
                </div>
                <form action="/createTransaksi" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="jumlah">Nama Barang</label>
                        <input type="text" class="form-control" id="namaBarang" name="2122102_nmBarang" required
                            readonly>

                    </div>
                    <div class="form-group">
                        <label for="jumlah">Harga Barang</label>
                        <input type="number" class="form-control" id="hargaBarang" name="2122102_hrgbarang" required
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Satuan Barang</label>
                        <input type="text" class="form-control" id="satuanBarang" name="2122102_satuan" required
                            readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Stok Barang</label>
                        <input type="number" class="form-control" id="stokBarang" name="2122102_stok" required readonly>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah:</label>
                        <input type="number" class="form-control" id="jumlahBarang" name="2122102_jumlah" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Harga Jual</label>
                        <input type="number" class="form-control" id="hargaJual" name="2122102_hrgJual" required>
                    </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="pelanggan">Pilih Pelanggan:</label>
                    <select class="form-control" id="pelanggan" name="a2122102_idPelanggan">
                        @foreach ($pelanggan as $item)
                            <option value="{{ $item['a2122102_idPelanggan'] }}">{{ $item['a2122102_idPelanggan'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="tanggalSurat">No SP</label>
                    <input type="text" class="form-control" id="tanggalSurat" name="a2122102_noSP" required
                        value="{{ $lastcode }}"@readonly(true)>
                </div>
                <div class="form-group">
                    <label for="tanggalSurat">Tanggal Surat:</label>
                    <input type="date" class="form-control" id="tanggalSurat" name="2122102_tglSP" required>
                </div>

                <button type="submit" class="btn btn-primary">Tambahkan ke Transaksi</button>
                </form>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-header">
                <h2>Detail Transaksi</h2>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <a href="" class="btn btn-primary">Cetak Nota</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Harga Barang</th>
                            <th>Satuan Barang</th>
                            <th>Stok Barang</th>
                            <th>Jumlah Barang</th>
                            <th>Harga Jual</th>
                            <th>Total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (session('allData'))
                            @forelse (session('allData',[]) as $item)
                                <tr>
                                    <td>{{ $item['nama_barang'] }}</td>
                                    <td>{{ $item['harga_barang'] }}</td>
                                    <td>{{ $item['satuan_barang'] }}</td>
                                    <td>{{ $item['stok_barang'] }}</td>
                                    <td>{{ $item['jumlah_barang'] }}</td>
                                    <td>{{ $item['harga_jual'] }}</td>
                                    <td>{{ $item['total_harga'] }}</td>
                                    <td><a href="/detail/{{ $item['kode_barang'] }}">Detail</a></td>
                                </tr>
                            @empty
                            @endforelse
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#barang').change(function() {
                var barangId = $(this).val();
                $.ajax({
                    url: '/get-barang-detail/' + barangId,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        $('#namaBarang').val(data.nama_barang);
                        $('#hargaBarang').val(data.harga_barang);
                        $('#satuanBarang').val(data.satuan_barang);
                        $('#stokBarang').val(data.stok_barang);
                    },
                    error: function() {
                        alert('Error loading data');
                    }
                });
            });
        });
    </script>
@endsection
