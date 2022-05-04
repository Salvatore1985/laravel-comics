<footer>
    <div class="footer-top">
        <section class="my-container">
          <section>
          {{--   <FooterTop /> --}}
          <div class="wrapped-link">
            <div>
              <h5>dc comics</h5>
              <ul>
                <li>
                  <a href="#">characters</a>
                </li>
                <li>
                  <a href="#">comics</a>
                </li>
                <li>
                  <a href="#">movies</a>
                </li>
                <li>
                  <a href="#">tv</a>
                </li>
                <li>
                  <a href="#">games</a>
                </li>
                <li>
                  <a href="#">videos</a>
                </li>
                <li>
                  <a href="#">news</a>
                </li>
              </ul>
              <h5>dc comics</h5>
              <ul>
                <li><a href="#">shop DC</a></li>
                <li><a href="#">shop DC collectibles</a></li>
              </ul>
            </div>
            <div>
              <h5>dc comics</h5>
              <ul>
                <li><a href="#">terms of use</a></li>
                <li><a href="#">privacy policy (new)</a></li>
                <li><a href="#">ad choices</a></li>
                <li><a href="#">advertising</a></li>
                <li><a href="#">jobs</a></li>
                <li><a href="#">subscriptions</a></li>
                <li><a href="#">talent workshops</a></li>
                <li><a href="#">CPSC certificates</a></li>
                <li><a href="#">shop help</a></li>
                <li><a href="#">contact us</a></li>
              </ul>
            </div>
            <div>
              <h5>dc comics</h5>
              <ul>
                <li><a href="#">dC</a></li>
                <li><a href="#">MAD magazine</a></li>
                <li><a href="#">dC kids</a></li>
                <li><a href="#">dC universe</a></li>
                <li><a href="#">dC power visa</a></li>
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
                      
                        src="img/{{$icon['icons']}}"
                        alt={{ $icon['alt']}}
                    /></a>
                </li>
             @endforeach
            </ul>
          </div>
        </section>
      </div>
</footer>