
<header>
    <div>
        <span>DC POWER VISA</span>
        <span>ADDITIONAL DC SITES</span>
    </div>
    <div>
        <div>
            <img src="{{asset('img/dc-logo.png')}}" alt="">
        </div>
        <div>
            <ul>
            @foreach ($menu as $item)
               <li><a href="">{{$item}}</a></li> 
            @endforeach
            </ul>
        </div>
    </div>
</header>