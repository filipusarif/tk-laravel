<x-base-user>
    <x-slot:title>PPDB TK</x-slot:title>
   
    <nav class="bg-white border-slate-200 dark:bg-white  fixed w-full z-50">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-slate-500 rounded-lg md:hidden hover:bg-slate-100 focus:outline-none focus:ring-2 focus:ring-slate-200 dark:text-slate-400 dark:hover:bg-white dark:focus:ring-slate-300" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Buka Menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-slate-100 rounded-lg bg-slate-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white  dark:border-slate-100">
        <li>
          <a href="/#alur" class="block py-2 px-3 text-slate-900 rounded hover:bg-slate-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-slate-900 md:dark:hover:text-slate-500 dark:hover:bg-white dark:hover:text-white md:dark:hover:bg-transparent">Alur Pendaftaran</a>
        </li>
        <li>
          <a href="/#fasilitas" class="block py-2 px-3 text-slate-900 rounded hover:bg-slate-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-slate-900 md:dark:hover:text-slate-500 dark:hover:bg-white dark:hover:text-white md:dark:hover:bg-transparent">Fasilitas</a>
        </li>
        <li>
          <a href="/#kontak" class="block py-2 px-3 text-slate-900 rounded hover:bg-slate-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-slate-900 md:dark:hover:text-slate-500 dark:hover:bg-white dark:hover:text-white md:dark:hover:bg-transparent">Kontak</a>
        </li>
        <li>
          <a href="/login" class="block py-2 px-3 text-slate-900 rounded hover:bg-slate-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-slate-900 md:dark:hover:text-slate-500 dark:hover:bg-white dark:hover:text-white md:dark:hover:bg-transparent">Masuk</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

  <!-- Hero Section -->
  <!-- <section class="bg-blue-100 min-h-screen flex items-center justify-center flex-col  py-16 text-center relative">
    <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/64/000000/external-kindergarten-kindergarten-flatart-icons-outline-flatarticons.png" alt="Kids Icon" class="absolute top-4 right-4 w-16">
    <h2 class="text-4xl font-bold text-orange-600">Pendaftaran Peserta Didik Baru</h2>
    <p class="mt-4 text-lg text-gray-700">TK Annur - Tahun Ajaran 2025/2026</p>
    <p class="mt-2 text-gray-600">Daftarkan anak Anda di TK Annur untuk pengalaman belajar yang menyenangkan dan penuh keceriaan.</p>
    <div class="mt-6">
      <a href="/login" class="bg-orange-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-orange-600">
        Daftar Sekarang
      </a>
    </div>
  </section> -->

  <section class="w-full h-[70vh] relative object-cover flex items-center justify-center overflow-hidden">
    <img src="/assets/images/background2.svg" class="w-full absolute left-0 top-0" alt="">
    <h1 class="font-extrabold z-10 text-white text-[400%]">PENDAFTARAN ONLINE</h1>
  </section>

  <!-- Alur Pendaftaran -->
  <section id="alur" class="py-16 p-36 bg-yellow-50 min-h-screen">
    <!-- <div class="container mx-auto">
      <h3 class="text-center text-2xl font-bold text-orange-600 mb-10">Alur Pendaftaran</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://img.icons8.com/ios-filled/50/ffa500/account--v1.png" alt="Step 1" class="mx-auto mb-4">
          <h4 class="text-lg font-semibold">Klik Daftar Sekarang & Buat Akun</h4>
          <p class="mt-2 text-sm text-gray-600">Klik tombol "Daftar Sekarang" dan buat akun menggunakan email atau nomor telepon.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/60/ffa500/external-form-web-development-flatart-icons-outline-flatarticons.png" alt="Step 2" class="mx-auto mb-4">
          <h4 class="text-lg font-semibold">Isi Form Pendaftaran</h4>
          <p class="mt-2 text-sm text-gray-600">Lengkapi data anak dan orang tua pada form pendaftaran yang tersedia.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://img.icons8.com/external-soft-fill-juicy-fish/60/ffa500/external-confirmation-logistics-soft-fill-soft-fill-juicy-fish.png" alt="Step 3" class="mx-auto mb-4">
          <h4 class="text-lg font-semibold">Konfirmasi Panitia</h4>
          <p class="mt-2 text-sm text-gray-600">Panitia akan memvalidasi pendaftaran Anda dan menghubungi untuk langkah berikutnya.</p>
        </div>
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/60/ffa500/external-clothes-kindergarten-flatart-icons-outline-flatarticons.png" alt="Step 4" class="mx-auto mb-4">
          <h4 class="text-lg font-semibold">Daftar Ulang</h4>
          <p class="mt-2 text-sm text-gray-600">Lakukan pengukuran seragam dan ambil seragam di lokasi sekolah.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/60/ffa500/external-kindergarten-education-flatart-icons-outline-flatarticons.png" alt="Step 5" class="mx-auto mb-4">
          <h4 class="text-lg font-semibold">Observasi / Pengumuman</h4>
          <p class="mt-2 text-sm text-gray-600">Ikuti sesi observasi anak dan tunggu hasil pengumuman dari pihak sekolah.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://img.icons8.com/external-flatart-icons-outline-flatarticons/60/ffa500/external-clothes-kindergarten-flatart-icons-outline-flatarticons.png" alt="Step 6" class="mx-auto mb-4">
          <h4 class="text-lg font-semibold">Pengukuran & Pengambilan Seragam</h4>
          <p class="mt-2 text-sm text-gray-600">Lakukan pengukuran seragam dan ambil seragam di lokasi sekolah.</p>
        </div>
      </div>
    </div> -->
    <div class="container mx-auto px-32 pb-32 pt-10 rounded-2xl bg-white">
      <h1 class="font-bold text-center text-2xl mb-10">PENERIMAAN PESERTA DIDIK BARU</h1>
      <img src="/assets/images/pendaftaran.svg" alt="" class="rounded-xl" width="100%">
      <p class="text-center mt-10">Informasi lebih lanjut mengenai pendaftaran dapat menghubungi bu Istini (081326243197) dan bu Syafa (089601370618)</p>
    </div>
  </section>

  <!-- Fasilitas -->
  <!-- <section id="fasilitas" class="py-16 bg-green-50 h-screen">
    <div class="container mx-auto">
      <h3 class="text-center text-2xl font-bold text-green-600 mb-10">Fasilitas</h3>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://img.icons8.com/external-soft-fill-juicy-fish/60/ffa500/external-library-kindergarten-soft-fill-soft-fill-juicy-fish.png" alt="Fasilitas 1" class="mx-auto mb-4">
          <h4 class="text-lg font-semibold">Perpustakaan</h4>
          <p class="mt-2 text-sm text-gray-600">Menyediakan buku edukasi menarik untuk anak-anak.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/60/ffa500/external-playground-kindergarten-flatart-icons-flat-flatarticons.png" alt="Fasilitas 2" class="mx-auto mb-4">
          <h4 class="text-lg font-semibold">Taman Bermain</h4>
          <p class="mt-2 text-sm text-gray-600">Area bermain luas untuk mengembangkan motorik anak.</p>
        </div>
        
        <div class="bg-white p-6 rounded-lg shadow text-center">
          <img src="https://img.icons8.com/external-flat-juicy-fish/60/ffa500/external-classroom-education-flat-flat-juicy-fish.png" alt="Fasilitas 3" class="mx-auto mb-4">
          <h4 class="text-lg font-semibold">Ruang Kelas</h4>
          <p class="mt-2 text-sm text-gray-600">Ruang kelas nyaman dengan fasilitas lengkap.</p>
        </div>
      </div>
    </div>
  </section> -->

  <!-- Kontak -->
  <!-- <section id="kontak" class="bg-green-100 py-16">
    <div class="container mx-auto">
      <h3 class="text-center text-2xl font-bold text-green-600 mb-10">Kontak Kami</h3>
      <p class="text-center text-lg">Hubungi kami untuk informasi lebih lanjut:</p>
      <div class="mt-6 text-center">
        <p class="text-sm text-gray-700">📞 Telp: 024-xxxxxxx</p>
        <p class="text-sm text-gray-700">✉️ Email: info@tkannur.sch.id</p>
      </div>
    </div>
  </section> -->

  <!-- Footer -->
  <footer class="bg-orange-500 text-white py-6 text-center">
    <p>&copy; 2024 TK Annur. Semua Hak Dilindungi.</p>
  </footer>
</x-base-user>