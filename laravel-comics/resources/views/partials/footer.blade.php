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
    <div class="background-black">
        <div>
            <span></span>
        </div>
        <div>
            <div>
                <span></span>
            </div>
            <div>
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
                <img src="" alt="">
            </div>
        </div>
    </div>
</footer>