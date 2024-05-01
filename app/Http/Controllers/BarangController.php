<?php

namespace App\Http\Controllers;

use App\Models\a2122102_Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = a2122102_Barang::all();
        return view("barang.databarang", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $find = a2122102_Barang::orderBy('a2122102_kdBarang', 'desc')->first();
        if ($find) {
            $lastcode = $find->a2122102_kdbarang;
            $lastnumber = intval(substr($lastcode, 1));
            $nextnumber = $lastnumber + 1;
            $nextcode = "B" . str_pad($nextnumber, 3, '0', STR_PAD_LEFT);
        } else {
            $nextcode =  'B001';
        }
        return view('barang.tambahbarang', compact('nextcode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $val = $request->validate([
                'a2122102_kdBarang' => 'required',
                '2122102_nmBarang' => 'required',
                '2122102_satuan' => 'required',
                '2122102_stok' => 'required',
                '2122102_hrgbarang' => 'required'
            ]);
            $cek = a2122102_Barang::create($val);
            if (!$cek) {
                return 'gagal';
            }
            return redirect()->back();
        } catch (\Throwable $th) {
            throw $th;
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
