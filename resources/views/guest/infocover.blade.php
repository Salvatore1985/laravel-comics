@extends('layouts.app')

@section('title','info-cover')

@section('main-content')
<section class="cover-info">
   

</section>
<section class="single-cover">
    <div class="my-d-flex my-h-100">
        <div class="cover-title my-py-3 ">
            <h1 class="my-py-2">{{$comic['title']}}</h1>
            <div class="my-d-flex  border-b-1">
                <div class="price-cover my-d-flex 
                            my-justify-content-between 
                            my-align-items-center
                            my-px-1">
                    <span class="my-text-green"> U.S Price: $<span class="my-text-white">{{$comic['price']}}</span></span>
                    <span class="my-text-transform-uppercase my-text-green " >available</span>
                </div>
                <div class="check-availability
                             my-d-flex 
                            my-justify-content-center 
                            my-align-items-center
                            border-l-1
                ">
                    <span class="my-text-white" >Check Availability </span>
                </div>
            </div>
            <p class="my-py-1">{{$comic['description']}}</p>
        </div>

        <div class="advertisement">
             <img src="{{$comic['thumb']}}" alt="">
        </div>
    </div>
</section>
<section class="single-cover-info">
    {{--     <div class="cover-title">
    
        </div>
        <div class="advertisement">
    
        </div> --}}
    </section>


{{-- {{$comic['title']}} --}}
@endsection