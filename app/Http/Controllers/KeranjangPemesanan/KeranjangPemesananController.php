<?php

namespace App\Http\Controllers\KeranjangPemesanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KeranjangPemesananController extends Controller
{
    public function keranjangPemesanan()
    {
        return view('keranjangpemesanan.index');
    }
}
