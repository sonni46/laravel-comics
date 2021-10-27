<main>
    <div class="background-black">
      <div class="cdComicImg container">
        @foreach ($comics as $item)
           <div class="img-comics">
               <div>
                    <img src="{{$item["thumb"]}}" alt="">
               </div>
               <h3>{{$item["title"]}}</h3>
           </div>
       @endforeach
        </div>
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