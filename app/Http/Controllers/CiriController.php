<?php

namespace App\Http\Controllers;

use App\Models\Ciri;
use Illuminate\Http\Request;

class CiriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {

        $ciris = Ciri::all();
        return view('ciri/index', compact('ciris'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ciri/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_ciri' => ['required'],
            'ciri_penyakit' => ['required'],
        ]);

        Ciri::create([
            'kode_ciri' => $request->kode_ciri,
            'ciri_penyakit' => $request->ciri_penyakit
        ]);

        return redirect()->route('ciri.index');
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
        $ciri = Ciri::where('id',$id)->first();
        return view('ciri/edit', compact('ciri'));
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
        $data=[
            'ciri_penyakit' => $request->ciri_penyakit,
        ];

        Ciri::where('id',$id)->update($data);

        return redirect()->route('ciri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ciri::destroy($id);
        return redirect()->route('ciri.index');
    }
}
