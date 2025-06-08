@extends('layout.layoutlanding')

@section('title', 'about')
@section('page_title', 'About us')


@section('content')

    <h1 class="mt-2 text-center text-2xl font-bold mb-6"></h1>
    <div class=" rounded-lg p-6">
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
            <!-- Image -->
            <img class="h-auto max-w-lg rounded-lg" src="image/lokasi.jpg" alt="image description">

            <!-- Text beside the image -->
            <div class="flex-1 text-center">
            <h2 class="mb-6 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-black text-center">
                Our Journey
                </h2>
                <p class="mb-6 text-center text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                Martabak lumer telur telah hadir sejak tahun 2024 dengan Outlet yang berada di Mtc, Batam centere. Martabak sebagai jajanan tradisional Indonesia yang paling disukai oleh masyarakat tentunya menjadi salah satu makanan yang tidak tergerus oleh jaman dan diminati oleh seluruh kalangan.
                </p>
            </div>
        </div>
    </div>

    <div class="rounded-lg p-6 bg-yellow-500">
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
            <!-- Text first (on the left) -->
            <div class="flex-1">
                <h2 class="mb-6 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-black">
                    Quality is our
                </h2>
                <p class="mb-6 text-lg font-normal text-gray-500 lg:text-xl dark:text-black-400">
                Kami percaya bahwa kualitas adalah kunci utama dalam setiap produk yang kami sajikan. Dari pemilihan bahan baku terbaik hingga proses pembuatan yang higienis dan penuh ketelitian, kami selalu memastikan bahwa setiap martabak yang Anda nikmati memiliki rasa dan standar terbaik. Karena bagi kami, kepuasan pelanggan dimulai dari kualitas yang tidak pernah dikompromikan.
                </p>
            </div>

            <!-- Image second (on the right) -->
            <img class="h-auto max-w-lg rounded-lg" src="image/martabak1.jpg" alt="image description">
        </div>
    </div>

    <div class=" rounded-lg p-6">
        <div class="flex flex-col lg:flex-row items-center lg:items-start gap-6">
            <!-- Image -->
            <img class="h-auto max-w-lg rounded-lg shadow-md" src="image/estetik.jpg" alt="Gambar martabak lumer telur">

            <!-- Text beside the image -->
            <div class="flex-1 text-center">
            <h2 class="mb-6 text-4xl font-bold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-4xl dark:text-black text-center">
                Vision & Mision
                </h2>
                <p class="mb-6 text-center text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400">
                Kami memiliki visi untuk menjadi brand martabak lokal yang terpercaya dan digemari oleh seluruh kalangan masyarakat,
                 dengan menyajikan cita rasa autentik serta kualitas terbaik yang konsisten di setiap sajian. Untuk mewujudkan visi tersebut,
                  kami menjalankan misi dengan menghadirkan martabak dari bahan baku pilihan, menjaga kualitas dan kebersihan produk, memberikan 
                  pelayanan yang ramah dan cepat, serta terus berinovasi dalam menu tanpa meninggalkan nilai-nilai tradisional. Kami juga berkomitmen 
                  untuk membuka peluang usaha dan memberikan manfaat bagi lingkungan sekitar melalui pengembangan jaringan usaha yang berkelanjutan.
                </p>
            </div>
        </div>
    </div>

@endsection