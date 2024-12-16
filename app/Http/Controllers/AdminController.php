<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembayaran;
use App\Models\User;





class AdminController extends Controller
{
    public function admin(){
        return view('admin.dashboard');
    }

    public function validation(){
        $siswas = Siswa::all();
        return view('admin.validation', compact('siswas'));
    }

    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.validation-detail', compact('siswa'));
    }

    public function verify(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update(['status_verifikasi' => 'verified']);

        // Masukkan data ke tabel pembayaran
        Pembayaran::create([
            'siswa_id' => $siswa->id,
            'kategori'=> 'pendaftaran',
            'jumlah' => 50000, // Contoh jumlah pembayaran
            'status' => 'pending',
            'tanggal_bayar' => null, // Akan diisi saat pembayaran selesai
        ]);

        Pembayaran::create([
            'siswa_id' => $siswa->id,
            'kategori'=> 'spp',
            'jumlah' => 500000, // Contoh jumlah pembayaran
            'status' => 'pending',
            'tanggal_bayar' => null, // Akan diisi saat pembayaran selesai
        ]);
        Pembayaran::create([
            'siswa_id' => $siswa->id,
            'kategori'=> 'uang_pangkal',
            'jumlah' => 2500000, // Contoh jumlah pembayaran
            'status' => 'pending',
            'tanggal_bayar' => null, // Akan diisi saat pembayaran selesai
        ]);
        Pembayaran::create([
            'siswa_id' => $siswa->id,
            'kategori'=> 'seragam',
            'jumlah' => 900000, // Contoh jumlah pembayaran
            'status' => 'pending',
            'tanggal_bayar' => null, // Akan diisi saat pembayaran selesai
        ]);


        return redirect()->route('validation')->with('success', 'Siswa berhasil diverifikasi dan pembayaran dibuat.');
    }

    public function reject(Request $request, $id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->update(['status_verifikasi' => 'rejected']);

        return redirect()->route('validation')->with('error', 'Verifikasi siswa ditolak.');
    }

    public function edit($id)
    {
        $siswa = Siswa::findOrFail($id);
        return view('admin.validation-edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
        ]);

        $siswa = Siswa::findOrFail($id);
        $siswa->update($request->all());

        return redirect()->route('validation')->with('success', 'Data siswa berhasil diubah.');
    }

    public function destroy($id)
    {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();

        return redirect()->route('validation')->with('success', 'Data siswa berhasil dihapus.');
    }


    public function payments(){
        $payments = Pembayaran::with('siswa')->get();
        return view('admin.payment-detail', compact('payments'));
    }


    // Prestasi
    
}
