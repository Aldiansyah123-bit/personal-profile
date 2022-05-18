<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PekerjaanModel;

class PekerjaanController extends Controller
{
    public function __construct()
    {
        $this->PekerjaanModel = new PekerjaanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pekerjaan',
            'pekerjaan' => $this->PekerjaanModel->AllData(),
        ];

        return view('admin/pekerjaan/v_index', $data);
    }

    public function add()
    {
    
        $data = [
            'title' => 'Tambah Data Pekerjaan',
        ];
        return view('admin/pekerjaan/v_add', $data);
    }

    public function insert()
    {

        Request()->validate(
            [
                'nama_pekerjaan' => 'required',
                'thn_pekerjaan' => 'required',
                'tempat_pekerjaan' => 'required',
                'ket_pekerjaan' => 'required',
            ],
            [
                'nama_pekerjaan.required' => 'Nama Pekerjaan Wajib Diisi !!!',
                'thn_pekerjaan.required' => 'Tahun Pekerjaan Wajib Diisi !!!',
                'tempat_pekerjaan.required' => 'Tahun Pekerjaan Wajib Diisi !!!',
                'ket_pekerjaan.required' => 'Tahun Pekerjaan Wajib Diisi !!!',
            ]
        );

        $data = [
            'nama_pekerjaan' => Request()->nama_pekerjaan,
            'thn_pekerjaan' => Request()->thn_pekerjaan,
            'tempat_pekerjaan' => Request()->tempat_pekerjaan,
            'ket_pekerjaan' => Request()->ket_pekerjaan,
            
        ];
        $this->PekerjaanModel->InsertData($data);

        return redirect('pekerjaan')->with('status', 'Data Berhasil DiSimpan!');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Pekerjaan',
            'pekerjaan' => $this->PekerjaanModel->DetailData($id),
        ];
        return view('admin/pekerjaan/v_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_pekerjaan' => Request()->nama_pekerjaan,
            'thn_pekerjaan' => Request()->thn_pekerjaan,
            'tempat_pekerjaan' => Request()->tempat_pekerjaan,
            'ket_pekerjaan' => Request()->ket_pekerjaan,
        ];

        $this->PekerjaanModel->UpdateData($id, $data);

        return redirect('pekerjaan')->with('status', 'Data Berhasil DiUpdate !!!');
    }

    public function delete($id)
    {

        $this->PekerjaanModel->DeleteData($id);
        return redirect('pekerjaan')->with('status', 'Data Berhasil DiHapus !!!');
    }
}
