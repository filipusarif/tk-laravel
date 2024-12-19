<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Twilio\Rest\Client;
    use Exception;
    use App\Models\Siswa;


    class WhatsappController extends Controller
    {

     function store(Request $request)
     {
      $twilioSid = env('TWILIO_SID');
      $twilioAuthToken = env('TWILIO_AUTH_TOKEN');
      $twilioWhatsappNumber = 'whatsapp:'.env('TWILIO_WHATSAPP_NUMBER');
      
      $sends = Siswa::all();
      //   $to = 'whatsapp:'.$request->phone;
      //   $message = $request->message;
      $client = new Client($twilioSid, $twilioAuthToken);
      try {
          foreach ($sends as $send) {
            $to = 'whatsapp:'.'+6282252955822';
            $to = 'whatsapp:'.$send->no_telp_ayah ?? $send->no_telp_ibu ;
            $pesan = "Saat Ini Terdapat Tagihan Pembayaran di TK, buka website TK untuk melihat lebih lengkap ";
            $mes = array(
                "from" => "whatsapp:+14155238886",
                // "contentSid" => "HXb5b62575e6e4ff6129ad7c8efe1f983e",
                // "contentVariables" => "{"1":"12/1","2":"3pm"}",
                "body" => $pesan
            );
            $twilio = new Client($twilioSid, $twilioAuthToken);
            $message = $twilio->messages
            ->create($to,$mes);
            return redirect()->route('payments')->with('success', 'Berhasil Mengirim Notifikasi.');
        }
        
    //    return "Message sent successfully! SID: " . $message->sid;
      } catch (Exception $e) {
       return "Error sending message: " . $e->getMessage();
      }
     }
    } 