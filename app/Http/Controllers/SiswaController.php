<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validation(Request $request)
    {
        $validation = $request->validate([
            'nis' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
            'asal_sekolah' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required'
        ],
        [
            'nis.required' => 'NIS tidak boleh di kosongkan',
            'nama_lengkap.required' => 'Nama Lengkap tidak boleh di kosongkan',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh di kosongkan',
            'tempat_lahir.required' => 'Tempat Lahir tidak boleh di kosongkan',
            'tanggal_lahir.required' => 'Tanggal Lahir tidak boleh di kosongkan',
            'alamat.required' => 'Alamat tidak boleh di kosongkan',
            'asal_sekolah.required' => 'Asal Sekolah tidak boleh di kosongkan',
            'kelas.required' => 'Kelas tidak boleh di kosongkan',
            'jurusan.required' => 'Jurusan tidak boleh di kosongkan'
        ]);
    }

    public function index()
    {
        $siswa = Siswa::get();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validation($request);
        Siswa::create([
            'nis' => $request->nis,
            'nama_lengkap' => $request->nama_lengkap,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'asal_sekolah' => $request->asal_sekolah,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan
        ]);

        return redirect('siswa');
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
        $siswa = Siswa::find($id);
        return view('siswa.edit',compact('siswa'));
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
        $siswa = Siswa::find($id);
        $siswa->update([
            'nis' => $request->get('nis'),
            'nama_lengkap' => $request->get('nama_lengkap'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'tempat_lahir' => $request->get('tempat_lahir'),
            'tanggal_lahir' => $request->get('tanggal_lahir'),
            'alamat' => $request->get('alamat'),
            'asal_sekolah' => $request->get('asal_sekolah'),
            'kelas' => $request->get('kelas'),
            'jurusan' => $request->get('jurusan')
        ]);

        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::find($id);
        $siswa->delete();

        return redirect('siswa');
    }
}
