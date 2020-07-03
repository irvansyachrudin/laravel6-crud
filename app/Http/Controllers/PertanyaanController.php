<?php

namespace App\Http\Controllers;

use App\Models\Pertanyaan;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaans = Pertanyaan::get_all();
        return view('pertanyaan.index', compact('pertanyaans'));
    }

    public function create()
    {
        return view('pertanyaan.form');
    }

    public function store(Request $request)
    {

        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = Pertanyaan::save($data);
        if ($pertanyaan) {
            return redirect('/pertanyaan');
        }
    }
}
