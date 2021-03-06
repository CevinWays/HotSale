<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->has('_token')) {
            $awal = $request->awal;
            $akhir = $request->akhir;
            $age_awal = $request->age_awal;
            $age_akhir = $request->age_akhir;
            $jenis = $request->jenis;
            $kategori = $request->kategori;
            $awal_harga = $request->awal_harga;
            $awal_hargas = $awal_harga / 200;
            $akhir_harga = $request->akhir_harga;
            $akhir_hargas = $akhir_harga / 200;

            $products = Product::whereBetween('date_product',[$awal,$akhir])->whereBetween('age',[$age_awal,$age_akhir])->where('gender','=',$jenis)
            ->where('category','=',$kategori)->whereBetween('price',[$awal_hargas,$akhir_hargas])->get();
            return view('home')->with('products',$products);
        } else {
            $products = Product::all();
            return view('home')->with('products',$products);
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
