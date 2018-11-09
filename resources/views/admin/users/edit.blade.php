@extends('layouts.admin')
@section('content')
    <div class="p-3">
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('quiz.update', $quiz->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="time_allocated">Time Allocated</label>
                        <input type="text" value="{{$quiz->time_allocated}}" name="time_allocated" id="time_allocated" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="mark_per_question">Marks Per Question</label>
                        <input type="number" value="{{$quiz->mark_per_question}}" name="mark_per_question" id="mark_per_question" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection