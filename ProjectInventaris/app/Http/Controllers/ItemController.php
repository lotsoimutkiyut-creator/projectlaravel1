<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
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
        //kita buat fungsi untuk menampilkan halaman formulir
        return view('items.create'); //memanggil file create di folder items
    }

    public function store(Request $request){

        //menyimpan data ke tabel database
        Item::create([
            'code' => $request->code,
            'item_nama' => $request->item_nama,
            'category' => $request->category,
            'stoc'  => $request->stoc,
            'condition'  => $request->condition,
            'room_location'  => $request->room_location,
        ]);
        //arahkan ke halaman form kembali setelah berhasil
        return redirect() ->back()->with ('success', 'Barang berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
