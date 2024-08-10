<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use App\Http\Requests\StoreMateriRequest;
use App\Http\Requests\UpdateMateriRequest;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMateriRequest $request)
    {
        $validate = $request->validated();
        Materi::create($validate);
        flash()->options(['position' => 'top-center'])->success('Materi berhasil ditambahkan');
        return redirect()->route('kursus.edit', $validate['kursus_id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $materi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMateriRequest $request, string $id)
    {
        $validate = $request->validated();
        Materi::find($id)->update($validate);
        flash()->options(['position' => 'top-center'])->success('Materi berhasil diubah');
        return redirect()->route('kursus.edit', $validate['kursus_id']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $materi = Materi::find($id);
        $materi->delete();
        flash()->options(['position' => 'top-center'])->success('Materi berhasil dihapus');
        return redirect()->route('kursus.edit', $materi->kursus_id);
    }

    public function getMateri(string $id)
    {
        $materi = Materi::find($id);
        return response()->json($materi);
    }
}
