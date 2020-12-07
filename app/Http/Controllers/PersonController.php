<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('new_person');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            $person = new Person();
            $person->name = $request->name;
            $person->cpf = $request->cpf;
            $person->email = $request->email;
            $person->birthdate = $request->birthdate;
            $person->save();
             
            //$person->create($request->except(['_token']));
        } catch (Exception $e) {
            return response()->json(['status'=>false,'message'=>'Erro no banco de dados!'],500);
        }
       
      

        return response()->json(['status'=>true,'message'=>'Pessoa cadastrada com sucesso!'],200);

       
       

        
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Person::where('id',$id)->first();

        if($person)
        {
            return response()->json(['status'=>true,'message'=>$person],200);
        } else 
        {
            return response()->json(['status'=>true,'message'=>'Item não encontrado na base de dados!'],404);
        }


    }

    public function findCpf($cpf)
    {
        
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
