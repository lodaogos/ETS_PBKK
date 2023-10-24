<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\JenisBarang;
use App\Models\KondisiBarang;

class FormulirController extends Controller
{
    public function index()
    {
        $jenisBarang = JenisBarang::all();
        $kondisiBarang = KondisiBarang::all();
        return view('formulir', compact('jenisBarang', 'kondisiBarang'));
    }

    public function create(Request $request)
    {
        Barang::create([
            'jenis' => $request->input('jenis'),
            'kondisi' => $request->input('kondisi'),
            'keterangan' => $request->input('keterangan'),
            'kecacatan' => $request->input('kecacatan'),
            'jumlah' => $request->input('jumlah'),
            'gambar' => $request->input('gambar')
        ]);
        return redirect()->route('formulir')->with('success', 'Barang created successfully');
    }

    public function delete(Request $request)
    {
        $barangId = $request->input('id'); // Assuming 'job_id' is the name of the input field in your form

        // Find and delete the job record based on the job ID
        Barang::where('id', $barangId)->delete();

        return redirect()->route('barang')->with('success', 'Barang deleted successfully');
    }

    public function edit(Request $request)
    {
        return view('EditForm', compact('request'));
    }

    public function update(Request $request)
    {
         // Validate the incoming data
        $validatedData = $request->validate([
            'jenis' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required', // You can define more specific validation rules here
            'kecacatan' => 'required',
            'jumlah' => 'required',
            'gambar' => 'required',
        ]);

        // Find the job record based on the ID in the form
        $barang = Barang::find($request->id);

        if (!$barang) {
            // Handle the case where the job record is not found
            return back()->with('error', 'Barang not found');
        }

        // Update the job record with the new data
        $barang->update($validatedData);

        // Optionally, you can provide a success message using the session
        session()->flash('success', 'Barang details updated successfully');

        // Redirect the user to the edit page or another appropriate page
        return redirect()->route('barang')->with('success', 'Barang deleted successfully');
    }
}

