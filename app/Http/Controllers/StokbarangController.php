<?php

namespace App\Http\Controllers;

use App\Models\stokbarang;
use App\Http\Requests\StorestokbarangRequest;
use App\Http\Requests\UpdatestokbarangRequest;
use App\Models\Riwayat;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class StokbarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function dashboard()
    {
        $barang = Stokbarang::all();
        $riwayat = Riwayat::all();
        return view('stokbarang.dashboard', ['barang' => $barang], ['riwayat' => $riwayat]);
    }


    public function index()
    {

        $stokbarang = Stokbarang::latest()->first();
        $cekkode = $stokbarang->kode_barang;
        $norut = substr($cekkode, 3, 6);
        $codenow = intval($norut) + 1;
        $codenow = str_pad($codenow, 5, "0", STR_PAD_LEFT);
        $data = array('kode_barang' => $codenow);

        $title = 'Delete User!';
        $text = "Apakah anda yakin ingin menghapus data ?";
        confirmDelete($title, $text);


        return view('stokbarang.data', compact('data'))->with([
            'stokbarang' => Stokbarang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function asd(Request $request)
    {
        $term = $request->input('term');
        $data = stokbarang::where('kode_barang', 'LIKE', '%' . $term . '%')->first(); // Mengambil satu data yang sesuai

        return response()->json($data);
    }

    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorestokbarangRequest $request)
    {
        $validate = $request->validated();

        $stokbarang = new Stokbarang();

        $stokbarang->kode_barang = $request->kode_barang;
        $stokbarang->nama_barang = $request->nama_barang;
        $stokbarang->stok = $request->stok;
        $stokbarang->status = $request->status;
        $stokbarang->save();

        return Redirect('stokbarang')->with('success', 'Data berhasil di simpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stokbarang $stokbarang)
    {
        $data = $stokbarang->find();
        return view('stokbarang.masuk', $data)->with([
            'id_barang' => $data->id_barang,
            'nama_barang' => $data->nama_barang,
            'gender' => $data->gender,
            'address' => $data->address,
            'emailaddress' => $data->emailaddress,
            'phone' => $data->phone
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stokbarang $stokbarang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestokbarangRequest $request, stokbarang $id_barang, $stokbarang)
    {
        $validate = $request->validated();

        $data = $id_barang->find($stokbarang);
        $data->kode_barang = $request->kode_barang;
        $data->nama_barang = $request->nama_barang;
        $data->stok = $request->stok;
        $data->status = $request->status;
        $data->save();

        return Redirect('stokbarang')->with('success', 'Data berhasil di edit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stokbarang $id_barang, $stokbarang)
    {
        $data = $id_barang->find($stokbarang);
        $data->delete();

        return Redirect('stokbarang')->with('success', 'Data ' . $data->nama_barang . ' berhasil dihapus');
    }
}
