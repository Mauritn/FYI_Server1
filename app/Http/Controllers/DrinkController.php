<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Drink::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $drink = new Drink();
        $drink->nama = $request->nama;
        $drink->ket = $request->ket;
        $drink->save();

        return "Data added successfully!!!";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $nama = $request->nama;
        $ket = $request->ket;

        $drink = Drink::find($id);
        $drink->nama = $nama;
        $drink->ket = $ket;
        $drink->save();

        return "Data updated successfully!!!";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drink  $drink
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $id = $request->id;
        $drink = Drink::find($id);
        $drink->delete();

        return "Data deleted successfully!!!";
    }
}
