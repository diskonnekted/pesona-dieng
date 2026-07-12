<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Paket: <?php echo e($package['name']); ?> | Pesona Dieng</title>
    
    <!-- Meta SEO -->
    <meta name="description" content="Detail lengkap paket wisata <?php echo e($package['name']); ?>. Dapatkan detail rencana perjalanan (itinerary), harga terbaik, fasilitas, dan kemudahan booking online.">
    <meta name="keywords" content="paket wisata dieng, tour dieng, <?php echo e($package['name']); ?>, itinerary dieng, wisata banjarnegara">
    <meta name="author" content="Pesona Dieng">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'dieng-green': '#1B4D3E',
                        'dieng-green-dark': '#0E2E24',
                        'dieng-gold': '#D4A843',
                        'dieng-gold-light': '#F7E7C4',
                        'dieng-coral': '#E85D4E',
                        'dieng-bg': '#F5F0E8',
                        'dieng-muted': '#6B7A74',
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
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,600;0,700;0,800;1,400&display=swap" rel="stylesheet">

    <style>
        .font-playfair { font-family: 'Playfair Display', serif; }
        .font-inter { font-family: 'Inter', sans-serif; }
        .font-cormorant { font-family: 'Cormorant Garamond', serif; }
        
        .glass-nav {
            background: rgba(14, 46, 36, 0.85);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        
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
    </style>
</head>
<body class="font-inter bg-[#FAF9F6] text-gray-800 antialiased overflow-x-hidden">

    <!-- NAVIGATION BAR -->
    <nav class="glass-nav fixed top-0 w-full z-50 py-4 border-b border-white/10" id="main-nav">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-2 group">
                    <div class="w-10 h-10 bg-dieng-green rounded-xl flex items-center justify-center shadow-md transition-transform duration-300 group-hover:rotate-6 border border-white/10">
                        <span class="text-white text-xl"><i class="fa-solid fa-mountain"></i></span>
                    </div>
                    <div class="flex flex-col">
                        <span class="text-xl md:text-2xl font-bold font-playfair tracking-wide text-white transition-colors duration-300" id="nav-logo-text">PESONA DIENG</span>
                        <span class="text-[10px] tracking-widest text-dieng-gold uppercase font-semibold">Banjarnegara</span>
                    </div>
                </a>

                <!-- Back button link -->
                <div class="flex items-center gap-4">
                    <a href="<?php echo e(route('home')); ?>#paket" class="text-white hover:text-dieng-gold transition-colors flex items-center gap-2 text-sm font-medium">
                        <i class="fa-solid fa-arrow-left-long"></i> Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- HERO SECTION -->
    <section class="relative pt-32 pb-20 bg-dieng-green-dark overflow-hidden flex items-center min-h-[40vh]">
        <!-- Background Overlay Image -->
        <div class="absolute inset-0 z-0 opacity-20">
            <img src="<?php echo e(asset($package['image'])); ?>" alt="<?php echo e($package['name']); ?>" class="w-full h-full object-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-t from-dieng-green-dark via-dieng-green-dark/80 to-transparent z-10"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
            <!-- Breadcrumbs -->
            <div class="flex items-center gap-2 text-white/60 text-xs md:text-sm mb-4">
                <a href="<?php echo e(route('home')); ?>" class="hover:text-dieng-gold transition-colors">Home</a>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <a href="<?php echo e(route('home')); ?>#paket" class="hover:text-dieng-gold transition-colors">Paket Wisata</a>
                <i class="fa-solid fa-chevron-right text-[10px]"></i>
                <span class="text-white font-medium"><?php echo e($package['name']); ?></span>
            </div>
            
            <span class="inline-block bg-dieng-gold/20 border border-dieng-gold/30 text-dieng-gold text-xs font-semibold px-3 py-1 rounded-full uppercase tracking-wider mb-3">
                <?php echo e(strtoupper($package['category'])); ?> TOUR
            </span>
            
            <h1 class="text-3xl md:text-5xl font-bold font-playfair text-white tracking-wide leading-tight max-w-3xl">
                <?php echo e($package['name']); ?>

            </h1>
            
            <div class="flex items-center gap-6 mt-4 text-white/80 text-sm">
                <span class="flex items-center gap-2"><i class="fa-solid fa-star text-yellow-400"></i> <b><?php echo e($package['rating']); ?></b> (<?php echo e($package['reviews_count']); ?> Ulasan)</span>
                <span class="flex items-center gap-2"><i class="fa-solid fa-location-dot text-dieng-gold"></i> Wonosobo & Banjarnegara</span>
            </div>
        </div>
    </section>

    <!-- CONTENT SECTION -->
    <section class="py-12 md:py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-start">
                
                <!-- Left Details Column (2 Cols) -->
                <div class="lg:col-span-2 space-y-10">
                    
                    <!-- Overview -->
                    <div class="bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100/80">
                        <h2 class="text-2xl font-bold font-playfair text-gray-900 mb-4">Deskripsi Paket</h2>
                        <p class="text-gray-600 leading-relaxed text-sm md:text-base">
                            <?php echo e($package['description']); ?>

                        </p>
                        
                        <!-- Mini Gallery -->
                        <div class="grid grid-cols-3 gap-3 mt-6">
                            <?php $__currentLoopData = $package['gallery']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $img): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="overflow-hidden rounded-xl aspect-[4/3] bg-gray-100">
                                    <img src="<?php echo e(asset($img)); ?>" alt="Destinasi Wisata" class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <!-- Dynamic Duration Switcher & Information -->
                    <div class="bg-white rounded-3xl p-6 md:p-8 shadow-sm border border-gray-100/80">
                        <h2 class="text-2xl font-bold font-playfair text-gray-900 mb-6">Informasi & Itinerary Rinci</h2>
                        
                        <!-- Duration Tabs -->
                        <div class="flex flex-wrap gap-2.5 mb-8 border-b border-gray-100 pb-5">
                            <?php $__currentLoopData = $package['durations']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $dur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <button 
                                    onclick="switchDuration('<?php echo e($dur['id']); ?>')" 
                                    id="tab-btn-<?php echo e($dur['id']); ?>"
                                    class="duration-tab-btn py-3 px-6 rounded-xl text-sm font-semibold transition-all flex items-center gap-2 border <?php echo e($index === 0 ? 'bg-dieng-green text-white border-dieng-green shadow-md shadow-dieng-green/10' : 'bg-gray-50 text-gray-600 border-gray-200 hover:bg-gray-100'); ?>">
                                    <i class="fa-solid fa-clock text-xs"></i> <?php echo e($dur['label']); ?>

                                </button>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>

                        <!-- Duration Specific Contents -->
                        <?php $__currentLoopData = $package['durations']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $dur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div id="duration-content-<?php echo e($dur['id']); ?>" class="duration-panel space-y-8 <?php echo e($index === 0 ? 'block' : 'hidden'); ?>">
                                
                                <!-- Itinerary Timeline -->
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-2">
                                        <span class="w-8 h-8 rounded-lg bg-dieng-green/10 text-dieng-green flex items-center justify-center"><i class="fa-solid fa-route"></i></span>
                                        Rencana Perjalanan (Itinerary)
                                    </h3>
                                    
                                    <div class="space-y-8 relative before:absolute before:left-3.5 before:top-2 before:bottom-2 before:w-0.5 before:bg-gray-200">
                                        <?php $__currentLoopData = $dur['itinerary']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dayData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="relative pl-9">
                                                <!-- Day Badge -->
                                                <div class="absolute left-0 top-0 w-8 h-8 rounded-full bg-dieng-gold text-white flex items-center justify-center font-bold text-sm shadow-md border-4 border-white">
                                                    <?php echo e($dayData['day']); ?>

                                                </div>
                                                
                                                <div class="bg-gray-50 rounded-2xl p-5 border border-gray-100">
                                                    <h4 class="font-bold text-gray-900 text-base md:text-lg mb-4">Hari <?php echo e($dayData['day']); ?>: <?php echo e($dayData['title']); ?></h4>
                                                    
                                                    <!-- Time events -->
                                                    <div class="space-y-4">
                                                        <?php $__currentLoopData = $dayData['events']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="flex flex-col sm:flex-row sm:items-start gap-1 sm:gap-4 pb-3 border-b border-gray-200/50 last:border-b-0 last:pb-0">
                                                                <span class="text-xs font-bold text-dieng-green bg-dieng-green/5 border border-dieng-green/10 py-1 px-2 rounded-lg whitespace-nowrap self-start">
                                                                    <?php echo e($event['time']); ?>

                                                                </span>
                                                                <p class="text-sm text-gray-600 leading-relaxed font-light">
                                                                    <?php echo e($event['activity']); ?>

                                                                </p>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>

                                <!-- Facilities Matrix (Include & Exclude) -->
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900 mb-5 flex items-center gap-2">
                                        <span class="w-8 h-8 rounded-lg bg-dieng-green/10 text-dieng-green flex items-center justify-center"><i class="fa-solid fa-list-check"></i></span>
                                        Fasilitas Paket
                                    </h3>
                                    
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        <!-- Inclusions -->
                                        <div class="bg-emerald-50/50 rounded-2xl p-5 border border-emerald-100">
                                            <h4 class="font-bold text-emerald-800 text-sm mb-3 flex items-center gap-2">
                                                <i class="fa-solid fa-circle-check text-emerald-600"></i> Yang Termasuk (Include)
                                            </h4>
                                            <ul class="space-y-2.5 text-xs text-gray-600 font-light">
                                                <?php $__currentLoopData = $dur['inclusions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="flex items-start gap-2">
                                                        <i class="fa-solid fa-check text-emerald-600 mt-0.5"></i>
                                                        <span><?php echo e($inc); ?></span>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>

                                        <!-- Exclusions -->
                                        <div class="bg-red-50/50 rounded-2xl p-5 border border-red-100">
                                            <h4 class="font-bold text-red-800 text-sm mb-3 flex items-center gap-2">
                                                <i class="fa-solid fa-circle-xmark text-red-600"></i> Tidak Termasuk (Exclude)
                                            </h4>
                                            <ul class="space-y-2.5 text-xs text-gray-600 font-light">
                                                <?php $__currentLoopData = $dur['exclusions']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $exc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li class="flex items-start gap-2">
                                                        <i class="fa-solid fa-xmark text-red-600 mt-0.5"></i>
                                                        <span><?php echo e($exc); ?></span>
                                                    </li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

                <!-- Right Sidebar Column (Sticky Booking Widget) -->
                <div class="lg:sticky lg:top-28 space-y-6">
                    <div class="bg-white rounded-3xl p-6 md:p-8 shadow-xl border border-gray-100/90 relative overflow-hidden">
                        <!-- Top header -->
                        <div class="absolute top-0 left-0 w-full h-2 bg-dieng-gold"></div>
                        
                        <div class="mb-4">
                            <span class="text-xs text-gray-400 font-light uppercase tracking-wider block">Mulai Dari</span>
                            <div class="flex items-baseline gap-2 mt-1">
                                <span id="price-original" class="text-sm text-gray-400 line-through font-light">
                                    Rp <?php echo e(number_format($package['durations'][0]['original_price'], 0, ',', '.')); ?>

                                </span>
                                <span id="price-discount" class="text-[10px] bg-red-100 text-red-700 px-2 py-0.5 rounded font-semibold">
                                    <?php echo e($package['durations'][0]['discount']); ?>

                                </span>
                            </div>
                            <div class="flex items-baseline gap-1 mt-1">
                                <span id="price-display" class="text-3xl font-black text-dieng-green">
                                    Rp <?php echo e(number_format($package['durations'][0]['price'], 0, ',', '.')); ?>

                                </span>
                                <span id="price-suffix" class="text-xs text-gray-500 font-light">
                                    / <?php echo e($package['slug'] === 'family-fun-dieng' ? 'keluarga' : ($package['slug'] === 'romantic-dieng-honeymoon' ? 'pasangan' : 'pax')); ?>

                                </span>
                            </div>
                        </div>

                        <!-- Form Pemesanan: Tanggal & Peserta -->
                        <div class="space-y-4 pt-4 border-t border-gray-100 mt-4">
                            <div>
                                <label for="booking-date" class="text-xs font-bold text-gray-700 uppercase tracking-wider block mb-2">Tanggal Keberangkatan</label>
                                <input type="date" id="booking-date" onchange="updateBookingWidget()" class="w-full bg-gray-50 border border-gray-200 rounded-2xl px-4 py-3 text-sm focus:outline-none focus:border-dieng-green transition-all" required>
                            </div>
                            
                            <div>
                                <label id="pax-label" class="text-xs font-bold text-gray-700 uppercase tracking-wider block mb-2">Jumlah Peserta</label>
                                <div class="flex items-center justify-between bg-gray-50 border border-gray-200 rounded-2xl p-2">
                                    <button type="button" onclick="decrementPax()" class="w-9 h-9 rounded-xl bg-white border border-gray-200 hover:bg-gray-100 flex items-center justify-center text-gray-600 transition-colors focus:outline-none shadow-sm">
                                        <i class="fa-solid fa-minus text-xs"></i>
                                    </button>
                                    <span id="pax-count" class="font-bold text-base text-gray-900">1</span>
                                    <button type="button" onclick="incrementPax()" class="w-9 h-9 rounded-xl bg-white border border-gray-200 hover:bg-gray-100 flex items-center justify-center text-gray-600 transition-colors focus:outline-none shadow-sm">
                                        <i class="fa-solid fa-plus text-xs"></i>
                                    </button>
                                </div>
                            </div>

                            <!-- Total Price Display -->
                            <div class="bg-dieng-green/5 border border-dieng-green/10 rounded-2xl p-4 flex items-center justify-between mt-5">
                                <div>
                                    <span class="text-[10px] font-bold text-dieng-green uppercase tracking-wider block">Estimasi Total Biaya</span>
                                    <span id="total-price-display" class="text-2xl font-black text-dieng-green mt-0.5 block">
                                        Rp <?php echo e(number_format($package['durations'][0]['price'], 0, ',', '.')); ?>

                                    </span>
                                </div>
                                <span id="total-pax-suffix" class="text-xs text-dieng-green bg-white border border-dieng-green/10 py-1 px-2.5 rounded-lg font-semibold">
                                    1 Pax
                                </span>
                            </div>
                        </div>

                        <!-- Highlights Features of selected duration -->
                        <div class="py-4 border-y border-gray-100 my-5">
                            <span class="text-xs font-bold text-gray-700 uppercase tracking-wider block mb-3">Highlight Fasilitas</span>
                            <ul id="features-list" class="space-y-2">
                                <?php $__currentLoopData = $package['durations'][0]['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="flex items-center gap-2 text-xs text-gray-600 font-light">
                                        <i class="fa-solid fa-circle-check text-dieng-gold"></i> <span><?php echo e($feat); ?></span>
                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>

                        <!-- Security / trust points -->
                        <div class="space-y-3 mb-6 bg-gray-50 rounded-2xl p-4 border border-gray-100">
                            <div class="flex items-center gap-3">
                                <span class="w-7 h-7 rounded-full bg-dieng-green/10 text-dieng-green flex items-center justify-center text-xs"><i class="fa-solid fa-check"></i></span>
                                <span class="text-xs text-gray-700 font-medium">Layanan Driver & Guide Lokal Ramah</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="w-7 h-7 rounded-full bg-dieng-green/10 text-dieng-green flex items-center justify-center text-xs"><i class="fa-solid fa-shield-halved"></i></span>
                                <span class="text-xs text-gray-700 font-medium">Konfirmasi Cepat, DP Ringan</span>
                            </div>
                        </div>

                        <!-- CTA WhatsApp Booking -->
                        <a 
                            id="whatsapp-booking-btn"
                            href="https://wa.me/<?php echo e(env('WHATSAPP_NUMBER', '6281234567890')); ?>?text=<?php echo e(rawurlencode("Halo Pesona Dieng!\n\nSaya ingin memesan paket wisata:\n- *Nama Paket:* " . $package['name'] . "\n- *Durasi:* " . $package['durations'][0]['label'] . "\n- *Harga:* Rp " . number_format($package['durations'][0]['price'], 0, ',', '.') . "/" . ($package['slug'] === 'family-fun-dieng' ? 'keluarga' : ($package['slug'] === 'romantic-dieng-honeymoon' ? 'pasangan' : 'pax')) . "\n\nMohon informasi lebih lanjut dan ketersediaan tanggal.\nTerima kasih!")); ?>" 
                            target="_blank"
                            class="flex items-center justify-center gap-2 w-full bg-[#25D366] hover:bg-[#1ebd50] text-white font-bold py-4 px-4 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-0.5 text-sm uppercase tracking-wider">
                            <i class="fa-brands fa-whatsapp text-lg"></i>
                            Pesan via WhatsApp
                        </a>
                        
                        <p class="text-[10px] text-gray-400 font-light text-center mt-3">
                            Tautan WhatsApp akan otomatis berisi draft format pemesanan Anda.
                        </p>
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
                    <a href="<?php echo e(route('home')); ?>" class="flex items-center gap-2">
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
                        <a href="<?php echo e(route('home')); ?>#beranda" class="hover:text-dieng-gold transition-colors">Beranda</a>
                        <a href="<?php echo e(route('home')); ?>#destinasi" class="hover:text-dieng-gold transition-colors">Destinasi</a>
                        <a href="<?php echo e(route('home')); ?>#paket" class="hover:text-dieng-gold transition-colors">Paket Wisata</a>
                        <a href="<?php echo e(route('home')); ?>#galeri" class="hover:text-dieng-gold transition-colors">Galeri</a>
                        <a href="<?php echo e(route('home')); ?>#tentang" class="hover:text-dieng-gold transition-colors">Tentang Kami</a>
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
                            <a href="https://wa.me/<?php echo e(env('WHATSAPP_NUMBER', '6281234567890')); ?>" class="hover:text-dieng-gold transition-colors">+62 812-3456-7890</a>
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
    <a href="https://wa.me/<?php echo e(env('WHATSAPP_NUMBER', '6281234567890')); ?>?text=<?php echo e(rawurlencode("Halo Pesona Dieng!\n\nSaya ingin bertanya mengenai informasi paket wisata ke Dieng Plateau.\nTerima kasih!")); ?>" 
       target="_blank"
       class="fixed bottom-6 right-6 z-50 bg-[#25D366] hover:bg-[#1ebd50] text-white p-4 rounded-full shadow-lg hover:shadow-2xl transition-all duration-300 hover:scale-110 group pulse-ring"
       aria-label="Chat Admin">
        <i class="fa-brands fa-whatsapp text-2xl relative z-10"></i>
        <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-800 text-white text-xs px-3 py-1.5 rounded-lg opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap shadow-md pointer-events-none">
            Chat Admin
        </span>
    </a>

    <!-- Dynamic Duration Switcher Logic -->
    <script>
        const packageData = <?php echo json_encode($package, 15, 512) ?>;
        const whatsappNumber = "<?php echo e(env('WHATSAPP_NUMBER', '6281234567890')); ?>";
        const suffix = "<?php echo e($package['slug'] === 'family-fun-dieng' ? 'keluarga' : ($package['slug'] === 'romantic-dieng-honeymoon' ? 'pasangan' : 'pax')); ?>";
        let selectedDurationId = "<?php echo e($package['durations'][0]['id']); ?>";
        let paxCount = 1;

        function formatRupiah(num) {
            return 'Rp ' + num.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }

        function getPaxLabel(count) {
            let labelSuffix = suffix;
            if (suffix === 'pax') {
                labelSuffix = 'Pax';
            } else if (suffix === 'keluarga') {
                labelSuffix = 'Keluarga';
            } else if (suffix === 'pasangan') {
                labelSuffix = 'Pasangan';
            }
            return `${count} ${labelSuffix}`;
        }

        // Set min date of date picker to today and default value
        document.addEventListener('DOMContentLoaded', () => {
            const today = new Date().toISOString().split('T')[0];
            const dateInput = document.getElementById('booking-date');
            if (dateInput) {
                dateInput.setAttribute('min', today);
                dateInput.value = today;
            }

            // Update label based on suffix type
            const labelEl = document.getElementById('pax-label');
            if (labelEl) {
                labelEl.innerText = suffix === 'keluarga' ? 'Jumlah Keluarga' : (suffix === 'pasangan' ? 'Jumlah Pasangan' : 'Jumlah Peserta');
            }

            updateBookingWidget();
        });

        function decrementPax() {
            if (paxCount > 1) {
                paxCount--;
                document.getElementById('pax-count').innerText = paxCount;
                updateBookingWidget();
            }
        }

        function incrementPax() {
            paxCount++;
            document.getElementById('pax-count').innerText = paxCount;
            updateBookingWidget();
        }

        function updateBookingWidget() {
            const duration = packageData.durations.find(d => d.id === selectedDurationId);
            if (!duration) return;

            // Calculate total price
            const totalPrice = duration.price * paxCount;

            // Update Total Price display
            document.getElementById('total-price-display').innerText = formatRupiah(totalPrice);
            
            // Update suffix helper
            document.getElementById('total-pax-suffix').innerText = getPaxLabel(paxCount);

            // Get selected date
            const dateInput = document.getElementById('booking-date');
            let dateText = dateInput && dateInput.value ? dateInput.value : '-';
            
            // Format date text to Indonesian style (e.g. 15 Juli 2026)
            if (dateText !== '-') {
                const parts = dateText.split('-');
                if (parts.length === 3) {
                    const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
                    const day = parseInt(parts[2], 10);
                    const month = months[parseInt(parts[1], 10) - 1];
                    const year = parts[0];
                    dateText = `${day} ${month} ${year}`;
                }
            }

            // Update WhatsApp pre-filled link
            const waMessage = `Halo Pesona Dieng!\n\nSaya ingin memesan paket wisata:\n- *Nama Paket:* ${packageData.name}\n- *Durasi:* ${duration.label}\n- *Tanggal Keberangkatan:* ${dateText}\n- *Jumlah Peserta:* ${getPaxLabel(paxCount)}\n- *Total Biaya:* ${formatRupiah(totalPrice)} (${formatRupiah(duration.price)} / ${suffix})\n\nMohon informasi lebih lanjut dan ketersediaan tanggal.\nTerima kasih!`;
            const waUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(waMessage)}`;
            document.getElementById('whatsapp-booking-btn').setAttribute('href', waUrl);
        }

        function switchDuration(durationId) {
            selectedDurationId = durationId;
            const duration = packageData.durations.find(d => d.id === durationId);
            if (!duration) return;

            // 1. Update Tab Buttons styling
            document.querySelectorAll('.duration-tab-btn').forEach(btn => {
                btn.classList.remove('bg-dieng-green', 'text-white', 'border-dieng-green', 'shadow-md', 'shadow-dieng-green/10');
                btn.classList.add('bg-gray-50', 'text-gray-600', 'border-gray-200');
            });
            const activeBtn = document.getElementById('tab-btn-' + durationId);
            if (activeBtn) {
                activeBtn.classList.remove('bg-gray-50', 'text-gray-600', 'border-gray-200');
                activeBtn.classList.add('bg-dieng-green', 'text-white', 'border-dieng-green', 'shadow-md', 'shadow-dieng-green/10');
            }

            // 2. Toggle visible panels
            document.querySelectorAll('.duration-panel').forEach(panel => {
                panel.classList.add('hidden');
                panel.classList.remove('block');
            });
            const activePanel = document.getElementById('duration-content-' + durationId);
            if (activePanel) {
                activePanel.classList.remove('hidden');
                activePanel.classList.add('block');
            }

            // 3. Update Pricing widget values
            document.getElementById('price-display').innerText = formatRupiah(duration.price);
            document.getElementById('price-original').innerText = formatRupiah(duration.original_price);
            document.getElementById('price-discount').innerText = duration.discount;

            // 4. Re-render Highlight features list
            const featuresContainer = document.getElementById('features-list');
            featuresContainer.innerHTML = '';
            duration.features.forEach(feat => {
                const li = document.createElement('li');
                li.className = "flex items-center gap-2 text-xs text-gray-600 font-light";
                li.innerHTML = `<i class="fa-solid fa-circle-check text-dieng-gold"></i> <span>${feat}</span>`;
                featuresContainer.appendChild(li);
            });

            // 5. Update Total and WhatsApp Link
            updateBookingWidget();
        }
    </script>
</body>
</html>
<?php /**PATH I:\wisatadieng\pesona-dieng-laravel\resources\views/paket/show.blade.php ENDPATH**/ ?>