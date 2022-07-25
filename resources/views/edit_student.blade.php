@extends('tema')

@section('head')
    @include('partials.head')
@endsection


@section('govde')

<div class="container" style="margin-top: 10%">

    <form method="POST" action=" {{route('update',$student->id)}} " enctype="multipart/form-data">
        @csrf
        {{method_field('PUT')}}

        <input type="hidden" name="id" id="id" value="{{$student->id}}">

        <div class="form-group">
            <img src="{{asset('images/'.$student->student_image)}}" width="100" height="100"  alt=""> 
            <input type="text" name="name" class="form-controller" value="{{$student->name}}">
            <input type="text" name="surname" class="form-controller" value="{{$student->surname}}">
            <input type="file" name="student_image" class="form_controller" value="{{$student->student_image}}">
            <input type="submit" class="btn btn-success" value="Edit">
        </div>

    </form>

</div>

@endsection


@section('scripts')
    @include('partials.scripts')
@endsection