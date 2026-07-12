<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesona Dieng | Paket Wisata Dieng Plateau Banjarnegara</title>
    <meta name="description" content="Jelajahi keindahan Dieng Plateau dengan paket wisata terbaik. Sunrise Bukit Sikunir, Telaga Warna, Candi Arjuna & lebih. Pesan via WhatsApp sekarang!">
    <meta name="keywords" content="wisata dieng, paket wisata dieng, bukit sikunir, telaga warna, dieng plateau, banjarnegara, jawa tengah, sunrise dieng, open trip dieng">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&family=Cormorant+Garamond:ital,wght@1,400;1,500;1,600&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dieng-green': '#1B4D3E',
                        'dieng-green-dark': '#0F2E25',
                        'dieng-gold': '#D4A843',
                        'dieng-coral': '#E85D4E',
                        'dieng-mist': '#F5F0E8',
                        'dieng-muted': '#6B7B6E',
                    },
                    fontFamily: {
                        'playfair': ['"Playfair Display"', 'serif'],
                        'inter': ['"Inter"', 'sans-serif'],
                        'cormorant': ['"Cormorant Garamond"', 'serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Swiper.js CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        /* Custom styles & animations */
        .font-playfair {
            font-family: 'Playfair Display', serif;
        }
        .font-inter {
            font-family: 'Inter', sans-serif;
        }
        .font-cormorant {
            font-family: 'Cormorant Garamond', serif;
        }
        
        /* Fade Up Animation */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1), transform 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        .fade-up.visible {
            opacity: 1;
            transform: translateY(0);
        }
        
        /* Glassmorphism custom blur */
        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
        /* Pulse Ring for WhatsApp */
        .pulse-ring::before {
            content: '';
            position: absolute;
            inset: -6px;
            border-radius: 50%;
            border: 2px solid #25D366;
            animation: pulse-ring 2s infinite;
        }
        @keyframes pulse-ring {
            0% { transform: scale(1); opacity: 0.5; }
            100% { transform: scale(1.4); opacity: 0; }
        }

        /* Lightbox overlay */
        .lightbox-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 100;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body class="font-inter bg-white text-gray-800 antialiased overflow-x-hidden">

    <!-- NAVIGATION BAR -->
    <nav class="fixed top-0 w-full z-50 transition-all duration-300 border-b border-transparent py-4 md:py-6" id="main-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="#" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-dieng-green rounded-xl flex items-center justify-center shadow-md transition-transform duration-300 group-hover:rotate-6">
                        <span class="text-white text-xl"><i class="fa-solid fa-mountain"></i></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl md:text-2xl font-bold font-playfair tracking-wide text-white transition-colors duration-300" id="nav-logo-text">PESONA DIENG</span>
                        <span class="text-[10px] tracking-widest text-dieng-gold uppercase font-semibold">Banjarnegara</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center gap-8">
                    <a href="#beranda" class="nav-link text-white hover:text-dieng-gold font-medium transition-colors">Beranda</a>
                    <a href="#destinasi" class="nav-link text-white hover:text-dieng-gold font-medium transition-colors">Destinasi</a>
                    <a href="#paket" class="nav-link text-white hover:text-dieng-gold font-medium transition-colors">Paket Wisata</a>
                    <a href="#galeri" class="nav-link text-white hover:text-dieng-gold font-medium transition-colors">Galeri</a>
                    <a href="#tentang" class="nav-link text-white hover:text-dieng-gold font-medium transition-colors">Tentang Kami</a>
                    <a href="#faq" class="nav-link text-white hover:text-dieng-gold font-medium transition-colors">FAQ</a>
                </div>

                <!-- CTA & Hamburger -->
                <div class="flex items-center gap-4">
                    <a href="#paket" class="hidden md:inline-block bg-dieng-gold hover:bg-[#c29635] text-white font-semibold py-2.5 px-6 rounded-full shadow-md transition-all duration-300 hover:shadow-lg hover:-translate-y-0.5">
                        Pesan Sekarang
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button class="md:hidden text-white focus:outline-none p-2 rounded-lg" id="menu-btn" aria-label="Toggle menu">
                        <i class="fa-solid fa-bars text-2xl" id="menu-icon"></i>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Mobile Dropdown Menu -->
        <div class="hidden md:hidden absolute top-full left-0 w-full bg-white shadow-xl border-t border-gray-100 flex flex-col py-4 px-6 gap-4 transform origin-top transition-all duration-300" id="mobile-menu">
            <a href="#beranda" class="mobile-nav-link text-gray-800 hover:text-dieng-green font-medium text-lg py-2 border-b border-gray-50">Beranda</a>
            <a href="#destinasi" class="mobile-nav-link text-gray-800 hover:text-dieng-green font-medium text-lg py-2 border-b border-gray-50">Destinasi</a>
            <a href="#paket" class="mobile-nav-link text-gray-800 hover:text-dieng-green font-medium text-lg py-2 border-b border-gray-50">Paket Wisata</a>
            <a href="#galeri" class="mobile-nav-link text-gray-800 hover:text-dieng-green font-medium text-lg py-2 border-b border-gray-50">Galeri</a>
            <a href="#tentang" class="mobile-nav-link text-gray-800 hover:text-dieng-green font-medium text-lg py-2 border-b border-gray-50">Tentang Kami</a>
            <a href="#faq" class="mobile-nav-link text-gray-800 hover:text-dieng-green font-medium text-lg py-2 border-b border-gray-50">FAQ</a>
            <a href="#paket" class="mobile-nav-link bg-dieng-gold text-white text-center font-semibold py-3 px-6 rounded-xl shadow-md mt-2">
                Pesan Sekarang
            </a>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section id="beranda" class="relative h-screen flex items-center justify-center overflow-hidden">
        <!-- Background Image -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/dieng_sunrise_hero.png') }}" alt="Dieng Sunrise" class="w-full h-full object-cover scale-105" id="hero-bg">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/30 to-dieng-green-dark/90"></div>
        </div>

        <!-- Content -->
        <div class="relative z-10 text-center text-white px-4 max-w-4xl mx-auto mt-16">
            <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-4 py-2 rounded-full mb-6 animate-fade-in">
                <span class="text-dieng-gold"><i class="fa-solid fa-location-dot"></i></span>
                <span class="text-sm font-medium tracking-wide">Banjarnegara, Jawa Tengah</span>
            </div>

            <h1 class="text-4xl md:text-7xl font-bold font-playfair mb-6 leading-tight tracking-tight">
                Temukan Keajaiban<br><span class="text-dieng-gold">Dieng Plateau</span>
            </h1>

            <p class="text-lg md:text-xl text-white/90 mb-10 max-w-2xl mx-auto leading-relaxed font-light">
                2.000 meter di atas permukaan laut, di mana kabut mistis berpadu dengan keindahan alam yang tak terlupakan.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#paket" class="w-full sm:w-auto bg-dieng-gold hover:bg-[#c29635] text-white font-semibold py-4 px-8 rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-105">
                    Jelajahi Paket Wisata
                </a>
                <a href="#galeri" class="w-full sm:w-auto border-2 border-white text-white hover:bg-white hover:text-dieng-green-dark font-semibold py-3.5 px-8 rounded-full transition-all duration-300">
                    Lihat Galeri
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 text-white/60 animate-bounce">
            <span class="text-xs uppercase tracking-widest font-semibold">Scroll</span>
            <i class="fa-solid fa-chevron-down"></i>
        </div>
    </section>

    <!-- STATISTICS BAR -->
    <section class="py-12 bg-dieng-green-dark relative z-10 border-t border-dieng-green/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 md:gap-4 text-center">
                <div class="p-2 border-r border-white/10 last:border-0">
                    <div class="text-3xl md:text-5xl font-bold font-playfair text-dieng-gold mb-1" id="stat-wisatawan" data-target="2000">0</div>
                    <div class="text-xs md:text-sm text-white/80 font-medium uppercase tracking-wider">Wisatawan Puas</div>
                </div>
                <div class="p-2 md:border-r border-white/10 last:border-0">
                    <div class="text-3xl md:text-5xl font-bold font-playfair text-dieng-gold mb-1" id="stat-paket" data-target="15">0</div>
                    <div class="text-xs md:text-sm text-white/80 font-medium uppercase tracking-wider">Paket Wisata</div>
                </div>
                <div class="p-2 border-r border-white/10 last:border-0">
                    <div class="text-3xl md:text-5xl font-bold font-playfair text-dieng-gold mb-1">4.9<span class="text-xl">/5</span></div>
                    <div class="text-xs md:text-sm text-white/80 font-medium uppercase tracking-wider">Rating Google</div>
                </div>
                <div class="p-2 last:border-0">
                    <div class="text-3xl md:text-5xl font-bold font-playfair text-dieng-gold mb-1" id="stat-pengalaman" data-target="8">0</div>
                    <div class="text-xs md:text-sm text-white/80 font-medium uppercase tracking-wider">Tahun Pengalaman</div>
                </div>
            </div>
        </div>
    </section>

    <!-- DESTINASI POPULER -->
    <section id="destinasi" class="py-24 bg-dieng-mist/40 scroll-mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
                <span class="text-dieng-green font-semibold tracking-widest uppercase text-sm">📍 Pesona Banjarnegara</span>
                <h2 class="text-3xl md:text-5xl font-bold font-playfair mt-2 text-dieng-green-dark">Destinasi Wajib Kunjung</h2>
                <div class="w-24 h-1 bg-dieng-gold mx-auto mt-4 rounded-full"></div>
                <p class="text-dieng-muted mt-6 text-lg">Spot-spot terbaik dan ikonik di Dataran Tinggi Dieng yang menyimpan keindahan alam menakjubkan dan warisan budaya kuno.</p>
            </div>

            <!-- Destinations Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Dest 1 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-up">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=800&q=80" alt="Telaga Warna" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-dieng-green text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Alam</span>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl font-bold">Telaga Warna</h3>
                            <p class="text-xs text-white/80 mt-1 line-clamp-2">Danau vulkanik ajaib dengan air yang berubah warna akibat kandungan belerang.</p>
                        </div>
                    </div>
                </div>

                <!-- Dest 2 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-up">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?w=800&q=80" alt="Bukit Sikunir" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-dieng-green text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Adventure</span>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl font-bold">Bukit Sikunir</h3>
                            <p class="text-xs text-white/80 mt-1 line-clamp-2">Tempat terbaik untuk memburu "Golden Sunrise" terindah se-Asia Tenggara.</p>
                        </div>
                    </div>
                </div>

                <!-- Dest 3 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-up">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="{{ asset('images/candi_arjuna.png') }}" alt="Candi Arjuna" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-dieng-green text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Budaya</span>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl font-bold">Candi Arjuna</h3>
                            <p class="text-xs text-white/80 mt-1 line-clamp-2">Kompleks candi Hindu tertua di Jawa berlatar belakang pegunungan hijau berselimut kabut.</p>
                        </div>
                    </div>
                </div>

                <!-- Dest 4 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-up">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=800&q=80" alt="Kawah Sikidang" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-dieng-green text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Alam</span>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl font-bold">Kawah Sikidang</h3>
                            <p class="text-xs text-white/80 mt-1 line-clamp-2">Kawah vulkanik aktif yang unik dengan kolam lumpur mendidih yang bisa berpindah tempat.</p>
                        </div>
                    </div>
                </div>

                <!-- Dest 5 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-up">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?w=800&q=80" alt="Dieng Plateau Theater" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-dieng-green text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Edukasi</span>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl font-bold">Dieng Plateau Theater</h3>
                            <p class="text-xs text-white/80 mt-1 line-clamp-2">Pusat edukasi audio-visual yang mengulas lengkap sejarah geologi dan budaya Dieng.</p>
                        </div>
                    </div>
                </div>

                <!-- Dest 6 -->
                <div class="group bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-2 fade-up">
                    <div class="relative overflow-hidden aspect-[4/3]">
                        <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=800&q=80" alt="Sumur Jalatunda" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                        <span class="absolute top-4 left-4 bg-dieng-green text-white text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider">Mistis</span>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h3 class="text-xl font-bold">Sumur Jalatunda</h3>
                            <p class="text-xs text-white/80 mt-1 line-clamp-2">Sumur raksasa alami sedalam 100 meter yang dipercaya sebagai pintu gerbang gaib.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- PAKET WISATA SECTION -->
    <section id="paket" class="py-24 bg-white scroll-mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12 fade-up">
                <span class="text-dieng-gold font-semibold tracking-widest uppercase text-sm">🎒 Pilihan Trip Terbaik</span>
                <h2 class="text-3xl md:text-5xl font-bold font-playfair mt-2 text-dieng-green-dark">Pilihan Paket Wisata</h2>
                <div class="w-24 h-1 bg-dieng-gold mx-auto mt-4 rounded-full"></div>
                <p class="text-dieng-muted mt-6 text-lg">Dari open trip ramah kantong hingga private trip romantis, pilih petualangan impianmu.</p>
            </div>

            <!-- Filter Tabs -->
            <div class="flex flex-wrap justify-center gap-2 md:gap-4 mb-12 fade-up">
                <button onclick="filterPackages('all')" class="filter-tab-btn active bg-dieng-green text-white font-medium px-6 py-2.5 rounded-full border border-dieng-green transition-all duration-300 hover:scale-105 shadow-sm text-sm">Semua</button>
                <button onclick="filterPackages('private')" class="filter-tab-btn bg-transparent text-dieng-green hover:bg-dieng-green hover:text-white font-medium px-6 py-2.5 rounded-full border border-dieng-green transition-all duration-300 hover:scale-105 text-sm">Private Trip</button>
                <button onclick="filterPackages('open')" class="filter-tab-btn bg-transparent text-dieng-green hover:bg-dieng-green hover:text-white font-medium px-6 py-2.5 rounded-full border border-dieng-green transition-all duration-300 hover:scale-105 text-sm">Open Trip</button>
                <button onclick="filterPackages('family')" class="filter-tab-btn bg-transparent text-dieng-green hover:bg-dieng-green hover:text-white font-medium px-6 py-2.5 rounded-full border border-dieng-green transition-all duration-300 hover:scale-105 text-sm">Family</button>
                <button onclick="filterPackages('adventure')" class="filter-tab-btn bg-transparent text-dieng-green hover:bg-dieng-green hover:text-white font-medium px-6 py-2.5 rounded-full border border-dieng-green transition-all duration-300 hover:scale-105 text-sm">Adventure</button>
            </div>

            <!-- Packages Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="packages-grid">
                @foreach($packages as $pkg)
                    @php
                        $firstDuration = $pkg['durations'][0];
                        $suffix = $pkg['slug'] === 'family-fun-dieng' ? 'keluarga' : ($pkg['slug'] === 'romantic-dieng-honeymoon' ? 'pasangan' : 'pax');
                    @endphp
                    <div class="package-card group bg-white rounded-2xl overflow-hidden shadow-lg border border-gray-100 hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 fade-up" data-category="{{ $pkg['category'] }}">
                        <div class="relative overflow-hidden aspect-[16/10]">
                            <img src="{{ asset($pkg['image']) }}" alt="{{ $pkg['name'] }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute top-4 left-4 bg-dieng-gold text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md">
                                ⏱️ {{ $firstDuration['label'] }}
                            </div>
                            @if($pkg['slug'] === 'dieng-sunrise-private' || $pkg['slug'] === 'open-trip-dieng-weekend')
                                <div class="absolute top-4 right-4 bg-dieng-coral text-white text-xs font-semibold px-3 py-1 rounded-full shadow-md animate-pulse">
                                    Best Deal
                                </div>
                            @endif
                        </div>
                        <div class="p-6 flex flex-col justify-between min-h-[360px]">
                            <div>
                                <div class="flex items-center gap-1 mb-3 text-sm">
                                    <span class="text-yellow-400">
                                        @for($i = 0; $i < 5; $i++)
                                            @if($i < floor($pkg['rating']))
                                                <i class="fa-solid fa-star"></i>
                                            @else
                                                <i class="fa-solid fa-star-half-stroke"></i>
                                            @endif
                                        @endfor
                                    </span>
                                    <span class="text-gray-500">({{ $pkg['reviews_count'] }} ulasan)</span>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 group-hover:text-dieng-green transition-colors">{{ $pkg['name'] }}</h3>
                                <p class="text-xs text-dieng-muted mt-2 line-clamp-2">{{ $pkg['description'] }}</p>
                                
                                <!-- Highlight/Features list -->
                                <div class="grid grid-cols-2 gap-2 mt-4 py-4 border-y border-gray-100">
                                    @foreach(array_slice($firstDuration['features'], 0, 4) as $feat)
                                        <span class="flex items-center gap-2 text-xs text-gray-600 line-clamp-1">
                                            <i class="fa-solid fa-circle-check text-dieng-green text-[10px]"></i> {{ $feat }}
                                        </span>
                                    @endforeach
                                </div>
                            </div>
                            
                            <div>
                                <!-- Price & Button -->
                                <div class="mt-4 flex items-baseline justify-between">
                                    <div>
                                        <span class="text-xs text-gray-400 line-through block">Rp {{ number_format($firstDuration['original_price'], 0, ',', '.') }}</span>
                                        <span class="text-2xl font-bold text-dieng-green">Rp {{ number_format($firstDuration['price'], 0, ',', '.') }}</span>
                                        <span class="text-[10px] text-gray-500">/ {{ $suffix }}</span>
                                    </div>
                                    <span class="text-[10px] bg-red-100 text-red-700 px-2 py-0.5 rounded font-semibold uppercase">{{ $firstDuration['discount'] }}</span>
                                </div>
                                
                                <a href="{{ route('paket.show', $pkg['slug']) }}" 
                                   class="mt-4 flex items-center justify-center gap-2 w-full bg-dieng-green hover:bg-dieng-green-dark text-white font-semibold py-3 px-4 rounded-xl shadow-md transition-colors text-sm">
                                    <i class="fa-solid fa-circle-info text-base"></i>
                                    Detail Paket
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CARA PEMESANAN -->
    <section class="py-24 bg-dieng-mist/35 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
                <span class="text-dieng-green font-semibold tracking-widest uppercase text-sm">📋 Alur Booking</span>
                <h2 class="text-3xl md:text-5xl font-bold font-playfair mt-2 text-dieng-green-dark">Gampang, Cuma 3 Langkah</h2>
                <div class="w-24 h-1 bg-dieng-gold mx-auto mt-4 rounded-full"></div>
                <p class="text-dieng-muted mt-6 text-lg font-light">Tidak perlu ribet daftar akun. Proses cepat dan aman langsung terhubung dengan admin kami.</p>
            </div>

            <!-- Steps Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 relative">
                <!-- Step 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow relative text-center group fade-up z-10">
                    <div class="w-16 h-16 bg-dieng-mist rounded-2xl flex items-center justify-center text-dieng-green font-bold text-2xl mx-auto mb-6 group-hover:bg-dieng-green group-hover:text-white transition-colors duration-300">
                        1
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Pilih Paket Wisata</h3>
                    <p class="text-sm text-dieng-muted">Temukan dan klik paket wisata yang paling sesuai dengan impian dan rencana liburanmu.</p>
                </div>

                <!-- Step 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow relative text-center group fade-up z-10">
                    <div class="w-16 h-16 bg-dieng-mist rounded-2xl flex items-center justify-center text-dieng-green font-bold text-2xl mx-auto mb-6 group-hover:bg-dieng-green group-hover:text-white transition-colors duration-300">
                        2
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Klik Tombol Pesan</h3>
                    <p class="text-sm text-dieng-muted">Klik "Pesan via WhatsApp" untuk langsung terhubung ke admin dengan form pemesanan otomatis.</p>
                </div>

                <!-- Step 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-sm hover:shadow-md transition-shadow relative text-center group fade-up z-10">
                    <div class="w-16 h-16 bg-dieng-mist rounded-2xl flex items-center justify-center text-dieng-green font-bold text-2xl mx-auto mb-6 group-hover:bg-dieng-green group-hover:text-white transition-colors duration-300">
                        3
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3">Konfirmasi & Bayar</h3>
                    <p class="text-sm text-dieng-muted">Admin kami akan memverifikasi tanggal, memandu pembayaran uang muka, dan mengirim e-invoice.</p>
                </div>
            </div>
            
            <div class="text-center mt-12 fade-up">
                <a href="#paket" class="inline-block bg-dieng-gold hover:bg-[#c29635] text-white font-semibold py-3 px-8 rounded-full shadow-md transition-colors text-sm">
                    Pesan Sekarang
                </a>
            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="py-24 bg-white overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
                <span class="text-dieng-gold font-semibold tracking-widest uppercase text-sm">💬 Penilaian Customer</span>
                <h2 class="text-3xl md:text-5xl font-bold font-playfair mt-2 text-dieng-green-dark">Cerita dari Traveler Kami</h2>
                <div class="w-24 h-1 bg-dieng-gold mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Swiper Carousel -->
            <div class="swiper testimonials-swiper p-4 fade-up">
                <div class="swiper-wrapper">
                    <!-- Testi 1 -->
                    <div class="swiper-slide bg-dieng-mist/30 p-8 rounded-2xl border border-gray-100 flex flex-col justify-between h-auto shadow-sm">
                        <div>
                            <div class="flex gap-1 text-yellow-400 mb-4">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-gray-700 italic text-sm md:text-base leading-relaxed">"Sangat puas dengan pelayanan Pesona Dieng! Kami memesan paket Honeymoon dan dekorasi kamarnya sangat romantis, guidenya sangat ramah dan sabar menemani kami berfoto."</p>
                        </div>
                        <div class="flex items-center gap-4 mt-8">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=150&q=80" alt="Riana S." class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Riana Setiawati</h4>
                                <p class="text-xs text-dieng-muted">Solo, Jawa Tengah</p>
                                <span class="inline-block bg-dieng-green/10 text-dieng-green text-[10px] px-2 py-0.5 rounded font-medium mt-1">Romantic Honeymoon</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testi 2 -->
                    <div class="swiper-slide bg-dieng-mist/30 p-8 rounded-2xl border border-gray-100 flex flex-col justify-between h-auto shadow-sm">
                        <div>
                            <div class="flex gap-1 text-yellow-400 mb-4">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-gray-700 italic text-sm md:text-base leading-relaxed">"Open trip termurah dan terbaik yang pernah saya ikuti. Fasilitas homestay bersih dan makanannya enak banget prasmanan masakan khas Dieng. Bakal ikutan lagi tahun depan."</p>
                        </div>
                        <div class="flex items-center gap-4 mt-8">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&q=80" alt="Budi H." class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Budi Hartono</h4>
                                <p class="text-xs text-dieng-muted">Jakarta Barat</p>
                                <span class="inline-block bg-dieng-green/10 text-dieng-green text-[10px] px-2 py-0.5 rounded font-medium mt-1">Open Trip Weekend</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testi 3 -->
                    <div class="swiper-slide bg-dieng-mist/30 p-8 rounded-2xl border border-gray-100 flex flex-col justify-between h-auto shadow-sm">
                        <div>
                            <div class="flex gap-1 text-yellow-400 mb-4">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-gray-700 italic text-sm md:text-base leading-relaxed">"Homestay-nya luar biasa dengan pemandangan pegunungan yang sangat menakjubkan. Anak-anak sangat senang karena bisa memetik kentang langsung dari kebun warga."</p>
                        </div>
                        <div class="flex items-center gap-4 mt-8">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&q=80" alt="Dewi L." class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Dewi Lestari</h4>
                                <p class="text-xs text-dieng-muted">Bandung, Jawa Barat</p>
                                <span class="inline-block bg-dieng-green/10 text-dieng-green text-[10px] px-2 py-0.5 rounded font-medium mt-1">Family Fun Dieng</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testi 4 -->
                    <div class="swiper-slide bg-dieng-mist/30 p-8 rounded-2xl border border-gray-100 flex flex-col justify-between h-auto shadow-sm">
                        <div>
                            <div class="flex gap-1 text-yellow-400 mb-4">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-gray-700 italic text-sm md:text-base leading-relaxed">"Pendakian ke Gunung Prau ditemani guide yang sangat profesional. Dipandu secara sabar karena stamina kami agak lambat, akhirnya bisa sampai puncak dan dapet sunrise cakep!"</p>
                        </div>
                        <div class="flex items-center gap-4 mt-8">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=150&q=80" alt="Fahmi A." class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Fahmi Azhar</h4>
                                <p class="text-xs text-dieng-muted">Surabaya, Jawa Timur</p>
                                <span class="inline-block bg-dieng-green/10 text-dieng-green text-[10px] px-2 py-0.5 rounded font-medium mt-1">Adventure Trekking</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testi 5 -->
                    <div class="swiper-slide bg-dieng-mist/30 p-8 rounded-2xl border border-gray-100 flex flex-col justify-between h-auto shadow-sm">
                        <div>
                            <div class="flex gap-1 text-yellow-400 mb-4">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-gray-700 italic text-sm md:text-base leading-relaxed">"Penjelasan guidenya soal sejarah Kerajaan Kalingga dan kompleks candi Hindu tertua sangat mendalam. Kami dapat wawasan berharga selain sekadar liburan."</p>
                        </div>
                        <div class="flex items-center gap-4 mt-8">
                            <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&q=80" alt="Siti M." class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Siti Marfuah</h4>
                                <p class="text-xs text-dieng-muted">Semarang, Jawa Tengah</p>
                                <span class="inline-block bg-dieng-green/10 text-dieng-green text-[10px] px-2 py-0.5 rounded font-medium mt-1">Cultural Heritage</span>
                            </div>
                        </div>
                    </div>

                    <!-- Testi 6 -->
                    <div class="swiper-slide bg-dieng-mist/30 p-8 rounded-2xl border border-gray-100 flex flex-col justify-between h-auto shadow-sm">
                        <div>
                            <div class="flex gap-1 text-yellow-400 mb-4">
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                            </div>
                            <p class="text-gray-700 italic text-sm md:text-base leading-relaxed">"Sangat direkomendasikan! Kami memesan trip dadakan h-2 dan langsung dilayani dengan baik oleh admin via WA. Perjalanan berjalan sangat lancar dan berkesan."</p>
                        </div>
                        <div class="flex items-center gap-4 mt-8">
                            <img src="https://images.unsplash.com/photo-1539571696357-5a69c17a67c6?w=150&q=80" alt="Kevin O." class="w-12 h-12 rounded-full object-cover">
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Kevin Octavio</h4>
                                <p class="text-xs text-dieng-muted">Yogyakarta</p>
                                <span class="inline-block bg-dieng-green/10 text-dieng-green text-[10px] px-2 py-0.5 rounded font-medium mt-1">Dieng Sunrise Private</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Swiper Pagination -->
                <div class="swiper-pagination !relative mt-8"></div>
            </div>
        </div>
    </section>

    <!-- GALERI SECTION -->
    <section id="galeri" class="py-24 bg-dieng-mist/40 scroll-mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16 fade-up">
                <span class="text-dieng-green font-semibold tracking-widest uppercase text-sm">📷 Galeri Wisata</span>
                <h2 class="text-3xl md:text-5xl font-bold font-playfair mt-2 text-dieng-green-dark">Momen di Dieng</h2>
                <div class="w-24 h-1 bg-dieng-gold mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Gallery Masonry Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="gallery-grid">
                
                <!-- Pic 1 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-sm cursor-pointer fade-up" onclick="openLightbox('{{ asset('images/landscape_dieng.png') }}')">
                    <img src="{{ asset('images/landscape_dieng.png') }}" alt="Landscape Dieng" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Pic 2 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-sm cursor-pointer fade-up" onclick="openLightbox('https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1500534314209-a25ddb2bd429?w=500&q=80" alt="Sikunir Golden Sunrise" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Pic 3 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-sm cursor-pointer fade-up" onclick="openLightbox('{{ asset('images/candi_arjuna.png') }}')">
                    <img src="{{ asset('images/candi_arjuna.png') }}" alt="Candi Arjuna" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Pic 4 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-sm cursor-pointer fade-up" onclick="openLightbox('https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1464822759023-fed622ff2c3b?w=500&q=80" alt="Pegunungan" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Pic 5 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-sm cursor-pointer fade-up" onclick="openLightbox('https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?w=500&q=80" alt="Mist" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Pic 6 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-sm cursor-pointer fade-up" onclick="openLightbox('https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?w=500&q=80" alt="Dieng Sunrise" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Pic 7 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-sm cursor-pointer fade-up" onclick="openLightbox('https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?w=500&q=80" alt="Prau Trekking" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>

                <!-- Pic 8 -->
                <div class="group relative overflow-hidden rounded-2xl aspect-square shadow-sm cursor-pointer fade-up" onclick="openLightbox('https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1439066615861-d1af74d74000?w=500&q=80" alt="Telaga Warna" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center">
                        <i class="fa-solid fa-magnifying-glass-plus text-white text-3xl"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LIGHTBOX MODAL -->
    <div id="lightbox" class="lightbox-overlay" onclick="closeLightbox()">
        <span class="absolute top-4 right-6 text-white text-4xl cursor-pointer hover:text-gray-300 transition-colors">&times;</span>
        <img id="lightbox-img" src="" alt="Lightbox image" class="max-w-[90%] max-h-[85%] object-contain rounded-lg shadow-2xl">
    </div>

    <!-- FAQ SECTION -->
    <section id="faq" class="py-24 bg-white scroll-mt-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6">
            <div class="text-center mb-16 fade-up">
                <span class="text-dieng-gold font-semibold tracking-widest uppercase text-sm">❓ Paling Sering Ditanyakan</span>
                <h2 class="text-3xl md:text-5xl font-bold font-playfair mt-2 text-dieng-green-dark">Pertanyaan Umum</h2>
                <div class="w-24 h-1 bg-dieng-gold mx-auto mt-4 rounded-full"></div>
            </div>

            <!-- Accordion -->
            <div class="space-y-4 fade-up">
                <!-- FAQ 1 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300 focus:outline-none" onclick="toggleFaq(this)">
                        <span>Berapa rata-rata suhu udara di Dieng?</span>
                        <i class="fa-solid fa-chevron-down text-dieng-green transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                        <p class="p-6 text-sm text-dieng-muted border-t border-gray-100">
                            Suhu udara di Dieng rata-rata berkisar antara 12-20 derajat Celsius pada siang hari, dan bisa turun hingga 4-10 derajat Celsius pada malam hari. Di musim kemarau (Juli-Agustus), suhu bisa mencapai 0 derajat Celsius dan memicu munculnya embun es (embun upas).
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300 focus:outline-none" onclick="toggleFaq(this)">
                        <span>Kapan waktu terbaik berkunjung ke Dieng?</span>
                        <i class="fa-solid fa-chevron-down text-dieng-green transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                        <p class="p-6 text-sm text-dieng-muted border-t border-gray-100">
                            Waktu terbaik adalah saat musim kemarau antara bulan Juni hingga September. Selama bulan-bulan ini, cuaca relatif cerah sehingga Anda bisa berburu golden sunrise Sikunir secara maksimal dan berkesempatan menyaksikan festival embun upas.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300 focus:outline-none" onclick="toggleFaq(this)">
                        <span>Apakah ada batasan usia untuk mengikuti paket ini?</span>
                        <i class="fa-solid fa-chevron-down text-dieng-green transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                        <p class="p-6 text-sm text-dieng-muted border-t border-gray-100">
                            Secara umum tidak ada batasan usia yang ketat. Namun, untuk paket trekking Gunung Prau direkomendasikan bagi peserta berusia 8-60 tahun dengan kondisi fisik yang sehat. Sedangkan untuk paket wisata keluarga (Family Trip) sangat aman bagi bayi maupun lansia.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300 focus:outline-none" onclick="toggleFaq(this)">
                        <span>Bagaimana metode dan alur pembayaran trip?</span>
                        <i class="fa-solid fa-chevron-down text-dieng-green transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                        <p class="p-6 text-sm text-dieng-muted border-t border-gray-100">
                            Setelah booking diverifikasi oleh admin via WhatsApp, Anda cukup membayar uang muka (down payment) sebesar 30% dari total biaya via transfer bank resmi kami. Pelunasan sisa biaya dapat dibayarkan langsung saat meeting point atau h-1 keberangkatan.
                        </p>
                    </div>
                </div>

                <!-- FAQ 5 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300 focus:outline-none" onclick="toggleFaq(this)">
                        <span>Apakah bisa melakukan reschedule atau pembatalan?</span>
                        <i class="fa-solid fa-chevron-down text-dieng-green transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                        <p class="p-6 text-sm text-dieng-muted border-t border-gray-100">
                            Reschedule dapat dilakukan minimal h-7 sebelum jadwal keberangkatan secara gratis (tergantung ketersediaan akomodasi). Pembatalan sepihak oleh peserta kurang dari h-3 keberangkatan akan menyebabkan uang muka hangus.
                        </p>
                    </div>
                </div>

                <!-- FAQ 6 -->
                <div class="border border-gray-200 rounded-xl overflow-hidden shadow-sm">
                    <button class="w-full flex justify-between items-center p-6 text-left font-semibold text-gray-900 hover:bg-gray-50 transition-colors duration-300 focus:outline-none" onclick="toggleFaq(this)">
                        <span>Apakah harga paket sudah termasuk asuransi wisata?</span>
                        <i class="fa-solid fa-chevron-down text-dieng-green transition-transform duration-300"></i>
                    </button>
                    <div class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out bg-gray-50/50">
                        <p class="p-6 text-sm text-dieng-muted border-t border-gray-100">
                            Ya, seluruh paket wisata kami sudah include tiket masuk resmi destinasi wisata yang di dalamnya sudah terdapat asuransi lokal dari pihak pengelola wisata setempat (Dinparbud Banjarnegara).
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ABOUT US SECTION -->
    <section id="tentang" class="py-24 bg-dieng-mist/30 scroll-mt-16 border-t border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <!-- Image -->
                <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-video lg:aspect-square fade-up">
                    <img src="https://images.unsplash.com/photo-1483728642387-6c3bdd6c93e5?w=800&q=80" alt="Tentang Pesona Dieng" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-dieng-green-dark/70 to-transparent"></div>
                    <div class="absolute bottom-6 left-6 text-white">
                        <h4 class="text-xl font-bold font-playfair">Di Atas Awan, Di Hati Indonesia</h4>
                        <p class="text-xs text-white/80 mt-1">Pesona Dieng - Biro Perjalanan Terpercaya Anda</p>
                    </div>
                </div>

                <!-- Text -->
                <div class="fade-up">
                    <span class="text-dieng-green font-semibold tracking-widest uppercase text-sm">🌲 Sahabat Perjalanan Anda</span>
                    <h2 class="text-3xl md:text-5xl font-bold font-playfair mt-2 text-dieng-green-dark leading-tight">Tentang Pesona Dieng</h2>
                    <div class="w-20 h-1 bg-dieng-gold mt-4 rounded-full"></div>
                    <p class="text-dieng-muted mt-6 text-sm md:text-base leading-relaxed">
                        Kami adalah penyedia layanan paket wisata (Tour & Travel) lokal profesional yang berbasis di Dieng Plateau, Kabupaten Banjarnegara. Sejak tahun 2018, kami telah mendampingi ribuan wisatawan domestik dan asing untuk menjelajahi keindahan, sejarah, dan misteri dataran tinggi eksotis ini.
                    </p>
                    <p class="text-dieng-muted mt-4 text-sm md:text-base leading-relaxed">
                        Dengan mempekerjakan pemandu lokal asli berlisensi profesional dan bekerjasama erat dengan warga pemilik homestay, kami menjamin perjalanan Anda tidak hanya menyenangkan tetapi juga berkontribusi positif secara ekonomi pada komunitas masyarakat lokal Dieng.
                    </p>
                    
                    <div class="grid grid-cols-2 gap-4 mt-8">
                        <div class="flex items-start gap-3">
                            <span class="text-dieng-gold text-xl"><i class="fa-solid fa-circle-check"></i></span>
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Pemandu Lokal Berlisensi</h4>
                                <p class="text-xs text-gray-500 mt-1">Menguasai sejarah, mitos & rute.</p>
                            </div>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="text-dieng-gold text-xl"><i class="fa-solid fa-circle-check"></i></span>
                            <div>
                                <h4 class="font-bold text-gray-900 text-sm">Transaksi 100% Aman</h4>
                                <p class="text-xs text-gray-500 mt-1">Garansi refund / reschedule fleksibel.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-dieng-green-dark text-white pt-20 pb-8 border-t border-dieng-green/30">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 pb-16 border-b border-white/10">
                <!-- Col 1 -->
                <div class="space-y-4">
                    <a href="#" class="flex items-center gap-2">
                        <div class="w-8 h-8 bg-dieng-green rounded-lg flex items-center justify-center border border-white/10">
                            <span class="text-white text-sm"><i class="fa-solid fa-mountain"></i></span>
                        </div>
                        <span class="text-xl font-bold font-playfair tracking-wide text-white">PESONA DIENG</span>
                    </a>
                    <p class="text-xs text-white/70 leading-relaxed font-light">
                        Penyedia paket wisata resmi Dieng Plateau, Kabupaten Banjarnegara, Jawa Tengah. Kami menghadirkan petualangan terbaik "Di Atas Awan, Di Hati Indonesia".
                    </p>
                    <div class="flex items-center gap-4 pt-2">
                        <a href="#" class="text-white/60 hover:text-dieng-gold transition-colors" aria-label="Instagram"><i class="fa-brands fa-instagram text-lg"></i></a>
                        <a href="#" class="text-white/60 hover:text-dieng-gold transition-colors" aria-label="TikTok"><i class="fa-brands fa-tiktok text-lg"></i></a>
                        <a href="#" class="text-white/60 hover:text-dieng-gold transition-colors" aria-label="Facebook"><i class="fa-brands fa-facebook-f text-lg"></i></a>
                        <a href="#" class="text-white/60 hover:text-dieng-gold transition-colors" aria-label="YouTube"><i class="fa-brands fa-youtube text-lg"></i></a>
                    </div>
                </div>

                <!-- Col 2 -->
                <div class="space-y-4">
                    <h4 class="font-bold font-playfair text-dieng-gold text-lg tracking-wide uppercase">Navigasi</h4>
                    <div class="flex flex-col gap-2.5 text-xs text-white/70 font-light">
                        <a href="#beranda" class="hover:text-dieng-gold transition-colors">Beranda</a>
                        <a href="#destinasi" class="hover:text-dieng-gold transition-colors">Destinasi</a>
                        <a href="#paket" class="hover:text-dieng-gold transition-colors">Paket Wisata</a>
                        <a href="#galeri" class="hover:text-dieng-gold transition-colors">Galeri</a>
                        <a href="#tentang" class="hover:text-dieng-gold transition-colors">Tentang Kami</a>
                    </div>
                </div>

                <!-- Col 3 -->
                <div class="space-y-4">
                    <h4 class="font-bold font-playfair text-dieng-gold text-lg tracking-wide uppercase">Kontak Admin</h4>
                    <div class="flex flex-col gap-3.5 text-xs text-white/70 font-light">
                        <span class="flex items-start gap-3">
                            <span class="text-dieng-gold"><i class="fa-solid fa-location-dot"></i></span>
                            <span>Jl. Raya Dieng Kulon, Batur, Banjarnegara, Jawa Tengah 53456</span>
                        </span>
                        <span class="flex items-center gap-3">
                            <span class="text-dieng-gold"><i class="fa-brands fa-whatsapp"></i></span>
                            <a href="https://wa.me/{{ env('WHATSAPP_NUMBER', '6281234567890') }}" class="hover:text-dieng-gold transition-colors">+62 812-3456-7890</a>
                        </span>
                        <span class="flex items-center gap-3">
                            <span class="text-dieng-gold"><i class="fa-solid fa-envelope"></i></span>
                            <a href="mailto:hello@pesonadieng.id" class="hover:text-dieng-gold transition-colors">hello@pesonadieng.id</a>
                        </span>
                    </div>
                </div>

                <!-- Col 4 -->
                <div class="space-y-4">
                    <h4 class="font-bold font-playfair text-dieng-gold text-lg tracking-wide uppercase">Newsletter</h4>
                    <p class="text-xs text-white/70 font-light leading-relaxed">Dapatkan info diskon menarik, promo early-bird, dan tips berkunjung ke Dieng.</p>
                    <form onsubmit="event.preventDefault(); alert('Terima kasih sudah mendaftar newsletter kami!');" class="flex flex-col sm:flex-row gap-2">
                        <input type="email" placeholder="Email Anda" class="w-full bg-white/10 text-white placeholder-white/40 border border-white/10 rounded-xl px-4 py-2 text-xs focus:outline-none focus:border-dieng-gold transition-colors" required>
                        <button type="submit" class="bg-dieng-gold hover:bg-[#c29635] text-white font-semibold px-4 py-2 rounded-xl text-xs transition-colors whitespace-nowrap">Daftar</button>
                    </form>
                </div>
            </div>
            
            <!-- Bottom Copyright -->
            <div class="flex flex-col sm:flex-row justify-between items-center pt-8 text-[11px] text-white/50 font-light gap-4">
                <span>&copy; 2026 Pesona Dieng. All Rights Reserved.</span>
                <span>Design with <i class="fa-solid fa-heart text-dieng-coral"></i> for Banjarnegara Tourism</span>
            </div>
        </div>
    </footer>

    <!-- FLOATING WHATSAPP BUTTON -->
    <a href="https://wa.me/{{ env('WHATSAPP_NUMBER', '6281234567890') }}?text={{ rawurlencode("Halo Pesona Dieng!\n\nSaya ingin bertanya mengenai informasi paket wisata ke Dieng Plateau.\nTerima kasih!") }}" 
       target="_blank"
       class="fixed bottom-6 right-6 z-50 bg-[#25D366] hover:bg-[#1ebd50] text-white p-4 rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-110 group pulse-ring"
       aria-label="Chat Admin">
        <i class="fa-brands fa-whatsapp text-2xl relative z-10"></i>
        <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-800 text-white text-xs px-3 py-1.5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-md pointer-events-none">
            Chat Admin
        </span>
    </a>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        // MOBILE MENU ACCORDION/DRAWER
        const menuBtn = document.getElementById('menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');

        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            if (mobileMenu.classList.contains('hidden')) {
                menuIcon.className = 'fa-solid fa-bars text-2xl';
            } else {
                menuIcon.className = 'fa-solid fa-xmark text-2xl';
            }
        });

        // Close mobile menu when a link is clicked
        const mobileLinks = document.querySelectorAll('.mobile-nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIcon.className = 'fa-solid fa-bars text-2xl';
            });
        });

        // FIXED GLASS NAVIGATION LOGIC
        const mainNav = document.getElementById('main-nav');
        const logoText = document.getElementById('nav-logo-text');
        const menuIconEl = document.getElementById('menu-icon');
        const navLinks = document.querySelectorAll('.nav-link');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                mainNav.classList.add('glass-nav', 'shadow-md', 'py-3');
                mainNav.classList.remove('py-4', 'md:py-6');
                mainNav.classList.replace('border-transparent', 'border-gray-100');
                logoText.classList.replace('text-white', 'text-dieng-green');
                menuBtn.classList.replace('text-white', 'text-dieng-green');
                navLinks.forEach(link => {
                    link.classList.replace('text-white', 'text-gray-700');
                });
            } else {
                mainNav.classList.remove('glass-nav', 'shadow-md', 'py-3');
                mainNav.classList.add('py-4', 'md:py-6');
                mainNav.classList.replace('border-gray-100', 'border-transparent');
                logoText.classList.replace('text-dieng-green', 'text-white');
                menuBtn.classList.replace('text-dieng-green', 'text-white');
                navLinks.forEach(link => {
                    link.classList.replace('text-gray-700', 'text-white');
                });
            }
        });

        // SWIPER CAROUSEL LOGIC
        const swiper = new Swiper('.testimonials-swiper', {
            slidesPerView: 1,
            spaceBetween: 24,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.5,
                },
                768: {
                    slidesPerView: 2,
                },
                1024: {
                    slidesPerView: 3,
                }
            }
        });

        // FAQ ACCORDION LOGIC
        function toggleFaq(btn) {
            const content = btn.nextElementSibling;
            const icon = btn.querySelector('.fa-chevron-down');
            
            // Toggle current FAQ
            if (content.style.maxHeight && content.style.maxHeight !== '0px') {
                content.style.maxHeight = '0px';
                icon.style.transform = 'rotate(0deg)';
                btn.classList.remove('bg-gray-50');
            } else {
                // Close all other FAQs
                document.querySelectorAll('#faq .max-h-0').forEach(el => {
                    el.style.maxHeight = '0px';
                    el.previousElementSibling.querySelector('.fa-chevron-down').style.transform = 'rotate(0deg)';
                    el.previousElementSibling.classList.remove('bg-gray-50');
                });
                
                content.style.maxHeight = content.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
                btn.classList.add('bg-gray-50');
            }
        }

        // FILTER PACKAGES
        function filterPackages(category) {
            const cards = document.querySelectorAll('.package-card');
            const buttons = document.querySelectorAll('.filter-tab-btn');
            
            // Update active button classes
            buttons.forEach(btn => {
                btn.classList.remove('active', 'bg-dieng-green', 'text-white');
                btn.classList.add('bg-transparent', 'text-dieng-green');
            });
            event.target.classList.add('active', 'bg-dieng-green', 'text-white');
            event.target.classList.remove('bg-transparent', 'text-dieng-green');

            cards.forEach(card => {
                if (category === 'all' || card.getAttribute('data-category') === category) {
                    card.style.display = 'block';
                    setTimeout(() => card.style.opacity = '1', 50);
                } else {
                    card.style.opacity = '0';
                    setTimeout(() => card.style.display = 'none', 300);
                }
            });
        }

        // STATS ANIMATION ON SCROLL
        const stats = document.querySelectorAll('[id^="stat-"]');
        let animated = false;

        function animateStats() {
            stats.forEach(stat => {
                const target = parseInt(stat.getAttribute('data-target'));
                let current = 0;
                const increment = Math.ceil(target / 50);
                const timer = setInterval(() => {
                    current += increment;
                    if (current >= target) {
                        stat.textContent = target + (stat.id !== 'stat-pengalaman' && stat.id !== 'stat-paket' ? '+' : '+');
                        clearInterval(timer);
                    } else {
                        stat.textContent = current;
                    }
                }, 30);
            });
        }

        // FADE UP ON SCROLL INTERSECTION OBSERVER
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const fadeObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    
                    // Trigger stats animation when statistics section is in view
                    if (entry.target.id === 'stat-wisatawan' || entry.target.contains(document.getElementById('stat-wisatawan'))) {
                        if (!animated) {
                            animateStats();
                            animated = true;
                        }
                    }
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-up').forEach(el => {
            fadeObserver.observe(el);
        });
        
        // Also observe statistics section specifically for counter animation
        const statsSection = document.querySelector('section.bg-dieng-green-dark');
        if (statsSection) {
            fadeObserver.observe(statsSection);
        }

        // LIGHTBOX FUNCTIONS
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');

        function openLightbox(src) {
            lightboxImg.src = src;
            lightbox.style.display = 'flex';
            document.body.style.overflow = 'hidden'; // Disable page scroll
        }

        function closeLightbox() {
            lightbox.style.display = 'none';
            document.body.style.overflow = 'auto'; // Enable page scroll
        }
    </script>
</body>
</html>
