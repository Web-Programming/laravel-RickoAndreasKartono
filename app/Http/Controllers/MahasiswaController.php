<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;


class MahasiswaController extends Controller
{
    public function insertElq()
    {
        //Singel Assignment
        //$mhs = new Mahasiswa();
        //$mhs->nama = "Ricko Andreas Kartono";
        //$mhs->npm = "2226250037";
        //$mhs->tempat_lahir = "Tokyo";
        //$mhs->tanggal_lahir = date("Y-m-d"); //tanggal hari ini
        //$mhs->save();
        //dump($mhs);
        //}

        //Mass Assignment
        $mhs = Mahasiswa::insert(
            [
                [
                    'nama' => 'Asde',
                    'npm' => '2226250038',
                    'tempat_lahir' => 'Tokyo',
                    'tanggal_lahir' => date("Y-m-d")
                ],
                [
                    'nama' => 'Abc',
                    'npm' => '2226250025',
                    'tempat_lahir' => 'London',
                    'tanggal_lahir' => date("Y-m-d")
                ]
            ]
        );
        dump($mhs);
    }

    public function updateElq()
    {
        $mhs = Mahasiswa::where('npm', '2226250001')->first();
        $mhs->nama = 'Johan';
        $mhs->sabe();
        dump($mhs);
    }

    public function deleteElq()
    {
        $mhs = Mahasiswa::where('npm', '2226250038')->first();
        $mhs->delete();
        dump($mhs);
    }

    public function selectElq()
    {
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', ['allmahasiswa' => $mahasiswa, 'kampus' => $kampus]);
    }

    public function allJoinElq()
    {
        $kampus = "Universitas Multi Data Palembang";
        $mahasiswa = Mahasiswa::has('prodi')->get();
        return view('mahasiswa.index', ['allmahasiswa'=> $mahasiswa, 'kampus' => $kampus]);
    }
}
