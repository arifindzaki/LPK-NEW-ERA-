<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumniModel;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Str;
// use App\Http\Controllers\AdminController;



class alumniController extends Controller
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
            'title' => 'tambahalumni',
            'dataAlumni' => alumniModel::latest()->get(),
        ];
        return view('admin.halaman.tambahAlumni',$data);
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
            'txtstatus'   => 'required|min:3',
            'txtkesan'   => 'required|min:3',
            'image'     => 'required|image|mimes:jpeg,jpg,png|max:5048',
        ]);

        //upload image
        $image = $request->file('image');
        $foto = Str::random(5).'.'.$image->getClientOriginalExtension();
        $image->move('img/gambar', $foto);

        //create post
        alumniModel::create([
            'nama'     => $request->txtjudul,
            'status'   => $request->txtstatus,
            'kesan'   => $request->txtkesan,
            'image'     => $foto,
        ]);

        //redirect to index
        return redirect()->route('alumni.view')->with(['success' => 'Data Berhasil Disimpan!']);
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
            'title' => 'tambahalumni',
            'EditAlumni' => alumniModel::findOrFail($id),
        ];
        return view('admin.halaman.editalumni',$data);
        
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
        // validate form
        $request->validate([
            'txtjudul'     => 'required|min:5',
            'txtstatus'   => 'required|min:4',
            'txtkesan'   => 'required|min:4',
            'image'     => 'image|mimes:jpeg,jpg,png|max:5048',
        ]);

        //get by ID
        $alumni = alumniModel::findOrFail($id);

        //cek gambar di upload
        if ($request->hasFile('image')) {
            $alumni_path = 'img/gambar/' . $alumni-> image;
            if (file_exists($alumni_path)) {
                unlink($alumni_path);
            }
            //upload image
            $foto = $request->file('image');
            $fotoName =Str::random(9).'.'.$foto->getClientOriginalExtension();
            $foto->move('img/gambar/', $fotoName);

            //update
            $alumni->update([
            'nama'     => $request->txtjudul,
            'status'   => $request->txtstatus,
            'kesan'   => $request->txtkesan,
            'image'     => $fotoName,
                // 'modified_by'   => Auth::user()->email,
            ]);

            //redirect to index
            return redirect()->route('alumni.view')->with(['success' => 'Berita Berhasil Diperbarui!']);
        }else{
            //update
            $alumni->update([
            'nama'     => $request->txtjudul,
            'status'   => $request->txtstatus,
            'kesan'   => $request->txtkesan,
                // 'modified_by'   => Auth::user()->email,
            ]);

            //redirect to index
            return redirect()->route('alumni.view')->with(['success' => 'Berita Berhasil Diperbarui!']);
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
        $post = alumniModel::findOrFail($id);

        //ini buat hapus gambar image
        $alumni_path = 'img/gambar/' . $post-> image;
            if (file_exists($alumni_path)) {
                unlink($alumni_path);
            }

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('alumni.view')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    }