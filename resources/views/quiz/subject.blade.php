<h1>Choisisse une matiere et formez vous</h1>
<ul>
    @foreach($subjects as $subject)
    <li>
        <a href="{{route('showquiz', [$subject -> subject])}}">{{$subject -> subject}}</a>
    </li>
    @endforeach
</ul>