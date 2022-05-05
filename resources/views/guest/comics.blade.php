@extends('layouts.app')

@section('title','comics')

@section('main-content')
<button id="btn-series">current series</button>
  <section class="my-container">
      @foreach ($comics as $cover)
          <div class="cover">
              <a href="#">
                  <img src="{{$cover['thumb']}}" alt="CoverType" />
                  <h5>{{ $cover['series'] }}</h5>
              </a>
          </div>
      @endforeach
  </section>
  <button class="btn-center">load more</button>  
  <section class="my-container-buy ">        
    <nav>
      <div class="cover-bay my-d-flex">
          @foreach ($navbuyComics  as $item)
              <a href="{{$item['url']}}">
                  <div>
                      <img
                          src="/img/{{$item['src']}}"
                          alt={{$item['text']}}
                      />
                      <span>{{$item['text']}}</span>
                  </div>
              </a>
          @endforeach
      </div>
    </nav>
  </section>

@endsection
