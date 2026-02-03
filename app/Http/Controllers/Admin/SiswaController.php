<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index()
    {
        $data = [
             'title' => 'Data Siswa',
            'siswa' => Siswa::all()
        ];

        return view('admin.data-siswa', $data);
    }
}
