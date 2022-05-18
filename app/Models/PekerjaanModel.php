<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PekerjaanModel extends Model
{
    public function AllData()
    {
        return DB::table('pekerjaan')->get();
    }
    public function InsertData($data)
    {
        DB::table('pekerjaan')->insert($data);
    }

    public function DetailData($id)
    {
        return DB::table('pekerjaan')->where('id',$id)->first();
    }

    public function UpdateData($id, $data)
    {
        DB::table('pekerjaan')
            ->where('id',$id)
            ->update($data);
    }

    public function DeleteData($id)
    {
        DB::table('pekerjaan')
            ->where('id',$id)
            ->delete();
    }
}
