<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class PhonebookController extends Controller
{
    public function index()
    {
        $data = Data::all();
        return view('data.index', compact('data'));
    }

    public function create()
    {
        return view('data.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'no_telpon' => 'required',
            'instansi' => 'required'
        ]);

        Data::create($request->all());

        return redirect()->route('data.index')
            ->with('success', 'data berhasil ditambahkan');
    }

    public function edit(Data $data)
    {
        return view('data.edit', compact('data'));
    }

    public function update(Request $request, Data $data)
    {
        $request->validate([
            'nama' => 'required',
            'no_telpon' => 'required',
            'instansi' => 'required'
        ]);

        $data->update($request->all());

        return redirect()->route('data.index')
            ->with('success', 'Data Berhasil ditambahkan');
    }

    public function destroy(Data $data)
    {
       
        $data->delete();

        return redirect()->route('data.index')
            ->with('success', 'Data berhasil dihapus');
    }
}