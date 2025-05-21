<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelatihanModel;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

// use App\Http\Controllers\AdminController;



class pelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $data = [
            'title' => 'tambahPelatihan',
            'dataPelatihan' => pelatihanModel::latest()->get(),
        ];
        return view('admin.halaman.tambahpelatihan',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'txtjudul'     => 'required|min:5',
            'txtdesk'   => 'required|min:5',
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        //upload image
        $image = $request->file('image');
        $foto = Str::random(5).'.'.$image->getClientOriginalExtension();
        $image->move('img/gambar', $foto);

        //create post
        pelatihanModel::create([
            'judul'     => $request->txtjudul,
            'deskripsi'   => $request->txtdesk,
            'image'     => $foto,
        ]);

        //redirect to index
        return redirect()->route('pelatihan.view')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get post by ID
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'title' => 'tambahPelatihan',
            'EditPelatihan' => pelatihanModel::findOrFail($id),
        ];
        return view('admin.halaman.editpelatihan',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate form
        $this->validate($request, [
            'txtjudul'     => 'required|min:5',
            'txtdesk'   => 'required|min:5',
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);
        $mengedit= pelatihanModel::findOrFail($id);

        if ($request->hasFile('image')) {
            $edit_path = 'img/gambar/' . $mengedit->image;
            if (file_exists($edit_path)) {
                unlink($edit_path);
            } 
            $image = $request->file('image');
            $foto = Str::random(5).'.'.$image->getClientOriginalExtension();
            $image->move('img/gambar/', $foto);
    
            $mengedit->update([
                'judul'     => $request->txtjudul,
                'deskripsi'   => $request->txtdesk,
                'image'     => $foto,
            ]);
    
            //redirect to index
            return redirect()->route('pelatihan.view')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            $mengedit->update([
                'judul'     => $request->txtjudul,
                'deskripsi'   => $request->txtdesk,
            ]);
            return redirect()->route('pelatihan.view')->with(['success' => 'Data Berhasil Disimpan!']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    ///**
    //  * destroy
    //  *
    //  * @param  mixed $post
    //  * @return void
    //  */
    public function hapus(string $id)
    {
        //get post by ID
        $post = pelatihanModel::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);
        $pelatihan_path = 'img/gambar/' . $post->image;
        if (file_exists($pelatihan_path)) {
            unlink($pelatihan_path);
        }

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('pelatihan.view')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    }