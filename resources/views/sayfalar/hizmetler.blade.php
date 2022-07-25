
@extends('tema')
@section('govde')
 

<div>
    @foreach ($meslekler as $meslek)
        
        {{$meslek->meslek_name}} <br>

    @endforeach

</div>
 

@endsection
