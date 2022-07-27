@extends('layout')

@include('partials._nav')
@php
    $tags = explode(',', $listing->tags);
@endphp

<div class="flex flex-col items-center justify-center text-center py-6">
    <h1 class="py-3 font-bold">Job Detail</h1>
    <img src="{{asset('images/ABEG.png')}}" alt="company_logo" width="100px" height="100px">
    <h2 class="text-xl font-bold mb-2 py-6">{{$listing->company}}</h2>
    <h3 class="text-2xl">{{$listing->title}}</h3>
    <ul class="flex py-6">
    @foreach($tags as $tag)
    <li class="flex items-center justify-center bg-rose-400 text-white rounded-xl py-1 px-3 mr-2 text-xs">
        <a href="/?tag={{$tag}}">{{$tag}}</a> 
    </li>
    @endforeach
    </ul>
    <div>
        <h3 class="text-gray py-2 px-2 border-b-2 border-rose-500 font-mono mb-2">Description</h3>
    </div> 
    <p class="max-w-md mb-3">{{$listing->description}}</p>
    <div class="flex space-x-6 justify-between">
        <a href="" class="bg-rose-600 px-6 py-2 rounded-md text-white">Visit Website</a> 
        <a href="" class="bg-indigo-600 px-6 py-2 rounded-md text-white">Apply</a>  
    </div> 
</div>