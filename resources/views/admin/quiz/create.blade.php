@extends('layouts.admin')

@section('content')   
    <div class="p-3">
        <h3>Follow the instructions below to create a quiz:</h3>
        <ul class="list-group">
            <li class="list-group-item">Set up basic details about the quiz (marks per question, allocated time, quiz expiry)</li>
            <li class="list-group-item">Note that after the quiz expiry time is reached, new participants wont be allowed to take the quiz.</li>
            <li class="list-group-item">You are to upload your quiz question as an excel <strong>.csv</strong> file, consisting of a heading on the first row and 6 columns for each question as shown below:</li>
            <li class="list-group-item">
                <table width="100%" border="1">
                    <tr>
                        <th>question</th>
                        <th>opta</th>
                        <th>optb</th>
                        <th>optc</th>
                        <th>optcd</th>
                        <th>correctopt</th>
                    </tr>
                    <tr>
                        <td>Question</td>
                        <td>optionA</td>
                        <td>optionB</td>
                        <td>optionC</td>
                        <td>optionD</td>
                        <td>Correct Option</td>
                    </tr>
                </table>
            </li>
            <li class="list-group-item">The correct option column must consist of either letter A, B, C or D to denote the correct answer column.</li>
        </ul>
        <form action="{{ route('quiz.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="time_allocated">Time Allocated</label>
                <input type="time" name="time_allocated" id="time_allocated" class="form-control">
            </div>
            <div class="form-group">
                <label for="mark_per_question">Marks per Question</label>
                <input type="number" id="mark_per_question" name="mark_per_question" class="form-control">
            </div>
            <div class="form-group">
                <label for="questions_csv">Question file</label>
                <input type="file" name="questions_csv" id="questions_csv" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Upload</button>
            </div>
        </form>
    </div>
@endsection