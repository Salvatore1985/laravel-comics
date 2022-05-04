<main>
    <div class="main-container">
        <div class="JumbotronMain"></div>
        <button id="btn-series">current series</button>
        <section class="my-container">
           {{--  @dump($comics) --}}
        @foreach ($comics as $cover)
            <div class="cover">
                <a href="#">
                    <img src="{{$cover['thumb']}}" alt="CoverType" />
                    <h5>{{ $cover['type'] }}</h5>
                </a>
            </div>
        @endforeach
       

       {{--    <ContentMain
            v-for="(element, index) in listThumb"
            :key="index"
            :CoverThumb="element.thumb"
            :CoverPrice="element.price"
            :CoverSeries="element.series"
            :CoverType="element.type"
          /> --}}
        </section>
        <button>load more</button>
    
        <section class="my-container-buy">
          <nav>
      {{--       <ContentMainBuy
              v-for="(element, index) in navbuyComics"
              :key="index"
              :CoverBuyText="element.text"
              :CoverBuyUrl="element.url"
              :CoverBuyCurrent="element.current"
              :CoverBuySrc="element.src"
            /> --}}
          </nav>
        </section>
      </div>
    @yield('content-primary')
</main>