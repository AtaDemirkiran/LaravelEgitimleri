<div>
    @foreach ($students as $student)
        <p> {{$student->name}} </p>
        <p> {{$student->surname}} </p>
    @endforeach

</div>