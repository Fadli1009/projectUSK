<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\a2122102_Pelanggan;

class Pelanggan1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = a2122102_Pelanggan::all();
        return view('pelanggan.daftarPelanggan', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = a2122102_Pelanggan::where('a2122102_idPelanggan', $id)->first();
        return view('pelanggan.editPelanggan', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = a2122102_Pelanggan::where('a2122102_idPelanggan', $id);
        $val = $request->validate([
            'a2122102_idPelanggan' => 'required',
            '2122102_nmPelanggan' => 'required',
            '2122102_alamat' => 'required',
            '2122102_noTelp' => 'required'
        ]);
        $data->update($val);
        return redirect()->route('pelanggan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = a2122102_Pelanggan::where('a2122102_idPelanggan', $id);
        $data->delete();
        return redirect()->route('pelanggan.index');
    }
}
