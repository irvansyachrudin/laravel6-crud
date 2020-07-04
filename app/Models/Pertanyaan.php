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
    public static function find_by_id($id)
    {
        $pertanyaans = DB::table('pertanyaans')->where('id', '=', $id)->first();
        return $pertanyaans;
    }

    public static function update($id, $request)
    {
        $pertanyaans = DB::table('pertanyaans')
            ->where('id', '=', $id)
            ->update([
                'judul' => $request["judul"],
                'isi' => $request["isi"]
            ]);
        return $pertanyaans;
    }

    public static function destroy($id)
    {
        $deleted = DB::table('pertanyaans')
            ->where('id', '=', $id)
            ->delete();
        return $deleted;
    }

    public static function save($data)
    {

        $new_pertanyaan = DB::table('pertanyaans')->insert($data);
        return $new_pertanyaan;
    }
}
