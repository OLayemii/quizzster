<div class="jumbotron m-5">
    <h3 class="display-4">{{ $questions[0]->question }}</h3>
    <hr class="my-4">
    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <div class="form-check mb-5">
                    <input class="form-check-input" type="radio" name="options" id="optionA" value="optionA">
                    <label class="form-check-label" for="optionA">
                        {{ $questions[0]->opta }}
                    </label>
                </div>
                <div class="form-check mb-5">
                    <input class="form-check-input" type="radio" name="options" id="optionB" value="optionB">
                    <label class="form-check-label" for="optionB">
                        {{ $questions[0]->optb }}
                    </label>
                </div> 
            </div>
            <div class="col-md-6">
                <div class="form-check mb-5">
                    <input class="form-check-input" type="radio" name="options" id="optionC" value="optionC">
                    <label class="form-check-label" for="optionC">
                        {{ $questions[0]->optc }}
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="options" id="optionD" value="optionD">
                    <label class="form-check-label" for="optionD">
                        {{ $questions[0]->optcorrect }}
                    </label>
                </div> 
                <input type="text" id="currentQuestion" value="{{ $questions[0]->id }}" hidden>
            </div>
        </div>
    </div>
</div>
<div class="paginator px-5">
    {{ $questions->links() }}
</div>