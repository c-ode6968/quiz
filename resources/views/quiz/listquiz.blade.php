<h1>Quiz - {{ $quizzes[0]->subject}}</h1>

<form action="{{route('resultat')}}" method="POST">
    @csrf
    @foreach($quizzes as $quiz)
        <h3>{{$quiz -> question}}</h3>
        @foreach($quiz -> options as $option)
            <label for="">
                <input type="radio" name="selected_option" value="{{$option}}" required>{{$option}}
            </label><br>
        @endforeach
        <input type="hidden" name="quiz_id" value="{{$quiz ->id }}"><hr>
    @endforeach
    <button type="submit">Valider</button>        
</form>