<x-base-user>
    <x-slot:title>Prestasi TK Amanah Bangsa</x-slot:title>

    <x-navbar-user></x-navbar-user>

    <section class="w-full h-[20vh] md:h-[80vh] relative object-cover flex items-center justify-center overflow-hidden">
        <img src="/assets/images/background2.svg" class="w-full absolute left-0 top-0" alt="">
        <h1 class="font-extrabold z-10 text-white md:text-[400%]">PROFIL TK AMANAH BANGSA</h1>
        <!-- <svg class="absolute left-0 -bottom-16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,154.7C384,128,480,64,576,80C672,96,768,192,864,197.3C960,203,1056,117,1152,85.3C1248,53,1344,75,1392,85.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg> -->
        <svg class="absolute left-0 bottom-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFFAE0" fill-opacity="1" d="M0,160L48,165.3C96,171,192,181,288,192C384,203,480,213,576,197.3C672,181,768,139,864,144C960,149,1056,203,1152,213.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>

    <section class="py-16 bg-[#FFFAE0] min-h-screen">
    <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Sidebar -->
                <aside class="bg-white rounded-3xl shadow p-16">
                    <h2 class="text-5xl text-[#632A14] font-bold mb-4">ABOUT US</h2>
                    <ul class="space-y-2 ">
                        <li><button onclick="showContent('sejarah')" class="text-slate-800 font-sans font-medium text-md hover:underline">Sejarah</button></li>
                        <li><button onclick="showContent('visi-misi')" class="text-slate-800 font-sans font-medium text-md hover:underline">Misi, Ikrar, dan Doa</button></li>
                        <!-- <li><button onclick="showContent('kurikulum')" class="text-slate-800 font-sans font-medium text-md hover:underline">Muatan Kurikulum</button></li> -->
                        <li><button onclick="showContent('prestasi')" class="text-slate-800 font-sans font-medium text-md hover:underline">Prestasi</button></li>
                        <li><button onclick="showContent('pengajar')" class="text-slate-800 font-sans font-medium text-md hover:underline">Tenaga Pengajar & Susunan Pengurus</button></li>
                        <!-- <li><button onclick="showContent('struktur')" class="text-slate-800 font-sans font-medium text-md hover:underline">Struktur Kurikulum</button></li> -->
                        <li><button onclick="showContent('program')" class="text-slate-800 font-sans font-medium text-md hover:underline">Program Unggulan & Penunjang</button></li>
                    </ul>
                </aside>

                <!-- Content -->
                <main class="col-span-2 bg-white rounded-3xl  shadow">
                    <div id="sejarah" class="content-active p-16">
                        <h2 class=" text-[#632A14] text-5xl font-bold">Sejarah</h2>
                        <div class="font-sans mt-5 flex flex-col gap-3 text-slate-800 ">
                        <p>
                            
                            Pada tahun 2005, Taman Kanak-Kanak (TK) Amanah Bangsa didirikan di bawah naungan Lembaga
                            Pendidikan Islam Amanah Bina Bangsa. Pendirian yayasan dan sekolah ini diprakarsai oleh Ibu Sri
                            Mulyani, seorang pendidik yang memiliki visi besar untuk meningkatkan kualitas pendidikan,
                            khususnya bagi anak usia dini. Berbekal semangat dan kepedulian yang mendalam terhadap dunia
                            pendidikan, beliau merealisasikan cita-citanya untuk mendirikan lembaga pendidikan yang berfokus
                            pada pembinaan dan pengembangan anak-anak sejak usia dini.
                        </p>
                        <p>

                            TK AMANAH BANGSA beralamat di Jl Kebon Rejo Barat I No 23-25 ,Kebon Batur Mranggen Demak.
                            Dalam perkembangannya, TK AMANAH BANGSA sangat diminati oleh masyarakat terbukti dengan
                            semakin meningkatnya jumlah siswa , TK AMANAH BANGSA dari tahun ke tahun. Yang awalnya hanya
                            menampung 2 kelas TK Kelompok A dan B masuk pagi dan siang , sekarang sudah mencapai 4 kelas
                            TK A dan 4 kelas TK B.
                        </p>

                        <p>

                            
                            Prestasi TK AMANAH BANGSA dari tahun ke tahun juga semakin meningkat mulai dari akreditasi B
                            dari Badan Akreditasi Sekolah, Juara II Lomba Kepala TK Berprestasi tingkat Kabupaten tahun 2018 .
                            Juara II Lomba Melipat tingkat Kabupaten tahun 2017.    
                        </p>
                        <p>
                            Demikianlah sekilas tentang sejarah TK AMANAH BANGSA, Walaupun baru 19 tahun berdiri sudah
                            mengukir segudang prestasi. Mudah-mudahan semakin maju dan tetap menjadi tempat belajar yang
                            sehat, nyaman, berkualitas, dan menyenangkan bagi anak-anak usia dini
                        </p>
                        </div>
                    </div>

                    <div id="visi-misi" class="content-hidden p-16">
                        <h2 class=" text-[#632A14] text-5xl font-bold">Visi, Misi, Tujuan</h2>
                        <div class="font-sans mt-5 flex flex-col gap-1 text-slate-800 ">
                        <p class="mt-3">
                        VISI TK AMANAH BANGSA
                        </p>
                        <p>
                        
                        Mengembangkan Lembaga Pra Sekolah yang Islami Amanah,
                        Professional dan Berprestasi
                        </p>
                        <p class="mt-3">
                        MISI TK AMANAH BANGSA
                        </p>
                        <p>

                        
                        1. Mewujudkan anak yang beriman, berilmu dan berakhlak Mulia
                        2. Meningkatkan Kecerdasan Anak melalui kegiatan pembelajaran
                        3. Membentuk Karakter dan kepribadian yang mandiri
                        </p>

                        <p class="mt-3">
                        TUJUAN TK AMANAH BANGSA
                        </p>
                        <p>
                        Tujuan Taman Kanak-kanak AMANAH BANGSA adalah sebagai
                        berikut :
                        1. Menjadikan anak beriman dan bertaqwa kepada Tuhan Yang
                        Maha Esa
                        2. Menjadikan anak berbudi pekerti yang luhur.
                        3. Menjadikan anak berprestasi sesuai dengan kemampuannya.
                        4. Menjadikan anak memiliki kreativitas 
                        </p>
                        </div>
                    </div>

                    <!-- <div id="kurikulum" class="content-hidden p-16">
                        <h2 class=" text-[#632A14] text-5xl font-bold">Muatan Kurikulum</h2>
                        <p>Konten untuk kurikulum...</p>
                    </div> -->

                    <div id="prestasi" class="content-hidden p-16">
                        <h2 class=" text-[#632A14] text-5xl font-bold">Prestasi</h2>
                        <ul class="list-decimal pl-5 font-sans ext-slate-800 mt-3">
                            @foreach ($prestasis as $prestasi)
                            <li>{{ $prestasi->judul }}</li>    
                            @endforeach
                        </ul>
                    </div>

                    <div id="pengajar" class="content-hidden p-16">
                        <h2 class=" text-[#632A14] text-5xl text-left font-bold">Tenaga Pengajar & Susunan Pengurus</h2>
                        <div class="font-sans mt-5 flex flex-col gap-1 text-slate-800 ">
                        <p>
                        Ketua Yayasan : Suhartono S,E <br>
                        Sekretaris : Wahidatul Karomah S,Pd <br>
                        Bendahara : Sri Mulyani S,Pd <br>
                        </p>

                        <p class="mt-3">
                        Sedangkan susunan organisasi TK ANNUR sebagai berikut :
                        </p>
                        <p>
                        Kepala TK : Sri Mulyani S,Pd <br>
                        Sekretaris : Wahidatul Karomah S,Pd <br>
                        Bendahara : Elly Ervina Dewi , S,Pd <br>
                        </p>

                        </div>
                    </div>

                    <!-- <div id="struktur" class="content-hidden p-16">
                        <h2 class=" text-[#632A14] text-5xl font-bold">Struktur Kurikulum</h2>
                        <p>Konten untuk struktur kurikulum...</p>
                    </div> -->

                    <div id="program" class="content-hidden p-16">
                        <h2 class=" text-[#632A14] text-5xl font-bold">Program Unggulan & Penunjang</h2>
                        <div class="font-sans mt-5 flex flex-col gap-1 text-slate-800 ">
                        <p class="mt-3">
                        Program Unggulan
                        </p>
                        <ol >
                            <li>1. Baca Tulis Alquran, Membimbing Akhlakul Karimah</li>
                            <li>2. Penanaman Karakter Bangsa</li>
                            <li>3. Kegiatan PAI setiap hari</li>
                            <li>4. Praktek Gosok gig</li>
                            <li>5. Kegiatan Parenting Secara Rutin</li>
                            <li>6. Pesantren Kilat</li>
                            <li>7. Praktek Gosok gig</li>
                        </ol>

                        <p class="mt-3">
                        KEGIATAN PENUNJANG
                        </p>
                        <ol >
                            <li>1. Drumband</li>
                            <li>2. Menggambar</li>
                            <li>3. Menari</li>
                            <li>4. Bahasa Inggris</li>
                            <li>5. Fun Cooking</li>
                            <li>6. Manasik Haji</li>
                            <li>7. Kunjungan Edukatif /Field Trip</li>
                            <li>8. Kegiatan Keagamaan /Hari Besar</li>
                        </ol>
                        <p>
                        </p>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </section>

    <x-footer-user></x-footer-user>
</x-base-user>