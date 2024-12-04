<section class="py-10 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-8">Gallery</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
            @foreach (range(1, 12) as $imageNumber)
                <div class="overflow-hidden rounded-lg shadow-lg">
                    <img class="h-auto w-full transition-transform duration-300 hover:scale-110" 
                         src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-{{ $imageNumber }}.jpg" 
                         alt="Gallery Image {{ $imageNumber }}">
                </div>
            @endforeach
        </div>
    </div>
</section>
