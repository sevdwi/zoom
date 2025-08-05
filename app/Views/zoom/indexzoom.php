<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satu platform untuk terhubung | Zoom</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS for animations and effects */
        .dropdown:hover .dropdown-menu {
            display: block;
        }
        
        .hero-slide {
            transition: opacity 0.5s ease-in-out;
        }
        
        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: #2D8CFF;
            transition: width .3s;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
    </style>
</head>
<body class="font-sans text-gray-800">
    <!-- Accessibility Links -->
    <div class="bg-gray-100 py-2 px-4 text-sm">
        <div class="container mx-auto flex justify-end space-x-4">
            <a href="#main" class="text-blue-600 hover:underline">Lompat ke Konten Utama</a>
            <a href="#" class="text-blue-600 hover:underline">Skip to Help Chat</a>
            <a href="https://www.zoom.com/id/accessibility/" class="text-blue-600 hover:underline">Ikhtisar Aksesibilitas</a>
        </div>
    </div>

    <!-- Main Navigation -->
    <header class="sticky top-0 z-50 bg-white shadow-md">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="https://www.zoom.com/id/" class="mr-10">
                        <img src="https://st1.zoom.us/homepage/publish/static-image/zoom-logo.svg" alt="Zoom Logo" class="h-8">
                    </a>
                    
                    <!-- Desktop Navigation -->
                    <nav class="hidden lg:flex space-x-8">
                        <div class="dropdown relative">
                            <button class="nav-link flex items-center text-gray-700 hover:text-blue-600">
                                Produk <i class="fas fa-chevron-down ml-1 text-xs"></i>
                            </button>
                            <div class="dropdown-menu absolute hidden mt-2 w-96 bg-white shadow-lg rounded-md p-4 grid grid-cols-2 gap-4">
                                <div>
                                    <h3 class="font-semibold mb-2">Komunikasi</h3>
                                    <ul class="space-y-2">
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-video mr-2 text-blue-500"></i> Meeting</a></li>
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-comments mr-2 text-blue-500"></i> Team Chat</a></li>
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-phone mr-2 text-blue-500"></i> Phone</a></li>
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-envelope mr-2 text-blue-500"></i> Mail & Calendar</a></li>
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-calendar-check mr-2 text-blue-500"></i> Scheduler</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h3 class="font-semibold mb-2">Produktivitas</h3>
                                    <ul class="space-y-2">
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-file-alt mr-2 text-blue-500"></i> Docs</a></li>
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-chalkboard mr-2 text-blue-500"></i> Whiteboard</a></li>
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-film mr-2 text-blue-500"></i> Clip</a></li>
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-sticky-note mr-2 text-blue-500"></i> Notes</a></li>
                                        <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-store mr-2 text-blue-500"></i> App Marketplace</a></li>
                                    </ul>
                                </div>
                                <div class="mt-4 col-span-2">
                                    <a href="#" class="text-blue-600 font-medium">Jelajahi semua produk <i class="fas fa-arrow-right ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="dropdown relative">
                            <button class="nav-link flex items-center text-gray-700 hover:text-blue-600">
                                Solusi <i class="fas fa-chevron-down ml-1 text-xs"></i>
                            </button>
                            <div class="dropdown-menu absolute hidden mt-2 w-64 bg-white shadow-lg rounded-md p-4">
                                <h3 class="font-semibold mb-2">Berdasarkan industri</h3>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Pendidikan</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Layanan Keuangan</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Pemerintahan</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Layanan Kesehatan</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Manufaktur</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Ritel</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="dropdown relative">
                            <button class="nav-link flex items-center text-gray-700 hover:text-blue-600">
                                Sumber Daya <i class="fas fa-chevron-down ml-1 text-xs"></i>
                            </button>
                            <div class="dropdown-menu absolute hidden mt-2 w-64 bg-white shadow-lg rounded-md p-4">
                                <h3 class="font-semibold mb-2">Jelajahi</h3>
                                <ul class="space-y-2">
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Blog Zoom</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Pustaka Sumber Daya</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Webinar & Acara</a></li>
                                    <li><a href="#" class="text-gray-600 hover:text-blue-600">Cerita Pelanggan</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <a href="#" class="nav-link text-gray-700 hover:text-blue-600">Paket & Harga</a>
                    </nav>
                </div>
                
                <!-- Right Side Navigation -->
                <div class="flex items-center space-x-4">
                    <!-- Search Button (Mobile) -->
                    <button class="lg:hidden text-gray-600">
                        <i class="fas fa-search"></i>
                    </button>
                    
                    <!-- Search Input (Desktop) -->
                    <div class="hidden lg:flex items-center bg-gray-100 rounded-full px-3 py-1">
                        <i class="fas fa-search text-gray-500 mr-2"></i>
                        <input type="text" placeholder="Cari" class="bg-transparent border-none focus:outline-none w-40">
                    </div>
                    
                    <!-- Support and Contact -->
                    <div class="hidden lg:flex items-center space-x-4">
                        <a href="#" class="text-gray-600 hover:text-blue-600">Dukungan</a>
                        <a href="tel:1.888.799.9666" class="text-gray-600 hover:text-blue-600">1.888.799.9666</a>
                        <a href="#" class="text-gray-600 hover:text-blue-600">Minta Demo</a>
                    </div>
                    
                    <!-- Auth Buttons -->
                    <div class="hidden lg:flex items-center space-x-2">
                        <a href="#" class="px-4 py-2 text-blue-600 border border-blue-600 rounded-full hover:bg-blue-50">Masuk</a>
                        <a href="#" class="px-4 py-2 bg-blue-600 text-white rounded-full hover:bg-blue-700">Daftar Gratis</a>
                    </div>
                    
                    <!-- Mobile Menu Button -->
                    <button class="lg:hidden text-gray-600">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-blue-50 to-blue-100 overflow-hidden">
        <div class="container mx-auto px-4 py-16 md:py-24">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-10 md:mb-0 animate-fade-in">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                        Temukan apa yang Anda butuhkan saat Anda membutuhkannya dengan AI Companion
                    </h1>
                    <p class="text-lg text-gray-700 mb-8">
                        Selesaikan lebih banyak hal dengan Zoom Workplace: platform kerja berbasis AI yang dilengkapi AI Companion 2.0, disertakan tanpa biaya tambahan.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-3 sm:space-y-0 sm:space-x-4">
                        <a href="#" class="px-6 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 text-center font-medium">
                            Paket & harga
                        </a>
                        <a href="#" class="px-6 py-3 border border-blue-600 text-blue-600 rounded-full hover:bg-blue-50 text-center font-medium">
                            Pelajari Zoom Workplace
                        </a>
                    </div>
                </div>
                <div class="md:w-1/2 animate-fade-in" style="animation-delay: 0.2s;">
                    <img src="https://st1.zoom.us/homepage/publish/images/sSlide1-4.png" alt="Zoom AI Companion" class="w-full max-w-lg mx-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Platform Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Satu platform yang menghubungkan manusia tanpa batas
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Ciptakan dampak dengan AI Companion, tata ulang kerja tim, tingkatkan hubungan pelanggan, dan wujudkan pengalaman yang lancar.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Zoom Workplace -->
                <div class="product-card bg-white rounded-xl shadow-md p-6 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <img src="https://st1.zoom.us/homepage/publish/images/product-zoom-workplace.svg" alt="Zoom Workplace" class="h-10 mr-3">
                        <h3 class="font-bold text-lg">Zoom Workplace</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Jadikan kerja tim lebih bermakna di seluruh tim hibrida dengan solusi kolaborasi modern.
                    </p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">
                        Pelajari selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <h4 class="text-sm font-semibold text-gray-500 mb-3">PRODUK TERKAIT</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-video mr-3 text-blue-500"></i> Meetings</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-comments mr-3 text-blue-500"></i> Team Chat</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-phone mr-3 text-blue-500"></i> Phone</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- AI Companion -->
                <div class="product-card bg-white rounded-xl shadow-md p-6 transition-all duration-300">
                    <div class="flex items-center mb-4">
                        <img src="https://st1.zoom.us/homepage/publish/images/AICompanion-WithEmblem.svg" alt="AI Companion" class="h-10 mr-3">
                        <h3 class="font-bold text-lg">AI Companion</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Dorong dampak dengan kecerdasan di seluruh platform Zoom.
                    </p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">
                        Pelajari selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <h4 class="text-sm font-semibold text-gray-500 mb-3">FITUR UTAMA</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-robot mr-3 text-blue-500"></i> Ringkasan Rapat</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-comment-dots mr-3 text-blue-500"></i> Saran Obrolan</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-lightbulb mr-3 text-blue-500"></i> Ide Otomatis</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Layanan Bisnis -->
                <div class="product-card bg-white rounded-xl shadow-md p-6 transition-all duration-300">
                    <div class="mb-4">
                        <h3 class="font-bold text-lg">Layanan Bisnis</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Perkuat hubungan pelanggan di seluruh penjualan, pemasaran, dan pusat kontak.
                    </p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">
                        Pelajari selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <h4 class="text-sm font-semibold text-gray-500 mb-3">SOLUSI</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-headset mr-3 text-blue-500"></i> Contact Center</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-chart-line mr-3 text-blue-500"></i> Revenue Accelerator</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-calendar-alt mr-3 text-blue-500"></i> Events & Webinars</a></li>
                        </ul>
                    </div>
                </div>
                
                <!-- Ekosistem Pengembang -->
                <div class="product-card bg-white rounded-xl shadow-md p-6 transition-all duration-300">
                    <div class="mb-4">
                        <h3 class="font-bold text-lg">Ekosistem Pengembang</h3>
                    </div>
                    <p class="text-gray-600 mb-4">
                        Wujudkan alur kerja yang lancar dengan alat dan platform developer Zoom.
                    </p>
                    <a href="#" class="text-blue-600 font-medium flex items-center">
                        Pelajari selengkapnya <i class="fas fa-arrow-right ml-2"></i>
                    </a>
                    
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <h4 class="text-sm font-semibold text-gray-500 mb-3">ALAT PENGEMBANG</h4>
                        <ul class="space-y-3">
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-code mr-3 text-blue-500"></i> Video SDK</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-cogs mr-3 text-blue-500"></i> Meeting SDK</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-blue-600 flex items-center"><i class="fas fa-store mr-3 text-blue-500"></i> Marketplace</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Solutions -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Memberdayakan organisasi di seluruh industri dan geografi
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Zoom membantu mengonsolidasikan komunikasi, menghubungkan orang-orang, dan berkolaborasi dengan lebih baik bersama-sama.
                </p>
            </div>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Education -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <img src="https://st1.zoom.us/homepage/publish/static-image/industry1.jpg" alt="Education" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Zoom untuk Institusi Pendidikan</h3>
                        <p class="text-gray-600 mb-4">
                            Desain lingkungan pembelajaran jarak jauh dan hibrida, berdayakan guru dan siswa, dan ciptakan peluang pendidikan yang lebih adil.
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 font-medium">Pelajari lebih lanjut</a>
                            <div class="text-right">
                                <span class="block text-2xl font-bold text-blue-600">89</span>
                                <span class="block text-xs text-gray-500">dari 100 universitas global terbaik</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Healthcare -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <img src="https://st1.zoom.us/homepage/publish/static-image/industry4.jpg" alt="Healthcare" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Zoom untuk Layanan Kesehatan</h3>
                        <p class="text-gray-600 mb-4">
                            Berkomunikasi di seluruh rangkaian perawatan, bertemu pasien di mana pun mereka berada, dan memungkinkan tenaga kerja yang gesit dan terhubung.
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 font-medium">Pelajari lebih lanjut</a>
                            <div class="text-right">
                                <span class="block text-2xl font-bold text-blue-600">9</span>
                                <span class="block text-xs text-gray-500">dari 10 Rumah Sakit Teratas di AS</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Finance -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <img src="https://st1.zoom.us/homepage/publish/static-image/industry2.jpg" alt="Finance" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Zoom untuk Layanan Keuangan</h3>
                        <p class="text-gray-600 mb-4">
                            Teknologi komunikasi dan kolaborasi yang aman serta didesain untuk lanskap peraturan yang kompleks.
                        </p>
                        <div class="flex justify-between items-center">
                            <a href="#" class="text-blue-600 font-medium">Pelajari lebih lanjut</a>
                            <div class="text-right">
                                <span class="block text-2xl font-bold text-blue-600">8</span>
                                <span class="block text-xs text-gray-500">Dari 10 Bank terbesar di AS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <a href="#" class="inline-block px-6 py-3 border border-blue-600 text-blue-600 rounded-full hover:bg-blue-50 font-medium">
                    Jelajahi Solusi Industri
                </a>
            </div>
        </div>
    </section>

    <!-- Customer Stories -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Bisnis di seluruh dunia memilih Zoom
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Kisah dunia nyata tentang orang-orang yang bekerja sama dengan lebih baik.
                </p>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12">
                <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                    <img src="https://st1.zoom.us/homepage/publish/images/logo1-1.png" alt="Customer Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                    <img src="https://st1.zoom.us/homepage/publish/images/logo1-2.png" alt="Customer Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                    <img src="https://st1.zoom.us/homepage/publish/images/logo1-3.png" alt="Customer Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                    <img src="https://st1.zoom.us/homepage/publish/images/logo2-1.png" alt="Customer Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                    <img src="https://st1.zoom.us/homepage/publish/images/logo2-2.png" alt="Customer Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                    <img src="https://st1.zoom.us/homepage/publish/images/logo2-3.png" alt="Customer Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                    <img src="https://st1.zoom.us/homepage/publish/images/14FB29DA-69E3-4486-88DB-38752734B263.png" alt="Customer Logo" class="max-h-12">
                </div>
                <div class="flex items-center justify-center p-4 bg-gray-50 rounded-lg h-24">
                    <img src="https://st1.zoom.us/homepage/publish/images/logo3-2.png" alt="Customer Logo" class="max-h-12">
                </div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Story 1 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <img src="https://st1.zoom.us/homepage/publish/images/card1.svg" alt="Customer Story" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Oracle Red Bull Racing menjadi yang terdepan dengan Zoom</h3>
                        <a href="#" class="text-blue-600 font-medium">Baca kisah mereka</a>
                    </div>
                </div>
                
                <!-- Story 2 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <img src="https://st1.zoom.us/homepage/publish/images/card2.svg" alt="Customer Story" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Tenaga Kerja yang Terhubung dan Kolaboratif Mendorong Inovasi di Capital One</h3>
                        <a href="#" class="text-blue-600 font-medium">Baca kisah mereka</a>
                    </div>
                </div>
                
                <!-- Story 3 -->
                <div class="bg-white rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg">
                    <div class="h-48 bg-blue-100 flex items-center justify-center">
                        <img src="https://st1.zoom.us/homepage/publish/images/card3.svg" alt="Customer Story" class="h-full w-full object-cover">
                    </div>
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-3">Zoom Menghubungkan Para Pemimpin Bisnis dan Pengusaha yang Berpengaruh</h3>
                        <a href="#" class="text-blue-600 font-medium">Baca kisah mereka</a>
                    </div>
                </div>
            </div>
            
            <div class="mt-8 text-center">
                <a href="#" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-full hover:bg-blue-700 font-medium">
                    Dapatkan Inspirasi
                </a>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Dipercaya oleh bisnis, dicintai orang-orang
                </h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Peringkat teratas di situs ulasan dan diakui sebagai pemimpin dalam komunikasi terpadu.
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 mb-12">
                <!-- Review 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="flex justify-center mb-4">
                        <div class="text-yellow-400 text-2xl">
                            ★ ★ ★ ★ ★
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">4.5<span class="text-gray-500 text-xl">/5</span></div>
                    <img src="https://st1.zoom.us/homepage/publish/images/rating1.png" alt="Gartner" class="h-8 mx-auto mb-4">
                    <p class="text-gray-600 mb-4">dari 6.900+ Ulasan</p>
                    <a href="#" class="text-blue-600 font-medium">Pelajari Selengkapnya</a>
                </div>
                
                <!-- Review 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="flex justify-center mb-4">
                        <div class="text-yellow-400 text-2xl">
                            ★ ★ ★ ★ ★
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">8.3<span class="text-gray-500 text-xl">/10</span></div>
                    <img src="https://st1.zoom.us/homepage/publish/images/rating2.png" alt="TrustRadius" class="h-8 mx-auto mb-4">
                    <p class="text-gray-600 mb-4">dari 5.000+ Ulasan</p>
                    <a href="#" class="text-blue-600 font-medium">Pelajari Selengkapnya</a>
                </div>
                
                <!-- Review 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <div class="flex justify-center mb-4">
                        <div class="text-yellow-400 text-2xl">
                            ★ ★ ★ ★ ★
                        </div>
                    </div>
                    <div class="text-3xl font-bold text-blue-600 mb-2">4.5<span class="text-gray-500 text-xl">/5</span></div>
                    <img src="https://st1.zoom.us/homepage/publish/images/rating3.png" alt="G2" class="h-8 mx-auto mb-4">
                    <p class="text-gray-600 mb-4">dari 53.000+ Ulasan</p>
                    <a href="#" class="text-blue-600 font-medium">Pelajari Selengkapnya</a>
                </div>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Award 1 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <img src="https://st1.zoom.us/homepage/publish/images/1-2024.png" alt="Gartner" class="h-16 mx-auto mb-4">
                    <h3 class="font-bold text-lg mb-2">Gartner Penghargaan Pilihan Pelanggan Tahun 2024</h3>
                    <a href="#" class="text-blue-600 font-medium">Pelajari Selengkapnya</a>
                </div>
                
                <!-- Award 2 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <img src="https://st1.zoom.us/homepage/publish/images/Gartner%202.png" alt="Gartner" class="h-16 mx-auto mb-4">
                    <h3 class="font-bold text-lg mb-2">Gartner Pemimpin Magic Quadrant Tahun 2024</h3>
                    <a href="#" class="text-blue-600 font-medium">Pelajari Selengkapnya</a>
                </div>
                
                <!-- Award 3 -->
                <div class="bg-white p-6 rounded-xl shadow-md text-center">
                    <img src="https://st1.zoom.us/homepage/publish/images/g2%20Fall%20Leader.png" alt="G2" class="h-16 mx-auto mb-4">
                    <h3 class="font-bold text-lg mb-2">G2 Pemimpin G2 Musim Panas Tahun 2024</h3>
                    <a href="#" class="text-blue-600 font-medium">Pelajari Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-blue-600 text-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-6">Siap untuk memulai?</h2>
            <div class="flex flex-col sm:flex-row justify-center space-y-3 sm:space-y-0 sm:space-x-4">
                <a href="#" class="px-6 py-3 bg-white text-blue-600 rounded-full hover:bg-gray-100 font-medium">
                    Daftar Gratis
                </a>
                <a href="#" class="px-6 py-3 border border-white text-white rounded-full hover:bg-blue-700 font-medium">
                    Paket & Harga
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white pt-16 pb-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <!-- Column 1 -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Tentang</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Blog Zoom</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Pelanggan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Tim Kami</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Karier</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Integrasi</a></li>
                    </ul>
                </div>
                
                <!-- Column 2 -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Unduh</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Aplikasi Zoom Workplace</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Aplikasi Zoom Rooms</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Pengontrol Zoom Rooms</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Ekstensi Browser</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Plug-in Outlook</a></li>
                    </ul>
                </div>
                
                <!-- Column 3 -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Penjualan</h3>
                    <ul class="space-y-2">
                        <li><a href="tel:1.888.799.9666" class="text-gray-400 hover:text-white">1.888.799.9666</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Hubungi Penjualan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Paket & Harga</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Minta Demo</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Webinar dan Acara</a></li>
                    </ul>
                </div>
                
                <!-- Column 4 -->
                <div>
                    <h3 class="font-bold text-lg mb-4">Dukungan</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Test Zoom</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Akun</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Pusat Dukungan</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Pusat Pembelajaran</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Umpan Balik</a></li>
                    </ul>
                </div>
            </div>
            
            <!-- Language and Currency -->
            <div class="flex flex-col md:flex-row justify-between items-center border-t border-gray-800 pt-8">
                <div class="mb-4 md:mb-0">
                    <div class="flex items-center space-x-4">
                        <div class="dropdown relative">
                            <button class="flex items-center text-gray-400 hover:text-white">
                                Bahasa Indonesia <i class="fas fa-chevron-down ml-1 text-xs"></i>
                            </button>
                        </div>
                        
                        <div class="dropdown relative">
                            <button class="flex items-center text-gray-400 hover:text-white">
                                US Dollars $ <i class="fas fa-chevron-down ml-1 text-xs"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="flex space-x-4 mb-4 md:mb-0">
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram text-xl"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-youtube text-xl"></i></a>
                </div>
            </div>
            
            <!-- Copyright -->
            <div class="mt-8 text-center text-gray-500 text-sm">
                <p>Hak Cipta ©2024 Zoom Communications, Inc. Semua hak cipta dilindungi undang-undang.</p>
                <div class="flex flex-wrap justify-center mt-2 space-x-4">
                    <a href="#" class="hover:text-white">Ketentuan</a>
                    <a href="#" class="hover:text-white">Privasi</a>
                    <a href="#" class="hover:text-white">Pusat Kepercayaan</a>
                    <a href="#" class="hover:text-white">Pedoman Penggunaan yang Dapat Diterima</a>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Simple hero slider functionality
        let currentSlide = 0;
        const slides = [
            {
                title: "Identifikasi, jalankan, & selesaikan prioritas Anda dengan AI Companion",
                image: "https://st1.zoom.us/homepage/publish/images/sSlide2-4.png"
            },
            {
                title: "Ubah informasi Anda menjadi tindakan dengan AI Companion",
                image: "https://st1.zoom.us/homepage/publish/images/sSlide3-4.png"
            }
        ];
        
        function changeSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            const heroSection = document.querySelector('.bg-gradient-to-r');
            const titleElement = heroSection.querySelector('h1');
            const imageElement = heroSection.querySelector('img');
            
            // Fade out
            titleElement.style.opacity = 0;
            imageElement.style.opacity = 0;
            
            // Change content after fade out
            setTimeout(() => {
                titleElement.textContent = slides[currentSlide].title;
                imageElement.src = slides[currentSlide].image;
                
                // Fade in
                titleElement.style.opacity = 1;
                imageElement.style.opacity = 1;
            }, 500);
        }
        
        // Change slide every 5 seconds
        setInterval(changeSlide, 5000);
        
        // Mobile menu toggle functionality
        document.addEventListener('DOMContentLoaded', function() {
            const mobileMenuButton = document.querySelector('.lg\\:hidden.text-gray-600');
            // You would add click handler here to show mobile menu
        });
    </script>
</body>
</html>