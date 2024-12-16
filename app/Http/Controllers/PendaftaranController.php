<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\User;
use App\Models\Pembayaran;
use Midtrans\Snap;



class PendaftaranController extends Controller
{
    public function daftar(Request $request)
    {
        // Validasi data input (opsional tapi disarankan)
        // $validatedData = $request->validate([
        //     'nama' => 'required|string|max:255',
        //     'tempat_lahir' => 'required|string|max:255',
        //     'tanggal_lahir' => 'required|date',
        //     'jenis_kelamin' => 'required|in:L,P',
        //     'alamat' => 'required|string|max:255',
        //     'kk' => 'nullable|string|max:255',
        //     // 'nama_ayah' => 'required|string|max:255',
        //     // 'pekerjaan_ayah' => 'nullable|string|max:255',
        //     // 'no_telp_ayah' => 'nullable|string|max:255',
        //     // 'nama_ibu' => 'required|string|max:255',
        //     // 'pekerjaan_ibu' => 'nullable|string|max:255',
        //     // 'no_telp_ibu' => 'nullable|string|max:255',
        // ]);

        Siswa::updateOrCreate(
            ['user_id' => auth()->id()], 
            [ 
                'user_id' => auth()->id(),
                'nama_lengkap' => $request->nama_lengkap,
                'nama_panggilan' => $request->nama_panggilan,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nik' => $request->nik,
                'kk' => $request->kk,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'akte' => $request->akte,
                'tinggi' => $request->tinggi,
                'berat' => $request->berat,
                'agama' => $request->agama,
                'kewarganegaraan' => $request->kewarganegaraan,
                'jumlah_saudara' => $request->jumlah_saudara,
                'berkebutuhan_khusus' => $request->berkebutuhan_khusus,
                'jarak' => $request->jarak,
                'alamat' => $request->alamat,
                'waktu' => $request->waktu,
            ]
        );

        // Redirect ke route pendaftaran
        return redirect()->route('orang-tua');
    }


    public function pendaftaran()
    {
        
        $siswa = Siswa::where('user_id', auth()->id())->first();
        return view('pendaftaran.dashboard', compact('siswa'));
    }

    public function orang_tua(){
        $siswa = Siswa::where('user_id', auth()->id())->first();

        return view('pendaftaran.orang-tua', compact('siswa'));
    }

    public function daftar_ortu(Request $request){
        Siswa::updateOrCreate(
            ['user_id' => auth()->id()], 
            [ 
                'user_id' => auth()->id(),
                'nama_ayah' => $request->nama_ayah,
                'nik_ayah' => $request->nik_ayah,
                'tempat_lahir_ayah' => $request->tempat_lahir_ayah,
                'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
                'pendidikan_ayah' => $request->pendidikan_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'email_ayah' => $request->email_ayah,
                'no_telp_ayah' => $request->no_telp_ayah,
                'penghasilan_ayah' => $request->penghasilan_ayah,
                'nama_ibu' => $request->nama_ibu,
                'nik_ibu' => $request->nik_ibu,
                'tempat_lahir_ibu' => $request->tempat_lahir_ibu,
                'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
                'pendidikan_ibu' => $request->pendidikan_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'email_ibu' => $request->email_ibu,
                'no_telp_ibu' => $request->no_telp_ibu,
                'penghasilan_ibu' => $request->penghasilan_ibu,
            ]
        );
        return redirect()->route('dokumen');
    }

    public function dokumen(){
        $berkas = Siswa::where('user_id', auth()->id())->first();
        
        return view('pendaftaran.berkas', compact('berkas'));
    }

    public function daftar_berkas(Request $request){
        // dd("hello");
        $validated = $request->validate([
            'file_akta_kelahiran' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'file_kk'             => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'file_foto'           => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'file_imunisasi'      => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
        
        // Lokasi folder penyimpanan
        $destinationPath = public_path('berkas');
        // Inisialisasi nama file untuk penyimpanan di database
        $aktaKelahiranName = $kkName = $fotoName = $imunisasiName = null;

        // Simpan file jika ada
        if ($request->hasFile('file_akta_kelahiran')) {
            $aktaKelahiranName = time() . '_akta.' . $request->file('file_akta_kelahiran')->getClientOriginalExtension();
            $request->file('file_akta_kelahiran')->move($destinationPath, $aktaKelahiranName);
        }

        if ($request->hasFile('file_kk')) {
            $kkName = time() . '_kk.' . $request->file('file_kk')->getClientOriginalExtension();
            $request->file('file_kk')->move($destinationPath, $kkName);
        }

        if ($request->hasFile('file_foto')) {
            $fotoName = time() . '_foto.' . $request->file('file_foto')->getClientOriginalExtension();
            $request->file('file_foto')->move($destinationPath, $fotoName);
        }

        if ($request->hasFile('file_imunisasi')) {
            $imunisasiName = time() . '_imunisasi.' . $request->file('file_imunisasi')->getClientOriginalExtension();
            $request->file('file_imunisasi')->move($destinationPath, $imunisasiName);
        }

        $berkas = Siswa::where('user_id', auth()->id())->first();

        

        // Update atau buat data siswa
        Siswa::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'user_id' => auth()->id(),
                'file_akta_kelahiran' => $aktaKelahiranName ? 'berkas/' . $aktaKelahiranName : $berkas->file_akta_kelahiran,
                'file_kk'             => $kkName ? 'berkas/' . $kkName : $berkas->file_kk,
                'file_foto'           => $fotoName ? 'berkas/' . $fotoName : $berkas->file_foto,
                'file_imunisasi'      => $imunisasiName ? 'berkas/' . $imunisasiName : $berkas->file_imunisasi,
            ]
        );

        return redirect()->route('informasi');
    }

