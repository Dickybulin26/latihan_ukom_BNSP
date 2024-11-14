<?php

namespace App\Http\Controllers;

use App\Models\DataBarang;
use Illuminate\Http\Request;

class DataBarangController extends Controller
{
    public function index()
    {
        $data = DataBarang::all();
        return view("index", compact("data"));
    }

    public function tambahBarang()
    {
        return view("tambah");
    }

    public function simpanBarang(Request $request)
    {
        try {
            $request->validate([
                'id_barang' => 'required',
                'nama_barang' => 'required',
                'harga' => 'required',
                'stok' => 'required',
                'foto' => 'required'
            ]);

            $gambarBarang = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('images'), $gambarBarang);

            $data = new DataBarang();
            $data->id_barang = $request->id_barang;
            $data->nama_barang = $request->nama_barang;
            $data->harga = $request->harga;
            $data->stok = $request->stok;
            $data->foto = $gambarBarang;

            $data->save();

            return redirect()->route('barang.index')->with('success', '200');

        } catch (\Throwable $th) {
            dd($th);
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function editBarang($id_barang)
    {
        $data = DataBarang::findOrFail($id_barang);
        return view("edit", compact("data"));
    }

    public function updateBarang(Request $request, $id_barang)
    {
        $request->validate([
            'id_barang' => 'required',
            'nama_barang' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'foto' => 'nullable|image|max:2048'
        ]);

        $data = DataBarang::findOrFail($id_barang);
        $data->id_barang = $request->id_barang;
        $data->nama_barang = $request->nama_barang;
        $data->harga = $request->harga;
        $data->stok = $request->stok;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->extension();
            $file->move(public_path('images'), $filename);
            $data->foto = $filename;
        }

        $data->save();

        return redirect()->route('barang.index')->with('success', '200');
    }

    public function detailBarang($id_barang)
    {
        $data = DataBarang::findOrFail($id_barang);
        return view('detail', compact('data'));
    }

    public function hapusBarang($id_barang)
    {
        $data = DataBarang::findOrFail($id_barang);
        $data->delete();

        return redirect()->route('barang.index')->with('success', '200');
    }

}