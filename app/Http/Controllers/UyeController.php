<?php

namespace App\Http\Controllers;

use App\Models\Meslek;
use Illuminate\Http\Request;

class UyeController extends Controller
{
    public function index()
    {

        $meslekler = Meslek::all();
        $uyeler = $meslekler->uyeler;

        return view('sayfalar.hizmetler', compact('meslekler', 'uyeler'));
    }
}
