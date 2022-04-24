<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\QuestionAdd;
use Illuminate\Http\Request;

class QuestionAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return QuestionAdd[]|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Database\Eloquent\Collection|\Illuminate\Http\Response
     */
    public function index()
    {
        $question=QuestionAdd::all();
        return view("$question");

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
        $collect = [];

       // dd($request->all());
        foreach ($request->all() as $input_key => $input_value) {
            if($input_key=="question"){

            }else{
                $collect[] = array(
                    "id" => $input_key,
                    "value" => $input_value
                );
            }
        }

        $result = json_encode($collect);
        $question_adds=QuestionAdd::create([
            "question"=>$request->question,
            "choice"=>$result,

        ]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\QuestionAdd  $questionAdd
     * @return \Illuminate\Http\Response
     */
    public function show(QuestionAdd $questionAdd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\QuestionAdd  $questionAdd
     * @return \Illuminate\Http\Response
     */
    public function edit(QuestionAdd $questionAdd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\QuestionAdd  $questionAdd
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, QuestionAdd $questionAdd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\QuestionAdd  $questionAdd
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
       // dd($id);

        $deleted = QuestionAdd::where('id', $id)->delete();


        return back();
    }
}
