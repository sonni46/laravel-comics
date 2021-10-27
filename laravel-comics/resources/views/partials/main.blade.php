<main>
    <div>
       @foreach ($comics as $item)
           <div>
               <div>
                    <img src="{{$item["thumb"]}}" alt="">
               </div>
               <span>{{$item["title"]}}</span>
           </div>
       @endforeach
    </div>
    <div>
        <span>LOAD</span>
    </div>
    <div>
        <div>
            @foreach ($stiCards as $item)
            <div>
                <img src='{{asset("{$item['img']}")}}' alt="">
                <span>{{$item["title"]}}</span>
            </div>
            @endforeach
        </div>
    </div>
</main>