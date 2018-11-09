@extends('layouts.admin')

@section('menu')
    <li class="list-group-item p-0 d-block" data-toggle="collapse" data-target="#collapseOne" style="height: auto">
            <div class="w-100 p-0">
                <a href="#">
                    <i class="fa fa-user mr-3"></i>
                    <span>Quiz</span>
                </a>
            </div>
            <ul class="list-child collapse" id="collapseOne">
                <li class="px-3 py-1">New Quiz</li>
                <li class="px-3 py-1">View Quizzes</li>
            </ul>
        </li>

@endsection