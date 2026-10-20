<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mejeng Auto | Profil Perusahaan & Showroom Eksklusif</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                fontFamily: {
                    sans: ['"Plus Jakarta Sans"', 'sans-serif'],
                },
                colors: {
                    brand: {
                        50: '#fff1f2',
                        100: '#ffe4e6',
                        500: '#f43f5e',
                        600: '#e11d48',
                        900: '#881337',
                        950: '#4c0519',
                    },
                    surface: '#09090b',
                },
                animation: {
                    'marquee': 'marquee 25s linear infinite',
                    'blob': 'blob 7s infinite',
                },
                keyframes: {
                    marquee: {
                        '0%': {
                            transform: 'translateX(0%)'
                        },
                        '100%': {
                            transform: 'translateX(-100%)'
                        },
                    },
                    blob: {
                        '0%': {
                            transform: 'translate(0px, 0px) scale(1)'
                        },
                        '33%': {
                            transform: 'translate(30px, -50px) scale(1.1)'
                        },
                        '66%': {
                            transform: 'translate(-20px, 20px) scale(0.9)'
                        },
                        '100%': {
                            transform: 'translate(0px, 0px) scale(1)'
                        },
                    }
                }
            }
        }
    }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #09090b;
    }

    ::-webkit-scrollbar-thumb {
        background: #27272a;
        border-radius: 9999px;
    }
    </style>
</head>

