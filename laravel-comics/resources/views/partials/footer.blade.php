<footer>
    <div class="foot">
        <div class="container">
            <div class="bg-logo">
            @foreach ($footerInfo as $key => $items)
                <div class="info">
                    <h3>{{$items["title"]}}</h3>
                    @foreach ($items["info"] as $item)
                        <span><a href="">{{$item["text"]}}</a></span> <br>
                    @endforeach
                </div>
            @endforeach  
            </div>
        </div>
    </div>
    <div class="follow background-black d-flex justify-content-space-around align-items-center">
        <div>
            <span class="sing-button ">SIGN-UP NOW!</span>
        </div>
        <div class="d-flex align-items-center">
            <div class="us">
                <span class="mar-rg">FOLLOW US</span>
            </div>
            <div>
                <img src="{{asset('img/footer-facebook.png')}}" alt="">
                <img src="{{asset('img/footer-twitter.png')}}" alt="">
                <img src="{{asset('img/footer-youtube.png')}}" alt="">
                <img src="{{asset('img/footer-pinterest.png')}}" alt="">
                <img src="{{asset('img/footer-periscope.png')}}" alt="">
            </div>
        </div>
    </div>
</footer>