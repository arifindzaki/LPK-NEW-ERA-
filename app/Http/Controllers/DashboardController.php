<?php

namespace App\Http\Controllers;

use App\Models\alumniModel;
use App\Models\contactModel;
use App\Models\galeryModel;
use App\Models\pelatihanModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        $data = [
            'title' => 'home',
            'dataContact' => contactModel::latest()->get(),
            'dataPelatihan' => pelatihanModel::latest()->get(),
            'dataGalery' => galeryModel::latest()->get(),
        ];
        return view('home',$data);
    }
    
    public function about(){
        return view('about',['title' => 'about']);
    
    }
    public function pelatihan(){
        $data = [
            'title' => 'pelatihan',
            'dataPelatihan' => pelatihanModel::latest()->get(),
            // 'dataGalery' => galeryModel::latest()->get(),
        ];
        return view('pelatihan',$data);
    }
    public function alumni(){
        $data = [
            'title' => 'alumni',
            'dataAlumni' => alumniModel::latest()->get(),
        ];
        return view('alumni',$data);
    }
    public function galeri(){
        $data = [
            'title' => 'galeri',
            'dataGalery' => galeryModel::latest()->get(),
        ];
        return view('galeri',$data);
    }

    public function belajar(){
        $data = [
            'title' => 'belajar',
            'dataBelajar' => belajarModel::latest()->get(),
        ];
        return view('galeri',$data);
    }

    // public function contact(){
    //     return view('contact',[
    //         'title' =>'contact',
    //         'dataContact' => contactModel::latest()->get(),
    //     ]);
    // }
    public function contact(){
        $data = [
            'title' => 'contact',
            'dataContact' => contactModel::latest()->limit(1)->get(),
        ];
        return view('contact',$data); //admin.halaman.admin
    }
}
