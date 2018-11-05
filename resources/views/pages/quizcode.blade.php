@extends('layouts.authapp')

@section('content')
    @parent
    <div class="jumbotron m-5">
        <h1 class="display-4">Enter Quiz Code</h1>
            <p class="lead">Enter your 8 character long quiz code to partake in a quiz, this should be supplied by your assessment officer.</p>
            <hr class="my-4">
            <div class="mb-3">
                <form method="POST" action="{{ route('quizcode') }}">
                     @csrf

                    <div class="form-group">
                        <input type="text" name="quizcode" id="quizcode" class="form-control">
                        @if ($errors->has('quizcode'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('quizcode') }}</strong>
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" role="button">Partake</button>
                </form>
            </div>
    </div>
@endsection
