<footer>
    <div>
        @foreach ($footerInfo as $key => $items)
            <div>
                <h3>{{$items["title"]}}</h3>
                @foreach ($items["info"] as $item)
                    <span>{{$item["text"]}}</span> <br>
                @endforeach
            </div>
        @endforeach
    </div>
    <div>
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