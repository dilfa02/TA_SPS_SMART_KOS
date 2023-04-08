<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function pilih(Request $request)
    {
        $pilihan1 = $request->pilihan1;
        $pilihan2 = $request->pilihan2;
        $pilihan3 = $request->pilihan3;
        return view('mencari alternatif', compact('pilihan1', 'pilihan2', 'pilihan3'));
    }

    public function tampil()
    {
        [$pilihan1, $pilihan2, $pilihan3] = '';
        return view('mencari alternatif', compact('pilihan1', 'pilihan2', 'pilihan3'));
    }

    public function hasil(Request $request)
    {
        $keamanan = $request->keamanan;
        $lingkungan = $request->lingkungan;
        $kebersihan = $request->kebersihan;

        // Tulis rumus SPK-nya disini baru kirim hasilnya ke view hasil.blade.php melalui compact
        // Misalnya rumusnya tuh :
        dd($keamanan, $lingkungan, $kebersihan);
        $hasil = $keamanan + $lingkungan + $kebersihan;

        return view('hasil', compact('hasil'));
    }
}


