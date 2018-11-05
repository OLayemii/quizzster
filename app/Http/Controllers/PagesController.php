<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;

class PagesController extends Controller
{
    //
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function quizcode()
    {
        return view('pages.quizcode');
    }

    public function takequiz(){
        $questions = Question::paginate(1);
        return view('pages.takequiz', compact('questions'));
    }

    public function fetchquizpage(){
        $questions = Question::paginate(1);
        return view('pages.viewquiz', compact('questions'));
    }

    public function fetchquiz(Request $request)
    {
        $validatedData = $request->validate([
            'quizcode' => 'required'
        ]);

        return redirect()->route('takequiz');
    }


    public function profile(){
        $user = auth()-> user();
        return view('pages.profile', ['user' => $user]);
    }

    public function updateprofile(Request $request){

        
        $validatedData = $request->validate([
            'email' => 'required|email'
        ]);
        $user = User::find(auth()->user()->id);
        $user->email = $request->input('email');
        $user->save();
        return redirect()->route('profile');
    }
}
