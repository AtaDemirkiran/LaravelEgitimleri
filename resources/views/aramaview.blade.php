<div>
    @if(count($users)==null)
        <h2>Bu isimde üye bulunmamaktadır.</h2>
    @endif

    <ul>
        
        @foreach ($users as $item)
        <li>
            {{$item->name}} 
            {{$item->surname}}
        </li>
        @endforeach
    </ul>

    {{$users->links()}}

</div>