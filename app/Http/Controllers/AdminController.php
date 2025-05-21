<?php

namespace App\Http\Controllers;

use App\Models\adminModel;
use App\Models\alumniModel;
use App\Models\contactModel;
use App\Models\galeryModel;
use App\Models\pelatihanModel;
use App\Models\mahasiswaModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function beranda(){
        $data = [
            'title' => 'beranda',
            // 'dataBeranda' => berandaModel::latest()->get(),
        ];
        return view('admin.halaman.beranda',$data);
    }

    public function pelatihan(){
        $data = [
            'title' => 'pelatihan',
            'dataPelatihan' => pelatihanModel::latest()->get(),
        ];
        return view('admin.halaman.pelatihan',$data);
    }
    public function admin(){
        $data = [
            'title' => 'admin',
            'dataAdmin' => adminModel::latest()->get(),
        ];
        return view('admin.halaman.admin',$data);
    }
    
    public function mahasiswa(){
        $data = [
            'title' => 'mahasiswa',
            'dataMahasiswa' => mahasiswaModel::latest()->get(),
        ];
        return view('admin.halaman.mahasiswa',$data);
    }

    public function alumni(){
        $data = [
            'title' => 'alumni',
            'dataAlumni' => alumniModel::latest()->get(),
        ];
        return view('admin.halaman.alumni',$data);
    }

    public function galery(){
        $data = [
            'title' => 'galery',
            'dataGalery' => galeryModel::latest()->get(),
        ];
        return view('admin.halaman.galery',$data);
    }

    public function contact(){
        $data = [
            'title' => 'contact',
            'dataContact' => contactModel::latest()->get(),
        ];
        return view('admin.halaman.contact',$data);
    }
    // public function login(){
    //     $data = [
    //         'title' => 'login',
    //         // 'dataLogin' => pelatihan::latest()->get(),
    //     ];
    //     return view('admin.login',$data);
    // }

    // tambah data

    public function tambahAdmin(){
        $data = [
            'title' => 'tambahAdmin',
            // 'dataGalery' => galeryModel::latest()->get(),
        ];
        return view('admin.halaman.tambahadmin',$data);
    }
    public function tambahGalery(){
        $data = [
            'title' => 'tambahGalery',
            // 'dataGalery' => galeryModel::latest()->get(),
        ];
        return view('admin.halaman.tambahgalery',$data);
    }

    
}
