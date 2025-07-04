@extends('layout.layoutlanding')

@section('title', 'landing page')

@section('content')

    @include('components.carousel', [
        'imgsrc1' => 'image/benner2.png',
        'imgsrc2' => 'image/bnr.png',
        'imgsrc3' => 'image/bannerlok.png',
        'imgsrc4' => 'image/martabak_mage.jpg',
        'imgsrc5' => 'image/martabak7.jpg',
    ])

    <div data-aos="fade-up" data-aos-delay="100">
        @include('components.text')
    </div>

    <div data-aos="fade-up" data-aos-delay="200">
        @include('components.card_icon')
    </div>

@endsection

@section('content2')
    <h1 class="text-2xl text-center mr-4 font-bold mb-6" data-aos="fade-up">MENU KAMI</h1>

    <div class="justify-center my-10 " data-aos="fade-up" data-aos-delay="100">
        @include('components.card', ['produks' => $produks->take(9)])

        <div class="flex justify-center my-10" data-aos="fade-up" data-aos-delay="300">
            <a href="/menu"
                class="text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm py-4 px-8 dark:bg-yellow-600 dark:hover:bg-yellow-700 focus:outline-none dark:focus:ring-yellow-800">
                Menu selengkapnya
            </a>
        </div>
    </div>

    <div class="rounded-lg p-6" data-aos="fade-right" data-aos-delay="300">
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
            <img class="h-auto max-w-lg rounded-lg" src="image/lokasi.jpg" alt="image description">
            <div class="flex-1 text-center">
                <h2
                    class="mb-6 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-black text-center">
                    Our Journey
                </h2>
                <p class="mb-6 text-center text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                    Martabak lumer telur telah hadir sejak tahun 2024 dengan Outlet yang berada di Mtc, Batam centere.
                    Martabak sebagai jajanan tradisional Indonesia yang paling disukai oleh masyarakat tentunya menjadi
                    salah satu makanan yang tidak tergerus oleh jaman dan diminati oleh seluruh kalangan.
                </p>
            </div>
        </div>
    </div>


    <div class="rounded-lg p-6 bg-yellow-500" data-aos="fade-left" data-aos-delay="300">
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
            <div class="flex-1">
                <h2
                    class="mb-6 text-4xl font-bold leading-none text-center tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black">
                    Quality is our
                </h2>
                <p class="mb-6 text-lg font-normal text-black-500 lg:text-xl dark:text-black-400">
                    Kami percaya bahwa kualitas adalah kunci utama dalam setiap produk yang kami sajikan. Dari pemilihan
                    bahan baku terbaik hingga proses pembuatan yang higienis dan penuh ketelitian, kami selalu memastikan
                    bahwa setiap martabak yang Anda nikmati memiliki rasa dan standar terbaik. Karena bagi kami, kepuasan
                    pelanggan dimulai dari kualitas yang tidak pernah dikompromikan.
                </p>
            </div>
            <img class="h-auto max-w-lg rounded-lg" src="image/martabak1.jpg" alt="image description">
        </div>
    </div>

    <div class="rounded-lg p-6" data-aos="fade-right" data-aos-delay="300">
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
            <img class="h-auto max-w-lg rounded-lg shadow-md" src="image/estetik.jpg" alt="Gambar martabak lumer telur">
            <div class="flex-1 text-center">
                <h2
                    class="mb-6 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-black text-center">
                    Vision & Mision
                </h2>
                <p class="mb-6 text-center text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                    Kami memiliki visi untuk menjadi brand martabak lokal yang terpercaya dan digemari oleh seluruh kalangan
                    masyarakat,
                    dengan menyajikan cita rasa autentik serta kualitas terbaik yang konsisten di setiap sajian. Untuk
                    mewujudkan visi tersebut,
                    kami menjalankan misi dengan menghadirkan martabak dari bahan baku pilihan, menjaga kualitas dan
                    kebersihan produk, memberikan
                    pelayanan yang ramah dan cepat, serta terus berinovasi dalam menu tanpa meninggalkan nilai-nilai
                    tradisional. Kami juga berkomitmen
                    untuk membuka peluang usaha dan memberikan manfaat bagi lingkungan sekitar melalui pengembangan jaringan
                    usaha yang berkelanjutan.
                </p>
            </div>
        </div>
    </div>

    <section class="py-8 px-4 bg-white text-center" data-aos="fade-up" data-aos-delay="100">
        <h1 class="mt-2 mb-6 text-2xl font-bold text-center">Hubungi atau kunjungi outlet kami</h1>

        <div class="w-full max-w-4xl mx-auto mb-8" data-aos="zoom-in" data-aos-delay="200">
            <iframe src="https://www.google.com/maps?q=1.1375755745746552,104.11250718872274&z=17&output=embed"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade" class="rounded-lg shadow-md">
            </iframe>
        </div>

        <div class="flex justify-center my-10" data-aos="fade-up" data-aos-delay="300">
            <a href="https://wa.me/62895600550241?text=Halo%2C%20saya%20tertarik%20dengan%20produk%20martabak%20Anda."
                class="flex items-center gap-x-2 bg-yellow-600 hover:bg-yellow-700 text-white font-semibold py-2 px-6 rounded-lg shadow-md">
                <img src="/image/wa.png" alt="WhatsApp" class="w-8 h-8" />
                hubungi kami
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto text-left" data-aos="fade-up"
            data-aos-delay="400">
            <div class="flex flex-col items-center">
                <div class="text-3xl mb-2"><img src="/image/aod.png" alt=""></div>
                <p class="font-semibold">Phone:</p>
                <p class="text-gray-600">+62 895-6005-50241</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-3xl mb-2"><img src="/image/location_on.png" alt=""></div>
                <p class="font-semibold">Address:</p>
                <p class="text-gray-600 text-center">Jl. Contoh Batu Besar MTC, Batam, Indonesia</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="text-3xl mb-2"><img src="/image/mail.png" alt=""></div>
                <p class="font-semibold">Email:</p>
                <p class="text-gray-600">setyapramudiya18@gmail.com</p>
            </div>
        </div>
    </section>
@endsection
