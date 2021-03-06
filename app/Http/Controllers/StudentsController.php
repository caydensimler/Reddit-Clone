<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('students.create');
    }


    public function store(Request $request)
    {
        // var_dump($request->all());
        // var_dump($request->first_name);
        return back()->withInput(); // redirect back to the previous page (/students/create) with all the user input
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        return view('students.edit');
    }


    public function update(Request $request, $id)
    {
        
    }


    public function destroy($id)
    {
        //
    }

}
