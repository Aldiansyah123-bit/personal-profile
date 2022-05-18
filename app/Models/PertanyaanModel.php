<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PertanyaanModel extends Model
{
    public function AllData()
    {
        return DB::table('question')->get();
    }

    public function InsertData($data)
    {
        DB::table('question')->insert($data);
    }

    public function DetailData($id)
    {
        return DB::table('question')->where('id',$id)->first();
    }

    public function UpdateData($id, $data)
    {
        DB::table('question')
            ->where('id',$id)
            ->update($data);
    }

    public function DeleteData($id)
    {
        DB::table('question')
            ->where('id',$id)
            ->delete();
    }
}
