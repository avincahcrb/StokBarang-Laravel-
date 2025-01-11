<?php

namespace App\Http\Controllers;

use App\Models\Riwayat;
use App\Models\Stokbarang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = 'Delete User!';
        $text = "Apakah anda yakin ingin menghapus data ?";
        confirmDelete($title, $text);

        $riwayat = Riwayat::join('stokbarang', 'riwayat.id_barang', '=', 'stokbarang.id_barang')->select('riwayat.*', 'stokbarang.nama_barang', 'stokbarang.kode_barang')->get();
        return view('riwayat.datamasuk', compact('riwayat'))->with([
            'riwayat1' => Riwayat::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $riwayatmasuk = new Riwayat();
        $update_stok = Stokbarang::find($request->id_barang);

        $riwayatmasuk->id_barang = $request->id_barang;
        $riwayatmasuk->stokmasuk = $request->stok;
        $riwayatmasuk->status = $request->status;
        $riwayatmasuk->save();

        $update_stok->stok = $request->stok + $update_stok->stok;
        $update_stok->kode_barang = $request->kode_barang;
        $update_stok->nama_barang = $request->nama_barang;
        $update_stok->save();

        return Redirect('riwayat')->with('success', 'Data berhasil ditambah');
    }

    public function storekeluar(Request $request)
    {
        $riwayatkeluar = new Riwayat();
        $update_stok = Stokbarang::find($request->id_barang);

        $riwayatkeluar->id_barang = $request->id_barang;
        $riwayatkeluar->stokmasuk = $request->stok;
        $riwayatkeluar->status = $request->status;
        $riwayatkeluar->save();

        $update_stok->stok = (-$request->stok) - (-$update_stok->stok);
        $update_stok->kode_barang = $request->kode_barang;
        $update_stok->nama_barang = $request->nama_barang;
        $update_stok->save();

        return Redirect('riwayat')->with('success', 'Data berhasil dikurangi');
    }

    /**
     * Display the specified resource.
     */
    public function show(Riwayat $riwayat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Riwayat $riwayat)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Riwayat $id_riwayat, $riwayat)
    {
        $data = $id_riwayat->find($riwayat);
        $data->delete();

        return redirect('riwayat')->with('success', 'Data berhasil Dihapus');
    }
}
