@extends('layouts.app')

@section('title','info-cover')

@section('main-content')
<section class="cover-info">
    <div>
        <figure>
            <img src="{{$comic['thumb']}}" alt="">
            <span class="text-top my-text-white my-text-transform-uppercase ">comic book</span>
            <span class="text-bot my-text-white my-text-transform-uppercase ">view gallery</span>
        </figure>
    </div>

</section>
<section class="single-cover">
    <div class="my-d-flex my-h-100">
        <div class="cover-title my-py-2 ">
            <h1 class="my-py-2">{{$comic['title']}}</h1>
            <div class="my-d-flex">
                <div class="price-cover my-d-flex 
                            my-justify-content-between 
                            my-align-items-center
                            my-px-1
                            border-b-1-black
                           ">
                    <span class="my-text-green"> U.S Price: <span class="my-text-white">{{$comic['price']}}</span></span>
                    <span class="my-text-transform-uppercase my-text-green " >available</span>
                </div>
                <div class="check-availability
                             my-d-flex 
                            my-justify-content-center 
                            my-align-items-center
                            border-l-1
                            border-b-1-black
                ">
                    <span class="my-text-white" >Check Availability </span>
                </div>
            </div>
            <p class="my-py-1">{{$comic['description']}}</p>
        </div>

        <div class="advertisement my-p-4 ">
             <img src="/img/adv.jpg" alt="">
        </div>
    </div>
</section>

<section class="single-cover-info">
    <div class="wrapped-info-cover">
        <div class="cover-info-top my-d-flex  my-justify-content-between ">
            <div class="cover-info-top-left ">
                <h2 class=" border-b-1-gray my-py-2">Talent</h2>
                <div class="my-d-flex 
                            my-justify-content-between 
                            info-written
                            ">
                    <div class="border-b-1-gray my-py-1">
                        <span>Art by:</span>
                    </div>
                    <p class="border-b-1-gray 
                              my-py-1
                              my-text-color-primary
                              ">
                        {{(implode(", ",$comic['artists']))}}
                    </p>
                </div>
                <div class="my-d-flex 
                            my-justify-content-between 
                            info-written
                            ">
                    <div class="my-py-1 border-b-1-gray">
                        <span>Written by:</span>
                    </div>
                    <p class="border-b-1-gray
                              my-py-1
                              my-text-color-primary
                              ">
                        {{(implode(", ",$comic['writers']))}}
                    </p>
                </div>
                
            </div>
            <div class="cover-info-top-right ">
                <h2 class=" border-b-1-gray my-py-2">Specs</h2>
                <div class="my-d-flex 
                            my-justify-content-between 
                            info-written
                            
                            ">
                    <div class="border-b-1-gray my-py-1">
                        <span>Series:</span>
                    </div>
                    <p class="border-b-1-gray
                     my-py-1
                     my-text-transform-uppercase
                     my-text-color-primary
                     ">
                        {{$comic['series']}}
                    </p>
                </div>
                  <div class="my-d-flex 
                            my-justify-content-between 
                            info-written
                            ">
                    <div class="border-b-1-gray my-py-1">
                        <span>U.S Price:</span>
                    </div>
                    <p class="border-b-1-gray  my-py-1">
                        {{$comic['price']}}
                    </p>
                </div>
                 <div class="my-d-flex 
                            my-justify-content-between 
                            info-written
                            
                            ">
                    <div class="border-b-1-gray my-py-1">
                        <span>On Sale Date:</span>
                    </div>
                    <p class="border-b-1-gray  my-py-1">
                        {{$comic['sale_date']}}
                    </p>
                </div>
            </div>
        </div>
        <div class="cover-info-bot"></div> 
    </div>
</section>


{{-- {{$comic['title']}} --}}
@endsection