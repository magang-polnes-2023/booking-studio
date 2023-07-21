@extends('layout.template')
@section('konten')
    <!-- IMAGE -->
    <div class="container">
        <img src="{{ asset('image/studio3.jpeg') }}" class="d-block w-100" alt="">
    </div>
    <!-- END -->

    <!-- STUDIO -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto ">
            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white">Studio</h1>
    
            <div class="relative mt-8 lg:-mx-6 lg:flex lg:items-center">
                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-70 lg:h-80" src="{{asset('image/Design House Stockholm.jpeg')}}"alt="">
    
                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    <p class="text-sm text-blue-500 uppercase">Self Photo Studio</p>
    
                    <a href="#" class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white">
                        Self Studio: Portraits of You
                    </a>
    
                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                        laudantium quia tempore delect
                    </p>
    
                    <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>
    
                    <div class="flex items-center mt-6">
                        <div class="flex justify-between mt-3 item-center">
                            <a href="{{route('studio.index')}}" button class="px-3 py-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative mt-5 lg:-mx-6 lg:flex lg:items-center">
                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-70 lg:h-80" src="{{asset('image/pexels-anna-shvets-5325958.jpg')}}"alt="">
    
                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    <p class="text-sm text-blue-500 uppercase">Group Photo Studio</p>
    
                    <a href="#" class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white">
                        Make Memories Together
                    </a>
    
                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                        laudantium quia tempore delect
                    </p>
    
                    <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>
    
                    <div class="flex items-center mt-6">
                        <div class="flex justify-between mt-3 item-center">
                            <a href="{{route('studio.index')}}" button class="px-3 py-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative mt-5 lg:-mx-6 lg:flex lg:items-center">
                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-70 lg:h-80" src="{{asset('image/pexels-anna-shvets-5325958.jpg')}}"alt="">
    
                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    <p class="text-sm text-blue-500 uppercase">Fashion Photography Studio</p>
    
                    <a href="#" class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white">
                        Make Memories Together
                    </a>
    
                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure veritatis sint autem nesciunt,
                        laudantium quia tempore delect
                    </p>
    
                    <a href="#" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read more</a>
    
                    <div class="flex items-center mt-6">
                        <div class="flex justify-between mt-3 item-center">
                            <a href="{{route('studio.index')}}" button class="px-3 py-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
@endsection
