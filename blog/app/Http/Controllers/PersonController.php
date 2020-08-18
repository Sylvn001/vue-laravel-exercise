<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function list()
    {
        $person = Person::orderBy('name', 'desc')->paginate(10);
        
        return  $person;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $person = new Person;
        /*
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required', 
            'height' => 'required',
            'address' => 'required',
        ]);
        */
 
        $person->name = $request->name;
        $person->gender = $request->gender;
        $person->email = $request->email;
        $person->address = $request->address;
        $person->height = $request->height;
        $person->save();
        
        return $person;
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
        $person = Person::findOrFail($id);

        $person->name = $request->name;
        $person->gender = $request->gender;
        $person->email = $request->email;
        $person->address = $request->address;
        $person->height = $request->height;
        $person->save();
        return $person;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $person = Person::findOrFail($id);
        $person->delete();
        return 'Deletado com sucesso!';
    }
}
