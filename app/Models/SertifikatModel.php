<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SertifikatModel extends Model
{
    public function AllData()
    {
        return DB::table('sertificate')->get();
    }
    public function InsertData($data)
    {
        DB::table('sertificate')->insert($data);
    }

    public function DetailData($id)
    {
        return DB::table('sertificate')->where('id',$id)->first();
    }

    public function UpdateData($id, $data)
    {
        DB::table('sertificate')
            ->where('id',$id)
            ->update($data);
    }

    public function DeleteData($id)
    {
        DB::table('sertificate')
            ->where('id',$id)
            ->delete();
    }
}
