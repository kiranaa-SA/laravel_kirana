<?php
namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;

class Nilaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::latest()->get();
        return view('nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nilai                = new Nilai();
        $nilai->nama          = $request->nama;
        $nilai->mapel         = $request->mapel;
        $nilai->jenis_kelamin = $request->jenis_kelamin;
        $nilai->kelas         = $request->kelas;
        $nilai->nilai         = $request->nilai;
        $nilai->save();
        return redirect()->route('nilai.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('nilai.show', compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        $nilai = Nilai::findOrFail($id);
        return view('nilai.edit', compact('nilai'));
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
        $nilai                = Nilai::findOrFail($id);
        $nilai->nama          = $request->nama;
        $nilai->mapel         = $request->mapel;
        $nilai->jenis_kelamin = $request->jenis_kelamin;
        $nilai->kelas         = $request->kelas;
        $nilai->nilai         = $request->nilai;
        $nilai->save();
        return redirect()->route('nilai.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai.index');
    }
}