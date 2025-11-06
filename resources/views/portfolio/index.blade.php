<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Muhammad Agung Pamungkas - index</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Lucide Icons -->
  <script type="module" src="https://unpkg.com/lucide@latest"></script>

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
          <a href="{{ url('/') }}"
             class="block py-3 px-4 md:p-0 transition font-medium {{ request()->is('/') ? 'text-gradient font-bold' : 'text-gray-600 hover:text-cyan-600' }}">
            <i data-lucide="home" class="w-4 h-4 inline-block mr-1"></i> Home
          </a>
          <a href="{{ url('/portfolio') }}"
             class="block py-3 px-4 md:p-0 transition font-medium {{ request()->is('portfolio*') ? 'text-gradient font-bold' : 'text-gray-600 hover:text-cyan-600' }}">
            <i data-lucide="briefcase" class="w-4 h-4 inline-block mr-1"></i> Portfolio
          </a>
          <a href="{{ url('/contact') }}"
             class="block py-3 px-4 md:p-0 transition font-medium {{ request()->is('contact') ? 'text-gradient font-bold' : 'text-gray-600 hover:text-cyan-600' }}">
            <i data-lucide="mail" class="w-4 h-4 inline-block mr-1"></i> Contact
          </a>
        </div>
      </div>
    </div>
  </nav>

  <!-- CONTENT -->
  <main class="flex-grow">
  <div class="max-w-7xl mx-auto px-4 py-12 md:py-16">

    <!-- HEADER PORTFOLIO -->
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-extrabold text-gradient">My Portfolio</h1>
      <p class="text-gray-600 text-lg mt-3">
        Berikut adalah beberapa proyek yang saya kembangkan menggunakan Laravel, Flutter, dan teknologi modern lainnya.
      </p>
    </div>

    <!-- PORTFOLIO GRID -->
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @php
        $projects = [
          ['title' => 'Library Management App', 'desc' => 'A full-featured app for library management built with Laravel & Flutter.', 'image' => 'images/library-app.jpg', 'link' => '#'],
          ['title' => 'E-commerce Website', 'desc' => 'Responsive e-commerce platform with online payment integration.', 'image' => 'images/ecommerce.jpg', 'link' => '#'],
          ['title' => 'Personal Blog', 'desc' => 'Clean and modern blog built with Laravel & Tailwind CSS.', 'image' => 'images/blog.jpg', 'link' => '#'],
          ['title' => 'Financial Tracker App', 'desc' => 'Flutter app to track income and expenses with charts & PDF export.', 'image' => 'images/finance-app.jpg', 'link' => '#'],
          ['title' => 'Portfolio Website', 'desc' => 'My personal portfolio built with Laravel and Tailwind CSS.', 'image' => 'images/portfolio.jpg', 'link' => '#'],
          ['title' => 'Smart Bin System', 'desc' => 'IoT-based waste management system with digital tracking.', 'image' => 'images/smart-bin.jpg', 'link' => '#'],
        ];
      @endphp

      @foreach ($projects as $project)
        <div class="bg-white rounded-2xl shadow-lg overflow-hidden transform transition-transform hover:scale-105 hover:shadow-xl">
          <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover">
          <div class="p-6">
            <h3 class="text-xl font-semibold mb-2">{{ $project['title'] }}</h3>
            <p class="text-gray-600 text-sm mb-4">{{ $project['desc'] }}</p>
            <a href="{{ $project['link'] }}" class="text-cyan-600 font-medium hover:underline flex items-center">
              Lihat Proyek
              <i data-lucide="arrow-right" class="w-4 h-4 ml-2"></i>
            </a>
          </div>
        </div>
      @endforeach
    </div>

  </div>
</main>


  <!-- FOOTER -->
  <footer class="bg-white shadow-inner mt-auto py-6">
    <div class="text-center text-gray-600 text-sm">
      © {{ date('Y') }} Muhammad Agung Pamungkas. All Rights Reserved.
    </div>
  </footer>

  <script>
    // Toggle menu mobile
    const menuToggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    menuToggle.addEventListener('click', () => {
      menu.classList.toggle('hidden');
    });

    // Nomor WhatsApp (format internasional tanpa +)
    const whatsappNumber = "6281999612344";

    function sendToWhatsApp(event) {
      event.preventDefault();

      const name = document.getElementById('name').value.trim();
      const email = document.getElementById('email').value.trim();
      const message = document.getElementById('message').value.trim();

      if (!name || !email || !message) {
        alert("Mohon isi semua field sebelum mengirim pesan.");
        return;
      }

      const text = `Halo, saya *${name}* (%0AEmail: ${email}) ingin menghubungi Anda.%0A%0APesan:%0A${message}`;
      const url = `https://wa.me/${whatsappNumber}?text=${text}`;
      window.open(url, "_blank");
      document.getElementById('contactForm').reset();
    }

    // Aktifkan ikon lucide
    document.addEventListener("DOMContentLoaded", () => {
      if (typeof lucide !== "undefined") lucide.createIcons();
    });
  </script>

</body>
</html>
