<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;

class AlternatifController extends Controller
{
    public function hasil_all()
    {
        $koss = Kos::paginate(11);
        $komens = Comment::latest()->get();

        Session::put('filters', []);
        Session::put('koss', Kos::all());
        Session::put('pilih', true);
        Session::put('keterangan', "Semua");

        return view('SPK', compact('koss', 'komens'));
    }

    public function hasil(Request $request)
    {
        $query = Kos::query();
        $filters = $request->except('_token');
        $pilih = false;
        Session::put('filters', $filters);

        if ($request->kk_alternatif) {
            $query->where('C1', $request->kk_alternatif);
            $pilih = true;
        }
        if ($request->harga_alternatif) {
            $query->where('C2', $request->harga_alternatif);
            $pilih = true;
        }
        if ($request->fk_alternatif) {
            $query->where('C3', $request->fk_alternatif);
            $pilih = true;
        }
        if ($request->kkm_alternatif) {
            $query->where('C4', $request->kkm_alternatif);
            $pilih = true;
        }
        if ($request->keamanan_alternatif) {
            $query->where('C5', $request->keamanan_alternatif);
            $pilih = true;
        }
        if ($request->jarak_alternatif) {
            $query->where('C6', $request->jarak_alternatif);
            $pilih = true;
        }
        if ($request->lingkungan_alternatif) {
            $query->where('C7', $request->lingkungan_alternatif);
            $pilih = true;
        }
        if ($request->fu_alternatif) {
            $query->where('C8', $request->fu_alternatif);
            $pilih = true;
        }
        if ($request->lk_alternatif) {
            $query->where('C9', $request->lk_alternatif);
            $pilih = true;
        }
        if ($request->parkiran_alternatif) {
            $query->where('C10', $request->parkiran_alternatif);
            $pilih = true;
        }

        $koss = $query->get();
        foreach ($koss as $key => $kos) {
            $kos->C1 = ($kos->C1 - Kos::min('C1')) / (Kos::max('C1') - Kos::min('C1')) * (1 / 1 + 1 / 2 + 1 / 3 + 1 / 4 + 1 / 5 + 1 / 6 + 1 / 7 + 1 / 8 + 1 / 9 + 1 / 10) / 10;
            $kos->C2 = (Kos::max('C2') - $kos->C2) / (Kos::max('C2') - Kos::min('C2')) * (0 + 1 / 2 + 1 / 3 + 1 / 4 + 1 / 5 + 1 / 6 + 1 / 7 + 1 / 8 + 1 / 9 + 1 / 10) / 10;
            $kos->C3 = ($kos->C3 - Kos::min('C3')) / (Kos::max('C3') - Kos::min('C3')) * (0 + 0 + 1 / 3 + 1 / 4 + 1 / 5 + 1 / 6 + 1 / 7 + 1 / 8 + 1 / 9 + 1 / 10) / 10;
            $kos->C4 = ($kos->C4 - Kos::min('C4')) / (Kos::max('C4') - Kos::min('C4')) * (0 + 0 + 0 + 1 / 4 + 1 / 5 + 1 / 6 + 1 / 7 + 1 / 8 + 1 / 9 + 1 / 10) / 10;
            $kos->C5 = ($kos->C5 - Kos::min('C5')) / (Kos::max('C5') - Kos::min('C5')) * (0 + 0 + 0 + 0 + 1 / 5 + 1 / 6 + 1 / 7 + 1 / 8 + 1 / 9 + 1 / 10) / 10;
            $kos->C6 = (Kos::max('C6') - $kos->C6) / (Kos::max('C6') - Kos::min('C6')) * (0 + 0 + 0 + 0 + 0 + 1 / 6 + 1 / 7 + 1 / 8 + 1 / 9 + 1 / 10) / 10;
            $kos->C7 = ($kos->C7 - Kos::min('C7')) / (Kos::max('C7') - Kos::min('C7')) * (0 + 0 + 0 + 0 + 0 + 0 + 1 / 7 + 1 / 8 + 1 / 9 + 1 / 10) / 10;
            $kos->C8 = ($kos->C8 - Kos::min('C8')) / (Kos::max('C8') - Kos::min('C8')) * (0 + 0 + 0 + 0 + 0 + 0 + 0 + 1 / 8 + 1 / 9 + 1 / 10) / 10;
            $kos->C9 = ($kos->C9 - Kos::min('C9')) / (Kos::max('C9') - Kos::min('C9')) * (0 + 0 + 0 + 0 + 0 + 0 + 0 + 0 + 1 / 9 + 1 / 10) / 10;
            $kos->C10 = ($kos->C10 - Kos::min('C10')) / (Kos::max('C10') - Kos::min('C10')) * (0 + 0 + 0 + 0 + 0 + 0 + 0 + 0 + 0 + 1 / 10) / 10;
        }

        $koss->map(function ($kos) {
            $kos->hasil = $kos->C1 + $kos->C2 + $kos->C3 + $kos->C4 + $kos->C5 + $kos->C6 + $kos->C7 + $kos->C8 + $kos->C9 + $kos->C10;
            return $kos;
        });

        $koss = $koss->sortByDesc('hasil');
        $komens = Comment::latest()->get();

        Session::put('koss', $koss);
        Session::put('pilih', $pilih);
        Session::put('keterangan', "Hasil Rekomendasi");

        return view('SPK', compact('koss', 'komens'));
    }

    public function filter(Request $request, $jenis)
    {
        $filters = Session::get('filters');
        $koss = Session::get('koss');
        $komens = Comment::latest()->get();

        if ($jenis == 'l') {
            $koss = $koss->filter(function ($item) {
                return $item->Jenis == 'L';
            });
        } elseif ($jenis == 'p') {
            $koss = $koss->filter(function ($item) {
                return $item->Jenis == 'P';
            });
        }

        return view('SPK', compact('koss', 'komens'));
    }
}