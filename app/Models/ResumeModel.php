<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ResumeModel extends Model
{
    public function AllData()
    {
        return DB::table('resumes')->get();
    }
    public function InsertData($data)
    {
        DB::table('resumes')->insert($data);
    }

    public function DetailData($id)
    {
        return DB::table('resumes')->where('id',$id)->first();
    }

    public function UpdateData($id, $data)
    {
        DB::table('resumes')
            ->where('id',$id)
            ->update($data);
    }

    public function DeleteData($id)
    {
        DB::table('resumes')
            ->where('id',$id)
            ->delete();
    }
}
