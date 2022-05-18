<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class OrganisasiModel extends Model
{
    public function AllData()
    {
        return DB::table('organisasi')->get();
    }
    public function InsertData($data)
    {
        DB::table('organisasi')->insert($data);
    }

    public function DetailData($id)
    {
        return DB::table('organisasi')->where('id',$id)->first();
    }

    public function UpdateData($id, $data)
    {
        DB::table('organisasi')
            ->where('id',$id)
            ->update($data);
    }

    public function DeleteData($id)
    {
        DB::table('organisasi')
            ->where('id',$id)
            ->delete();
    }
}
