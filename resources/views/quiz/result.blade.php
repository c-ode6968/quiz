<h1>Resultat du Quiz</h1>

@if($isCorrect)
    <h2>Bravo  est la bonne réponse</h2>
@else 
    <h2>Désolé, Mauvaise réponse</h2>
@endif
{{ $isCorrect }}