<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Surat;
use App\Models\BridgeSurat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class SuratController extends Controller
{
    public function cetak($id){
        $surat = DB::table('surats')
        ->join('bridge_surats', 'surats.id', '=','bridge_surats.surat_id')
        ->join('siswas','bridge_surats.siswa_id','=','siswas.id')
        ->join('users', 'siswas.user_id','=', 'users.id')
        ->join('kelas','siswas.kelas_id','=','kelas.id')
        ->join('jurusans','siswas.jurusan_id','=','jurusans.id')
        ->where('surats.id','=',$id)
        ->get();

        return view('cetak', ['surat' => $surat]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->hasRole(['admin'])) {
            $surat = DB::table('surats')
        ->join('bridge_surats', 'surats.id', '=','bridge_surats.surat_id')
        ->join('siswas','bridge_surats.siswa_id','=','siswas.id')
        ->join('users', 'siswas.user_id','=', 'users.id')
        ->join('kelas','siswas.kelas_id','=','kelas.id')
        ->join('jurusans','siswas.jurusan_id','=','jurusans.id')
        ->get()
        ->unique('bridge_surat.surat_id');
        } else {
            $surat = DB::table('surats')
            ->join('bridge_surats', 'surats.id', '=','bridge_surats.surat_id')
            ->join('siswas','bridge_surats.siswa_id','=','siswas.id')
            ->join('users', 'siswas.user_id','=', 'users.id')
            ->join('kelas','siswas.kelas_id','=','kelas.id')
            ->join('jurusans','siswas.jurusan_id','=','jurusans.id')
            ->where('users.id','=',auth()->user()->id)
            ->get();
        }


        return view('page.tabelsurat', ['surat'=>$surat]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = DB::table('users')
        ->join('siswas', 'users.id', '=', 'siswas.user_id')
        ->get();
        return view('page.tambahsurat', ['siswa' => $siswa]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::transaction(function ($request) {
            $surat = Surat::create([
                "tujuan_surat" => $request->tujuan_surat,
                "tanggal_mulai"=> $request->tanggal_mulai
            ]);
            for ($i=0; $i < count($request->nama_siswa); $i++) {
                $suratBridge = BridgeSurat::create([
                    "surat_id" => $surat->id,
                    "siswa_id" => $request->nama_siswa[$i],
                ]);
            }
        });
        return redirect()->to('/formtabelsurat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function show(Surat $surat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function edit(Surat $surat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Surat $surat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Surat  $surat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Surat $surat)
    {
        //
    }

    public function html()
    {
        $pdf = App::make('dompdf.wrapper');
    $pdf->loadHTML('<h1>Test</h1>');
    return $pdf->stream();
    }
}
