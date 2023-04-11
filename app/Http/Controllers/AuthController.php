<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login (Request $request) {
        $data = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        Auth::attempt($data);

        if (Auth::check()) {
            Auth::user();
            return redirect()->to('/dashboard');
        }

        return back()->with('loginError', 'Username atau Password Salah!');
    }
public function dashboard () {
    $surat = Surat::all();
    $siswa = Siswa::all();
            return view('page.dashboard', ['surat' => $surat, 'siswa' => $siswa]);
}
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->to('/');
    }
    public function store(Request $request)
    {
        DB::transaction (function () use ($request){
            $user = user::create([
                "nama" => $request->nama,
                "username"=> $request->username,
                "password"=> Hash::make ($request->password),
             ])->assignRole('siswa')->siswa()->create([
                'nisn' => $request->nisn,
                'no_hp' => $request->no_hp,
                'kelas_id' => $request->kelas,
                'jurusan_id' => $request->jurusan
            ]);
        });
            return redirect()->to('/formdatasiswapkl');
            return back()->with('loginError', 'Username atau Password Salah!');
    }

    public function profile(){
        // dd(auth()->user()->getRoleNames());
        if (auth()->user()->getRoleNames()[0] == "admin") {
            $user = DB::table("users")
            ->where('users.id', '=', auth()->user()->id)
            ->join('admins','users.id','=','admins.user_id')
            ->first();
        } else {
            $user = DB::table("users")
            ->where('users.id', '=', auth()->user()->id)
            ->join('siswas','users.id','=','siswas.user_id')
            ->first();
        }

        return view('page.profile', ['user' => $user]);

    }
    public function editProfile(Request $request){
        $checkPassword = Hash::check($request->oldPassword,auth()->user()->password);
        if ($request->newPassword != null) {
            if ($request->newPassword == $request->confPassword && $checkPassword) {
                User::find(auth()->user()->id)->fill([
                    'password' => Hash::make($request->newPassword),
                ])->update();
            } else {
                dd('gagal');
            }
        }

        if (auth()->user()->getRoleNames()[0] == "admin") {
            User::find(auth()->user()->id)->fill([
            'username' => $request->username
            ])->update();
        } else {
            $user = DB::table("users")
            ->where('users.id', '=', auth()->user()->id)
            ->join('siswas','users.id','=','siswas.user_id')
            ->first();
        }
        return redirect()->back();
    }
}
