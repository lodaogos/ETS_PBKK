<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::select('id','jenis','kondisi','keterangan', 'kecacatan', 'jumlah', 'gambar')->get();
        return view('barang', compact('barang'));
    }
}
