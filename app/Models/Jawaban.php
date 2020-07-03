<?php


namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Jawaban
{
    public static function get_all()
    {
        $jawabans = DB::table('jawabans')->get();
        return $jawabans;
    }

    // public static function get_one()
    // {
    //     $jawbaans = DB::table('jawabans')->where('pertanyaan_id', $pertanyaan_id)->get();
    //     // $jawabans = DB::table('jawabans')->get();
    //     return $jawbaans;
    // }

    public static function save($data)
    {
        $new_jawaban = DB::table('jawabans')->insert($data);
        return $new_jawaban;
    }
}
