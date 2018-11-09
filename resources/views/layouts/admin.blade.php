@extends('layouts.authapp')

@section('menu')
    <li class="list-group-item p-0 d-block" data-toggle="collapse" data-target="#collapseOne" style="height: auto">
            <div class="w-100 py-1">
                <a href="#">
                    <i class="fa fa-user mr-3"></i>
                    <span>Quiz</span>
                </a>
            </div>
            <ul class="list-child collapse w-100" id="collapseOne">
                <li class="w-100 py-1">
                    <a href="{{ route('quiz.create') }}" class="p-0 px-3">
                        <i class="fa fa-circle-o mr-3"></i>
                        <span>New Quiz</span>
                    </a>
                </li>
                <li class="w-100 py-1">
                    <a href="{{ route('quiz.index') }}" class="p-0 px-3">
                        <i class="fa fa-circle-o mr-3"></i>
                        <span>View Quizzes</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="list-group-item p-0 d-block" data-toggle="collapse" data-target="#collapseTwo" style="height: auto">
            <div class="w-100 py-1">
                <a href="#">
                    <i class="fa fa-user mr-3"></i>
                    <span>Users</span>
                </a>
            </div>
            <ul class="list-child collapse w-100" id="collapseTwo">
                <li class="w-100 py-1">
                    <a href="{{ route('users.create') }}" class="p-0 px-3">
                        <i class="fa fa-circle-o mr-3"></i>
                        <span>New User</span>
                    </a>
                </li>
                <li class="w-100 py-1">
                    <a href="{{ route('users.index') }}" class="p-0 px-3">
                        <i class="fa fa-circle-o mr-3"></i>
                        <span>View Users</span>
                    </a>
                </li>
            </ul>
        </li>
@endsection