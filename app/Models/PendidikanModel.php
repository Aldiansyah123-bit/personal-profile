<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PendidikanModel extends Model
{
    public function AllData()
    {
        return DB::table('pendidikan')->get();
    }
    public function InsertData($data)
    {
        DB::table('pendidikan')->insert($data);
    }

    public function DetailData($id)
    {
        return DB::table('pendidikan')->where('id',$id)->first();
    }

    public function UpdateData($id, $data)
    {
        DB::table('pendidikan')
            ->where('id',$id)
            ->update($data);
    }

    public function DeleteData($id)
    {
        DB::table('pendidikan')
            ->where('id',$id)
            ->delete();
    }
}
