@extends('layouts.authapp')

@section('menu')
    <li class="list-group-item p-0 d-block" style="height: auto">
        <div class="w-100 p-0">
            <a href="{{ route('profile') }}">
                <i class="fa fa-user mr-3"></i>
                <span>Quiz</span>
            </a>
        </div>
        <ul class="list-child d-block">
            <li class="px-3 py-1">New Quiz</li>
            <li class="px-3 py-1">View Quizzes</li>
        </ul>
    </li>
    <li class="list-group-item p-0 d-block" style="height: auto">
            <div class="w-100 p-0">
                <a href="{{ route('profile') }}">
                    <i class="fa fa-user mr-3"></i>
                    <span>Quiz</span>
                </a>
            </div>
            <ul class="list-child d-none">
                <li class="px-3 py-1">New Quiz</li>
                <li class="px-3 py-1">View Quizzes</li>
            </ul>
        </li>
@endsection