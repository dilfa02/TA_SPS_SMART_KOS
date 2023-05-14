<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kos;
use App\Models\Comment;

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
        $data = $request->all();
        $alternatif = [];

        foreach ($data as $key=>$value) {
            if ($request->filled($key) && $key != '_token') {
                $alternatif[$key] = $value;
            }
        }

        $koss = Kos::where($alternatif)->get();
        $ids = [];

        foreach ($koss as $key => $kos) {
            $kos->C1 = ($kos->C1 - Kos::min('C1')) / (Kos::max('C1') - Kos::min('C1')) * 0.292896825396825;
            $kos->C2 = (Kos::max('C2') - $kos->C2) / (Kos::max('C2') - Kos::min('C2')) * 0.192896825396825;
            $kos->C3 = ($kos->C3 - Kos::min('C3')) / (Kos::max('C3') - Kos::min('C3')) * 0.142896825396825;
            $kos->C4 = ($kos->C4 - Kos::min('C4')) / (Kos::max('C4') - Kos::min('C4')) * 0.109563492063492;
            $kos->C5 = ($kos->C5 - Kos::min('C5')) / (Kos::max('C5') - Kos::min('C5')) * 0.0845634920634921;
            $kos->C6 = (Kos::max('C6') - $kos->C6) / (Kos::max('C6') - Kos::min('C6')) * 0.0645634920634921;
            $kos->C7 = ($kos->C7 - Kos::min('C7')) / (Kos::max('C7') - Kos::min('C7')) * 0.0478968253968254;
            $kos->C8 = ($kos->C8 - Kos::min('C8')) / (Kos::max('C8') - Kos::min('C8')) * 0.0336111111111111;
            $kos->C9 = ($kos->C9 - Kos::min('C9')) / (Kos::max('C9') - Kos::min('C9')) * 0.0211111111111111;
            $kos->C10 = ($kos->C10 - Kos::min('C10')) / (Kos::max('C10') - Kos::min('C10')) * 0.010;
            array_push($ids, $kos->id);
        }

        $koss->map(function ($kos) {
            $kos->hasil = $kos->C1 + $kos->C2 + $kos->C3 + $kos->C4 + $kos->C5 + $kos->C6 + $kos->C7 + $kos->C8 + $kos->C9 + $kos->C10;
            return $kos;
        });

        $koss = $koss->sortByDesc('hasil');
        $koss = $koss;
        $komens = Comment::all();

        return view('hasil', compact('koss', 'ids', 'komens'));
    }

    public function filter(Request $request, $jenis) {
        $ids = $request->input('ids');

        if ($jenis == 'l') {
            $koss = Kos::whereIn('id', $ids)->where('jenis', 'L')->get();
        } elseif ($jenis == 'p') {
            $koss = Kos::whereIn('id', $ids)->where('jenis', 'P')->get();
        } elseif ($jenis == 's') {
            $koss = Kos::whereIn('id', $ids)->get();
        }

        foreach ($koss as $key => $kos) {
            $kos->C1 = ($kos->C1 - Kos::min('C1')) / (Kos::max('C1') - Kos::min('C1')) * 0.292896825396825;
            $kos->C2 = (Kos::max('C2') - $kos->C2) / (Kos::max('C2') - Kos::min('C2')) * 0.192896825396825;
            $kos->C3 = ($kos->C3 - Kos::min('C3')) / (Kos::max('C3') - Kos::min('C3')) * 0.142896825396825;
            $kos->C4 = ($kos->C4 - Kos::min('C4')) / (Kos::max('C4') - Kos::min('C4')) * 0.109563492063492;
            $kos->C5 = ($kos->C5 - Kos::min('C5')) / (Kos::max('C5') - Kos::min('C5')) * 0.0845634920634921;
            $kos->C6 = (Kos::max('C6') - $kos->C6) / (Kos::max('C6') - Kos::min('C6')) * 0.0645634920634921;
            $kos->C7 = ($kos->C7 - Kos::min('C7')) / (Kos::max('C7') - Kos::min('C7')) * 0.0478968253968254;
            $kos->C8 = ($kos->C8 - Kos::min('C8')) / (Kos::max('C8') - Kos::min('C8')) * 0.0336111111111111;
            $kos->C9 = ($kos->C9 - Kos::min('C9')) / (Kos::max('C9') - Kos::min('C9')) * 0.0211111111111111;
            $kos->C10 = ($kos->C10 - Kos::min('C10')) / (Kos::max('C10') - Kos::min('C10')) * 0.010;
        }

        $koss->map(function ($kos) {
            $kos->hasil = $kos->C1 + $kos->C2 + $kos->C3 + $kos->C4 + $kos->C5 + $kos->C6 + $kos->C7 + $kos->C8 + $kos->C9 + $kos->C10;
            return $kos;
        });

        $koss = $koss->sortByDesc('hasil');
        $koss = $koss;
        $komens = Comment::all();

        return view('hasil', compact('koss', 'ids', 'komens'));
    }


}
