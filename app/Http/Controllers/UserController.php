<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
           'name'=>'required',
           'email'=>'required',
           'date_of_birth'=>'required',
           'address'=>'required',
           'gender'=>'required',
           'mobilenumber'=>'required|max:10',
           'adhar_number'=>'required',
           'hobbies'=>'required',
           'profile_picture'=>'',
         
       ]);

      $data = new User;
      $data->name = $request->name;
      $data->email = $request->email;
      $data->date_of_birth = $request->date_of_birth;
      $data->address = $request->address;
      $data->gender = $request->gender;
      $data->mobilenumber = $request->mobilenumber;
      $data->adhar_number = $request->adhar_number;
      $data->hobbies = $request->hobbies;
      $data->profile_picture = $request->profile_picture;
      $data->save();
     
      
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
