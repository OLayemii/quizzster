<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Quiz;

class ManageQuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $quizzes = Quiz::all();
        return view('admin.quiz.index', ['quizzes' => $quizzes]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.quiz.create');
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
        $quizModel = new Quiz();
        $file = $request->file('questions_csv');
        $time_allocated = $request->input('time_allocated');
        $curator_id = auth()->user()->id;
        $mark_per_question = $request->input('mark_per_question');
        $quizid = DB::table('quizzes')->orderBy('id', 'desc')->first()->id ?? 0;
        $quizid += 80000000;
        $quizData = [
            'time_allocated' => $time_allocated,
            'curator_id'    => $curator_id,
            'mark_per_question' => $mark_per_question,
            'quizid' => $quizid
        ];
        $quizModel->create_quiz($quizData);
        if ($file->isValid()){
            // $path = $file->store('csv');
            $path = Storage::disk('uploads')->put('question', $file);
            
            // echo Storage::url($path);
            $quizModel->upload_quiz($path, $quizid);
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
        return view('admin.quiz.view', ['quizzes' => 1]);
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
        $quiz = Quiz::find($id);
        return view('admin.quiz.edit', ['quiz' => $quiz]);
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
        $quizzes = Quiz::all();
        $quiz = Quiz::find($id);
        
        $quiz->time_allocated = $request->input('time_allocated');
        $quiz->mark_per_question = $request->input('mark_per_question');
        $quiz->save();
        return redirect()->route('quiz.show', ['quiz' => $quiz, 'quizzes' => $quizzes]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $deleted = Quiz::where('quizid', $id)->delete();
       echo $deleted;
    }
}
