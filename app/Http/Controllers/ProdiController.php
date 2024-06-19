<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_prodi = Prodi::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_prodi = Prodi::all();
        }
        return view('prodi.index', [
            'data_prodi' => $data_prodi,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Prodi::create($request->all());
        return redirect('/prodi')->with('sukses', 'Data Berhasil diinput');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prodi = Prodi::find($id);
        return view('prodi/edit', [
            'prodi' => $prodi,
        ]);
    }

    public function update(Request $request, $id)
    {
        $prodi = Prodi::find($id);
        $prodi->update($request->all());
        return redirect('/prodi')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $prodi = Prodi::find($id);
        $prodi->delete($prodi);
        return redirect('/prodi')->with('sukses', 'Data berhasil dihapus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
