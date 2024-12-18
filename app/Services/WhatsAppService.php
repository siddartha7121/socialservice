<?php

namespace App\Services;

use Twilio\Rest\Client;
use Illuminate\Support\Facades\Log;
// app/Services/WhatsAppService.php

class WhatsAppService
{
    protected $twilio;

    public function __construct()
    {
        $this->twilio = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
    }

    public function sendMessage($to, $message)
    {
        try {
            return $this->twilio->messages->create(
                $to,
                [
                    'from' => env('TWILIO_WHATSAPP_FROM'), // Make sure this is correct in .env
                    'body' => $message
                ]
            );
        } catch (\Twilio\Exceptions\RestException $e) {
            Log::error("Error sending WhatsApp message: " . $e->getMessage());
            throw new \Exception("Failed to send WhatsApp message");
        }
    }
}
