<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('student controller ok');

        $data = Student::get();
        return view('student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('hello create');
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Student;
 
        $data->name = $request->name;
        $data->age = $request->age;
 
        $data->save();
        
        return redirect()->route('students.index');
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
        //1. check id
        // dd($id);

        // 2. id丟到前面 
        // id 抓到
        // id 丟到前面的blade?

        // 3. 該筆資料 丟到前端
        // SELECT * FROM students WHERE id =1

        // $data = Student::get(); //index delect all
        // ex1
        $data = Student::find($id); //where id= $id
        // dd($data);
        // ex2
        // $data = student::where('id',$id)
        // $data = Student::where('id',$id); 

        return view('student.edit',['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($id);
        // $_GET 
        // $_POST
        // dd($request->all()); //all()陣列 =toArray //request->id 
        $input = $request->except(['_token','_method']);
        // dd($input);        
        // dd('update ok');

        // 1.id get 單筆data
        // 2.修改後data update 單筆data
        $data = Student::find($id);

        $data->name=$input['name'];
        $data->name=$input['age'];
        // $data->name = $request->name;
        // $data->age = $request->age;
         $data->save();
        return redirect()->route('students.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd('刪除ok');

       Student::find($id)->delete();
       return redirect()->route('students.index');

    }
}
