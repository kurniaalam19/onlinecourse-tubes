<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class AdminController extends Controller
{
    public function index()
    {
        $testimonis = Testimoni::all();
        return view('admin/admin', compact('testimonis'));
    }

    public function show($id)
    {
        $testimonis = Testimoni::find($id);
        if(is_null($testimonis))
        {
            return response()->json("not found", 404);
        }else{
            return response()->json($testimonis, 200);
        }
    }

    public function store(Request $request)
    {
        $testimonis = new Testimoni;
        $testimonis->nama = $request->nama;
        $testimonis->asal = $request->asal;
        $testimonis->isi = $request->isi;
        $success = $testimonis->save();
        
        return redirect('admin');
    }

    public function edit($id)
    {
        $testimonis = Testimoni::findOrFail($id);
        return view('admin.edit', compact('testimonis'));
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
        Testimoni::findOrFail($id)->update([
            'nama' => $request->nama,
            'asal' => $request->asal,
            'isi' => $request->isi,
        ]);
        return redirect('admin');
    }

    public function destroy($id)
    {
        $testimonis = Testimoni::findOrFail($id)->delete();
        return redirect('admin');
    }

    public function master()
    {
        $testimonis = Testimoni::all();
        return view('home.master', compact(['testimonis']));
    }
}
