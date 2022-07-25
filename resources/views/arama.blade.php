<div class="container">
    
    <div class="container">

        @if(count($uyeler)==0)

        <p>Üye bulunmamaktadır.</p>

        @endif

    </div>

    <ul>
        @foreach ($uyeler as $item)
            <li> Üye Adı: {{$item->name}}</li>
            <li>  Üye Soyadı: {{$item->surname}} </li> <br>
        @endforeach
    </ul>

</div>