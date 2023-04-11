<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Surat;
use App\Models\BridgeSurat;
use App\Models\Siswa;
// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class SuratController extends Controller
{

    public function cetak($id){
        $surat = DB::table('surats')
        ->join('bridge_surats','surats.id', '=','bridge_surats.surat_id')
        ->join('siswas','bridge_surats.siswa_id','=','siswas.id')
        ->join('users', 'siswas.user_id','=', 'users.id')
        ->join('kelas','siswas.kelas_id','=','kelas.id')
        ->join('jurusans','siswas.jurusan_id','=','jurusans.id')
        ->where('surats.id','=',$id)
        ->get();

        return view('cetak', ['surat' => $surat]);
    }

    public function download($id){
        $surat = DB::table('surats')
        ->join('bridge_surats', 'surats.id', '=','bridge_surats.surat_id')
        ->join('siswas','bridge_surats.siswa_id','=','siswas.id')
        ->join('users', 'siswas.user_id','=', 'users.id')
        ->join('kelas','siswas.kelas_id','=','kelas.id')
        ->join('jurusans','siswas.jurusan_id','=','jurusans.id')
        ->where('surats.id','=',$id)
        ->get();

        // return view('cetak', ['surat' => $surat]);
        $pdf = PDF::loadView('page.cetak', compact('licencie'));
        return $pdf->download('invoice.pdf');

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
        // ->join('bridge_surats', 'surats.id', '=','bridge_surats.surat_id')
        // ->join('siswas','bridge_surats.siswa_id','=','siswas.id')
        // ->join('users', 'siswas.user_id','=', 'users.id')
        // ->join('kelas','siswas.kelas_id','=','kelas.id')
        // ->join('jurusans','siswas.jurusan_id','=','jurusans.id')
        ->get();
        // dd($surat);
        // ->unique('surats.id');
        } else {
            $surat =
            DB::table('surats')
            ->join('bridge_surats', 'surats.id', '=','bridge_surats.surat_id')
            ->join('siswas','bridge_surats.siswa_id','=','siswas.id')
            ->join('users', 'siswas.user_id','=', 'users.id')
            ->join('kelas','siswas.kelas_id','=','kelas.id')
            ->join('jurusans','siswas.jurusan_id','=','jurusans.id')
            ->select('surats.id', 'deskripsi', 'tujuan_surat', 'tanggal_mulai', 'nama', 'kelas', 'name')
            ->where('bridge_surats.siswa_id','=',auth()->user()->id)
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
        $user = Siswa::where('user_id', '=', auth()->user()->id)->first();
        // dd($user);
        $data = DB::table('users')
        ->join('siswas', 'users.id', '=', 'siswas.user_id')
        ->join('jurusans', 'siswas.jurusan_id', '=', 'jurusans.id')
        ->join('kelas', 'siswas.kelas_id', '=', 'kelas.id');
        $siswa = $data->where('siswas.jurusan_id', '=', $user->jurusan_id)->where('siswas.kelas_id','=', $user->kelas_id)->get();
        $atributUser = $data->where('user_id', '=', auth()->user()->id)->first();
        // $kelas = $data->where('user_id', '=', auth()->user()->id)->first();
        return view('page.tambahsurat', ['siswa' => $siswa, 'atribut' => $atributUser]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        DB::transaction(function () use ($request){
            $surat = Surat::create([
                "tujuan_surat" => $request->tujuan_surat,
                "tanggal_mulai"=> $request->tanggal_mulai
            ]);
            BridgeSurat::create([
                "surat_id" => $surat->id,
                "siswa_id" => auth()->user()->id,
            ]);
            for ($i=0; $i < count($request->nama_siswa); $i++) {
                BridgeSurat::create([
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
