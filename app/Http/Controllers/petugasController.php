<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminModel;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

// use App\Http\Controllers\AdminController;



class petugasController extends Controller
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
            'title' => 'tambahadmin',
            'dataAdmin' => adminModel::latest()->get(),
        ];
        return view('admin.halaman.tambahadmin',$data);
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
            'txtjudul'     => 'required|min:5',
            'txtuser'   => 'required|min:5',
            'txtemail'   => 'required|min:5',
            'txtpass'   => 'required|min:5',
            // 'txtgbr'     => 'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        //upload image
        // $image = $request->file('txtgbr');
        // $image->move('/img/gambar', $image->hashName());

        //create post
        adminModel::create([
            'nama'     => $request->txtjudul,
            'username'   => $request->txtuser,
            'email'   => $request->txtemail,
            'password'   => password_hash($request->txtpass, PASSWORD_DEFAULT),
            // 'txtgbr'     => $image->hashName(),
        ]);

        //redirect to index
        return redirect()->route('admin.view')->with(['success' => 'Data Berhasil Disimpan!']);
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
            'title' => 'tambahadmin',
            'EditAdmin' => adminModel::findOrFail($id),
        ];
        return view('admin.halaman.editadmin',$data);
        
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
            'txtuser'   => 'required|min:5',
            'txtemail'   => 'required|min:5',
            'txtpass'   => 'required|min:5',
        ]);
        $mengedit= adminModel::findOrFail($id);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());
        $mengedit->update([
            'nama'     => $request->txtjudul,
            'username'   => $request->txtuser,
            'email'   => $request->txtemail, 
            'password'   => password_hash($request->txtpass, PASSWORD_DEFAULT),
            // 'txtgbr'     => $image->hashName(),
        ]);

        //redirect to index
        return redirect()->route('admin.view')->with(['success' => 'Data Berhasil Disimpan!']);


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
        $post = adminModel::findOrFail($id);

        //delete image
        // Storage::delete('public/posts/'. $post->image);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('mahasiswa.view')->with(['success' => 'Data Berhasil Dihapus!']);
    }

    }