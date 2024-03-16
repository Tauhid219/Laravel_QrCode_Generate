<?php

use App\Http\Controllers\QrcodeController;
use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('phpmyinfo', function () {
    phpinfo();
})->name('phpmyinfo');

Route::get('qrcode', function () {

    return QrCode::size(300)->generate('A basic example of QR code!');
});

Route::get('qrcode-save', function () {
    $path = public_path('qrcode/' . time() . '.png');

    return QrCode::size(300)
        ->generate('A simple example of QR code', $path);
});

Route::get('qrcode-with-color', function () {

    return QrCode::size(300)
        ->backgroundColor(255, 55, 0)
        ->generate('A simple example of QR code');
});

Route::get('qrcode-email', function () {

    return QrCode::size(500)
        ->email('hardik@itsolutionstuff.com', 'Welcome to ItSolutionStuff.com!', 'This is !.');
});

Route::get('qrcode-phone', function () {

    return QrCode::phoneNumber('01817481033');
});

Route::get('qrcode-sms', function () {

    return QrCode::SMS('01817481033', 'Body of the message');
});

Route::get('qrview', [QrcodeController::class, 'index'])->name('qrview');
Route::get('qrgithub', [QrcodeController::class, 'qrgithub'])->name('qrgithub');
// Route::get('qrlist', [QrcodeController::class, 'qrlist'])->name('qrlist');


