<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PackageController extends Controller
{
    private function getPackagesData()
    {
        return [
            'dieng-sunrise-private' => [
                'slug' => 'dieng-sunrise-private',
                'name' => 'Dieng Sunrise Private Tour',
                'category' => 'private',
                'description' => 'Nikmati keindahan Golden Sunrise Bukit Sikunir dan destinasi ikonik Dieng lainnya secara eksklusif bersama rombongan pribadi Anda. Jadwal fleksibel, privasi terjaga, dan layanan VIP.',
                'rating' => 4.9,
                'reviews_count' => 186,
                'image' => 'images/dieng_sunrise_hero.png',
                'gallery' => [
                    'images/dieng_sunrise_hero.png',
                    'images/candi_arjuna.png',
                    'images/landscape_dieng.png'
                ],
                'durations' => [
                    [
                        'id' => '2d1n',
                        'label' => '2 Hari 1 Malam',
                        'price' => 1200000,
                        'original_price' => 1500000,
                        'discount' => '-20%',
                        'features' => ['Homestay VIP (Private)', 'Makan 4x (Lokal)', 'Jeep Wisata Sikunir', 'Tiket Masuk All-in', 'Private AC Transport', 'Driver & BBM'],
                        'inclusions' => [
                            'Transportasi Private AC Pulang-Pergi',
                            'Driver profesional merangkap Guide',
                            'Bahan Bakar Minyak (BBM) & Parkir',
                            'Akomodasi Homestay VIP 1 Malam (Hot Water, Wi-Fi)',
                            'Makan 4 kali sesuai program wisata',
                            'Tiket masuk semua objek wisata di itinerary',
                            'Sewa Jeep 4x4 untuk trip Golden Sunrise Sikunir',
                            'Dokumentasi standar selama wisata'
                        ],
                        'exclusions' => [
                            'Pengeluaran pribadi di luar program',
                            'Tips untuk Driver/Guide (Sukarela)',
                            'Asuransi perjalanan',
                            'Makan di luar jadwal program'
                        ],
                        'itinerary' => [
                            [
                                'day' => 1,
                                'title' => 'Kedatangan & Jelajah Destinasi Utama',
                                'events' => [
                                    ['time' => '08:00 - 09:00', 'activity' => 'Penjemputan di Meeting Point (Stasiun/Bandara/Hotel Yogyakarta/Purwokerto)'],
                                    ['time' => '09:00 - 12:00', 'activity' => 'Perjalanan menuju Dataran Tinggi Dieng Plateau via jalur panorama'],
                                    ['time' => '12:00 - 13:00', 'activity' => 'Tiba di Dieng, makan siang bersama sajian khas lokal kuliner hangat'],
                                    ['time' => '13:30 - 15:00', 'activity' => 'Mengunjungi Kompleks Candi Arjuna (Candi Hindu tertua di Jawa)'],
                                    ['time' => '15:15 - 16:30', 'activity' => 'Eksplorasi Kawah Sikidang (Melihat aktivitas kawah vulkanik aktif yang unik)'],
                                    ['time' => '17:00 - 18:00', 'activity' => 'Check-in di Homestay VIP, istirahat dan adaptasi suhu udara dingin'],
                                    ['time' => '19:00 - 20:30', 'activity' => 'Makan malam hangat di homestay / resto lokal, dilanjutkan waktu santai']
                                ]
                            ],
                            [
                                'day' => 2,
                                'title' => 'Golden Sunrise & Telaga Warna',
                                'events' => [
                                    ['time' => '03:30 - 04:00', 'activity' => 'Morning call, persiapan trekking Bukit Sikunir dengan Jeep 4x4'],
                                    ['time' => '04:00 - 04:45', 'activity' => 'Perjalanan ke kaki bukit Sikunir dan memulai soft trekking (+/- 800 meter)'],
                                    ['time' => '05:00 - 06:15', 'activity' => 'Menikmati fenomena Golden Sunrise Bukit Sikunir dengan latar 4 gunung megah'],
                                    ['time' => '07:30 - 08:30', 'activity' => 'Kembali ke homestay, makan pagi (sarapan) dan mandi air hangat'],
                                    ['time' => '09:30 - 11:30', 'activity' => 'Eksplorasi Telaga Warna, Telaga Pengilon, dan Kompleks Goa Alam'],
                                    ['time' => '12:00 - 13:00', 'activity' => 'Check-out homestay dan makan siang bersama kuliner Mi Ongklok khas Dieng'],
                                    ['time' => '13:30 - 14:30', 'activity' => 'Belanja oleh-oleh khas (Carica, Kopi Arabika, Kacang Dieng)'],
                                    ['time' => '14:30 - 18:00', 'activity' => 'Perjalanan kembali menuju Yogyakarta/Purwokerto. Tour Selesai!']
                                ]
                            ]
                        ]
                    ],
                    [
                        'id' => '3d2n',
                        'label' => '3 Hari 2 Malam',
                        'price' => 1750000,
                        'original_price' => 2200000,
                        'discount' => '-20%',
                        'features' => ['Homestay VIP (Private)', 'Makan 7x (Lokal)', 'Jeep Wisata Sikunir', 'Tiket Masuk All-in', 'Private AC Transport', 'Trip Tambahan Batu Ratapan Angin & DPT'],
                        'inclusions' => [
                            'Transportasi Private AC Pulang-Pergi',
                            'Driver profesional merangkap Guide',
                            'Bahan Bakar Minyak (BBM) & Parkir',
                            'Akomodasi Homestay VIP 2 Malam (Hot Water, Wi-Fi)',
                            'Makan 7 kali sesuai program wisata',
                            'Tiket masuk semua objek wisata termasuk Batu Angin & DPT',
                            'Sewa Jeep 4x4 untuk trip Golden Sunrise Sikunir',
                            'Dokumentasi foto premium (DSLR/Mirrorless)',
                            'Welcome drink khas purwaceng hangat'
                        ],
                        'exclusions' => [
                            'Pengeluaran pribadi di luar program',
                            'Tips untuk Driver/Guide (Sukarela)',
                            'Asuransi perjalanan',
                            'Makan di luar jadwal program'
                        ],
                        'itinerary' => [
                            [
                                'day' => 1,
                                'title' => 'Kedatangan & Wisata Sejarah Budaya',
                                'events' => [
                                    ['time' => '08:00 - 09:00', 'activity' => 'Penjemputan rombongan di Meeting Point Jogja/Purwokerto'],
                                    ['time' => '09:00 - 12:00', 'activity' => 'Perjalanan menuju dataran tinggi Dieng Plateau'],
                                    ['time' => '12:00 - 13:00', 'activity' => 'Makan siang kuliner khas lokal Dieng'],
                                    ['time' => '13:30 - 15:30', 'activity' => 'Mengunjungi Candi Arjuna & Candi Bima'],
                                    ['time' => '15:45 - 17:00', 'activity' => 'Nonton film dokumenter sejarah Dieng di Dieng Plateau Theater (DPT)'],
                                    ['time' => '17:15 - 18:00', 'activity' => 'Check-in di Homestay VIP, menikmati welcome drink'],
                                    ['time' => '19:00 - 20:30', 'activity' => 'Makan malam hangat prasmanan di homestay']
                                ]
                            ],
                            [
                                'day' => 2,
                                'title' => 'Sunrise Sikunir, Kawah & Batu Pandang',
                                'events' => [
                                    ['time' => '03:30 - 04:00', 'activity' => 'Morning call, berkumpul menuju Sikunir menggunakan Jeep Wisata'],
                                    ['time' => '04:00 - 06:15', 'activity' => 'Trekking & menyaksikan keindahan Golden Sunrise Sikunir'],
                                    ['time' => '07:30 - 08:30', 'activity' => 'Sarapan pagi hangat di homestay'],
                                    ['time' => '09:30 - 11:30', 'activity' => 'Eksplorasi Kawah Sikidang yang legendaris'],
                                    ['time' => '12:00 - 13:00', 'activity' => 'Makan siang menu sehat nusantara'],
                                    ['time' => '13:30 - 15:30', 'activity' => 'Mendaki ke Batu Pandang Ratapan Angin (spot view Telaga Warna dari atas bukit)'],
                                    ['time' => '16:00 - 17:30', 'activity' => 'Santai sore menikmati kebun teh Tambi yang asri'],
                                    ['time' => '19:00 - 20:30', 'activity' => 'Makan malam khas iga bakar / sajian hangat lokal']
                                ]
                            ],
                            [
                                'day' => 3,
                                'title' => 'Telaga & Belanja Oleh-Oleh',
                                'events' => [
                                    ['time' => '07:30 - 08:30', 'activity' => 'Sarapan pagi dan persiapan check-out homestay'],
                                    ['time' => '09:00 - 11:00', 'activity' => 'Mengunjungi Telaga Warna & Telaga Pengilon dari tepi danau'],
                                    ['time' => '11:15 - 12:30', 'activity' => 'Pusat belanja carica, purwaceng, kentang Dieng, dan cinderamata'],
                                    ['time' => '12:30 - 13:30', 'activity' => 'Makan siang kuliner khas Mi Ongklok legendaris'],
                                    ['time' => '13:30 - 17:30', 'activity' => 'Perjalanan kepulangan menuju Jogja/Purwokerto. Sampai jumpa kembali!']
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'open-trip-dieng-weekend' => [
                'slug' => 'open-trip-dieng-weekend',
                'name' => 'Open Trip Dieng Weekend',
                'category' => 'open',
                'description' => 'Gabung bersama travelers lainnya dalam Open Trip hemat akhir pekan. Sempurna bagi solo traveler atau pasangan yang ingin mencari teman baru sambil menikmati panorama ajaib Dieng Plateau dengan biaya sangat bersahabat.',
                'rating' => 4.8,
                'reviews_count' => 312,
                'image' => 'images/open_trip_weekend.png',
                'gallery' => [
                    'images/open_trip_weekend.png',
                    'images/candi_arjuna.png',
                    'images/landscape_dieng.png'
                ],
                'durations' => [
                    [
                        'id' => '2d1n',
                        'label' => '2 Hari 1 Malam',
                        'price' => 850000,
                        'original_price' => 1100000,
                        'discount' => '-22%',
                        'features' => ['Sharing Homestay (2-3 orang/kamar)', 'Makan 3x', 'AC Transport Pariwisata', 'Tour Leader Profesional', 'Tiket Sikunir & Arjuna', 'Dokumentasi Shared'],
                        'inclusions' => [
                            'Transportasi AC Pariwisata penjemputan Jogja (PP)',
                            'Akomodasi Homestay standar (Sharing Room 2-3 pax/kamar, Hot Water)',
                            'Makan 3 kali prasmanan lokal',
                            'Tiket masuk objek wisata (Sikunir, Candi Arjuna, Kawah Sikidang)',
                            'Layanan Tour Leader yang berpengalaman',
                            'Dokumentasi foto bersama (Shared link Google Drive)'
                        ],
                        'exclusions' => [
                            'Makan & minum di luar program',
                            'Pengeluaran pribadi lainnya',
                            'Tips Tour Leader & Driver (Sukarela)',
                            'Sewa Jeep (jika trek Sikunir memerlukan Jeep akibat regulasi lokal)'
                        ],
                        'itinerary' => [
                            [
                                'day' => 1,
                                'title' => 'Titik Kumpul & Eksplorasi Candi Arjuna',
                                'events' => [
                                    ['time' => '07:30 - 08:30', 'activity' => 'Kumpul di Meeting Point Jogja (Stasiun Tugu / Bandara YIA)'],
                                    ['time' => '08:30 - 12:30', 'activity' => 'Perjalanan darat Jogja - Dieng Plateau, perkenalan sesama anggota trip'],
                                    ['time' => '12:30 - 13:30', 'activity' => 'Tiba di Dieng, makan siang lokal dan check-in Homestay sharing'],
                                    ['time' => '14:00 - 15:30', 'activity' => 'Mengunjungi Kompleks Candi Arjuna, sesi foto grup ceria'],
                                    ['time' => '15:45 - 17:00', 'activity' => 'Eksplorasi Kawah Sikidang & jembatan kayu estetik'],
                                    ['time' => '19:00 - 20:30', 'activity' => 'Makan malam hangat di homestay dan sesi ramah tamah (akrab-akrab)']
                                ]
                            ],
                            [
                                'day' => 2,
                                'title' => 'Golden Sunrise Bukit Sikunir & Telaga Warna',
                                'events' => [
                                    ['time' => '03:30 - 04:00', 'activity' => 'Morning call, persiapan mendaki bukit Sikunir'],
                                    ['time' => '04:00 - 06:30', 'activity' => 'Trekking & berburu Golden Sunrise Sikunir bersama rombongan'],
                                    ['time' => '07:30 - 08:30', 'activity' => 'Sarapan pagi hangat di homestay'],
                                    ['time' => '09:30 - 11:30', 'activity' => 'Mengunjungi Telaga Warna & Goa Alam Dieng'],
                                    ['time' => '12:00 - 13:00', 'activity' => 'Check-out homestay & makan siang kuliner khas lokal'],
                                    ['time' => '13:30 - 14:30', 'activity' => 'Singgah di toko oleh-oleh khas Dieng'],
                                    ['time' => '14:30 - 18:30', 'activity' => 'Perjalanan kembali menuju Jogja. Sampai berjumpa di trip berikutnya!']
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'family-fun-dieng' => [
                'slug' => 'family-fun-dieng',
                'name' => 'Family Fun Dieng',
                'category' => 'family',
                'description' => 'Liburan keluarga santai dan penuh edukasi alam. Didesain khusus dengan rute landai yang sangat ramah anak-anak serta lansia, fasilitas hotel ramah keluarga, serta kendaraan pribadi yang nyaman.',
                'rating' => 5.0,
                'reviews_count' => 84,
                'image' => 'images/landscape_dieng.png',
                'gallery' => [
                    'images/landscape_dieng.png',
                    'images/candi_arjuna.png',
                    'images/open_trip_weekend.png'
                ],
                'durations' => [
                    [
                        'id' => '3d2n',
                        'label' => '3 Hari 2 Malam',
                        'price' => 2500000,
                        'original_price' => 2900000,
                        'discount' => '-14%',
                        'features' => ['Family Hotel Akomodasi', 'Makan 7x (All In)', 'Private Car (Innova/Hiace)', 'Aktivitas Edukasi Anak', 'Free Tiket Semua Wisata', 'Snack & Mineral Box'],
                        'inclusions' => [
                            'Transportasi Private AC (Innova Reborn / Toyota Hiace)',
                            'Driver profesional bersertifikat pariwisata',
                            'Akomodasi Hotel 2 Malam (Family Room, Air Hangat)',
                            'Makan 7 kali dengan menu variatif ramah anak-anak',
                            'Tiket masuk semua objek wisata (termasuk Dieng Park & DPT)',
                            'Pemandu wisata khusus keluarga (ramah & edukatif)',
                            'Snack Box & Air Mineral botol harian',
                            'Sewa Jeep 4x4 keluarga untuk sunrise Sikunir'
                        ],
                        'exclusions' => [
                            'Kebutuhan belanja pribadi keluarga',
                            'Makan di luar menu paket yang disepakati',
                            'Tips sukarela crew pariwisata'
                        ],
                        'itinerary' => [
                            [
                                'day' => 1,
                                'title' => 'Penjemputan Nyaman & Check-in Hotel',
                                'events' => [
                                    ['time' => '09:00 - 10:00', 'activity' => 'Penjemputan di Jogja/Semarang/Purwokerto menggunakan mobil keluarga premium'],
                                    ['time' => '10:00 - 13:00', 'activity' => 'Perjalanan santai menuju Dieng dengan snack & istirahat fleksibel'],
                                    ['time' => '13:00 - 14:00', 'activity' => 'Makan siang bersama keluarga di restoran bernuansa alam'],
                                    ['time' => '14:30 - 16:30', 'activity' => 'Check-in di Hotel, waktu santai bersama anak-anak di taman hotel'],
                                    ['time' => '18:30 - 20:00', 'activity' => 'Makan malam hangat di resto hotel']
                                ]
                            ],
                            [
                                'day' => 2,
                                'title' => 'Tamasya Alam Ringan & Sejarah',
                                'events' => [
                                    ['time' => '04:00 - 06:30', 'activity' => 'Melihat Golden Sunrise Sikunir (Naik Jeep keluarga langsung ke basecamp, trekking landai)'],
                                    ['time' => '08:00 - 09:30', 'activity' => 'Sarapan pagi sehat di hotel'],
                                    ['time' => '10:00 - 12:00', 'activity' => 'Mengunjungi Kompleks Candi Arjuna & bermain di taman rerumputan luas'],
                                    ['time' => '12:30 - 13:30', 'activity' => 'Makan siang bersama sajian sup hangat khas'],
                                    ['time' => '14:00 - 16:00', 'activity' => 'Menonton film edukasi vulkanologi di Dieng Plateau Theater yang nyaman'],
                                    ['time' => '16:15 - 17:30', 'activity' => 'Berfoto bersama keluarga dengan background Telaga Warna di Batu Ratapan Angin'],
                                    ['time' => '19:00 - 20:30', 'activity' => 'Makan malam barbeque keluarga khusus']
                                ]
                            ],
                            [
                                'day' => 3,
                                'title' => 'Edukasi Kawah & Kepulangan',
                                'events' => [
                                    ['time' => '08:00 - 09:00', 'activity' => 'Sarapan pagi dan menikmati udara pegunungan segar'],
                                    ['time' => '09:30 - 11:00', 'activity' => 'Eksplorasi Kawah Sikidang (melihat belerang mendidih dari jembatan kayu yang aman)'],
                                    ['time' => '11:30 - 12:30', 'activity' => 'Makan siang mi ongklok khas Dieng bersama keluarga'],
                                    ['time' => '12:30 - 13:30', 'activity' => 'Belanja makanan ringan khas anak (carica buah)'],
                                    ['time' => '14:00 - 18:00', 'activity' => 'Perjalanan kepulangan keluarga kembali ke titik awal. Tour Selesai!']
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'dieng-adventure-trekking' => [
                'slug' => 'dieng-adventure-trekking',
                'name' => 'Dieng Adventure Trekking',
                'category' => 'adventure',
                'description' => 'Tantangan mendaki Puncak Gunung Prau via jalur legendaris Patak Banteng. Menyaksikan samudra awan dan pemandangan gunung kembar Jawa Tengah secara 360 derajat di pagi hari. Cocok untuk pecinta alam.',
                'rating' => 4.9,
                'reviews_count' => 143,
                'image' => 'images/open_trip_weekend.png',
                'gallery' => [
                    'images/open_trip_weekend.png',
                    'images/landscape_dieng.png',
                    'images/dieng_sunrise_hero.png'
                ],
                'durations' => [
                    [
                        'id' => '1d',
                        'label' => '1 Hari (Full Day)',
                        'price' => 450000,
                        'original_price' => 550000,
                        'discount' => '-18%',
                        'features' => ['Guide Trekking Berlisensi', 'Makan 1x (Puncak)', 'Peralatan Camping Standar', 'P3K & Safety Gear', 'Tiket Gunung Prau', 'Porter Bersama'],
                        'inclusions' => [
                            'Simaksi / Tiket Masuk pendakian Gunung Prau',
                            'Pemandu Gunung (Mountain Guide) berlisensi',
                            'Peralatan kelompok (Tenda istirahat, perlengkapan masak gunung)',
                            'Makan 1 kali hangat di puncak gunung',
                            'Air mineral dan minuman hangat (teh/kopi/jahe)',
                            'Peralatan P3K standar keselamatan pendakian',
                            'Porter kelompok untuk membawa logistik bersama'
                        ],
                        'exclusions' => [
                            'Transportasi dari kota asal ke Basecamp Patak Banteng',
                            'Perlengkapan pribadi pendaki (Jaket tebal, sepatu gunung, sleeping bag)',
                            'Porter pribadi (jika ingin barang pribadi dibawakan)',
                            'Tips guide (sukarela)'
                        ],
                        'itinerary' => [
                            [
                                'day' => 1,
                                'title' => 'Pendakian Gunung Prau 1 Hari',
                                'events' => [
                                    ['time' => '00:30 - 01:00', 'activity' => 'Berkumpul di Basecamp Patak Banteng Dieng, pendaftaran simaksi'],
                                    ['time' => '01:00 - 01:30', 'activity' => 'Briefing teknis pendakian dan pembagian perlengkapan kelompok'],
                                    ['time' => '01:30 - 04:30', 'activity' => 'Memulai pendakian malam hari melintasi Pos 1 hingga Pos 3 Bukit Prau'],
                                    ['time' => '04:30 - 05:00', 'activity' => 'Tiba di area Puncak Gunung Prau, mendirikan tenda istirahat sementara'],
                                    ['time' => '05:00 - 06:15', 'activity' => 'Menikmati fenomena samudra awan dan Golden Sunrise dengan view Gunung Sindoro-Sumbing'],
                                    ['time' => '07:00 - 08:30', 'activity' => 'Makan pagi hangat dan minum kopi/teh di puncak bukit'],
                                    ['time' => '08:30 - 10:00', 'activity' => 'Eksplorasi puncak bukit teletubbies dan berfoto ria'],
                                    ['time' => '10:00 - 12:30', 'activity' => 'Perjalanan turun kembali menuju Basecamp Patak Banteng'],
                                    ['time' => '12:30 - 13:30', 'activity' => 'Tiba di basecamp, membersihkan diri, makan siang santai di warung lokal. Tour Selesai!']
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'romantic-dieng-honeymoon' => [
                'slug' => 'romantic-dieng-honeymoon',
                'name' => 'Romantic Dieng Honeymoon',
                'category' => 'private',
                'description' => 'Ciptakan momen bulan madu tak terlupakan berdua pasangan dalam belaian hawa dingin berkabut romantis Dieng Plateau. Lengkap dengan dekorasi kamar khusus, makan malam romantis, dan couple photoshoot.',
                'rating' => 4.9,
                'reviews_count' => 48,
                'image' => 'images/dieng_sunrise_hero.png',
                'gallery' => [
                    'images/dieng_sunrise_hero.png',
                    'images/candi_arjuna.png',
                    'images/landscape_dieng.png'
                ],
                'durations' => [
                    [
                        'id' => '2d1n',
                        'label' => '2 Hari 1 Malam',
                        'price' => 1800000,
                        'original_price' => 2100000,
                        'discount' => '-14%',
                        'features' => ['Kamar VIP Dekorasi Romantis', 'Makan 4x (Candlelight Dinner)', 'Private Driver & Car', 'Couple Photoshoot', 'Welcome Edelweiss Bouquet', 'Tiket Semua Wisata'],
                        'inclusions' => [
                            'Transportasi penjemputan mobil privat mewah berdua',
                            'Driver ramah bertindak sebagai asisten foto',
                            'Akomodasi Kamar Honeymoon VIP (Dekorasi bunga & lilin hangat)',
                            'Buket bunga edelweiss selamat datang',
                            'Makan 4 kali termasuk 1x Candlelight Dinner romantis',
                            'Tiket masuk objek wisata eksklusif',
                            'Dokumentasi khusus foto pasangan (Couple Photoshoot)'
                        ],
                        'exclusions' => [
                            'Kebutuhan belanja pribadi pasangan',
                            'Tips sukarela asisten/driver',
                            'Makan di luar menu program paket'
                        ],
                        'itinerary' => [
                            [
                                'day' => 1,
                                'title' => 'Penyambutan Manis & Makan Malam Romantis',
                                'events' => [
                                    ['time' => '09:00 - 12:00', 'activity' => 'Penjemputan privat di Jogja, berkendara menuju Dieng Plateau'],
                                    ['time' => '12:00 - 13:00', 'activity' => 'Tiba di Dieng, makan siang privat bersama pasangan'],
                                    ['time' => '13:30 - 15:30', 'activity' => 'Mengunjungi Telaga Warna yang indah berdua, menikmati keasrian alam'],
                                    ['time' => '16:00 - 17:00', 'activity' => 'Check-in di Kamar Honeymoon VIP dengan dekorasi romantis menyambut Anda'],
                                    ['time' => '19:00 - 21:00', 'activity' => 'Candlelight Dinner romantis berdua ditemani hangatnya sajian kuliner eksklusif']
                                ]
                            ],
                            [
                                'day' => 2,
                                'title' => 'Sunrise Kenangan & Sesi Foto Pasangan',
                                'events' => [
                                    ['time' => '04:00 - 06:30', 'activity' => 'Menikmati Golden Sunrise berdua di spot Bukit Sikunir dengan Jeep Wisata'],
                                    ['time' => '08:00 - 09:30', 'activity' => 'Sarapan pagi hangat berdua di homestay'],
                                    ['time' => '10:00 - 12:00', 'activity' => 'Sesi couple photoshoot di Candi Arjuna berlatar kabut tipis romantis'],
                                    ['time' => '12:30 - 13:30', 'activity' => 'Makan siang romantis dan check-out kamar'],
                                    ['time' => '14:00 - 18:00', 'activity' => 'Perjalanan kepulangan romantis kembali menuju Jogja. Tour Selesai!']
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'dieng-cultural-heritage' => [
                'slug' => 'dieng-cultural-heritage',
                'name' => 'Dieng Cultural & Heritage',
                'category' => 'family',
                'description' => 'Jelajahi warisan sejarah peradaban Hindu kuno di tanah Jawa. Pahami arsitektur megah Candi Arjuna, sejarah Kerajaan Kalingga, legenda anak berambut gimbal Dieng, dan kisah purbakala di Museum Kailasa.',
                'rating' => 4.7,
                'reviews_count' => 67,
                'image' => 'images/candi_arjuna.png',
                'gallery' => [
                    'images/candi_arjuna.png',
                    'images/landscape_dieng.png',
                    'images/dieng_sunrise_hero.png'
                ],
                'durations' => [
                    [
                        'id' => '1d',
                        'label' => '1 Hari (Half Day)',
                        'price' => 350000,
                        'original_price' => 450000,
                        'discount' => '-22%',
                        'features' => ['Guide Sejarah Berlisensi', 'Makan 1x (Tradisional)', 'Tiket Kompleks Arjuna', 'Tiket Museum Kailasa', 'Transport Lokal Nyaman', 'Air Mineral'],
                        'inclusions' => [
                            'Transportasi lokal pariwisata selama tour',
                            'Tiket masuk objek wisata (Candi Arjuna, Museum Kailasa, Kawah Sikidang)',
                            'Pemandu Sejarah (Local Historian Guide) berlisensi resmi',
                            'Makan siang kuliner tradisional Dieng',
                            'Air mineral botol dingin/hangat',
                            'Buku saku panduan sejarah Dieng'
                        ],
                        'exclusions' => [
                            'Transportasi menuju kota Banjarnegara/Wonosobo/Dieng',
                            'Tips untuk pemandu sejarah (sukarela)',
                            'Belanja oleh-oleh pribadi'
                        ],
                        'itinerary' => [
                            [
                                'day' => 1,
                                'title' => 'Tour Sejarah & Budaya Dieng',
                                'events' => [
                                    ['time' => '08:00 - 08:30', 'activity' => 'Bertemu dengan pemandu sejarah di Meeting Point Candi Arjuna'],
                                    ['time' => '08:30 - 10:30', 'activity' => 'Menyusuri Kompleks Candi Arjuna, Candi Setyaki, dan Candi Gatotkaca dengan penjelasan arkeologis mendalam'],
                                    ['time' => '10:30 - 12:00', 'activity' => 'Mengunjungi Museum Kailasa, mengamati prasasti kuno dan artefak bersejarah Jawa Kuno'],
                                    ['time' => '12:00 - 13:00', 'activity' => 'Makan siang kuliner khas tradisional Dieng tempo dulu'],
                                    ['time' => '13:30 - 15:00', 'activity' => 'Eksplorasi Kawah Sikidang dan memahami hubungannya dengan kepercayaan dewa-dewi lokal kuno'],
                                    ['time' => '15:15 - 16:00', 'activity' => 'Waktu diskusi santai sambil menikmati sajian teh hangat purwaceng. Tour Selesai!']
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];
    }

    public function index()
    {
        $packages = $this->getPackagesData();
        return view('welcome', compact('packages'));
    }

    public function show($slug)
    {
        $packages = $this->getPackagesData();

        if (!isset($packages[$slug])) {
            abort(404, 'Paket Wisata tidak ditemukan');
        }

        $package = $packages[$slug];
        return view('paket.show', compact('package'));
    }
}
