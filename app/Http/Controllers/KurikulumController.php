<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    public function index()
    {
        echo "Halaman index Kurikulum";
    }

    public function create()
    {
        //
        echo "halaman create kurikulum";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        echo "halaman show kurikulum dengan id " . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        echo "halaman edit kurikulum dengan id " . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}