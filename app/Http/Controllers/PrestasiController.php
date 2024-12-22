<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prestasi;


class PrestasiController extends Controller
{
    public function showPrestasi(){
        $prestasis = Prestasi::all();
        return view('profil', compact('prestasis'));
    }

    public function prestasi(){
        $prestasis = Prestasi::all();
        return view('admin.prestasi', compact('prestasis'));
    }

    public function registerprestasi(){

        
        return view('admin.prestasi-add');
    }

    public function registerprestasipost(Request $request){
        // Lokasi folder penyimpanan
        $destinationPath = public_path('berkas');
        // Inisialisasi nama file untuk penyimpanan di database
        $gambar = null;

            // Simpan file jika ada
        if ($request->hasFile('gambar')) {
            $gambar = time() . '_prestasi.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move($destinationPath, $gambar);
        }

        // dd($request);

        Prestasi::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => 'berkas/' . $gambar,
        ]);
        return redirect()->route('prestasi');
    }

    public function prestasi_edit($id){
        $prestasi = Prestasi::findOrFail($id);
        return view('admin.prestasi-edit', compact('prestasi'));
    }

    public function prestasi_update(Request $request, $id){
        // Lokasi folder penyimpanan
        $destinationPath = public_path('berkas');
        // Inisialisasi nama file untuk penyimpanan di database
        $gambar = null;
        // Simpan file jika ada
        $pres = Prestasi::where('id', $id)->first();

        if ($request->hasFile('gambar')) {
            $gambar = time() . '_prestasi.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move($destinationPath, $gambar);
        }

        // dd($gambar );

        $prestasi = Prestasi::findOrFail($id);
        $prestasi->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar'=> $gambar ?  'berkas/' . $gambar : $pres->gambar,
        ]);

        return redirect()->route('prestasi')->with('success', 'Data prestasi berhasil diubah.');
    }

    public function prestasi_destroy($id){
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();

        return redirect()->route('prestasi');
    }
    
}
