<!-- ========== HEADER ========== -->
<header
    class="fixed top-0 inset-x-0 flex flex-wrap md:justify-start md:flex-nowrap z-48 lg:z-61 w-full bg-green-800 text-sm py-2.5">
    <nav class="px-4 sm:px-5.5 flex basis-full items-center w-full mx-auto">
        <div class="w-full flex items-center gap-x-1.5">
            <!-- Logo -->
            <a href="/" class="flex items-center gap-x-3">
                <img src="https://tse2.mm.bing.net/th/id/OIP.D0DJ0ePPxNcvYOeq6q9esQAAAA?pid=Api&P=0&h=180"
                    alt="School Logo"
                    class="w-12 h-12 rounded-md border-2 border-transparent shadow-sm">
                <span class="text-xl font-bold text-white tracking-wide hover:text-yellow-400 transition-colors">
                    Colegio de Sta. Ana de Victorias
                </span>
            </a>
            <!-- End Logo -->

            <!-- Desktop Nav -->
            <ul class="hidden md:flex flex-row items-center gap-x-6 ms-auto text-white font-semibold">
                <li><a href="{{ route('alumni.dashboard') }}" class="hover:text-yellow-400">Home</a></li>
                <li><a href="#" class="hover:text-yellow-400">Messages</a></li>
                <li><a href="{{ route('alumni.profile') }}" class="hover:text-yellow-400">Profile</a></li>
                <li><a href="#" class="hover:text-yellow-400">Settings</a></li>
                <li><livewire:auth::logout /></li>
            </ul>
            <!-- End Desktop Nav -->

            <!-- Hamburger Toggle (Mobile/Tablet) -->
            <button id="menu-toggle"
                class="md:hidden ms-auto px-3 py-2 rounded-lg bg-green-700 text-white font-bold hover:bg-yellow-600 transition">
                ☰
            </button>

            <!-- Account Dropdown (same as before) -->
            <ul class="hidden md:flex flex-row items-center gap-x-3 ms-4">
                <li>
                    <!-- ... your existing dropdown code ... -->
                </li>
            </ul>
        </div>
    </nav>

    <!-- Mobile/Tablet Menu -->
    <div id="mobile-menu" class="hidden flex-col gap-y-4 px-6 pb-4 bg-green-900 md:hidden">
        <a href="{{ route('alumni.dashboard') }}" class="text-white hover:text-yellow-400 transition">Home</a>
        <a href="#" class="text-white hover:text-yellow-400 transition">Messages</a>
        <a href="{{ route('alumni.profile') }}" class="text-white hover:text-yellow-400 transition">Profile</a>
        <a href="#" class="text-white hover:text-yellow-400 transition">Settings</a>
        <livewire:auth::logout />
    </div>
</header>
<!-- ========== END HEADER ========== -->

<script>
  // Mobile menu toggle
  document.getElementById('menu-toggle').addEventListener('click', function() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
    menu.classList.toggle('flex');
  });
</script>
