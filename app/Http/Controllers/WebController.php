<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use App\Models\WebModel; 
use App\Models\PertanyaanModel;

class WebController extends Controller
{
    public function __construct()
    {
        $this->WebModel = new WebModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Profil Saya',
            'about' => $this->WebModel->DataAbout(),
            'pendidikan' => $this->WebModel->DataPendidikan(),
            'pekerjaan' => $this->WebModel->DataPekerjaan(),
            'sertifikat' => $this->WebModel->DataSertifikat(),
            'organisasi' => $this->WebModel->DataOrganisasi(),
            'user' => $this->WebModel->DataUser(),
        ];

        return view('layouts.frontend', $data);
    }

    public function insert()
    {

        Request()->validate(
            [
                'name' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'pesan' => 'required',
            ],
            [
                'name.required' => 'Nama Wajib Diisi !!!',
                'email.required' => 'E-Mail Wajib Diisi !!!',
                'subject.required' => 'Subject Wajib Diisi !!!',
                'pesan.required' => 'Message Wajib Diisi !!!',
            ]
        );

        $data = [
            'name' => Request()->name,
            'email' => Request()->email,
            'subject' => Request()->subject,
            'pesan' => Request()->pesan,
            
        ];
        $this->WebModel->InsertData($data);

        return redirect('/')->with('status', 'Data Berhasil DiSimpan!');
    }

}
