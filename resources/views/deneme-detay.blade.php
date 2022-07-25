<div>

    {{$user->name}} <br>
    
    {{$user->surname}}

</div>


<form action=" {{route('edit',$user->id)}} " method="POST">
@csrf
    <input type="text" name="name" value=" {{$user->name}} " id="">
<br>
    <input type="text" name="surname" id="" value="{{$user->surname}}">


    <input type="submit" placeholder="Gonder" >
</form>