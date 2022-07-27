@extends('layout')

@section('content')
@include('partials._nav')
@include('partials._hero')

<form action="/">
    @csrf
<div class="flex items-center justify-end mx-12 my-6">
    <div class="flex border-2 rounded">
        <input type="text" class="px-3 py-2 w-80" placeholder="Search..." name="search">
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

<div class="flex items-center justify-center py-12">
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
        @foreach($listings as $listing)
        <!-- 1 card -->
        <div class="relative bg-rose-200 py-6 px-6 rounded-3xl w-64 my-4 shadow-xl">
            <div class=" text-white flex items-center absolute rounded-full py-4 px-4 shadow-xl  left-4 -top-6">
                <!-- svg  -->
                <img src="{{asset('images/ABEG.png')}}" alt="company_image" width="40px" height="40px" class="rounded-full">
            </div>
            <div class="mt-8">
                <p class="text-xl font-semibold my-2">{{$listing->title}}</p>
                <div class="flex space-x-2 text-gray-400 text-sm">
                    <!-- svg  -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                     <p>{{$listing->location}}</p> 
                </div>
                <div class="flex space-x-2 text-gray-400 text-sm my-3">
                    <!-- svg  -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <p class="text-bold">{{$listing->company}}</p>
                </div>
                @php
                    $tags = explode(',', $listing->tags);
                @endphp
                <div class="flex space-x-2 text-gray-400 text-sm my-3">
                    <!-- svg  -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    @foreach($tags as $tag)
                    <a href="/?tag={{$tag}}" class="bg-rose-600 text-white rounded-xl py-1 px-3 mr-2 text-xs">{{$tag}}</a> 
                    @endforeach
                </div>
                <div class="border-t-2"></div>

                <div class="flex justify-between">
                    <div class="">
                        
                    </div>
                     <div class="my-6">
                        <a href="/listing/{{$listing->id}}" class="font-semibold text-base mb-2 bg-rose-600 text-white px-3 py-3 rounded-md">Description</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection