
<div>

  @if (count($errors)>0)
      @foreach ($errors->all() as $error)
          {{$error}}
      @endforeach
  @endif

  <ul>

    @foreach ($users as $user)
    <li> User Name:  {{$user->name}} </li>
    <li> User Surname:  {{$user->surname}} </li> <br>
    
    @endforeach
  </ul>

      <a href="?all=hepsi">Tümünü Göster</a>
      <a href="?all=gizle">Gizle</a>

  {{$users->links()}}
</div>

<form action="{{route('userEkle')}} " method="POST" >
  @csrf
  <input type="text" name="name">
  <input type="text" name="surname" id="">

  <input type="submit" value="Kaydet" name="" id="">
</form>

<form action="{{route('uyeAra')}}" method="POST">
  @csrf
  <input type="text" name="aranan" placeholder="Arama..">
  <input type="submit" value="Ara" name="" id="">
</form>