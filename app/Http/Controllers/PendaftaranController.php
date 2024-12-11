<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Pembayaran;



class PendaftaranController extends Controller
{
    public function daftar(Request $request)
    {
        // Validasi data input (opsional tapi disarankan)
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required|string|max:255',
            'no_kk' => 'nullable|string|max:255',
            'nama_ayah' => 'required|string|max:255',
            'pekerjaan_ayah' => 'nullable|string|max:255',
            'no_telp_ayah' => 'nullable|string|max:255',
            'nama_ibu' => 'required|string|max:255',
            'pekerjaan_ibu' => 'nullable|string|max:255',
            'no_telp_ibu' => 'nullable|string|max:255',
        ]);

        // dd(auth()->id());

        // Gunakan updateOrCreate
        // dd( auth()->id());
        
        Siswa::updateOrCreate(
            ['user_id' => auth()->id()], // Kondisi untuk mencari data berdasarkan user_id
            [ // Data yang akan dibuat atau diperbarui
                'user_id' => auth()->id(),
                'nama' => $request->nama,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin' => $request->jenis_kelamin,
                'alamat' => $request->alamat,
                'no_kk' => $request->no_kk,
                'nama_ayah' => $request->nama_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'no_telp_ayah' => $request->no_telp_ayah,
                'nama_ibu' => $request->nama_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'no_telp_ibu' => $request->no_telp_ibu,
                'file_akta_kelahiran' => "/akte",
                'file_kk' => "/kk",
                'file_foto' => "/foto",
                'status_verifikasi' => "pending",
            ]
        );

        // Redirect ke route pendaftaran
        return redirect()->route('informasi');
    }


    public function pendaftaran()
    {
        
        $siswa = Siswa::where('user_id', auth()->id())->first();
        // dd($siswa);
    
        return view('pendaftaran.dashboard', compact('siswa'));
    }

    public function informasi()
    {
        // $siswa = Siswa::where('id', auth()->id())->first();
        // $siswa = Siswa::findOrFail($id);
        // $siswas = Siswa::with('pembayaran')->where('id', auth()->id())->get();
        $siswas = Siswa::with('pembayaran')->where('status_verifikasi', 'verified')->where('user_id', auth()->id())->get();
        // dd($siswas);
        return view('pendaftaran.informasi', compact('siswas'));
    }

    public function confirmation(Request $request, $id)
    {
        try {
            // Mencari data Pembayaran berdasarkan ID
            $pembayaran = Pembayaran::where('siswa_id', $id)->firstOrFail();

            // Update status pembayaran dan tanggal bayar
            $pembayaran->update([
                'status' => 'paid',           // Update status menjadi 'paid'
                'tanggal_bayar' => now(),     // Set tanggal pembayaran ke waktu sekarang
            ]);

        } catch (\Exception $e) {
            // Menangkap exception dan memberikan log kesalahan
            \Log::error('Error in confirmation: ' . $e->getMessage());

            // Anda bisa memberikan respons dengan pesan error
            return redirect()->route('informasi')->withErrors('Terjadi kesalahan dalam memproses pembayaran.');
        }

        // Jika berhasil, redirect ke informasi
        return redirect()->route('informasi');
    }

}
