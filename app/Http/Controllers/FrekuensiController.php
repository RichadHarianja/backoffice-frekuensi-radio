<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Frekuensi;
use App\Models\Divisi;

class FrekuensiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $frekuensi = Frekuensi::with('divisi')->get();
        
        // Collect data type code

        $typeCode0 = Frekuensi::where('type_code', '=', 'HF')->count();
        $typeCode1 = Frekuensi::where('type_code', '=', 'VHF')->count();
        $typeCode2 = Frekuensi::where('type_code', '=', 'UHF')->count();
        $typeCode3 = Frekuensi::where('type_code', '=', 'HF,UFF,VHF')->count();

        $matra0 = Frekuensi::where('divisi_code', '=', '1')->count();
        $matra1 = Frekuensi::where('divisi_code', '=', '2')->count();
        $matra2 = Frekuensi::where('divisi_code', '=', '3')->count();
        $matra3 = Frekuensi::where('divisi_code', '=', '4')->count();

        // $type_code = $frekuensi->pluck('type_code')->toArray();
        // $divisi_code = $frekuensi->pluck('divisi_code')->toArray();
        
        $dataChart = [
            'labelsForBarChart' => ['HF', 'UHF', 'VHF', 'HF,UFF,VHF'],
            'valuesForBarChart' => [$typeCode0, $typeCode2, $typeCode1, $typeCode3],
            'labelsForAreaChart' => ['MABES TNI', 'TNI AD', 'TNI AL', 'TNI AU'],
            'valuesForAreaChart' => [$matra0, $matra1, $matra2, $matra3],
        ];
        return view('dashboard.index', compact('frekuensi', 'dataChart'));     
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
