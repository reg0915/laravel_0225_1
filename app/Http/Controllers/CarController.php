<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //抓全部資料
    $data=[
        [
            'id'=>1,
            'name'=>'台北市',
            'rank'=>'a1'
        ],
        [
            'id'=>1,
            'name'=>'台中市',
            'rank'=>'a2'
        ],
        [
            'id'=>1,
            'name'=>'台南市',
            'rank'=>'a3'
        ]
];
// dd($data);

    return view('car.index',['data'=>$data]);
    // return view('car.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('car.create');
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
