@extends('layout')

@include('partials._nav')
@php
    $tags = explode(',', $listing->tags);
@endphp

<form action="/">
<div class="flex items-center justify-end mx-12 my-6">
    <div class="flex border-2 rounded">
        <input type="text" class="px-4 py-2 w-60" placeholder="Search..." name="search">
        <button class="flex items-center justify-center px-4 border-l">
            <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24">
                <path
                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
            </svg>
        </button>
    </div>
</div>
</form>
<div class="flex flex-col items-center justify-center text-center py-6">
    <h1 class="py-3 font-bold">Job Detail</h1>
    <img src="{{$listing->logo}}" alt="company_logo" width="100px" height="100px">
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