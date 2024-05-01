<?php

namespace App\Http\Controllers;

use App\Models\a2122102_Barang;
use App\Models\a2122102_DetilPesan;
use App\Models\a2122102_Pelanggan;
use App\Models\a2122102_Sp;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $first = a2122102_Sp::orderBy('a2122102_noSP', 'desc')->first();
        if ($first) {
            $lastdata = $first->a2122102_noSP;
            $lastnumber = intval(substr($lastdata, 1));
            $lastnumber = $lastnumber + 1;
            $lastcode = "S" . str_pad($lastnumber, 5, "0", STR_PAD_LEFT);
        } else {
            $lastcode = 'S00001';
        }
        $table = a2122102_DetilPesan::all();
        $pelanggan = a2122102_Pelanggan::orderBy('a2122102_idPelanggan', 'asc')->get();
        $barang = a2122102_Barang::orderBy('a2122102_kdbarang', 'asc')->get();
        return view('transaksi.transaksi', compact('pelanggan', 'barang', 'lastcode'));
    }
    public function createTransaksi(Request $request)
    {
        try {
            $jumlah_jual = $request['2122102_jmljual'];
            $harga_jual = $request['2122102_hrgJual'];
            $ttlHarga = $request['2122102_jumlah'] * $harga_jual;

            $val = [
                'kode_barang' => $request['a2122102_kdbarang'],
                'nama_barang' => $request['2122102_nmBarang'],
                'harga_barang' => $request['2122102_hrgbarang'],
                'satuan_barang' => $request['2122102_satuan'],
                'stok_barang' => $request['2122102_stok'],
                'jumlah_barang' => $request['2122102_jumlah'],
                'harga_jual' => $request['2122102_hrgJual'],
                'total_harga' => $ttlHarga,
            ];
            $allData = session()->get('allData', []);
            $allData[] = $val;
            session()->put('allData', $allData);
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function getBarangDetail($id)
    {
        $barang = a2122102_Barang::find($id);
        if (!$barang) {
            return response()->json(['error' => 'Barang tidak ditemukan'], 404);
        }
        return response()->json([
            'nama_barang' => $barang->{'2122102_nmBarang'},
            'harga_barang' => $barang->{'2122102_hrgbarang'},
            'satuan_barang' => $barang->{'2122102_satuan'},
            'stok_barang' => $barang->{'2122102_stok'}
        ]);
    }
}
