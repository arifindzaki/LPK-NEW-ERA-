<?php

namespace App\Http\Controllers;

use App\Models\adminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan ini untuk menggunakan kelas Auth
use App\Models\User; // Pastikan Anda telah mengimpor model User
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login()
    {
        // $data = [
        //     'title' => 'tambahcontact',
        //     'dataLogin' => User::latest()->get(),
        // ];
        return view('admin.login');
        // return view('admin/login');
    }

//     public function authenticating(Request $request)
//     {
//         // $credentials=$request->validate([
//         //     'username' => 'required',
//         //     'password' => 'required',
//         // ]);

//         $credentials = $request->only('username', 'password');
//         if (Auth::attempt($credentials)) {
//         // if ($credentials->username ==) {
//             // Jika autentikasi berhasil
//             // $request->session()->regenerate();
//             // return redirect()->intended('admin.halaman.beranda');
//             return redirect()->route('alumni.view')->with(['success' => 'Data Berhasil Dihapus!']);
//         }else{
//             // Jika autentikasi gagal
//             $errors = ['email' => 'The username or password is incorrect.'];
//             if (!adminModel::where('username', $request->username)->exists()) { // Ganti 'email' dengan 'username'
//                 $errors['email'] = 'The username or password is not registered.';
//             }
//             return back()->withErrors($errors)->withInput($request->only('username')); // Tambahkan withInput untuk menyimpan data input
//         }
//     }
// }

 /**
     * Handle an authentication attempt.
     */
    public function authenticating(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('admin/halaman/beranda');
        }

        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');

        // Jika autentikasi gagal
            $errors = ['email' => 'The email or password is incorrect.'];
            if (!adminModel::where('email', $request->email)->exists()) { // Ganti 'email' dengan 'username'
                $errors['email'] = 'The email or password is not registered.';
            }
            return back()->withErrors($errors)->withInput($request->only('email')); // Tambahkan withInput untuk menyimpan data input
        
    }
}