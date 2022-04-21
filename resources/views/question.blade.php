

@foreach($question as $question)
    <h3>{{$question->question}}</h3>
    <li>{{$question->choice1}}</li>
    <li>{{$question->choice2}}</li>
    <li>{{$question->choice3}}</li>
    <li>{{$question->choice4}}</li>
@endforeach
