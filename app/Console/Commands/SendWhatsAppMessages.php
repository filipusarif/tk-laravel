<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Siswa; // Pastikan Anda memiliki model Siswa
use Twilio\Rest\Client;

class SendWhatsAppMessages extends Command
{
    protected $signature = 'send:whatsapp-messages';
    protected $description = 'Send WhatsApp messages to parents every January 1st';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Twilio Credentials
        $sid    = env('TWILIO_SID');
        $token  = env('TWILIO_TOKEN');
        $twilio = new Client($sid, $token);
        $whatsappNumber = 'whatsapp:+14155238886'; // Twilio WhatsApp Sandbox Number

        // Ambil semua siswa
        $siswas = Siswa::all();

        foreach ($siswas as $siswa) {
            $nomor = $siswa->no_telp_ayah ?? $siswa->no_telp_ibu; // Pilih nomor ayah atau ibu
            if ($nomor) {
                $nomor = 'whatsapp:' . $nomor; // Format nomor untuk WhatsApp

                // Kirim pesan
                try {
                    $twilio->messages->create(
                        $nomor,
                        [
                            'from' => $whatsappNumber,
                            'body' => "Halo, ini adalah pengingat dari sekolah untuk keluarga {$siswa->nama_lengkap}. Selamat Tahun Baru!"
                        ]
                    );
                    $this->info("Pesan berhasil dikirim ke {$nomor}");
                } catch (\Exception $e) {
                    $this->error("Gagal mengirim pesan ke {$nomor}: " . $e->getMessage());
                }
            }
        }
    }
}
