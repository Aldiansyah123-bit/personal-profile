<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutModel; 

class AboutController extends Controller
{
    public function __construct()
    {
        $this->AboutModel = new AboutModel();
    }

    public function index()
    {
        $data = [
            'title' => 'About',
            'about' => $this->AboutModel->AllData(),
        ];

        return view('admin/about/v_index', $data);
    }

    public function add()
    {
    
        $data = [
            'title' => 'Tambah Data About',
        ];
        return view('admin/about/v_add', $data);
    }

    public function insert()
    {

        Request()->validate(
            [
                'nama_skill' => 'required',
                'persen_skill' => 'required',
            ],
            [
                'nama_skill.required' => 'Nama Keahlian Wajib Diisi !!!',
                'persen_skill.required' => 'Keterangan Wajib Diisi !!!',
            ]
        );

        $data = [
            'judul_keahlian' => Request()->nama_keahlian,
            'keterangan' => Request()->keterangan,
            'nama_skill' => Request()->nama_skill,
            'persen_skill' => Request()->persen_skill,
            
        ];
        $this->AboutModel->InsertData($data);

        return redirect('about')->with('status', 'Data Berhasil DiSimpan!');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit About',
            'about' => $this->AboutModel->DetailData($id),
        ];
        return view('admin/about/v_edit', $data);
    }

    public function update($id)
    {

        Request()->validate(
            [
                'nama_skill' => 'required',
                'persen_skill' => 'required',
            ],
            [
                'nama_skill.required' => 'Nama Keahlian Wajib Diisi !!!',
                'persen_skill.required' => 'Keterangan Wajib Diisi !!!',
            ]
        );

        $data = [
            'judul_keahlian' => Request()->nama_keahlian,
            'keterangan' => Request()->keterangan,
            'nama_skill' => Request()->nama_skill,
            'persen_skill' => Request()->persen_skill,
            
        ];
        $this->AboutModel->UpdateData($id, $data);

        return redirect('about')->with('status', 'Data Berhasil DiUpdate !!!');
    }

    public function delete($id)
    {

        $this->AboutModel->DeleteData($id);
        return redirect('about')->with('status', 'Data Berhasil DiHapus !!!');
    }

}
