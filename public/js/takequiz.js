$(function(){
    let answers = {};
    localStorage.setItem('answers', '{}');
    let selectedAnswer = "";
    $(window).on('hashchange',function(){
        page = window.location.hash.replace('#','');
        getProducts(page);
    });
    $(document).on('click','.pagination a', function(e){
        e.preventDefault();
        var currentQuestion = $('#currentQuestion').val();
        var page = $(this).attr('href').split('page=')[1];
        selectedAnswer = $('input[type="radio"]:checked').attr('id');
        console.log(currentQuestion);
        storeAnswers(currentQuestion, selectedAnswer);
        getProducts(page);
        location.hash = page;
    });
    function getProducts(page){
        $.ajax({
            url: '/pages/ajax/fetchquizpage?page=' + page
        }).done(function(data){
            $('#maincontent').html(data);

            let answers = JSON.parse(localStorage.getItem("answers"));

            if (answers[$('#currentQuestion').val()]){
                $('input[type="radio"]#'+answers[$('#currentQuestion').val()]).attr('checked', true); 
            }
        });
    }
    
    function storeAnswers(qNum, selectedAnswer){
        answers = JSON.parse(localStorage.getItem("answers"));
        answers[qNum] =  selectedAnswer;
        localStorage.setItem('answers', JSON.stringify(answers));
    }
});