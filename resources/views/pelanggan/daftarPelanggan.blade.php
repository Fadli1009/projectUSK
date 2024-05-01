@extends('template.base')
@section('content')
    <h1>Daftar Pelanggan</h1>
    <table class="table" id="">
        <thead>
            <tr>
                <th>Id Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Alamat Pelanggan</th>
                <th>No Telphone</th>
                <th class="text-center">Action</th>
            </tr>
            @forelse ($data as $item)
                <tr>
                    <th>{!! $item['a2122102_idPelanggan'] !!}</th>
                    <td>{!! $item['2122102_nmPelanggan'] !!}</td>
                    <td>{!! $item['2122102_alamat'] !!}</td>
                    <td>{!! $item['2122102_noTelp'] !!}</td>
                    <td class="d-flex justify-content-between">
                        <a href="{{ route('pelanggan.edit', $item['a2122102_idPelanggan']) }}" class="btn btn-warning"
                            @disabled(true)> <i class="align-middle" data-feather="edit-2"></i> Edit</a>
                        <form action="{{ route('pelanggan.destroy', $item['a2122102_idPelanggan']) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger"> <i class="align-middle" data-feather="trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
            @endforelse
        </thead>
    </table>
@endsection
