<?php

namespace App\Http\Controllers;

use App\Models\Professors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        return view('professor');
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
        $validator = Validator::make($request->all(), [
            'professor' => 'required',
            'escola' => 'required',
            'email' => 'required',

        ]);
        if($validator->fails()){
            return response()->json(["error" =>$request->all()]);
        }else{

            $question = Professors::create([
                'professor' => $request->input('professor'),
                'escola' => $request->input('escola'),
                'email' => $request->input('email'),

            ]);

            $question->save();
            return response()->json(["success"=>"success"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Professors  $professors
     * @return \Illuminate\Http\Response
     */
    public function show(Professors $professors)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Professors  $professors
     * @return \Illuminate\Http\Response
     */
    public function edit(Professors $professors)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Professors  $professors
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Professors $professors)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Professors  $professors
     * @return \Illuminate\Http\Response
     */
    public function destroy(Professors $professors)
    {
        //
    }
}
