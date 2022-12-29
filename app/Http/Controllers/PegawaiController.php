<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;
use App\Http\Requests\PegawaiRequest;
use Illuminate\Support\Facades\File;


class pegawaiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $keyword = $req -> keyword;
        $datas = pegawai::where('nama', 'LIKE', '%'.$keyword.'%')
            -> orWhere('gelar', 'LIKE', '%'.$keyword.'%')
            -> orWhere('nip', 'LIKE', '%'.$keyword.'%')
            -> paginate(10);
        $datas -> withPath('pegawai');
        $datas -> appends($req->all());
        // -> get();
        // $datas = pegawai::all();
        // dd($datas);
        return view('pegawai.index', compact('datas', 'keyword'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new pegawai;
        return view('pegawai.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PegawaiRequest $req)
    {
        $model = new pegawai;
        $model->nama = $req->nama;
        $model->tanggal_lahir = $req->tanggal_lahir;
        $model->gelar = $req->gelar;
        $model->nip = $req->nip;

        if ($req -> file('foto_profil')) {
            $file = $req -> file('foto_profil');
            $nama_file = time().str_replace(' ', '', $file->getClientOriginalName());
            $file -> move('foto', $nama_file);
            $model -> foto_profil = $nama_file;
        }

        $model->save();

        return redirect('pegawai') -> with('success', 'data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = pegawai::find($id);
        return view('pegawai.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PegawaiRequest $req, $id)
    {
        $model = pegawai::find($id);
        $model->nama = $req->nama;
        $model->tanggal_lahir = $req->tanggal_lahir;
        $model->gelar = $req->gelar;
        $model->nip = $req->nip;

        if ($req -> file('foto_profil')) {
            $file = $req -> file('foto_profil');
            $nama_file = time().str_replace(' ', '', $file->getClientOriginalName());
            $file -> move('foto', $nama_file);

            File::delete('foto', $model->foto_profil);
            $model -> foto_profil = $nama_file;
        }

        $model->save();

        return redirect('pegawai') -> with('success', 'data berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = pegawai::find($id);
        $model -> delete();
        return redirect('pegawai');
    }
}
