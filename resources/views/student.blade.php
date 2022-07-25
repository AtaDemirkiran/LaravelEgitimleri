
@extends('tema')

@section('head')
    @include('partials.head')
@endsection

@section('govde')
<div class="container">

    <form action=" {{route('create')}} " enctype="multipart/form-data"  method="POST">
        @csrf

        <input type="text" name="name" placeholder="Student Name"> <br>
        <input type="text" name="surname" placeholder="Student Surname"> <br>

        <input type="file" name="student_image"> <br>

        <input type="submit" value="Student Kaydet">

    </form>

    <a class="btn btn-warning" href=" {{route('all_students')}}">See all</a>
</div>
<br><br>
<div> 
    <form method="POST" action=" {{route('find')}}">
        @csrf

        <input type="text" name="ara">

        <input type="submit" value="Arama Yap">

    </form>

</div>
@endsection


@section('scripts')
    @include('partials.scripts')
@endsection