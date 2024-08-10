<?php

namespace App\Http\Controllers;

use App\Models\Kursus;
use App\Http\Requests\StoreKursusRequest;
use App\Http\Requests\UpdateKursusRequest;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kursuses = Kursus::all();
        return view('kursus.index', compact('kursuses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kursus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKursusRequest $request)
    {
        $validate = $request->validated();
        Kursus::create($validate);
        flash()->options(['position' => 'top-center'])->success('Kursus berhasil ditambahkan');
        return redirect()->route('kursus.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kursus $kursus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kursus = Kursus::where('id', $id)->with('materis')->first();
        return view('kursus.edit', compact('kursus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKursusRequest $request, string $id)
    {
        $validate = $request->validated();
        Kursus::find($id)->update($validate);
        flash()->options(['position' => 'top-center'])->success('Kursus berhasil diubah');
        return redirect()->route('kursus.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kursus = Kursus::find($id);
        $kursus->delete();
        flash()->options(['position' => 'top-center'])->success('Kursus berhasil dihapus');
        return redirect()->route('kursus.index');
    }
}
