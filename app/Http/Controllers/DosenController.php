<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_dosen = Dosen::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_dosen = Dosen::all();
        }
        return view('dosen.index', [
            'data_dosen' => $data_dosen,
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        Dosen::create($request->all());
        return redirect('/dosen')->with('sukses', 'Data Berhasil diinput');
    }
    public function edit($id)
    {
        $dosen = Dosen::find($id);
        return view('dosen/edit', [
            'dosen' => $dosen,
        ]);
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::find($id);
        $dosen->update($request->all());
        return redirect('/dosen')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $dosen = Dosen::find($id);
        $dosen->delete($dosen);
        return redirect('/dosen')->with('sukses', 'Data berhasil dihapus');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
