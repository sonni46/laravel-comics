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
        <div class="loadMore">
            <span>LOAD</span>
        </div>
    </div>
    <div>
        <div class="background-blu-light">
            <div class="container">
                <div class="comics">
                    @foreach ($stiCards as $item)
                    <div>
                        <img src='{{asset("{$item['img']}")}}' alt="">
                        <span>{{$item["title"]}}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</main>