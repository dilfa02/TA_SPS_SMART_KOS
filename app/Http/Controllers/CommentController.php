<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        Comment::create(['isi' => $request->input('isi')]);
        $keterangan = Session::get('keterangan');
        $komens = Comment::latest()->get();
        
        if ($keterangan != 'Semua') {
            $koss = Session::get('koss');
        } else {
            return redirect('SPK');
        }

        return view('SPK', compact('koss', 'komens'));
    }
}
