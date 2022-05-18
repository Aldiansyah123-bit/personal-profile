<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PendidikanModel;

class PendidikanController extends Controller
{
    public function __construct()
    {
        $this->PendidikanModel = new PendidikanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pendidikan',
            'pendidikan' => $this->PendidikanModel->AllData(),
        ];

        return view('admin/pendidikan/v_index', $data);
    }

    public function add()
    {
    
        $data = [
            'title' => 'Tambah Data Pendidikan',
        ];
        return view('admin/pendidikan/v_add', $data);
    }

    public function insert()
    {

        Request()->validate(
            [
                'nama_pendidikan' => 'required',
                'thn_pendidikan' => 'required',
                'tempat_pendidikan' => 'required',
                'thn_pendidikan' => 'required',
            ],
            [
                'nama_pendidikan.required' => 'Nama Pendidikan Wajib Diisi !!!',
                'thn_pendidikan.required' => 'Tahun Pendidikan Wajib Diisi !!!',
                'tempat_pendidikan.required' => 'Tahun Pendidikan Wajib Diisi !!!',
                'thn_pendidikan.required' => 'Tahun Pendidikan Wajib Diisi !!!',
            ]
        );

        $data = [
            'nama_pendidikan' => Request()->nama_pendidikan,
            'thn_pendidikan' => Request()->thn_pendidikan,
            'tempat_pendidikan' => Request()->tempat_pendidikan,
            'ket_pendidikan' => Request()->ket_pendidikan,
            
        ];
        $this->PendidikanModel->InsertData($data);

        return redirect('pendidikan')->with('status', 'Data Berhasil DiSimpan!');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Pendidikan',
            'pendidikan' => $this->PendidikanModel->DetailData($id),
        ];
        return view('admin/pendidikan/v_edit', $data);
    }

    public function update($id)
    {
        $data = [
            'nama_pendidikan' => Request()->nama_pendidikan,
            'thn_pendidikan' => Request()->thn_pendidikan,
            'tempat_pendidikan' => Request()->tempat_pendidikan,
            'ket_pendidikan' => Request()->ket_pendidikan,
        ];

        $this->PendidikanModel->UpdateData($id, $data);

        return redirect('pendidikan')->with('status', 'Data Berhasil DiUpdate !!!');
    }

    public function delete($id)
    {

        $this->PendidikanModel->DeleteData($id);
        return redirect('pendidikan')->with('status', 'Data Berhasil DiHapus !!!');
    }

}
