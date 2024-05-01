<?php

namespace App\Http\Controllers;

use App\Models\a2122102_Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $lastword = a2122102_Pelanggan::orderBy('a2122102_idPelanggan', 'desc')->first();

        if ($lastword) {
            $lastcode = $lastword->a2122102_idPelanggan;
            $lastnumber = intval(substr($lastcode, 1));
            $nextnumber = $lastnumber + 1;
            $nextcode = "P" . str_pad($nextnumber, 3, '0', STR_PAD_LEFT);
        } else {
            $nextcode = 'P001';
        }
        return view('pelanggan.tambahPelanggan', compact('nextcode'));
    }
    public function tambah(Request $request)
    {
        $val = $request->validate([
            'a2122102_idPelanggan' => 'required',
            '2122102_nmPelanggan' => 'required',
            '2122102_alamat' => 'required',
            '2122102_noTelp' => 'required'
        ]);
        $val['a2122102_idPelanggan'] = $request->a2122102_idPelanggan;
        $masuk = a2122102_Pelanggan::create($val);
        if (!$masuk) {
            return "gagal";
        }
        return redirect()->back();
    }
    public function dataPelanggan()
    {
        $data = a2122102_Pelanggan::all();
        return view('pelanggan.daftarPelanggan', compact('data'));
    }
    public function edit($id)
    {
    }
    public function editAction(Request $request, $id)
    {
        $data = a2122102_Pelanggan::where('a2122102_idPelanggan', $id);
        $val = $request->validate([
            'a2122102_idPelanggan' => 'required',
            '2122102_nmPelanggan' => 'required',
            '2122102_alamat' => 'required',
            '2122102_noTelp' => 'required'
        ]);
        $data->update($val);
        return redirect()->back();
    }
    public function delete($id)
    {
        try {
            $data = a2122102_Pelanggan::where('a2122102_idPelanggan', $id)->firstOrFail();
            $data->delete();
            return redirect('/datapelanggan');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
