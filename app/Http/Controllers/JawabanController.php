<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class JawabanController extends Controller
{
    public function index()
    {
        $jawabans = Jawaban::get_all();
        return view('jawaban.index', compact('jawabans'));
    }

    public function create()
    {
        return view('jawaban.form');
    }

    public function show($pertanyaan_id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $jawabans = DB::table('jawabans')
            ->select('jawabans.id as id', 'jawabans.isi as isi_jawaban', 'pertanyaans.id as pertanyaan_id', 'pertanyaans.isi as isi_pertanyaan')
            ->rightJoin('pertanyaans', 'jawabans.pertanyaan_id', '=', 'pertanyaans.id')
            ->where('jawabans.pertanyaan_id', $pertanyaan_id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        $jwbn_count = DB::table('jawabans')
            ->where('pertanyaan_id', '=', $pertanyaan_id)
            ->count();
        if ($jwbn_count > 0) {
            $pertanyaanya = DB::table('pertanyaans')->distinct()
                ->where('id', '=', $pertanyaan_id)
                ->get();
            return view('jawaban.detail', ['jawabans' => $jawabans, 'pertanyaannya' => $pertanyaanya]);
        } else {

            return view('jawaban.detail', ['jawabans' => $pertanyaan_id]);
        }
    }


    public function tambah(Request $request, $pertanyaan_id)
    {
        $data = $request->all();
        $data["pertanyaan_id"] = $pertanyaan_id;
        // dd($data);
        unset($data["_token"]);
        $jawaban = Jawaban::save($data);
        if ($jawaban) {
            // return redirect()->route('jawaban/', ['id' => 1]);
            return redirect()->to('jawaban/' . $pertanyaan_id);
        }
    }

    public function store(Request $request)
    {

        $data = $request->all();
        unset($data["_token"]);
        $jawaban = Jawaban::save($data);
        if ($jawaban) {
            return redirect('/jawaban');
        }
    }
}
