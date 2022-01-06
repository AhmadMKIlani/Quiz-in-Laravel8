<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Answer;
use App\Models\Exam;
use App\Http\Requests\StoreresultRequest;
use App\Http\Requests\UpdateresultRequest;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams   = Exam::all();

       $results = Result::where('user_id',auth()->user()->id)->get();

       return view('publicSite.result',compact('results','exams'));
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
     * @param  \App\Http\Requests\StoreresultRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreresultRequest $request)
    {
        $uresult=0;
        foreach ($request->except('_token') as $qid => $qvalue) {
           
            $correctAnswer=Answer::where('correct',1)->where('question_id',$qid)->get()->first();
            $examId= $correctAnswer->question->exam_id;
            if($qvalue===$correctAnswer->answer){
       
                $uresult+=$correctAnswer->question->points;
            }

        }
        
        
        foreach ($request->except('_token') as $qid => $qvalue) {
            
            Result::create([
                'result'=> $uresult,
                'user_answer'=>$qvalue,
                'exam_id'=> $examId,
                'user_id'=>auth()->user()->id
            ]);
        }

        return redirect()->route('results.index');
       
    //    dd($uresult);

     
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateresultRequest  $request
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateresultRequest $request, result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(result $result)
    {
        //
    }
}
