<header class="my-d-flex " id="header-nav">
  <div class="my-d-flex  my-align-items-center ">
    <img src="{{asset("img/dc-logo.png")}}" alt="logo comics"/>
  </div>
  <nav class="my-d-flex my-justify-content-end "> 
    <ul class="my-nav-header 
                my-d-flex">
          @foreach ($menu as $item) 
              <li class="my-list-style-type-none my-ml-6 my-height-100 "id="nav-link">
                <strong>
                    <a 
                        class="my-text-black 
                        my-text-decoration-none
                        my-text-transform-uppercase" 
                        href="#">{{ $item['text']}}
                    </a>
                </strong> 
              </li>
          @endforeach
    </ul>
  </nav>
    {{-- @dump($menu) --}}
</header>
