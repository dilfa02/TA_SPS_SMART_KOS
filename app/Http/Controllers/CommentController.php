<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Comment;
use App\Models\Kos;

class CommentController extends Controller
{
    public function store (Request $request) {
        Comment::create(['isi' => $request->input('isi')]);
        if ($request->ids) {
            $ids = $request->input('ids');
            $koss = Kos::whereIn('id', $ids)->get();
            $pilih = true;

            foreach ($koss as $key => $kos) {
                $kos->C1 = ($kos->C1 - Kos::min('C1')) / (Kos::max('C1') - Kos::min('C1')) * (1/1+1/2+1/3+1/4+1/5+1/6+1/7+1/8+1/9+1/10)/10;
                $kos->C2 = (Kos::max('C2') - $kos->C2) / (Kos::max('C2') - Kos::min('C2')) * (0+1/2+1/3+1/4+1/5+1/6+1/7+1/8+1/9+1/10)/10;
                $kos->C3 = ($kos->C3 - Kos::min('C3')) / (Kos::max('C3') - Kos::min('C3')) * (0+0+1/3+1/4+1/5+1/6+1/7+1/8+1/9+1/10)/10;
                $kos->C4 = ($kos->C4 - Kos::min('C4')) / (Kos::max('C4') - Kos::min('C4')) * (0+0+0+1/4+1/5+1/6+1/7+1/8+1/9+1/10)/10;
                $kos->C5 = ($kos->C5 - Kos::min('C5')) / (Kos::max('C5') - Kos::min('C5')) * (0+0+0+0+1/5+1/6+1/7+1/8+1/9+1/10)/10;
                $kos->C6 = (Kos::max('C6') - $kos->C6) / (Kos::max('C6') - Kos::min('C6')) * (0+0+0+0+0+1/6+1/7+1/8+1/9+1/10)/10;
                $kos->C7 = ($kos->C7 - Kos::min('C7')) / (Kos::max('C7') - Kos::min('C7')) * (0+0+0+0+0+0+1/7+1/8+1/9+1/10)/10;
                $kos->C8 = ($kos->C8 - Kos::min('C8')) / (Kos::max('C8') - Kos::min('C8')) * (0+0+0+0+0+0+0+1/8+1/9+1/10)/10;
                $kos->C9 = ($kos->C9 - Kos::min('C9')) / (Kos::max('C9') - Kos::min('C9')) * (0+0+0+0+0+0+0+0+1/9+1/10)/10;
                $kos->C10 = ($kos->C10 - Kos::min('C10')) / (Kos::max('C10') - Kos::min('C10')) * (0+0+0+0+0+0+0+0+0+1/10)/10;
            }

            $koss->map(function ($kos) {
                $kos->hasil = $kos->C1 + $kos->C2 + $kos->C3 + $kos->C4 + $kos->C5 + $kos->C6 + $kos->C7 + $kos->C8 + $kos->C9 + $kos->C10;
                return $kos;
            });

            $koss = $koss->sortByDesc('hasil');
            $koss = $koss;
        }
        else {
            $koss = [];
            $ids = [];
            $pilih = false;
        }

        $komens = Comment::latest()->get();
        return view('SPK_hasil', compact('koss', 'ids', 'komens', 'pilih'));
    }
}