    // public function informasi()
    // {
    //     // $siswa = Siswa::where('id', auth()->id())->first();
    //     // $siswa = Siswa::findOrFail($id);
    //     // $siswas = Siswa::with('pembayaran')->where('id', auth()->id())->get();
    //     // dd($siswas);
    //     $siswas = Siswa::with('pembayaran')->where('status_verifikasi', 'verified')->where('user_id', auth()->id())->first();
    //     // dd($siswas);
    //     // Ambil data pembayaran dengan status 'pending' berdasarkan siswa_id
    //     // dd($siswas);
    //     $pendingPayments = Pembayaran::where('siswa_id', $siswas->id)
    //     ->where('status', 'pending')
    //     ->get();

    //     $paidPayments = Pembayaran::where('siswa_id', $siswas->id)
    //     ->where('status', 'paid')
    //     ->get();

    //     // Hitung total jumlah pembayaran
    //     $totalAmount = $pendingPayments->sum('jumlah');

    //     // Create transaction for Midtrans
    //     $transaction_details = [
    //         'order_id' => 'ORD-' . time(),
    //         'gross_amount' => $totalAmount,
    //     ];

    //     $items = [];
    //     foreach ($pendingPayments as $payment) {
    //         $items[] = [
    //             'id' => $payment->id,
    //             'price' => $payment->jumlah,
    //             'quantity' => 1,
    //             'name' => 'Pembayaran Siswa ' . $siswas->nama_lengkap,
    //         ];
    //     }

    //     $transaction_data = [
    //         'transaction_details' => $transaction_details,
    //         'item_details' => $items,
    //         'customer_details' => [
    //             'first_name' => auth()->user()->name,
    //             'email' => auth()->user()->email,
    //         ],
    //     ];
    //     $snapToken = Snap::getSnapToken($transaction_data);

    //     return view('pendaftaran.informasi', compact('siswas','pendingPayments','totalAmount', 'paidPayments', 'snapToken'));
    // }

    // public function confirmation(Request $request, $id)
    // {
    //     try {
    //         // Mencari data Pembayaran berdasarkan ID
    //         // $pembayaran = Pembayaran::where('siswa_id', $id)->firstOrFail();

    //         // // Update status pembayaran dan tanggal bayar
    //         // $pembayaran->update([
    //         //     'status' => 'paid',           // Update status menjadi 'paid'
    //         //     'tanggal_bayar' => now(),     // Set tanggal pembayaran ke waktu sekarang
    //         // ]);

    //         Pembayaran::where('siswa_id', $id)
    //         ->update([
    //             'status' => 'paid',           // Update status menjadi 'paid'
    //             'tanggal_bayar' => now(),     // Set tanggal pembayaran ke waktu sekarang
    //         ]);

    //     } catch (\Exception $e) {
    //         // Menangkap exception dan memberikan log kesalahan
    //         \Log::error('Error in confirmation: ' . $e->getMessage());

    //         // Anda bisa memberikan respons dengan pesan error
    //         return redirect()->route('informasi')->withErrors('Terjadi kesalahan dalam memproses pembayaran.');
    //     }

    //     // Jika berhasil, redirect ke informasi
    //     return redirect()->route('informasi');
    // }

    public function pendaftaran_admin()
    {
        
        $siswa = Siswa::where('user_id', auth()->id())->first();
        return view('pendaftaran.dashboard', compact('siswa'));
    }

