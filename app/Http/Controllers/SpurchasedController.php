<?php

namespace App\Http\Controllers;

use App\Models\Spurchased;
use Illuminate\Http\Request;

class SpurchasedController extends Controller
{
    public function index()
    {
        $spurchased = Spurchased::get();

        return view("admin.sekolah.sekolah", compact("spurchased"));
    }
    public function create()
    {
        return view("admin.sekolah.create");
    }
    public function store(Request $request)
    {
        $request->validate([
            "tahun_pembelian" => "required",
            "nama_barang" => "required",
            "kode" => "required",
            "harga_satuan" => "required",
            "jumlah" => "required",
            "total_harga" => "required",
            "pembeli" => "required",
            "toko" => "required",
            "keterangan" => "required",
        ], [
            "tahun_pembelian.required" => "Tahun Pembelian harus diisi",
            "nama_barang.required" => "Nama Barang harus diisi",
            "kode.required" => "Kode harus diisi",
            "harga_satuan.required" => "Harga Satuan harus diisi",
            "jumlah.required" => "Jumlah harus diisi",
            "total_harga.required" => "Total Harga harus diisi",
            "pembeli.required" => "Pembeli harus diisi",
            "toko.required" => "Toko harus diisi",
            "keterangan.required" => "Keterangan harus diisi",
        ]);

        Spurchased::create([
            "tahun_pembelian" => $request->tahun_pembelian,
            "nama_barang" => $request->nama_barang,
            "kode" => $request->kode,
            "harga_satuan" => $request->harga_satuan,
            "jumlah" => $request->jumlah,
            "total_harga" => $request->total_harga,
            "pembeli" => $request->pembeli,
            "toko" => $request->toko,
            "keterangan" => $request->keterangan,
        ]);

        return redirect("/sekolah")->with("success", "Berhasil menambahkan data Pembelian.");
    }
    public function edit($id)
    {
        $spurchased = Spurchased::findOrFail($id);

        return view("admin.sekolah.edit", compact("spurchased"));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            "tahun_pembelian" => "required",
            "nama_barang" => "required",
            "kode" => "required",
            "harga_satuan" => "required",
            "jumlah" => "required",
            "total_harga" => "required",
            "pembeli" => "required",
            "toko" => "required",
            "keterangan" => "required",
        ], [
            "tahun_pembelian.required" => "Tahun Pembelian harus diisi",
            "nama_barang.required" => "Nama Barang harus diisi",
            "kode.required" => "Kode harus diisi",
            "harga_satuan.required" => "Harga Satuan harus diisi",
            "jumlah.required" => "Jumlah harus diisi",
            "total_harga.required" => "Total Harga harus diisi",
            "pembeli.required" => "Pembeli harus diisi",
            "toko.required" => "Toko harus diisi",
            "keterangan.required" => "Keterangan harus diisi",
        ]);

        Spurchased::findOrFail($id)->update([
            "tahun_pembelian" => $request->tahun_pembelian,
            "nama_barang" => $request->nama_barang,
            "kode" => $request->kode,
            "harga_satuan" => $request->harga_satuan,
            "jumlah" => $request->jumlah,
            "total_harga" => $request->total_harga,
            "pembeli" => $request->pembeli,
            "toko" => $request->toko,
            "keterangan" => $request->keterangan,
        ]);

        return redirect("/sekolah")->with("success", "Berhasil memperbarui data Pembelian");
    }
    public function destroy($id)
    {
        Spurchased::findOrFail($id)->delete();

        return redirect("/sekolah")->with("success", "Berhasil menghapus data Pembelian");
    }
}
