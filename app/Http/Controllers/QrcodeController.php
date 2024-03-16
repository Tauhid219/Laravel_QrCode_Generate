<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrcodeController extends Controller
{
    public function index()
    {
        return view('qrcode');
    }

    public function qrlist()
    {
        $data = Product::all();
        return view('product.products', compact('data'));
    }

    public function qrgithub()
    {
        $qrCodes = [];
        $qrCodes['simple'] =
            QrCode::size(150)->generate('https://github.com/Tauhid219');
        $qrCodes['changeColor'] =
            QrCode::size(150)->color(255, 0, 0)->generate('https://github.com/Tauhid219');
        $qrCodes['changeBgColor'] =
            QrCode::size(150)->backgroundColor(255, 0, 0)->generate('https://github.com/Tauhid219');
        $qrCodes['styleDot'] =
            QrCode::size(150)->style('dot')->generate('https://github.com/Tauhid219');
        $qrCodes['styleSquare'] = QrCode::size(150)->style('square')->generate('https://github.com/Tauhid219');
        $qrCodes['styleRound'] = QrCode::size(150)->style('round')->generate('https://github.com/Tauhid219');

        return view('qrcodegit', $qrCodes);
    }
}
