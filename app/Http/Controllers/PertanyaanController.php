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

    public function edit($id)
    {
        $pertanyaans = Pertanyaan::find_by_id($id);
        return view('pertanyaan.edit', compact('pertanyaans'));
    }

    public function update($id, Request $request)
    {
        // dd($request);
        $pertanyaans = Pertanyaan::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function destroy($id)
    {
        // dd($request);
        $deleted = Pertanyaan::destroy($id);
        return redirect('/pertanyaan');
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
