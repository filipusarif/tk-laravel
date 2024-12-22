<x-base-user>
    <x-slot:title>TK Amanah Bangsa</x-slot:title>
   
    <x-navbar-user></x-navbar-user>


    <!-- <header class="bg-[#3CB5E8] text-white">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <h1 class="text-3xl font-bold">TK Amanah Bangsa</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:underline">Home</a></li>
                    <li><a href="#" class="hover:underline">Program</a></li>
                    <li><a href="#" class="hover:underline">Guru</a></li>
                    <li><a href="#" class="hover:underline">Galeri</a></li>
                </ul>
            </nav>
        </div>
    </header> -->

    <div class="relative w-full h-screen overflow-hidden">
        <!-- Carousel Container -->
        <div class="relative overflow-hidden h-full">
            <!-- Slides -->
            <div class="flex transition-transform duration-500 ease-in-out h-full" id="carousel-slides">
                <div class="w-full flex-shrink-0 h-full">
                    <img src="https://tkislamrahmatullah.com/wp-content/uploads/2020/01/WhatsApp-Image-2020-03-21-at-06.14.13.jpeg" 
                        alt="Slide 1" 
                        class="w-full h-full object-cover">
                </div>
                <div class="w-full flex-shrink-0 h-full">
                    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjy0nZjiOWYxxlNevPC8pZL8YltYPaZ4lMt2QY-SWwRH1GPrwhthuy8B9Pski7Ja3QXwr4HjKxUgtGme432upDZWKmcmu-zvRzwQO96_Rq-kAjlIDh8q_gaZ2iNp3hMJrPbccX4OcdMRQAmgiXWKHaR_9446unEBiVk9h9zHrqJwxjpFI99liuGUHTjc5zc/s2048/1.jpg" 
                        alt="Slide 2" 
                        class="w-full h-full object-cover">
                </div>
                <div class="w-full flex-shrink-0 h-full">
                    <img src="/assets/images/slide2.jpg" 
                        alt="Slide 3" 
                        class="w-full h-full object-cover">
                </div>
            </div>
        </div>
        <div class="absolute z-30 top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[75%] md:w-[40%] flex flex-col justify-content-center items-center">
            <p class="mt-4 bold text-3xl md:text-[400%] text-white">TK Amanah Bangsa</p>
            <p class="mt-2 text-slate-100">Daftarkan anak Anda di TK Amanah Bangsa untuk pengalaman belajar yang menyenangkan dan penuh keceriaan.</p>
            <div class="mt-6">
                <a href="/pendaftaran" class="bg-orange-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-orange-600">
                    Daftar Sekarang
                </a>
            </div>
        </div>
        <!-- Navigation Buttons -->
        <button id="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full p-2">
            &#10094;
        </button>
        <button id="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-gray-700 text-white rounded-full p-2">
            &#10095;
        </button>

        <!-- Indicators -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2 z-10">
            <button class="w-3 h-3 bg-gray-500 rounded-full" data-slide="0"></button>
            <button class="w-3 h-3 bg-gray-500 rounded-full" data-slide="1"></button>
            <button class="w-3 h-3 bg-gray-500 rounded-full" data-slide="2"></button>
        </div>
        <svg class="absolute left-0 bottom-0 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFFAE0" fill-opacity="1" d="M0,160L80,170.7C160,181,320,203,480,208C640,213,800,203,960,208C1120,213,1280,235,1360,245.3L1440,256L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
        <svg class="absolute left-0 bottom-0 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,320L80,298.7C160,277,320,235,480,229.3C640,224,800,256,960,256C1120,256,1280,224,1360,208L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
    </div>

    <section class="container  flex flex-col md:flex-row justify-content-center items-start mx-auto py-12">
        <div class="w-full md:w-1/2 p-12 flex gap-3 flex-col">
            <h1 class="text-5xl text-[#632A14]">Selamat Datang Di TK Amanah Bangsa!!</h1>
            <p class="text-md font-medium font-sans">
                Puji syukur marilah kita panjatkan kehadhirat Allah SWT atas berkat, rahmat dan hidayah-Nya sehingga salah satu program penting dalam proses perkembangan KB-TK Amanah Bangsa untuk memasuki era dunia maya dapat terwujud. Tujuan penting hadirnya KB-TK Amanah Bangsa di dunia maya yaitu dapat memberikan berbagai informasi kepada siswa, orang tua siswa dan masyarakat tentang kinerja sekolah serta memberikan masukan kritik dan saran yang membangun bagi kemajuan sekolah melalui peran serta masyarakat.
            </p>
        </div>
        <div class="w-full md:w-1/2">
            <img src="/assets/images/about.png" class="basis-1/2" alt="">
        </div>
    </section>

    <section class="min-h-screen w-full relative">
        <svg class="left-0 top-0 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFFAE0" fill-opacity="1" d="M0,224L48,208C96,192,192,160,288,144C384,128,480,128,576,112C672,96,768,64,864,90.7C960,117,1056,203,1152,224C1248,245,1344,203,1392,181.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
        <div class="bg-[#FFFAE0]">
            <div class="max-w-6xl mx-auto py-10 ">
                <h2 class="text-center text-3xl font-bold text-[#632A14] mb-8">
                    GALERI KITA
                </h2>
                    <div class="swiper h-[50vh]">
                        <div class="swiper-wrapper">
                            <!-- Card 1 -->
                            <div class="swiper-slide">
                                <div class="bg-white tilt-1 card rounded-lg shadow-lg p-4">
                                    <img
                                    src="/assets/images/slide3.jpg"
                                    alt="Gambar 1"
                                    class="rounded-lg w-full h-48 object-cover"
                                    />
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div class="swiper-slide">
                                <div class="bg-white tilt-2 card rounded-lg shadow-lg p-4">
                                    <img
                        src="/assets/images/slide1.jpg"
                        alt="Gambar 2"
                        class="rounded-lg w-full  h-48 object-cover"
                        />
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="swiper-slide">
                    <div class="bg-white card tilt-3 rounded-lg tilt-4 shadow-lg p-4">
                        <img
                        src="/assets/images/slide2.jpg"
                        alt="Gambar 3"
                        class="rounded-lg w-full h-48 object-cover"
                        />
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="bg-white card rounded-lg tilt-3 shadow-lg p-4">
                        <img
                        src="/assets/images/slide3.jpg"
                        alt="Gambar 3"
                        class="rounded-lg w-full h-48 object-cover"
                        />
                    </div>
                </div>
                <!-- Tambahkan lebih banyak card sesuai kebutuhan -->
            </div>
                    
                    <!-- Navigasi -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- <svg class="left-0 bottom-0 z-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFFAE0" fill-opacity="1" d="M0,96L48,96C96,96,192,96,288,117.3C384,139,480,181,576,176C672,171,768,117,864,106.7C960,96,1056,128,1152,133.3C1248,139,1344,117,1392,106.7L1440,96L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path></svg> -->
    </section>

    <!-- <section class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white card rounded-lg shadow-md p-6 text-center">
                <img src="/images/pu.png" alt="PUAD" class="w-24 mx-auto">
                <h3 class="text-xl font-bold mt-4">PUAD</h3>
                <p class="mt-2">Program Unggulan Anak Didik</p>
                <a href="#" class="text-[#3CB5E8] hover:underline">Lihat Program</a>
            </div>
            <div class="bg-white card rounded-lg shadow-md p-6 text-center">
                <img src="/images/tk.png" alt="TK" class="w-24 mx-auto">
                <h3 class="text-xl font-bold mt-4">Taman Kanak-Kanak</h3>
                <p class="mt-2">Mendidik dengan Kasih</p>
                <a href="#" class="text-[#3CB5E8] hover:underline">Lihat Program</a>
            </div>
            <div class="bg-white card rounded-lg shadow-md p-6 text-center">
                <img src="/images/ta.png" alt="TPA" class="w-24 mx-auto">
                <h3 class="text-xl font-bold mt-4">Taman Pendidikan Al-Qur'an</h3>
                <p class="mt-2">Belajar Al-Qur'an sejak dini</p>
                <a href="#" class="text-[#3CB5E8] hover:underline">Lihat Program</a>
            </div>
        </div>
    </section> -->

    <!-- <section class="bg-[#FFFAE0] py-12">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold text-center text-[#FF8C00]">Galeri Kita</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-8">
                <img src="/images/gallery1.jpg" alt="Gallery 1" class="rounded-lg w-full h-48 object-cover">
                <img src="/images/gallery2.jpg" alt="Gallery 2" class="rounded-lg w-full h-48 object-cover">
                <img src="/images/gallery3.jpg" alt="Gallery 3" class="rounded-lg w-full h-48 object-cover">
                <img src="/images/gallery4.jpg" alt="Gallery 4" class="rounded-lg w-full h-48 object-cover">
            </div>
        </div>
    </section> -->
    <x-footer-user></x-footer-user>
    <!-- <footer class="bg-[#3CB5E8] text-white py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 TK Amanah Bangsa - Semua Hak Dilindungi.</p>
        </div>
    </footer> -->

    <script>
    const slides = document.getElementById('carousel-slides');
    const slideButtons = document.querySelectorAll('[data-slide]');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    let currentIndex = 0;

    const updateCarousel = (index) => {
        slides.style.transform = `translateX(-${index * 100}%)`;
        slideButtons.forEach((btn, idx) => {
            btn.classList.toggle('bg-gray-900', idx === index);
        });
    };

    prevButton.addEventListener('click', () => {
        currentIndex = (currentIndex - 1 + slideButtons.length) % slideButtons.length;
        updateCarousel(currentIndex);
    });

    nextButton.addEventListener('click', () => {
        currentIndex = (currentIndex + 1) % slideButtons.length;
        updateCarousel(currentIndex);
    });

    slideButtons.forEach((button, index) => {
        button.addEventListener('click', () => {
            currentIndex = index;
            updateCarousel(currentIndex);
        });
    });

    // Auto-play carousel
    setInterval(() => {
        nextButton.click();
    }, 5000);
</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    const swiper = new Swiper('.swiper', {
      slidesPerView: 3,
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        640: { slidesPerView: 1 },
        768: { slidesPerView: 2 },
        1024: { slidesPerView: 3 },
      },
    });
  </script>

</x-base-user>