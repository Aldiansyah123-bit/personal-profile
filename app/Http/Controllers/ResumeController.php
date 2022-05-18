<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResumeModel; 

class ResumeController extends Controller
{
    public function __construct()
    {
        $this->ResumeModel = new ResumeModel();
    }
    public function index()
    {
        $data = [
            'title' => 'Resume',
            'resume' => $this->ResumeModel->AllData(),
        ];

        return view('admin/resume/v_index', $data);
    }

    public function add()
    {
    
        $data = [
            'title' => 'Tambah Data Resume',
        ];
        return view('admin/resume/v_add', $data);
    }

    public function insert()
    {
        $data = [
            'nama_pendidikan' => Request()->nama_pendidikan,
            'thn_pendidikan' => Request()->thn_pendidikan,
            'tempat_pendidikan' => Request()->tempat_pendidikan,
            'ket_pendidikan' => Request()->ket_pendidikan,
            'nama_sertifikat' => Request()->nama_sertifikat,
            'thn_sertifikat' => Request()->thn_sertifikat,
            'nama_pekerjaan' => Request()->nama_pekerjaan,
            'thn_pekerjaan' => Request()->thn_pekerjaan,
            'tempat_pekerjaan' => Request()->tempat_pekerjaan,
            'ket_pekerjaan' => Request()->ket_pekerjaan,
            'nama_organisasi' => Request()->nama_organisasi,
            'thn_jabatan' => Request()->thn_jabatan,
            'ket_organisasi' => Request()->ket_organisasi,
            
        ];
        $this->ResumeModel->InsertData($data);

        return redirect('resume')->with('status', 'Data Berhasil DiSimpan!');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Resume',
            'resume' => $this->ResumeModel->DetailData($id),
        ];
        return view('admin/resume/v_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_pendidikan' => Request()->nama_pendidikan,
            'thn_pendidikan' => Request()->thn_pendidikan,
            'tempat_pendidikan' => Request()->tempat_pendidikan,
            'ket_pendidikan' => Request()->ket_pendidikan,
            'nama_sertifikat' => Request()->nama_sertifikat,
            'thn_sertifikat' => Request()->thn_sertifikat,
            'nama_pekerjaan' => Request()->nama_pekerjaan,
            'thn_pekerjaan' => Request()->thn_pekerjaan,
            'tempat_pekerjaan' => Request()->tempat_pekerjaan,
            'ket_pekerjaan' => Request()->ket_pekerjaan,
            'nama_organisasi' => Request()->nama_organisasi,
            'thn_jabatan' => Request()->thn_jabatan,
            'ket_organisasi' => Request()->ket_organisasi,
        ];

        $this->ResumeModel->UpdateData($id, $data);

        return redirect('resume')->with('status', 'Data Berhasil DiUpdate !!!');
    }

    public function delete($id)
    {

        $this->ResumeModel->DeleteData($id);
        return redirect('resume')->with('status', 'Data Berhasil DiHapus !!!');
    }
}
