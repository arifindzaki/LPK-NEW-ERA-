<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\galeryModel;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

// use App\Http\Controllers\AdminController;

class galeryController extends Controller
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
            'title' => 'tambahgalery',
            'dataGalery' => galeryModel::latest()->get(),
        ];
        return view('admin.halaman.tambahgalery',$data);
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
        $request->validate( [
            'txtjudul'     => 'required|min:2',
            'txtdesk'   => 'required|min:2',
            'image'     => 'image|mimes:jpeg,jpg,png|max:5048',
        ]);

        //upload image
        $image = $request->file('image');
        $foto = Str::random(5).'.'.$image->getClientOriginalExtension();
        $image->move('img/gambar', $foto);

        //create post
        galeryModel::create([
            'deskripsi'     => $request->txtjudul,
            'judul'   => $request->txtdesk,
            'image'     => $foto,
        ]);

        //redirect to index
        return redirect()->route('galery.view')->with(['success' => 'Data Berhasil Disimpan!']);
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
            'title' => 'tambahgalery',
            'EditGalery' => galeryModel::findOrFail($id),
        ];
        return view('admin.halaman.editgalery',$data);
        
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
        // $request->validate([
        //     'txtjudul'     => 'required|min:5',
        //     'txtdesk'   => 'required|min:5',
        //     'image'     => 'required|image|mimes:jpeg,jpg,png|max:5048',
        // ]);
        // $mengedit= galeryModel::findOrFail($id);

        // if ($request->hasFile('image')) {
        //     $edit_path = 'img/gambar/' . $mengedit->image;
        //     if (file_exists($edit_path)) {
        //         unlink($edit_path);
        //     } 
        //     $image = $request->file('image');
        //     $foto = Str::random(5).'.'.$image->getClientOriginalExtension();
        //     $image->move('img/gambar/', $foto);
    
        //     $mengedit->update([
        //         'judul'     => $request->txtjudul,
        //         'deskripsi'   => $request->txtdesk,
        //         'image'     => $foto,
        //     ]);
    
        //     //redirect to index
        //     return redirect()->route('galery.view')->with(['success' => 'Data Berhasil Disimpan!']);
        // } else {
        //     $mengedit->update([
        //         'judul'     => $request->txtjudul,
        //         'deskripsi'   => $request->txtdesk,
        //     ]);
        //     return redirect()->route('galery.view')->with(['success' => 'Data Berhasil Disimpan!']);
        // }

        $request->validate([
            'txtjudul'     => 'required|min:3',
            'txtdesk'   => 'required|min:3',
            'image'     => 'image|mimes:jpeg,jpg,png|max:6048',
        ]);

        //get by ID
        $galeri = galeryModel::findOrFail($id);

        //cek gambar di upload
        if ($request->hasFile('image')) {
            $galeri_path = 'img/gambar/' . $galeri->image;
            if (file_exists($galeri_path)) {
                unlink($galeri_path);
            }
            //upload image
            $foto = $request->file('image');
            $fotoName =Str::random(9).'.'.$foto->getClientOriginalExtension();
            $foto->move('img/gambar/', $fotoName);

            //update
            $galeri->update([
            'judul'     => $request->txtjudul,
            'deskripsi'   => $request->txtdesk,
            'image'     => $fotoName,
                // 'modified_by'   => Auth::user()->email,
            ]);

            //redirect to index
            return redirect()->route('galery.view')->with(['success' => 'Berita Berhasil Diperbarui!']);
        }else{
            //update
            $galeri->update([
            'judul'     => $request->txtjudul,
            'deskripsi'   => $request->txtdesk,
                // 'modified_by'   => Auth::user()->email,
            ]);

            //redirect to index
            return redirect()->route('galery.view')->with(['success' => 'Berita Berhasil Diperbarui!']);
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
        $post = galeryModel::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);
        $edit_path = 'img/gambar/' . $post->image;
        if (file_exists($edit_path)) {
            unlink($edit_path);
        }

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('galery.view')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    }