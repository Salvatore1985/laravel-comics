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
                            border-b-1
                           ">
                    <span class="my-text-green"> U.S Price: <span class="my-text-white">{{$comic['price']}}</span></span>
                    <span class="my-text-transform-uppercase my-text-green " >available</span>
                </div>
                <div class="check-availability
                             my-d-flex 
                            my-justify-content-center 
                            my-align-items-center
                            border-l-1
                            border-b-1
                ">
                    <span class="my-text-white" >Check Availability </span>
                </div>
            </div>
            <p class="my-py-1">{{$comic['description']}}</p>
        </div>

        <div class="advertisement my-p-4 ">
             <img src="{{$comic['thumb']}}" alt="">
        </div>
    </div>
</section>
<section class="single-cover-info">
        <div class="cover-title">
    
        </div>
        <div class="advertisement">
    
        </div>
    </section>


{{-- {{$comic['title']}} --}}
@endsection