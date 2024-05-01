@extends('template.base')
@section('content')
    <h1>Data Barang</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Satuan Barang</th>
                <th>Stok Barang</th>
                <th>Harga Barang</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($data as $item)
                <tr>
                    <th>{{ $item['a2122102_kdBarang'] }}</th>
                    <td>{{ $item['2122102_nmBarang'] }}</td>
                    <td>{{ $item['2122102_satuan'] }}</td>
                    <td>{{ $item['2122102_stok'] }}</td>
                    <td>{{ $item['2122102_hrgbarang'] }}</td>
                    <td class="d-flex justify-content-between">
                        <a href="{{ route('barang.edit', $item['a2122102_kdBarang']) }}" class="btn btn-warning">
                            <i class="align-middle" data-feather="edit-2"></i> Edit</a>
                        <form action="{{ route('barang.destroy', $item['2122102_kdBarang']) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger"> <i class="align-middle" data-feather="trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse

        </tbody>
    </table>
@endsection
