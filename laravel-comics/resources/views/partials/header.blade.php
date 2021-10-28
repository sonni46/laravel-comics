
<header class="">
    <div class="bg-blueL">
        <div class="container d-flex justify-content-end color-wh">
            <span class="mar-rg ">DC POWER VISA</span>
            <span>ADDITIONAL DC SITES</span>
        </div>
    </div>
    <div class="menu container">
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
    <div class="jumbo background-black">
        <img src="{{asset('img/jumbotron.jpg')}}" alt="">
    </div>
</header>