@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50 mt-10 rounded-lg">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-extrabold text-center text-gray-800 mb-12">Our Portfolio</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @php
                $images = [
                    'porto1.png',
                    'porto2.png',
                    'porto3.png',
                    'rent1.png',
                    'rent2.png',
                    'rent3.png',
                    'rent4.png',
                    'self-foto.png',
                    'porto1.png',
                    'porto2.png',
                    'porto3.png',
                    'rent1.png',
                    'rent2.png',
                    'rent3.png',
                    'rent4.png',
                    'self-foto.png',
                    'porto1.png',
                    'porto2.png',
                    'porto3.png',
                    
                ];
            @endphp
            @foreach (array_chunk($images, 5) as $chunk)
                <div class="grid gap-6">
                    @foreach ($chunk as $image)
                        <div class="relative group overflow-hidden rounded-lg shadow-lg bg-white">
                            <!-- Image -->
                            <img 
                                class="h-auto max-w-full rounded-lg transform transition-transform duration-500 ease-in-out group-hover:scale-110" 
                                src="{{ asset('images/' . $image) }}" 
                                alt="Portfolio Image {{ $image }}"> 
                            
                            <!-- Overlay Effect -->
                            <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                                <span class="text-white text-lg font-bold">View Image</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
