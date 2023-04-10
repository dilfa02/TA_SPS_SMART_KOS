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
        $kondisikamar = $request->kondisikamar;
        $harga = $request->harga;
        $fasilitaskamar = $request->fasilitaskamar;
        $kondisikamarmandi = $request->kondisikamarmandi;
        $keamanan = $request->keamanan;
        $jarak = $request->jarak;
        $lingkungan = $request->lingkungan;
        $fasilitasumum = $request->fasilitasumum;
        $luaskamar = $request->luaskamar;
        $parkiran = $request->parkiran;

        // Tulis rumus SPK-nya disini baru kirim hasilnya ke view hasil.blade.php melalui compact
        // Misalnya rumusnya tuh :
        
        dd($kondisikamar, $harga, $fasilitaskamar, $kondisikamarmandi, $keamanan, $jarak, $lingkungan, $fasilitasumum, $luaskamar, $parkiran);
        $hasil = $kondisikamar + $harga + $fasilitaskamar + $kondisikamarmandi + $keamanan + $jarak + $lingkungan + $fasilitasumum + $luaskamar + $parkiran;

        return view('hasil', compact('hasil'));
    }
}


