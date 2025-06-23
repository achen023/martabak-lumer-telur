@php
    $images = [$imgsrc1, $imgsrc2, $imgsrc3, $imgsrc4, $imgsrc5];
@endphp

<div id="default-carousel" class="relative w-full" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-[300px] sm:h-[350px] md:h-[450px] lg:h-[600px] xl:h-[710px] overflow-hidden rounded-lg">

        @foreach ($images as $index => $img)
            <div class="absolute inset-0 transition-all duration-700 ease-in-out {{ $index !== 0 ? 'hidden' : '' }}" data-carousel-item="{{ $index === 0 ? 'active' : '' }}">
                <!-- Gambar -->
                <img src="{{ asset($img) }}" class="w-full h-full object-cover" alt="Slide {{ $index + 1 }}">

                <!-- Overlay Teks pada Slide Pertama -->
                @if ($index === 0)
                    <div class="absolute inset-0 flex items-center justify-center bg-black/30">
                        <h2 class="text-white text-2xl sm:text-3xl md:text-5xl font-bold animate-fadeInDown text-center px-4">
                            Selamat datang di website kami
                        </h2>
                    </div>
                @endif
            </div>
        @endforeach

    </div>

    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        @foreach ($images as $index => $img)
            <button type="button"
                class="w-3 h-3 rounded-full bg-white"
                aria-current="{{ $index === 0 ? 'true' : 'false' }}"
                aria-label="Slide {{ $index + 1 }}"
                data-carousel-slide-to="{{ $index }}">
            </button>
        @endforeach
    </div>

    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>

    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<!-- Tambahkan ini sebelum penutup </body> jika belum ada -->
<script src="https://unpkg.com/flowbite@latest/dist/flowbite.min.js"></script>
