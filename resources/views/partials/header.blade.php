
<header>
    <div class="my-w-70">
        <div class="header-content">
          <div id="logo">
            <img src="{{asset("img/dc-logo.png")}}" alt="logo comics"/>
          </div>
          <nav>
            <ul class="my-nav-header">
                @foreach ($menu as $item) 
                <li>
                  <a href="#">{{ $item['text']}}</a>
                </li>
                @endforeach
            </ul>
            </nav>
        </div>
    </div>
    {{-- @dump($menu) --}}
</header>
