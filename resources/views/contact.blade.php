<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Muhammad Agung Pamungkas - Contact</title>

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
  <div class="max-w-4xl mx-auto px-4 py-12 md:py-16">

    <!-- Header -->
    <div class="text-center mb-12">
      <h1 class="text-4xl md:text-5xl font-extrabold text-gradient">Let’s Connect</h1>
      <p class="text-gray-600 text-lg md:text-xl mt-3">
        Ada ide, proyek, atau sekadar ingin menyapa? Kirim pesan langsung ke saya.
      </p>
    </div>

    <!-- Contact Form -->
    <div class="bg-white rounded-2xl shadow-lg p-6 md:p-10 border-t-4 border-cyan-500 transition-shadow hover:shadow-cyan-200/50">
      <form id="contactForm" onsubmit="sendToWhatsApp(event)">
        <div class="mb-5">
          <label for="name" class="block text-sm md:text-base font-semibold text-gray-700 mb-2">Nama</label>
          <input type="text" id="name" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-4 focus:ring-cyan-300 outline-none transition">
        </div>

        <div class="mb-5">
          <label for="email" class="block text-sm md:text-base font-semibold text-gray-700 mb-2">Email</label>
          <input type="email" id="email" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-4 focus:ring-cyan-300 outline-none transition">
        </div>

        <div class="mb-6">
          <label for="message" class="block text-sm md:text-base font-semibold text-gray-700 mb-2">Pesan</label>
          <textarea id="message" rows="5" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-4 focus:ring-cyan-300 outline-none resize-y transition"></textarea>
        </div>

        <button type="submit"
          class="w-full sm:w-auto flex items-center justify-center px-8 py-3 text-lg md:text-xl font-bold text-white rounded-full shadow-md bg-gradient-to-r from-cyan-500 to-emerald-500 hover:from-cyan-600 hover:to-emerald-600 transition-transform transform hover:scale-105 duration-300">
          <i data-lucide="send" class="w-5 h-5 mr-2"></i> Kirim ke WhatsApp
        </button>
      </form>
    </div>

    <!-- Contact Info -->
    <div class="text-center mt-12 p-6">
      <h2 class="text-2xl md:text-3xl font-semibold text-gradient mb-6">Hubungi Saya di</h2>
      <div class="flex flex-col sm:flex-row justify-center gap-8">
        <p class="flex items-center justify-center text-gray-700 text-base md:text-lg">
          <i data-lucide="at-sign" class="w-5 h-5 mr-2 text-cyan-500"></i>
          Email:
          <a href="mailto:muhammadgung2003@gmail.com"
             class="ml-2 font-medium text-cyan-600 hover:underline">
             muhammadgung2003@gmail.com
          </a>
        </p>
        <p class="flex items-center justify-center text-gray-700 text-base md:text-lg">
          <i data-lucide="instagram" class="w-5 h-5 mr-2 text-cyan-500"></i>
          Instagram:
          <a href="https://instagram.com/mhdgengp" target="_blank"
             class="ml-2 font-medium text-cyan-600 hover:underline">
             @mhdgengp
          </a>
        </p>
      </div>
      <p class="text-gray-500 mt-4 text-sm md:text-base">
        <i data-lucide="map-pin" class="w-4 h-4 inline-block mr-1"></i> Kabupaten Bandung, Indonesia
      </p>
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
