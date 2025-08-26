<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frekuensi;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Services\DataTable;

class MabesTNIController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $frekuensi = Frekuensi::all();
        $divisiCode = Frekuensi::where('divisi_code', 1)->first();
        return view('menubar.mabestni', compact('frekuensi', 'divisiCode'));        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $frekuensi = Frekuensi::all();
        $divisiCode = Frekuensi::where('divisi_code', 1)->first();
        return view('layout.mabestniStore', compact('frekuensi', 'divisiCode'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // melakukan validasi data
        $request->validate(
        [
            'frekuensi' => 'required|numeric',
            'bandwith' => 'required|numeric',
            'type' => 'required|max:100',
            'service' => 'required|max:100',
            'power' => 'required|numeric',
            'location' => 'required|max:100',
            'unit' => 'required|max:100',
            'status' => 'required|max:100',
            'type_code' => 'required|max:100',
            'divisi_code' => 'required|numeric',

        ],
        [
            'frekuensi.required' => 'Frekuensi wajib diisi',
            'bandwith.required' => 'Bandwith wajib diisi',
            'type.required' => 'Jenis Penggunaan wajib diisi',
            'service.required' => 'Jenis Layanan wajib diisi',
            'power.required' => 'Power wajib diisi',
            'location.required' => 'Lokasi wajib diisi',
            'unit.required' => 'Satuan kerja wajib diisi',
            'status.required' => 'Status wajib diisi',
            'type_code.required' => 'Jenis Frekuensi wajib diisi',
            'divisi_code.required' => 'Divisi wajib diisi'
        ]);


        DB::table('f_radio')->insert([
            'frekuensi'=>$request->frekuensi,
            'bandwith'=>$request->bandwith,
            'type'=>$request->type,
            'service'=>$request->service,
            'power'=>$request->power,
            'location'=>$request->location,
            'unit'=>$request->unit,
            'status'=>$request->status,
            'type_code'=>$request->type_code,
            'divisi_code'=>$request->divisi_code,
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
        
        return redirect()->route('mabestni.index')->with('message', 'Data created successfully.');
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
    public function edit($id)
    {
        $frekuensi = Frekuensi::find($id);
        return view('layout.mabestniEdit', compact('frekuensi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // validasi data
        $request->validate([
            'frekuensi' => 'required|numeric',
            'bandwith' => 'required|numeric',
            'type' => 'required|max:100',
            'service' => 'required|max:100',
            'power' => 'required|numeric',
            'location' => 'required|max:100',
            'unit' => 'required|max:100',
            'status' => 'required|max:100',
            'type_code' => 'required|max:100',
            'divisi_code' => 'required|numeric',

        ],
        [
            'frekuensi.required' => 'Frekuensi wajib diisi',
            'bandwith.required' => 'Bandwith wajib diisi',
            'type.required' => 'Jenis Penggunaan wajib diisi',
            'service.required' => 'Jenis Layanan wajib diisi',
            'power.required' => 'Power wajib diisi',
            'location.required' => 'Lokasi wajib diisi',
            'unit.required' => 'Satuan kerja wajib diisi',
            'status.required' => 'Status wajib diisi',
            'type_code.required' => 'Jenis Frekuensi wajib diisi',
            'divisi_code.required' => 'Divisi wajib diisi'
        ]);

        $frekuensi = Frekuensi::find($id);

        DB::table('f_radio')->where('id',$id)->update([
            'frekuensi'=>$request->frekuensi,
            'bandwith'=>$request->bandwith,
            'type'=>$request->type,
            'service'=>$request->service,
            'power'=>$request->power,
            'location'=>$request->location,
            'unit'=>$request->unit,
            'status'=>$request->status,
            'type_code'=>$request->type_code,
            'divisi_code'=>$request->divisi_code,
        ]);
                
        return redirect()->route('mabestni.index')->with('message', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Frekuensi $id)
    {
        $id->delete();
    
        return redirect()->route('mabestni.index')
                ->with('message','Data deleted successfully.');
    }
}