    public function daftar_admin(Request $request)
    {    

        // Lokasi folder penyimpanan
        $destinationPath = public_path('berkas');
        // Inisialisasi nama file untuk penyimpanan di database
        $aktaKelahiranName = $kkName = $fotoName = $imunisasiName = null;

            // Simpan file jika ada
        if ($request->hasFile('file_akta_kelahiran')) {
            $aktaKelahiranName = time() . '_akta.' . $request->file('file_akta_kelahiran')->getClientOriginalExtension();
            $request->file('file_akta_kelahiran')->move($destinationPath, $aktaKelahiranName);
        }

        if ($request->hasFile('file_kk')) {
            $kkName = time() . '_kk.' . $request->file('file_kk')->getClientOriginalExtension();
            $request->file('file_kk')->move($destinationPath, $kkName);
        }

        if ($request->hasFile('file_foto')) {
            $fotoName = time() . '_foto.' . $request->file('file_foto')->getClientOriginalExtension();
            $request->file('file_foto')->move($destinationPath, $fotoName);
        }

        if ($request->hasFile('file_imunisasi')) {
            $imunisasiName = time() . '_imunisasi.' . $request->file('file_imunisasi')->getClientOriginalExtension();
            $request->file('file_imunisasi')->move($destinationPath, $imunisasiName);
        }

        $berkas = Siswa::where('user_id', auth()->id())->first();

    

        Siswa::updateOrCreate(
            ['user_id' => $request->user], // Kondisi untuk mencari data berdasarkan user_id
            [ // Data yang akan dibuat atau diperbarui
                'user_id' => $request->user,
                'nama_lengkap' => $request->nama_lengkap,
                'nama_panggilan' => $request->nama_panggilan,
                'jenis_kelamin' => $request->jenis_kelamin,
                'nik' => $request->nik,
                'kk' => $request->kk,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'akte' => $request->akte,
                'tinggi' => $request->tinggi,
                'berat' => $request->berat,
                'agama' => $request->agama,
                'kewarganegaraan' => $request->kewarganegaraan,
                'jumlah_saudara' => $request->jumlah_saudara,
                'berkebutuhan_khusus' => $request->berkebutuhan_khusus,
                'jarak' => $request->jarak,
                'alamat' => $request->alamat,
                'waktu' => $request->waktu,
                'nama_ayah' => $request->nama_ayah,
                'nik_ayah' => $request->nik_ayah,
                'tempat_lahir_ayah' => $request->tempat_lahir_ayah,
                'tanggal_lahir_ayah' => $request->tanggal_lahir_ayah,
                'pendidikan_ayah' => $request->pendidikan_ayah,
                'pekerjaan_ayah' => $request->pekerjaan_ayah,
                'email_ayah' => $request->email_ayah,
                'no_telp_ayah' => $request->no_telp_ayah,
                'penghasilan_ayah' => $request->penghasilan_ayah,
                'nama_ibu' => $request->nama_ibu,
                'nik_ibu' => $request->nik_ibu,
                'tempat_lahir_ibu' => $request->tempat_lahir_ibu,
                'tanggal_lahir_ibu' => $request->tanggal_lahir_ibu,
                'pendidikan_ibu' => $request->pendidikan_ibu,
                'pekerjaan_ibu' => $request->pekerjaan_ibu,
                'email_ibu' => $request->email_ibu,
                'no_telp_ibu' => $request->no_telp_ibu,
                'penghasilan_ibu' => $request->penghasilan_ibu,
                'file_akta_kelahiran' => $aktaKelahiranName ? 'berkas/' . $aktaKelahiranName : $berkas->file_akta_kelahiran,
                'file_kk'             => $kkName ? 'berkas/' . $kkName : $berkas->file_kk,
                'file_foto'           => $fotoName ? 'berkas/' . $fotoName : $berkas->file_foto,
                'file_imunisasi'      => $imunisasiName ? 'berkas/' . $imunisasiName : $berkas->file_imunisasi,
            ]
        );

        // Redirect ke route pendaftaran
        return redirect()->route('orang-tua');
    }


    public function daftar_ortu_admin(Request $request){
        Siswa::updateOrCreate(
            ['user_id' => auth()->id()], 
            [ 
                'user_id' => auth()->id(),
                
            ]
        );
        return redirect()->route('dokumen');
    }

    public function daftar_berkas_admin(Request $request){
        // dd("hello");
        $validated = $request->validate([
            'file_akta_kelahiran' => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'file_kk'             => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
            'file_foto'           => 'nullable|mimes:jpg,jpeg,png|max:2048',
            'file_imunisasi'      => 'nullable|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
        
        

    // Update atau buat data siswa
    Siswa::updateOrCreate(
        ['user_id' => auth()->id()],
        [
            'user_id' => auth()->id(),
            
        ]
    );

        return redirect()->route('informasi');
    }
}
