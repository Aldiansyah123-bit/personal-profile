<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AboutModel extends Model
{
    public function AllData()
    {
        return DB::table('about')->get();
    }

    public function InsertData($data)
    {
        DB::table('about')->insert($data);
    }

    public function DetailData($id)
    {
        return DB::table('about')->where('id',$id)->first();
    }

    public function UpdateData($id, $data)
    {
        DB::table('about')
            ->where('id',$id)
            ->update($data);
    }

    public function DeleteData($id)
    {
        DB::table('about')
            ->where('id',$id)
            ->delete();
    }

}
