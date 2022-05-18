<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel; 

class PertanyaanController extends Controller
{
    public function __construct()
    {
        $this->PertanyaanModel = new PertanyaanModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Pertanyaan',
            'pertanyaan' => $this->PertanyaanModel->AllData(),
        ];

        return view('admin/pertanyaan/v_index', $data);
    }

    public function delete($id)
    {

        $this->PertanyaanModel->DeleteData($id);
        return redirect('pertanyaan')->with('status', 'Data Berhasil DiHapus !!!');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Detail Pertanyaan',
            'pertanyaan' => $this->PertanyaanModel->DetailData($id),
        ];
        return view('admin/pertanyaan/v_edit', $data);
    }
    
    
}
