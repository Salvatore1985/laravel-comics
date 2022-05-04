<main>
    <div class="main-container">
        <div class="JumbotronMain"></div>
        {{-- <Jumbotron /> --}}
        <button id="btn-series">current series</button>
        <section class="my-container">
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