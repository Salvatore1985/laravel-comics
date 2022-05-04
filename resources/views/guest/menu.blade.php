
@extends('guest.menu')
    @section('menu-header')
        <ul class="my-nav-header">
            @foreach ($menu as $item) 
            <li>
            <a href="#">{{ $item['text']}}</a>
            </li>
            @endforeach
        </ul>
    @endsection