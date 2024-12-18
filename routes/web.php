<?php

use App\Models\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Twilio\Rest\Client;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    // dump(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'),env('TWILIO_WHATSAPP_FROM'));
    return view('home', ['language' => config('language')]);
})->name('home');
// Route::get('/', function () {
    // $mobileNumber = 'whatsapp:+917799597377'; // Include 'whatsapp:' prefix
    // $message = "Your message content here";

    // try {
    //     $twilio = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
    //     $twilio->messages->create($mobileNumber, [
    //         'from' => env('TWILIO_WHATSAPP_FROM'), // Should include 'whatsapp:' prefix
    //         'body' => $message
    //     ]);

    //     return response()->json(['status' => 'Message sent successfully!']);
    // } catch (\Exception $e) {
    //     return response()->json(['error' => 'Failed to send message: ' . $e->getMessage()]);
    // }
// })->name('home');

Route::get('/register/{type}', function ($type) {
    return view(
        'register',
        [
            'type' => $type,
            'bloodgroups' => config('language.bloodgroups'),
            'citis' => config('language.citis'),
            'request' => config('language.english.request')[$type]
        ]
    );
});
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/send-whatsapp', [WhatsAppController::class, 'sendMessage']);

