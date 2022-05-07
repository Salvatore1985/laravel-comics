
<footer>
    <div class="footer-top">
        <section class="my-container">
          <section>
          {{--   <FooterTop /> --}}
          <div class="wrapped-link">
   {{--          @dump($dccomics[0]['links']) --}}
            <div>
              <h5>{{$dccomics[0]['title']}}</h5>
              <ul>
                
              @foreach($dccomics[0]['links'] as $links)
              <li>
                <a href="">{{$links}}</a>
              </li>
            
              @endforeach
            
              </ul>
              {{-- @dump($dccomics[1]['link'])  --}}
              <h5>{{$dccomics[1]['title']}}</h5>
              <ul>
                @foreach($dccomics[1]['link'] as $links)
              <li>
                <a href="">{{$links}}</a>
              </li>
            
              @endforeach
              </ul>
            </div>
            <div>
              <h5>{{$dccomics[2]['title']}}</h5>
              <ul>
                @foreach($dccomics[2]['link'] as $links)
              <li>
                <a href="">{{$links}}</a>
              </li>
            
              @endforeach
              </ul>
            </div>
            <div>
              <h5>{{$dccomics[3]['title']}}</h5>
              <ul>
                @foreach($dccomics[3]['link'] as $links)
              <li>
                <a href="">{{$links}}</a>
              </li>
            
              @endforeach
              </ul>
            </div>
          </div>
          </section>
          <div id="logo">
            <img src="/img/dc-logo-bg.png" alt="LOGO" />
          </div>
        </section>
      </div>
      <div class="footer-bottom">
        <section class="my-container">
         {{--  <FooterBot /> --}}
         <div class="wrapped-social">
            <button id="sign-up">Sign-up now!</button>
            <ul>
              <li><a href="#">followe us</a></li>
              @foreach ($iconsList as $icon)
                <li>
                    <a href="{{ $icon['url']}}">
                    <img
                   {{--  src="{{asset("img/"$icon['icons']")}}" --}}
                        src="{{asset("img/".$icon['icons'])}}"
                        alt={{ $icon['alt']}}
                    /></a>
                </li>
             @endforeach
            </ul>
          </div>
        </section>
      </div>
</footer>