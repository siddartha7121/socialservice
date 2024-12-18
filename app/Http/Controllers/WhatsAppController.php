<?php

namespace App\Http\Controllers;

use App\Services\WhatsAppService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class WhatsAppController extends Controller
{
    protected $whatsAppService;

    public function __construct(WhatsAppService $whatsAppService)
    {
        $this->whatsAppService = $whatsAppService;
    }

    public function sendMessage()
    {
        // $to = 'whatsapp:+917799597377';
        $to = 'whatsapp:+919353365284';
        $message = 'Hello, this is a test message from Laravel via WhatsApp!';
        $response = $this->whatsAppService->sendMessage($to, $message);
        
        // Log the response for debugging
        Log::info('Twilio Response:', (array) $response);
        
        return 'Message sent successfully! Check Twilio logs for delivery status.';
    }
}
