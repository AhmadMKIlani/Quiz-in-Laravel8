<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use App\Http\Requests\StoreAnswerRequest;
use App\Http\Requests\UpdateAnswerRequest;

class AnswerController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnswerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnswerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnswerRequest  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnswerRequest $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
    
     // backend functions starts here*******************************  
     public function backendindex()
     {
         $answers=Answer::all();
         $update=false;
         $questions=Question::all();
         return view('adminSite.MAnswers',compact('answers','update','questions'));
     }
     public function backendcreate()
     {
         return view('adminSite.MAnswers');
     }
 
     public function backendstore(StoreanswerRequest $request)
     {
         $this->validate($request,[
             'answer'=>'required|max:1000',
             'correct'=>'required|max:10'
           ]);
          
           Answer::create([
               "answer"=>$request->answer,
               "correct"=>$request->correct,
               "question_id"=>$request->question
          ]);
          return redirect()->back();
     }
 
     public function backendedit($id)
     {
         $update=true;
         $answers=Answer::all();
         $answer=Answer::find($id);
         $questions=Question::all();
         $question=Question::find($id);
         return view('adminSite.MAnswers',compact('question','questions','update','answers','answer'));
     }
 
     public function backendupdate(UpdateanswerRequest $request,  $id)
     {
         $answer=Answer::find($id);
         
         $answer->answer=$request->answer;
         $answer->correct=$request->correct;
         
         $answer->update();
         return redirect()->route('answer');
     }
 
     public function backenddestroy( $request)
     {
         $answer=Answer::find($request);
         $answer->delete(); 
         
         
         return redirect()->route('answer');
     }
 
}
