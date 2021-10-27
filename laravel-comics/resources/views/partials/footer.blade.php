<footer>
    <div>
        @foreach ($footerInfo as $item)
            <div>
                <h3>{{$item["title"]}}</h3>
                {{-- <span>{{$item["info"]["text"]}}</span> --}}
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