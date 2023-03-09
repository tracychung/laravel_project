<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return view('student.index',['name'=>'Tracy','age'=>'18']);
        // $data=[
        //     'name'=>'Tracy',
        //     'age'=>'18',
        //     'love'=>['laravel','php','js','jquery']
        // ];

        $data=[
            ['name'=>'amy',
            'mobile'=>'0911-111-111'],
            ['name'=>'bob',
            'mobile'=>'0922-222-222'],
            ['name'=>'cat',
            'mobile'=>'0933-333-333'],
        ];
        return view('student.index',['data'=>$data]);

        
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

     /**
     * 自定義 excel output
     */
    public function excel()
    {
        // dd('hello student excel');
        return view('student.excel');       

    }

    public function childPage(){
        return view('child');
    }
    public function page1(){
        return view('p1');
    }
}
