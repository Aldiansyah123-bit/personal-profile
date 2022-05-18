<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
 

class WebModel extends Model
{
    public function DataAbout()
    {
        return DB::table('about')->get();
    }

    public function DataPendidikan()
    {
        return DB::table('pendidikan')->get();
    }

    public function DataPekerjaan()
    {
        return DB::table('pekerjaan')->get();
    }

    public function DataSertifikat()
    {
        return DB::table('sertificate')->get();
    }

    public function DataOrganisasi()
    {
        return DB::table('organisasi')->get();
    }

    public function DataUser()
    {
       
        return DB::table('users')->get();
    }

    public function InsertData($data)
    {
        DB::table('question')->insert($data);
    }
}
