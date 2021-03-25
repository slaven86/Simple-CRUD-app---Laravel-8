<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allPhones = DB::select('SELECT * FROM phones');

        return view('phones.index',compact('allPhones'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            "name" => "required",
            "brand" => "required",
            "price" => "required"

        ]);

        DB::insert("INSERT INTO phones (name,brand,price) VALUES ('$request->name', '$request->brand', '$request->price')");

        return redirect('/phones');
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
        $phone = DB::select("SELECT * FROM phones WHERE id = ?",[$id])[0];

        return view('phones.edit', compact('phone'));
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
        $request->validate([

            "name" => "required",
            "brand" => "required",
            "price" => "required"

        ]);

        DB::update("UPDATE phones SET name = ?, brand = ?, price = ? WHERE id = ?",[$request->name, $request->brand, $request->price, $id]);

        return redirect('/phones');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("DELETE FROM phones WHERE id = ?", [$id]);

        return redirect('/phones');
    }
}
