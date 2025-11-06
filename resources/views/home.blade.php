<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Muhammad Agung Pamungkas - Home</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Lucide Icons -->
  <script type="module" src="https://unpkg.com/lucide@latest"></script>
  <!-- AOS CSS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap');
    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(to bottom right, #e0f7fa, #f1f5f9);
    }
    .text-gradient {
      background: linear-gradient(to right, #06b6d4, #10b981);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
  </style>
</head>
<body class="antialiased min-h-screen flex flex-col">

  <!-- NAVBAR -->
  <nav class="bg-white shadow-md sticky top-0 z-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <a href="javascript:void(0)" class="flex items-center text-xl font-extrabold text-gradient cursor-default">
          <i data-lucide="code-2" class="w-6 h-6 mr-2"></i> Agung Portfolio
        </a>

        <!-- Menu button (Mobile) -->
        <button id="menu-toggle" class="md:hidden focus:outline-none">
          <i data-lucide="menu" class="w-6 h-6 text-gray-700"></i>
        </button>

        <!-- Navigation Links -->
        <div id="menu"
             class="hidden md:flex flex-col md:flex-row absolute md:static bg-white md:bg-transparent left-0 top-16 w-full md:w-auto md:space-x-6 border-t md:border-none transition-all duration-300 ease-in-out">
          <a href="{{ url('/') }}" class="block py-3 px-4 md:p-0 transition font-medium {{ request()->is('/') ? 'text-gradient font-bold' : 'text-gray-600 hover:text-cyan-600' }}">
            <i data-lucide="home" class="w-4 h-4 inline-block mr-1"></i> Home
          </a>
          <a href="{{ url('/portfolio') }}" class="block py-3 px-4 md:p-0 transition font-medium {{ request()->is('portfolio*') ? 'text-gradient font-bold' : 'text-gray-600 hover:text-cyan-600' }}">
            <i data-lucide="briefcase" class="w-4 h-4 inline-block mr-1"></i> Portfolio
          </a>
          <a href="{{ url('/contact') }}" class="block py-3 px-4 md:p-0 transition font-medium {{ request()->is('contact') ? 'text-gradient font-bold' : 'text-gray-600 hover:text-cyan-600' }}">
            <i data-lucide="mail" class="w-4 h-4 inline-block mr-1"></i> Contact
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- MAIN CONTENT -->
  <main class="flex-grow">
    <div class="max-w-7xl mx-auto px-4 py-12 md:py-16">

      <!-- HERO SECTION -->
      <section class="flex flex-col-reverse lg:flex-row items-center justify-between gap-12 mb-16">
        <!-- Teks -->
        <div class="lg:w-3/5 text-center lg:text-left">
          <p class="text-lg md:text-xl text-gray-700 mb-2 font-medium">Fullstack Developer — S1 Informatika, International Women University</p>
          <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-extrabold mb-6 leading-snug" data-aos="fade-up">
            <span class="text-gradient">Muhammad Agung</span>
            <span class="text-gray-900 block sm:inline">Pamungkas</span>
          </h1>

          <p class="text-gray-700 text-lg md:text-xl leading-relaxed mb-6" data-aos="fade-up" data-aos-delay="200">
            Mahasiswa S1 Informatika di International Women University yang aktif dalam pengembangan web modern, aplikasi mobile, serta dokumentasi yang efektif.
          </p>

          <div class="flex flex-wrap gap-6 justify-center lg:justify-start mb-6" data-aos="fade-up" data-aos-delay="400">
            <div class="bg-cyan-500 text-white px-6 py-3 rounded-xl shadow-md text-sm font-medium">Fullstack Developer</div>
            <div class="bg-emerald-500 text-white px-6 py-3 rounded-xl shadow-md text-sm font-medium">3+ Tech Stack</div>
            <div class="bg-blue-500 text-white px-6 py-3 rounded-xl shadow-md text-sm font-medium">2+ Tahun Pengalaman</div>
          </div>

          <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
            <a href="{{ url('/portfolio') }}" class="flex items-center justify-center px-8 py-3 text-lg font-bold text-white rounded-full shadow-lg bg-gradient-to-r from-cyan-500 to-emerald-500 hover:from-cyan-600 hover:to-emerald-600 transition-transform transform hover:scale-105" data-aos="fade-right" data-aos-delay="600">
              <i data-lucide="rocket" class="w-5 h-5 mr-2"></i> Lihat Proyek
            </a>
            <a href="{{ url('/contact') }}" class="flex items-center justify-center px-8 py-3 text-lg font-bold text-cyan-600 border-2 border-cyan-500 rounded-full shadow-md hover:bg-cyan-500 hover:text-white transition-transform transform hover:scale-105" data-aos="fade-left" data-aos-delay="700">
              <i data-lucide="mail" class="w-5 h-5 mr-2"></i> Hubungi Saya
            </a>
          </div>
        </div>

        <!-- Foto Profil -->
        <div class="lg:w-2/5 flex justify-center mb-10 lg:mb-0 relative" data-aos="fade-left">
          <img src="{{ asset('images/agung-profile.jpg') }}" alt="Muhammad Agung Pamungkas Profile"
               class="rounded-full w-80 h-80 object-cover shadow-2xl border-4 border-white ring-8 ring-cyan-300/50 transform transition-transform duration-500 hover:rotate-3 hover:scale-105 hover:shadow-cyan-400/80">
        </div>
      </section>

      <!-- ABOUT ME SECTION -->
      <section class="bg-white rounded-2xl shadow-xl p-8 md:p-12 border-t-4 border-cyan-500 mb-16" data-aos="fade-up">
        <div class="text-center">
          <h2 class="text-3xl md:text-4xl font-extrabold text-gradient mb-6 flex justify-center items-center gap-2">
            <i data-lucide="lightbulb" class="w-8 h-8 text-cyan-500"></i> Tentang Saya
          </h2>
          <p class="text-gray-700 text-lg md:text-xl leading-relaxed">
            Saya seorang mahasiswa Informatika yang berfokus pada pengembangan sistem digital, UI/UX, dan back-end development. Memiliki visi untuk mengembangkan karir di bidang teknologi dan memberikan solusi inovatif melalui aplikasi web maupun mobile.
          </p>
        </div>
      </section>

      <!-- TECH STACK SECTION -->
      <section class="text-center mb-16" data-aos="fade-up">
        <h3 class="text-3xl md:text-4xl font-extrabold text-gradient mb-10">Tech Stack</h3>
        <div class="flex flex-wrap justify-center gap-6">
          @php
            $techs = [
              ['name' => 'Laravel', 'color' => 'bg-orange-500', 'icon' => 'server'],
              ['name' => 'Flutter / Dart', 'color' => 'bg-blue-500', 'icon' => 'smartphone'],
              ['name' => 'Tailwind CSS', 'color' => 'bg-sky-400', 'icon' => 'palette'],
              ['name' => 'JavaScript', 'color' => 'bg-yellow-400', 'icon' => 'code'],
              ['name' => 'MySQL', 'color' => 'bg-green-500', 'icon' => 'database'],
            ];
          @endphp

          @foreach ($techs as $tech)
            <div class="flex items-center px-6 py-3 text-white rounded-xl text-sm font-medium shadow-lg {{ $tech['color'] }} transform transition duration-300 hover:scale-110 hover:shadow-xl hover:animate-pulse">
              <i data-lucide="{{ $tech['icon'] }}" class="w-4 h-4 mr-2"></i>
              {{ $tech['name'] }}
            </div>
          @endforeach
        </div>
      </section>

      <!-- PORTFOLIO PREVIEW SECTION -->
      <section class="mb-16">
        <h3 class="text-3xl md:text-4xl font-extrabold text-gradient mb-10 text-center" data-aos="fade-up">Proyek Terbaru</h3>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Project Cards -->
          <a href="https://github.com/username/sistem-perpustakaan" target="_blank" class="block bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transform transition duration-500 hover:rotate-1 hover:shadow-xl">
            <img src="{{ asset('images/project1.jpg') }}" alt="Project 1" class="w-full h-48 object-cover">
            <div class="p-4">
              <h4 class="text-lg font-bold text-gray-800 mb-2">Sistem Perpustakaan</h4>
              <p class="text-gray-600 text-sm">Aplikasi web untuk manajemen buku dan peminjaman perpustakaan menggunakan Laravel & MySQL.</p>
            </div>
          </a>

          <a href="https://github.com/username/aplikasi-catatan-keuangan" target="_blank" class="block bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transform transition duration-500 hover:rotate-1 hover:shadow-xl">
            <img src="{{ asset('images/project2.jpg') }}" alt="Project 2" class="w-full h-48 object-cover">
            <div class="p-4">
              <h4 class="text-lg font-bold text-gray-800 mb-2">Aplikasi Catatan Keuangan</h4>
              <p class="text-gray-600 text-sm">Aplikasi mobile untuk mencatat keuangan harian menggunakan Flutter & Hive database.</p>
            </div>
          </a>

          <a href="https://github.com/username/smartbin-system" target="_blank" class="block bg-white rounded-2xl shadow-lg overflow-hidden hover:scale-105 transform transition duration-500 hover:rotate-1 hover:shadow-xl">
            <img src="{{ asset('images/project3.jpg') }}" alt="Project 3" class="w-full h-48 object-cover">
            <div class="p-4">
              <h4 class="text-lg font-bold text-gray-800 mb-2">Sistem SmartBin</h4>
              <p class="text-gray-600 text-sm">Sistem digital untuk pengelolaan sampah berbasis sensor dan IoT.</p>
            </div>
          </a>
        </div>

        <div class="text-center mt-8">
          <a href="{{ url('/portfolio') }}" class="text-cyan-600 font-semibold hover:underline">Lihat Semua Proyek</a>
        </div>
      </section>
    </div>
  </main>

  <!-- FOOTER -->
  <footer class="bg-white shadow-inner mt-auto py-6" data-aos="fade-up">
    <div class="text-center text-gray-600 text-sm">
      © {{ date('Y') }} Muhammad Agung Pamungkas. All Rights Reserved.
    </div>
  </footer>

  <!-- Scripts -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({ duration: 1000, once: true });

    // Toggle menu mobile
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');
    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });

    // Aktifkan ikon lucide
    document.addEventListener("DOMContentLoaded", () => {
      if (typeof lucide !== "undefined") lucide.createIcons();
    });
  </script>
</body>
</html>
