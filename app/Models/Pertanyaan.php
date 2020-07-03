<?php


namespace App\Models;

// use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pertanyaan
{
    public static function get_all()
    {
        $pertanyaans = DB::table('pertanyaans')->get();
        return $pertanyaans;
    }

    public static function save($data)
    {

        $new_pertanyaan = DB::table('pertanyaans')->insert($data);
        return $new_pertanyaan;
    }
}
