<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrganisasiModel;

class OrganisasiController extends Controller
{
    public function __construct()
    {
        $this->OrganisasiModel = new OrganisasiModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Organisasi',
            'organisasi' => $this->OrganisasiModel->AllData(),
        ];

        return view('admin/organisasi/v_index', $data);
    }

    public function add()
    {
    
        $data = [
            'title' => 'Tambah Data Oraganisasi',
        ];
        return view('admin/organisasi/v_add', $data);
    }

    public function insert()
    {

        Request()->validate(
            [
                'nama_organisasi' => 'required',
                'thn_jabatan' => 'required',
                'ket_organisasi' => 'required',
            ],
            [
                'nama_organisasi.required' => 'Nama Pekerjaan Wajib Diisi !!!',
                'thn_jabatan.required' => 'Tahun Pekerjaan Wajib Diisi !!!',
                'ket_organisasi.required' => 'Tahun Pekerjaan Wajib Diisi !!!',
            ]
        );

        $data = [
            'nama_organisasi' => Request()->nama_organisasi,
            'thn_jabatan' => Request()->thn_jabatan,
            'ket_organisasi' => Request()->ket_organisasi,
            
        ];
        $this->OrganisasiModel->InsertData($data);

        return redirect('organisasi')->with('status', 'Data Berhasil DiSimpan!');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Oranisasi',
            'organisasi' => $this->OrganisasiModel->DetailData($id),
        ];
        return view('admin/organisasi/v_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_organisasi' => Request()->nama_organisasi,
            'thn_jabatan' => Request()->thn_jabatan,
            'ket_organisasi' => Request()->ket_organisasi,
        ];

        $this->OrganisasiModel->UpdateData($id, $data);

        return redirect('organisasi')->with('status', 'Data Berhasil DiUpdate !!!');
    }

    public function delete($id)
    {

        $this->OrganisasiModel->DeleteData($id);
        return redirect('organisasi')->with('status', 'Data Berhasil DiHapus !!!');
    }
}
