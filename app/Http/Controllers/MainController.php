<?php

namespace App\Http\Controllers;

use App\Models\Questions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


use function GuzzleHttp\Promise\all;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('index');
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
            'question1' => 'required',
            'question2' => 'required',
            'question3' => 'required',
            'sub_question_3'=>'max:255',
            'question4' => 'required',
            'question5' => 'required',
            'question6' => 'required',
            'question7' => 'required',
            'question8' => 'required',
            'question9' => 'required',
            'question10' => 'required',
            'question11' => 'required',
            'question12' => 'required',
        ]);
        if($validator->fails()){
            return response()->json(["error" =>$request->all()]);
        }else{

            $question = Questions::create([
                'question1' => $request->input('question1'),
                'question2' => $request->input('question2'),
                'question3' => $request->input('question3'),
                'sub_question_3' => $request->input('sub_question_3') == ""? "": $request->input('sub_question_3') ,
                'question4' => $request->input('question4'),
                'question5' => $request->input('question5'),
                'question6' => $request->input('question6'),
                'question7' => $request->input('question7'),
                'question8' => $request->input('question8'),
                'question9' => $request->input('question9'),
                'question10' => $request->input('question10'),
                'question11' => $request->input('question11'),
                'question12' => $request->input('question12'),
            ]);
   
            $question->save();
            return response()->json(["success"=>"success"]);
        }
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
