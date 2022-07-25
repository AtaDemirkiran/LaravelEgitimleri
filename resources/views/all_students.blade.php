@extends('tema')

@section('head')
    @include('partials.head')
@endsection



@section('govde')

    <div class="container" style="margin-top: 8%">
        <table class="table table-stripped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col"> Image</th>
                    <th scope="col"> EDİT</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <th> {{$student->id}} </th>
                    <th> {{$student->name}} </th>
                    <th> {{$student->surname}} </th>
                    <th> <img src="{{asset('images/'.$student->student_image)}}" width="100" height="100"  alt=""> </th>
                    <th> <a  class="btn btn-warning" href="{{route('edit',$student->id)}} ">EDİT</a></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection



@section('scripts')
    @include('partials.head')
@endsection