<body class="bg-zinc-50 text-zinc-900 font-sans antialiased selection:bg-brand-600 selection:text-white" x-data="{ 
        mobileMenuOpen: false
    }">

    <!-- TOP BAR -->
    <div class="bg-surface text-zinc-300 py-2 text-xs font-medium hidden md:block">
        <div class="max-w-7xl mx-auto px-6 lg:px-8 flex justify-between items-center">
            <div class="flex items-center gap-6">
                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                        </path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg> Jl. Otomotif Raya No. 99, Jakarta</span>
                <span class="flex items-center gap-2"><svg class="w-4 h-4 text-brand-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg> Senin - Minggu: 08.00 - 20.00</span>
            </div>
            <div class="flex items-center gap-4">
                <a href="{{ url('/help') }}" class="hover:text-white transition">Bantuan</a>
                <a href="{{ url('/careers') }}" class="hover:text-white transition">Karir</a>
                <a href="{{ url('/promotions') }}"
                    class="text-brand-500 font-bold hover:text-brand-400 transition">Tentang Kami</a>
            </div>
        </div>
    </div>

    <!-- MAIN NAVBAR -->
    <header
        class="sticky top-0 z-50 bg-white/80 backdrop-blur-xl border-b border-zinc-200/50 shadow-sm transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="h-20 flex items-center justify-between">
                <a href="{{ url('/') }}" class="flex items-center gap-3 group">
                    <div
                        class="w-10 h-10 bg-surface text-white rounded-xl flex items-center justify-center font-bold text-xl group-hover:bg-brand-600 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="font-extrabold text-xl tracking-tight text-surface">MEJENG AUTO</h1>
                    </div>
                </a>
                <nav class="hidden lg:flex items-center gap-8 text-sm font-bold text-zinc-600">
                    <a href="#home" class="text-surface border-b-2 border-brand-600 pb-1">Beranda</a>
                    <a href="#tentang"
                        class="hover:text-surface transition-colors pb-1 border-b-2 border-transparent hover:border-brand-600">Tentang
                        Kami</a>
                    <a href="#visi-misi"
                        class="hover:text-surface transition-colors pb-1 border-b-2 border-transparent hover:border-brand-600">Visi
                        & Misi</a>
                    <a href="#keunggulan"
                        class="hover:text-surface transition-colors pb-1 border-b-2 border-transparent hover:border-brand-600">Keunggulan</a>
                    <a href="#kontak"
                        class="hover:text-surface transition-colors pb-1 border-b-2 border-transparent hover:border-brand-600">Hubungi
                        Kami</a>
                </nav>
                <div class="flex items-center gap-4">
                    <a href="{{ url('/login') }}"
                        class="hidden md:flex items-center gap-2 font-bold text-sm text-zinc-600 hover:text-surface transition">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg> Masuk
                    </a>
                    <a href="{{ url('/login') }}"
                        class="bg-surface text-white px-6 py-2.5 rounded-full text-sm font-bold hover:bg-brand-600 hover:shadow-lg hover:shadow-brand-500/30 hover:-translate-y-0.5 transition-all duration-300">Admin
                        Portal</a>
                </div>
            </div>
        </div>
    </header>

    <main id="home">
        <!-- HERO SECTION -->
        <section class="relative pt-20 pb-32 lg:pt-32 lg:pb-48 overflow-hidden bg-surface">
            <div
                class="absolute top-0 left-1/4 w-96 h-96 bg-brand-600/30 rounded-full mix-blend-screen filter blur-[100px] animate-blob">
            </div>
            <div
                class="absolute top-0 right-1/4 w-96 h-96 bg-blue-600/30 rounded-full mix-blend-screen filter blur-[100px] animate-blob animation-delay-2000">
            </div>

            <div class="max-w-7xl mx-auto px-6 lg:px-8 relative z-10 text-center">
                <div
                    class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/25 rounded-full px-5 py-2 text-sm font-medium text-white mb-8">
                    <span class="w-2 h-2 rounded-full bg-brand-500 animate-pulse"></span> Pelopor Ekosistem & Showroom
                    Otomotif Modern
                </div>
                <h2 class="text-5xl lg:text-7xl font-extrabold tracking-tight text-white mb-6 leading-[1.1]">
                    Membangun Standar Baru <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-400 to-orange-400">Industri
                        Otomotif Indonesia.</span>
                </h2>
                <p class="text-lg text-zinc-400 max-w-2xl mx-auto mb-12">
                    Mejeng Auto hadir dengan integritas, transparansi, dan komitmen tinggi untuk menghadirkan pengalaman
                    terbaik dalam dunia kendaraan eksklusif dan terpercaya.
                </p>
                <div class="flex justify-center gap-4">
                    <a href="#tentang"
                        class="bg-brand-600 hover:bg-brand-500 text-white font-bold px-8 py-4 rounded-2xl shadow-lg transition">Pelajari
                        Lebih Lanjut</a>
                    <a href="#kontak"
                        class="bg-white/10 hover:bg-white/20 text-white font-bold px-8 py-4 rounded-2xl backdrop-blur-md transition border border-white/20">Hubungi
                        Tim Kami</a>
                </div>
            </div>
        </section>

        <!-- BRAND MARQUEE -->
        <section class="py-10 border-b border-zinc-200 bg-white overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 lg:px-8 mb-6">
                <p class="text-center text-sm font-bold text-zinc-400 uppercase tracking-widest">Mitra Resmi & Merek
                    Global Terpercaya</p>
            </div>
            <div class="relative flex overflow-x-hidden group">
                <div class="py-4 animate-marquee whitespace-nowrap flex gap-16 items-center px-8">
                    <span class="text-3xl font-black text-zinc-300">TOYOTA</span>
                    <span class="text-3xl font-black text-zinc-300">HONDA</span>
                    <span class="text-3xl font-black text-zinc-300">BMW</span>
                    <span class="text-3xl font-black text-zinc-300">MERCEDES-BENZ</span>
                    <span class="text-3xl font-black text-zinc-300">HYUNDAI</span>
                    <span class="text-3xl font-black text-zinc-300">MITSUBISHI</span>
                    <span class="text-3xl font-black text-zinc-300">WULING</span>
                </div>
            </div>
        </section>

        <!-- ABOUT COMPANY SECTION -->
        <section id="tentang" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span
                            class="text-brand-600 font-extrabold uppercase tracking-widest text-xs bg-brand-50 border border-brand-200 px-4 py-1.5 rounded-full">Tentang
                            Mejeng Auto</span>
                        <h2 class="text-4xl font-black text-surface tracking-tight mt-4 mb-6">Dedikasi Tinggi untuk
                            Kualitas dan Kepuasan Pelanggan</h2>
                        <p class="text-zinc-600 font-medium leading-relaxed mb-6">
                            Didirikan dengan visi untuk merevolusi cara masyarakat Indonesia berinteraksi dengan dunia
                            otomotif, <strong>Mejeng Auto</strong> berfokus pada penyediaan kendaraan berkualitas tinggi
                            yang telah melalui proses inspeksi ketat serta pelayanan berstandar profesional.
                        </p>
                        <p class="text-zinc-600 font-medium leading-relaxed mb-8">
                            Kami percaya bahwa setiap pelanggan layak mendapatkan transparansi penuh, kenyamanan
                            maksimal, serta rasa aman dalam setiap transaksi maupun layanan yang kami berikan.
                        </p>
                        <div class="grid grid-cols-2 gap-6 border-t border-zinc-200 pt-8">
                            <div>
                                <h3 class="text-3xl font-black text-brand-600 mb-1">10.000+</h3>
                                <p class="text-sm font-bold text-zinc-500">Pelanggan Puas</p>
                            </div>
                            <div>
                                <h3 class="text-3xl font-black text-brand-600 mb-1">150+</h3>
                                <p class="text-sm font-bold text-zinc-500">Titik Inspeksi Ketat</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        <div class="aspect-[4/3] rounded-3xl overflow-hidden shadow-2xl border border-zinc-200">
                            <img src="https://images.unsplash.com/photo-1503376710775-684c31169828?auto=format&fit=crop&w=800&q=80"
                                alt="Showroom Mejeng Auto" class="w-full h-full object-cover">
                        </div>
                        <div
                            class="absolute -bottom-6 -left-6 bg-surface text-white p-6 rounded-3xl shadow-xl hidden sm:block">
                            <p class="text-xl font-black text-brand-400">100% Terverifikasi</p>
                            <p class="text-xs text-zinc-400 mt-1">Legalitas & Kondisi Unit Dijamin</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- VISI & MISI SECTION -->
        <section id="visi-misi" class="py-24 bg-zinc-100">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span
                        class="text-brand-600 font-extrabold uppercase tracking-widest text-xs bg-brand-50 border border-brand-200 px-4 py-1.5 rounded-full">Landasan
                        Kami</span>
                    <h2 class="text-4xl font-black text-surface tracking-tight mt-3 mb-4">Visi & Misi Perusahaan</h2>
                    <p class="text-zinc-500 font-medium">Komitmen jangka panjang kami dalam memajukan industri dan
                        memberikan nilai tambah bagi masyarakat.</p>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div
                        class="bg-white p-10 rounded-[2.5rem] shadow-xl border border-zinc-200 flex flex-col justify-between">
                        <div>
                            <div
                                class="w-14 h-14 bg-brand-50 rounded-2xl flex items-center justify-center text-brand-600 font-black text-2xl mb-6">
                                V</div>
                            <h3 class="text-2xl font-black text-surface mb-4">Visi Utama</h3>
                            <p class="text-zinc-600 leading-relaxed font-medium">
                                Menjadi platform dan showroom otomotif terdepan, terpercaya, serta paling inovatif di
                                Indonesia yang mengedepankan standar kualitas tertinggi dan kepuasan pelanggan secara
                                paripurna.
                            </p>
                        </div>
                    </div>
                    <div
                        class="bg-surface text-white p-10 rounded-[2.5rem] shadow-xl border border-zinc-800 flex flex-col justify-between relative overflow-hidden">
                        <div class="absolute -right-16 -top-16 w-48 h-48 bg-brand-600/20 rounded-full blur-2xl"></div>
                        <div class="relative z-10">
                            <div
                                class="w-14 h-14 bg-zinc-800 rounded-2xl flex items-center justify-center text-brand-400 font-black text-2xl mb-6">
                                M</div>
                            <h3 class="text-2xl font-black mb-4">Misi Perusahaan</h3>
                            <ul class="space-y-3 text-zinc-300 font-medium text-sm">
                                <li class="flex items-start gap-3">
                                    <span class="text-brand-500 font-bold">•</span> Menyediakan unit kendaraan pilihan
                                    yang telah melalui proses seleksi dan inspeksi mendalam.
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-brand-500 font-bold">•</span> Memberikan pelayanan transparan,
                                    jujur, serta berorientasi pada kebutuhan dan kenyamanan klien.
                                </li>
                                <li class="flex items-start gap-3">
                                    <span class="text-brand-500 font-bold">•</span> Terus berinovasi mengikuti
                                    perkembangan teknologi untuk kemudahan akses layanan otomotif.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- KEUNGGULAN SECTION -->
        <section id="keunggulan" class="py-24 bg-white">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="text-center max-w-2xl mx-auto mb-16">
                    <span
                        class="text-brand-600 font-extrabold uppercase tracking-widest text-xs bg-brand-50 border border-brand-200 px-4 py-1.5 rounded-full">Mengapa
                        Mejeng Auto</span>
                    <h2 class="text-4xl font-black text-surface tracking-tight mt-3 mb-4">Nilai Lebih yang Kami Tawarkan
                    </h2>
                    <p class="text-zinc-500 font-medium">Standar kualitas profesional yang membedakan kami dari yang
                        lain.</p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    <div class="bg-zinc-50 p-8 rounded-3xl border border-zinc-200">
                        <div
                            class="w-12 h-12 bg-surface text-white rounded-2xl flex items-center justify-center font-bold text-lg mb-6">
                            🛡️</div>
                        <h3 class="text-xl font-black text-surface mb-3">Inspeksi Ketat</h3>
                        <p class="text-zinc-600 text-sm leading-relaxed font-medium">Setiap unit diperiksa secara
                            menyeluruh pada 150 titik komponen vital untuk memastikan performa optimal.</p>
                    </div>
                    <div class="bg-zinc-50 p-8 rounded-3xl border border-zinc-200">
                        <div
                            class="w-12 h-12 bg-surface text-white rounded-2xl flex items-center justify-center font-bold text-lg mb-6">
                            🤝</div>
                        <h3 class="text-xl font-black text-surface mb-3">Transparansi Penuh</h3>
                        <p class="text-zinc-600 text-sm leading-relaxed font-medium">Riwayat kendaraan disajikan secara
                            terbuka tanpa ada informasi yang ditutup-tutupi demi kenyamanan Anda.</p>
                    </div>
                    <div class="bg-zinc-50 p-8 rounded-3xl border border-zinc-200">
                        <div
                            class="w-12 h-12 bg-surface text-white rounded-2xl flex items-center justify-center font-bold text-lg mb-6">
                            ⭐</div>
                        <h3 class="text-xl font-black text-surface mb-3">Pelayanan Prima</h3>
                        <p class="text-zinc-600 text-sm leading-relaxed font-medium">Didukung oleh tim profesional
                            berpengalaman yang siap membantu dan mendampingi kebutuhan konsultasi Anda.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- KONTAK / LOKASI SECTION -->
        <section id="kontak" class="py-24 bg-surface text-white">
            <div class="max-w-7xl mx-auto px-6 lg:px-8">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <div>
                        <span class="text-brand-500 font-extrabold uppercase tracking-widest text-xs">Hubungi
                            Kami</span>
                        <h2 class="text-4xl font-black mt-2 mb-6">Kunjungi Showroom Kami</h2>
                        <p class="text-zinc-400 font-medium leading-relaxed mb-8">
                            Ingin berkonsultasi langsung atau melihat koleksi eksklusif kami? Tim kami dengan senang
                            hati menyambut kedatangan Anda di showroom utama Mejeng Auto.
                        </p>
                        <div class="space-y-4 text-zinc-300 font-medium">
                            <p class="flex items-center gap-3">📍 Jl. Otomotif Raya No. 99, Jakarta Selatan</p>
                            <p class="flex items-center gap-3">📞 (021) 555-8899 / +62 812-3456-7890</p>
                            <p class="flex items-center gap-3">✉️ info@mejengauto.co.id</p>
                            <p class="flex items-center gap-3">⏰ Senin - Minggu: 08.00 - 20.00 WIB</p>
                        </div>
                    </div>
                    <div class="bg-zinc-900 border border-zinc-800 p-8 lg:p-10 rounded-3xl">
                        <h3 class="text-2xl font-black mb-6">Kirim Pesan Singkat</h3>
                        <form class="space-y-4"
                            onsubmit="event.preventDefault(); alert('Terima kasih! Pesan Anda telah terkirim.');">
                            <div>
                                <label class="block text-xs font-bold text-zinc-400 uppercase mb-2">Nama Lengkap</label>
                                <input type="text" required
                                    class="w-full bg-zinc-950 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-brand-600 font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-zinc-400 uppercase mb-2">Nomor WhatsApp /
                                    Email</label>
                                <input type="text" required
                                    class="w-full bg-zinc-950 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-brand-600 font-medium">
                            </div>
                            <div>
                                <label class="block text-xs font-bold text-zinc-400 uppercase mb-2">Pesan atau
                                    Pertanyaan</label>
                                <textarea rows="4" required
                                    class="w-full bg-zinc-950 border border-zinc-800 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-brand-600 font-medium"></textarea>
                            </div>
                            <button type="submit"
                                class="w-full bg-brand-600 hover:bg-brand-500 text-white font-bold py-4 rounded-xl transition shadow-lg">Kirim
                                Pesan</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- MEGA FOOTER -->
    <footer class="bg-zinc-50 pt-20 pb-10 border-t border-zinc-200">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                <div class="lg:col-span-2">
                    <a href="{{ url('/') }}" class="flex items-center gap-3 mb-6">
                        <div
                            class="w-10 h-10 bg-surface text-white rounded-xl flex items-center justify-center font-bold text-xl">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <span class="font-black text-2xl text-surface tracking-tight">MEJENG AUTO</span>
                    </a>
                    <p class="text-zinc-500 max-w-sm font-medium leading-relaxed">
                        Platform profil perusahaan dan informasi ekosistem otomotif modern terpercaya di Indonesia.
                    </p>
                </div>
                <div>
                    <h3 class="font-bold text-surface mb-6 uppercase tracking-wider text-sm">Navigasi Utama</h3>
                    <ul class="space-y-4 font-medium text-zinc-500">
                        <li><a href="#home" class="hover:text-brand-600 transition">Beranda</a></li>
                        <li><a href="#tentang" class="hover:text-brand-600 transition">Tentang Kami</a></li>
                        <li><a href="#visi-misi" class="hover:text-brand-600 transition">Visi & Misi</a></li>
                        <li><a href="#keunggulan" class="hover:text-brand-600 transition">Keunggulan</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="font-bold text-surface mb-6 uppercase tracking-wider text-sm">Portal & Akses</h3>
                    <ul class="space-y-4 font-medium text-zinc-500">
                        <li><a href="{{ url('/login') }}"
                                class="hover:text-brand-600 transition font-bold text-surface">Login User / Admin</a>
                        </li>
                        <li><a href="#kontak" class="hover:text-brand-600 transition">Hubungi Kami</a></li>
                    </ul>
                </div>
            </div>
            <div
                class="border-t border-zinc-200 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm font-medium text-zinc-500">
                <p>&copy; 2026 Mejeng Auto Indonesia. Hak Cipta Dilindungi.</p>
                <div class="flex gap-6"><a href="#" class="hover:text-surface transition">Kebijakan Privasi</a><a
                        href="#" class="hover:text-surface transition">Syarat & Ketentuan</a></div>
            </div>
        </div>
    </footer>

</body>

</html>