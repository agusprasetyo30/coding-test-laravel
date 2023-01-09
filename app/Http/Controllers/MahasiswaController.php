<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use DataTables;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function datatables()
    {
        $data_mahasiswa = Mahasiswa::orderBy('id', 'asc');

        return DataTables::of($data_mahasiswa)
        ->addColumn('ttl', function ($mahasiswa) {
            return $mahasiswa->tempat . ' / ' . date('d-m-Y', strtotime($mahasiswa->tanggal_lahir));
        })
        ->addColumn('created', function ($mahasiswa) {
            return $mahasiswa->created_by_user;
        })
        ->addColumn('updated', function ($mahasiswa) {
            return $mahasiswa->updated_by_user;
        })
        ->addColumn('ukt', function($mahasiswa) {
            return 'Rp. ' . number_format($mahasiswa->ukt,0);
        })
        ->addColumn('actions', function ($mahasiswa) {
            return '
                <a href="'. route('mahasiswa.edit', $mahasiswa->id) .'" class="btn btn-primary btn-sm" style="">
                    <span>
                        <i class="fa fa-pencil-alt fa-sm"></i>
                        <span></span>
                    </span>
                </a>
                <a onclick="return confirm(`Apakah anda yakin ingin menghapus data ini ?`)" href="'. route('mahasiswa.destroy', $mahasiswa->id) .'" class="btn btn-danger btn-sm" style="">
                    <span>
                        <i class="fa fa-trash-alt fa-sm"></i>
                        <span></span>
                    </span>
                </a>';
        })
        ->escapeColumns([])
        ->toJson();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('test.mahasiswa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('test.mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Mahasiswa::create([
            'nama' => $request->nama,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'hobi' => $request->hobi,
            'ukt' => $request->ukt,
            'created_by' => json_encode(['id' => auth()->user()->id, 'name' => auth()->user()->name]),
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with('alert_type', 'success')
            ->with('message', 'Tambah data sukses !!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswa)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('test.mahasiswa.edit', compact('mahasiswa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $mahasiswa->update([
            'nama' => $request->nama,
            'tempat' => $request->tempat,
            'tanggal_lahir' => $request->tanggal_lahir,
            'hobi' => $request->hobi,
            'ukt' => $request->ukt,
            'updated_by' => json_encode(['id' => auth()->user()->id, 'name' => auth()->user()->name]),
        ]);

        return redirect()
            ->route('mahasiswa.index')
            ->with('alert_type', 'success')
            ->with('message', 'Update data sukses !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mahasiswa  $mahasiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->forceDelete();

        return redirect()
            ->route('mahasiswa.index')
            ->with('alert_type', 'success')
            ->with('message', 'Hapus data sukses !!!');
    }
}
