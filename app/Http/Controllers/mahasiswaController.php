<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\mahasiswaModel;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use Illuminate\Support\Str;
// use App\Http\Controllers\AdminController;



class mahasiswaController extends Controller
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
            'title' => 'tambahmahasiswa',
            'dataMahasiswa' => mahasiswaModel::latest()->get(),
        ];
        return view('admin.halaman.tambahmahasiswa',$data);
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
            'txtnim'     => 'required|min:3',
            'txtnama'   => 'required|min:3',
            'txtprodi'   => 'required|min:3',
            'txtjurusan'   => 'required|min:3',
            // 'image'     => 'required|image|mimes:jpeg,jpg,png|max:5048',
        ]);

        //upload image
        // $image = $request->file('image');
        // $foto = Str::random(5).'.'.$image->getClientOriginalExtension();
        // $image->move('img/gambar', $foto);

        //create post
        mahasiswaModel::create([
            'nim'     => $request->txtnim,
            'nama'   => $request->txtnama,
            'jurusan'   => $request->txtjurusan,
            'prodi'     => $request->txtprodi,
        ]);

        //redirect to index
        return redirect()->route('mahasiswa.view')->with(['success' => 'Data Berhasil Disimpan!']);
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
            'EditMahasiswa' => mahasiswaModel::findOrFail($id),
        ];
        return view('admin.halaman.editmahasiswa',$data);
        
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
            'nim'     => $request->txtnim,
            'nama'   => $request->txtnama,
            'jurusan'   => $request->txtjurusan,
            'prodi'     => $request->txtprodi,
        ]);

        //get by ID
        $mengedit= mahasiswaModel::findOrFail($id);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());
        $mengedit->update([
            'nim'     => $request->txtnim,
            'nama'   => $request->txtnama,
            'jurusan'   => $request->txtjurusan,
            'prodi'     => $request->txtprodi,
            // 'txtgbr'     => $image->hashName(),
        ]);

        //redirect to index
        return redirect()->route('mahasiswa.view')->with(['success' => 'Data Berhasil Disimpan!']);


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
        $post = mahasiswaModel::findOrFail($id);

        //ini buat hapus gambar image
        // $alumni_path = 'img/gambar/' . $post-> image;
        //     if (file_exists($alumni_path)) {
        //         unlink($alumni_path);
        //     }

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('mahasiswa.view')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    }