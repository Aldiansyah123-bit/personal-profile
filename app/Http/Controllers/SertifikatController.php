<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SertifikatModel;

class SertifikatController extends Controller
{
    public function __construct()
    {
        $this->SertifikatModel = new SertifikatModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Sertifikat',
            'sertifikat' => $this->SertifikatModel->AllData(),
        ];

        return view('admin/sertifikat/v_index', $data);
    }

    public function add()
    {
    
        $data = [
            'title' => 'Tambah Data Sertifikat',
        ];
        return view('admin/sertifikat/v_add', $data);
    }

    public function insert()
    {

        Request()->validate(
            [
                'nama_sertifikat' => 'required',
                'thn_sertifikat' => 'required',
            ],
            [
                'nama_sertifikat.required' => 'Nama Sertifikat Wajib Diisi !!!',
                'thn_sertifikat.required' => 'Tahun Sertifikat Wajib Diisi !!!',
            ]
        );

        $data = [
            'nama_sertifikat' => Request()->nama_sertifikat,
            'thn_sertifikat' => Request()->thn_sertifikat,
            
        ];
        $this->SertifikatModel->InsertData($data);

        return redirect('sertifikat')->with('status', 'Data Berhasil DiSimpan!');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Sertifikat',
            'sertifikat' => $this->SertifikatModel->DetailData($id),
        ];
        return view('admin/sertifikat/v_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_sertifikat' => Request()->nama_sertifikat,
            'thn_sertifikat' => Request()->thn_sertifikat,
        ];

        $this->SertifikatModel->UpdateData($id, $data);

        return redirect('sertifikat')->with('status', 'Data Berhasil DiUpdate !!!');
    }

    public function delete($id)
    {

        $this->SertifikatModel->DeleteData($id);
        return redirect('sertifikat')->with('status', 'Data Berhasil DiHapus !!!');
    }
}
