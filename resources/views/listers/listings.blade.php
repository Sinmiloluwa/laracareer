@extends('adminLayout')

@section('content')

<main>

   
    <section>
        <div id="main" class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">

            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl bg-gradient-to-r from-blue-900 to-gray-800 p-4 shadow text-2xl text-white">
                    <h1 class="font-bold pl-2">Dashboard</h1>
                </div>
            </div>
            
                <div class="container flex justify-center mx-auto px-16 py-6">
                    <div class="flex flex-col">
                        <div class="w-full">
                            <div class="border-b border-gray-200 shadow overflow-x-auto relative">
                                <table class="divide-y divide-gray-300 ">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                ID
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Title
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Tags
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Location
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Website
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                views
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Edit
                                            </th>
                                            <th class="px-6 py-2 text-xs text-gray-500">
                                                Delete
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-300">
                                        @foreach($listings as $listing)
                                        <tr class="whitespace-nowrap">
                                            <td class="px-6 py-4 text-sm text-gray-500">
                                                {{$listing->id}}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    {{$listing->title}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    {{$listing->tags}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    {{$listing->location}}
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    <a href="{{$listing->website}}">{{$listing->website}}</a>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-gray-900">
                                                    {{$listing->views}}
                                                </div>
                                            </td>
                                             <td class="px-6 py-4">
                                                <div class="text-sm text-white">
                                                    <a href="{{route('edit')}}" class="bg-gray-600 px-4 py-2 rounded-lg shadow-md">Edit</a>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="text-sm text-white">
                                                    <form action="{{route('destroy')}}">
                                                    <a href="" class="bg-red-600 px-2 py-2 rounded-lg shadow-md">Delete</a>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>
</div>
</main>

@endsection