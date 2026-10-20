<!DOCTYPE html>
<html lang="id" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#09090b">
    <title>Layanan Servis Mobil | Mejeng Auto</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brand: {
                        50: '#fff1f2',
                        100: '#ffe4e6',
                        400: '#fb7185',
                        500: '#f43f5e',
                        600: '#e11d48',
                        700: '#be123c',
                    },
                    surface: '#09090b',
                    card: '#121216'
                },
                fontFamily: {
                    sans: ['"Plus Jakarta Sans"', 'sans-serif']
                }
            }
        }
    }
    </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
    [x-cloak] {
        display: none !important;
    }

    html {
        scroll-padding-top: 100px;
    }

    body {
        font-family: "Plus Jakarta Sans", sans-serif;
    }

    .hero-grid {
        background-image: linear-gradient(rgba(255, 255, 255, .035) 1px, transparent 1px),
            linear-gradient(90deg, rgba(255, 255, 255, .035) 1px, transparent 1px);
        background-size: 42px 42px;
    }

    .glass {
        background: rgba(18, 18, 22, .78);
        backdrop-filter: blur(18px);
    }

    input,
    select,
    textarea {
        color-scheme: dark;
    }
    </style>
</head>

<body class="bg-surface text-zinc-100 antialiased selection:bg-brand-600 selection:text-white">

    <!-- NAVBAR -->
    <header class="sticky top-0 z-50 border-b border-white/10 bg-surface/90 backdrop-blur-xl">
        <div class="mx-auto flex h-[76px] max-w-7xl items-center justify-between px-5 sm:px-8">

            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <div
                    class="flex h-10 w-10 items-center justify-center rounded-xl bg-brand-600 text-white shadow-lg shadow-brand-600/20">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div>
                    <div class="text-base font-extrabold tracking-tight text-white">MEJENG AUTO</div>
                    <div class="mt-0.5 text-[9px] font-bold uppercase tracking-[.22em] text-brand-400">
                        Automotive Care
                    </div>
                </div>
            </a>

            <nav class="hidden items-center gap-7 text-xs font-bold text-zinc-400 lg:flex">
                <a href="{{ route('dashboard.user') }}" class="transition hover:text-white">Akun Saya</a>
                <a href="#layanan" class="transition hover:text-white">Layanan</a>
                <a href="#paket" class="transition hover:text-white">Paket Servis</a>
                <a href="#alur" class="transition hover:text-white">Alur Servis</a>
                <a href="#booking" class="transition hover:text-white">Booking</a>
            </nav>

            <div class="flex items-center gap-3">
                <a href="{{ url('/beli-mobil') }}"
                    class="hidden text-xs font-bold text-zinc-300 transition hover:text-white sm:inline-flex">
                    Beli Mobil
                </a>
                <a href="#booking"
                    class="rounded-xl bg-brand-600 px-4 py-3 text-xs font-extrabold text-white transition hover:bg-brand-500">
                    Booking Servis
                </a>
            </div>
        </div>
    </header>

    <main>

        <!-- HERO -->
        <section class="relative overflow-hidden border-b border-white/5">
            <div class="hero-grid absolute inset-0 opacity-60"></div>
            <div
                class="pointer-events-none absolute -left-40 top-10 h-96 w-96 rounded-full bg-brand-600/15 blur-[120px]">
            </div>
            <div
                class="pointer-events-none absolute -right-40 bottom-0 h-96 w-96 rounded-full bg-orange-500/10 blur-[120px]">
            </div>

            <div class="relative mx-auto grid max-w-7xl items-center gap-14 px-5 py-20 sm:px-8 lg:grid-cols-2 lg:py-28">

                <div>
                    <div
                        class="mb-7 inline-flex items-center gap-2 rounded-full border border-brand-500/20 bg-brand-500/10 px-4 py-2 text-[10px] font-extrabold uppercase tracking-[.15em] text-brand-400">
                        <span class="h-2 w-2 rounded-full bg-brand-500"></span>
                        Automotive Service Center
                    </div>

                    <h1
                        class="max-w-2xl text-4xl font-extrabold leading-[1.12] tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Performa Mobil Terjaga,
                        <span class="text-brand-500">Perjalanan Lebih Tenang.</span>
                    </h1>

                    <p class="mt-6 max-w-xl text-sm leading-7 text-zinc-400 sm:text-base">
                        Rawat kendaraan Anda dengan layanan servis berkala, pemeriksaan komponen,
                        perawatan eksterior, dan perbaikan kendaraan. Pilih layanan yang sesuai
                        kebutuhan lalu ajukan jadwal servis dengan mudah.
                    </p>

                    <div class="mt-9 flex flex-wrap gap-3">
                        <a href="#booking"
                            class="inline-flex items-center gap-2 rounded-xl bg-brand-600 px-6 py-4 text-sm font-extrabold text-white shadow-lg shadow-brand-600/20 transition hover:-translate-y-0.5 hover:bg-brand-500">
                            Jadwalkan Servis
                            <span aria-hidden="true">→</span>
                        </a>
                        <a href="#layanan"
                            class="rounded-xl border border-zinc-700 bg-zinc-900/70 px-6 py-4 text-sm font-bold text-white transition hover:border-zinc-500 hover:bg-zinc-800">
                            Jelajahi Layanan
                        </a>
                    </div>

                    <div class="mt-10 flex flex-wrap gap-x-7 gap-y-3 text-xs text-zinc-400">
                        <span class="flex items-center gap-2">
                            <span class="text-brand-500">✓</span> Pilihan layanan beragam
                        </span>
                        <span class="flex items-center gap-2">
                            <span class="text-brand-500">✓</span> Informasi harga transparan
                        </span>
                        <span class="flex items-center gap-2">
                            <span class="text-brand-500">✓</span> Jadwal melalui booking
                        </span>
                    </div>
                </div>

                <div class="relative">
                    <div class="absolute -inset-4 rounded-[2rem] bg-brand-600/10 blur-2xl"></div>

                    <div class="relative overflow-hidden rounded-[2rem] border border-white/10 bg-card p-3 shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?auto=format&fit=crop&w=1200&q=85"
                            alt="Area perawatan kendaraan di bengkel"
                            class="h-[300px] w-full rounded-[1.5rem] object-cover sm:h-[390px]">

                        <div class="absolute bottom-7 left-7 right-7 glass rounded-2xl border border-white/10 p-5">
                            <div class="flex items-center justify-between gap-4">
                                <div>
                                    <p class="text-[10px] font-bold uppercase tracking-[.18em] text-brand-400">
                                        Mejeng Auto Service
                                    </p>
                                    <h2 class="mt-2 text-lg font-extrabold text-white">
                                        Perawatan untuk Setiap Perjalanan
                                    </h2>
                                    <p class="mt-1 text-xs text-zinc-400">
                                        Pilih layanan dan rencanakan kunjungan Anda.
                                    </p>
                                </div>
                                <div
                                    class="hidden h-12 w-12 shrink-0 items-center justify-center rounded-xl bg-brand-600 text-xl sm:flex">
                                    🔧
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- INTRO -->
        <section class="border-b border-white/5 bg-zinc-950">
            <div class="mx-auto grid max-w-7xl gap-8 px-5 py-10 sm:px-8 md:grid-cols-3">
                <div class="flex gap-4">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/10 text-xl">
                        🛠️</div>
                    <div>
                        <h2 class="text-sm font-extrabold text-white">Perawatan Berkala</h2>
                        <p class="mt-1 text-xs leading-6 text-zinc-500">Membantu menjaga kondisi dan performa kendaraan.
                        </p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/10 text-xl">
                        🔍</div>
                    <div>
                        <h2 class="text-sm font-extrabold text-white">Pemeriksaan Kendaraan</h2>
                        <p class="mt-1 text-xs leading-6 text-zinc-500">Pemeriksaan komponen berdasarkan kebutuhan
                            kendaraan.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/10 text-xl">
                        📅</div>
                    <div>
                        <h2 class="text-sm font-extrabold text-white">Jadwal Lebih Terencana</h2>
                        <p class="mt-1 text-xs leading-6 text-zinc-500">Ajukan jadwal terlebih dahulu melalui formulir
                            booking.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- LAYANAN -->
        <section id="layanan" class="scroll-mt-24 py-20 sm:py-24">
            <div class="mx-auto max-w-7xl px-5 sm:px-8">
                <div class="mb-12 flex flex-col justify-between gap-5 md:flex-row md:items-end">
                    <div>
                        <p class="text-[10px] font-extrabold uppercase tracking-[.22em] text-brand-400">Apa yang Kami
                            Kerjakan</p>
                        <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                            Layanan Perawatan Mobil
                        </h2>
                        <p class="mt-3 max-w-xl text-sm leading-6 text-zinc-400">
                            Pilih layanan berdasarkan kebutuhan kendaraan. Harga akhir dapat menyesuaikan
                            jenis mobil, komponen, dan hasil pemeriksaan.
                        </p>
                    </div>
                    <a href="#booking" class="text-xs font-extrabold text-brand-400 transition hover:text-brand-300">
                        Konsultasikan kebutuhan Anda →
                    </a>
                </div>

                <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">

                    <article
                        class="group rounded-2xl border border-zinc-800 bg-card p-6 transition hover:-translate-y-1 hover:border-brand-500/40">
                        <div
                            class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-2xl">
                            🛢️</div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-400">Maintenance</p>
                        <h3 class="mt-2 text-lg font-extrabold text-white">Servis Berkala</h3>
                        <p class="mt-3 min-h-[60px] text-xs leading-6 text-zinc-400">
                            Pemeriksaan rutin, penggantian oli, filter, serta pengecekan komponen penting sesuai
                            kebutuhan.
                        </p>
                        <div class="mt-6 flex items-center justify-between border-t border-zinc-800 pt-5">
                            <div>
                                <p class="text-[10px] text-zinc-500">Estimasi mulai</p>
                                <p class="mt-1 text-sm font-extrabold text-white">Rp350.000</p>
                            </div>
                            <a href="#booking" data-service="Servis Berkala"
                                class="choose-service rounded-lg border border-zinc-700 px-4 py-2.5 text-xs font-bold text-white transition hover:border-brand-500 hover:bg-brand-600">
                                Pilih Layanan
                            </a>
                        </div>
                    </article>

                    <article
                        class="group rounded-2xl border border-zinc-800 bg-card p-6 transition hover:-translate-y-1 hover:border-brand-500/40">
                        <div
                            class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-2xl">
                            ⚙️</div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-400">Performance</p>
                        <h3 class="mt-2 text-lg font-extrabold text-white">Tune Up Mesin</h3>
                        <p class="mt-3 min-h-[60px] text-xs leading-6 text-zinc-400">
                            Pemeriksaan performa mesin dan sistem pendukung untuk membantu menemukan masalah kendaraan.
                        </p>
                        <div class="mt-6 flex items-center justify-between border-t border-zinc-800 pt-5">
                            <div>
                                <p class="text-[10px] text-zinc-500">Estimasi mulai</p>
                                <p class="mt-1 text-sm font-extrabold text-white">Rp400.000</p>
                            </div>
                            <a href="#booking" data-service="Tune Up Mesin"
                                class="choose-service rounded-lg border border-zinc-700 px-4 py-2.5 text-xs font-bold text-white transition hover:border-brand-500 hover:bg-brand-600">
                                Pilih Layanan
                            </a>
                        </div>
                    </article>

                    <article
                        class="group rounded-2xl border border-zinc-800 bg-card p-6 transition hover:-translate-y-1 hover:border-brand-500/40">
                        <div
                            class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-2xl">
                            🛞</div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-400">Handling</p>
                        <h3 class="mt-2 text-lg font-extrabold text-white">Spooring & Balancing</h3>
                        <p class="mt-3 min-h-[60px] text-xs leading-6 text-zinc-400">
                            Pemeriksaan dan penyelarasan roda untuk membantu menjaga kestabilan serta kenyamanan
                            berkendara.
                        </p>
                        <div class="mt-6 flex items-center justify-between border-t border-zinc-800 pt-5">
                            <div>
                                <p class="text-[10px] text-zinc-500">Estimasi mulai</p>
                                <p class="mt-1 text-sm font-extrabold text-white">Rp250.000</p>
                            </div>
                            <a href="#booking" data-service="Spooring & Balancing"
                                class="choose-service rounded-lg border border-zinc-700 px-4 py-2.5 text-xs font-bold text-white transition hover:border-brand-500 hover:bg-brand-600">
                                Pilih Layanan
                            </a>
                        </div>
                    </article>

                    <article
                        class="group rounded-2xl border border-zinc-800 bg-card p-6 transition hover:-translate-y-1 hover:border-brand-500/40">
                        <div
                            class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-2xl">
                            🧪</div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-400">Diagnostics</p>
                        <h3 class="mt-2 text-lg font-extrabold text-white">Diagnostik Kendaraan</h3>
                        <p class="mt-3 min-h-[60px] text-xs leading-6 text-zinc-400">
                            Pemeriksaan awal untuk membantu mengidentifikasi indikasi gangguan pada sistem kendaraan.
                        </p>
                        <div class="mt-6 flex items-center justify-between border-t border-zinc-800 pt-5">
                            <div>
                                <p class="text-[10px] text-zinc-500">Estimasi mulai</p>
                                <p class="mt-1 text-sm font-extrabold text-white">Rp200.000</p>
                            </div>
                            <a href="#booking" data-service="Diagnostik Kendaraan"
                                class="choose-service rounded-lg border border-zinc-700 px-4 py-2.5 text-xs font-bold text-white transition hover:border-brand-500 hover:bg-brand-600">
                                Pilih Layanan
                            </a>
                        </div>
                    </article>

                    <article
                        class="group rounded-2xl border border-zinc-800 bg-card p-6 transition hover:-translate-y-1 hover:border-brand-500/40">
                        <div
                            class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-2xl">
                            ✨</div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-400">Appearance</p>
                        <h3 class="mt-2 text-lg font-extrabold text-white">Detailing & Perawatan Cat</h3>
                        <p class="mt-3 min-h-[60px] text-xs leading-6 text-zinc-400">
                            Perawatan kebersihan interior dan eksterior untuk menjaga penampilan kendaraan.
                        </p>
                        <div class="mt-6 flex items-center justify-between border-t border-zinc-800 pt-5">
                            <div>
                                <p class="text-[10px] text-zinc-500">Estimasi mulai</p>
                                <p class="mt-1 text-sm font-extrabold text-white">Rp500.000</p>
                            </div>
                            <a href="#booking" data-service="Detailing & Perawatan Cat"
                                class="choose-service rounded-lg border border-zinc-700 px-4 py-2.5 text-xs font-bold text-white transition hover:border-brand-500 hover:bg-brand-600">
                                Pilih Layanan
                            </a>
                        </div>
                    </article>

                    <article
                        class="group rounded-2xl border border-zinc-800 bg-card p-6 transition hover:-translate-y-1 hover:border-brand-500/40">
                        <div
                            class="mb-6 flex h-12 w-12 items-center justify-center rounded-xl bg-brand-500/10 text-2xl">
                            🔩</div>
                        <p class="text-[10px] font-bold uppercase tracking-widest text-brand-400">Repair</p>
                        <h3 class="mt-2 text-lg font-extrabold text-white">Perbaikan Kendaraan</h3>
                        <p class="mt-3 min-h-[60px] text-xs leading-6 text-zinc-400">
                            Penanganan masalah mesin, pengereman, suspensi, dan komponen lainnya berdasarkan hasil
                            pemeriksaan.
                        </p>
                        <div class="mt-6 flex items-center justify-between border-t border-zinc-800 pt-5">
                            <div>
                                <p class="text-[10px] text-zinc-500">Harga</p>
                                <p class="mt-1 text-sm font-extrabold text-white">Sesuai Pemeriksaan</p>
                            </div>
                            <a href="#booking" data-service="Perbaikan Kendaraan"
                                class="choose-service rounded-lg border border-zinc-700 px-4 py-2.5 text-xs font-bold text-white transition hover:border-brand-500 hover:bg-brand-600">
                                Konsultasi
                            </a>
                        </div>
                    </article>

                </div>

                <p class="mt-5 text-[11px] leading-5 text-zinc-500">
                    * Harga di atas merupakan contoh estimasi untuk tampilan awal website. Sesuaikan dengan daftar harga
                    resmi bengkel sebelum digunakan untuk transaksi.
                </p>
            </div>
        </section>

        <!-- PAKET SERVIS -->
        <section id="paket" class="scroll-mt-24 border-y border-white/5 bg-zinc-950 py-20 sm:py-24">
            <div class="mx-auto max-w-7xl px-5 sm:px-8">
                <div class="mx-auto mb-12 max-w-2xl text-center">
                    <p class="text-[10px] font-extrabold uppercase tracking-[.22em] text-brand-400">Pilihan Perawatan
                    </p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                        Paket Servis Kendaraan
                    </h2>
                    <p class="mt-4 text-sm leading-7 text-zinc-400">
                        Pilih paket sesuai kebutuhan kendaraan Anda. Rincian pekerjaan dan biaya akhir
                        dikonfirmasi setelah pemeriksaan jika diperlukan.
                    </p>
                </div>

                <div class="grid gap-6 lg:grid-cols-3">

                    <article class="flex flex-col rounded-2xl border border-zinc-800 bg-card p-7">
                        <span
                            class="w-fit rounded-full bg-zinc-800 px-3 py-1.5 text-[10px] font-extrabold uppercase tracking-widest text-zinc-300">
                            Basic Care
                        </span>
                        <h3 class="mt-5 text-xl font-extrabold text-white">Paket Ringan</h3>
                        <p class="mt-2 text-xs leading-6 text-zinc-400">Untuk kebutuhan perawatan rutin kendaraan.</p>
                        <div class="mt-6 text-3xl font-extrabold text-white">
                            Rp450.000
                        </div>
                        <p class="mt-1 text-[10px] text-zinc-500">Estimasi harga awal</p>

                        <ul class="mt-7 flex-1 space-y-3 text-xs text-zinc-300">
                            <li>✓ Pemeriksaan oli mesin</li>
                            <li>✓ Pemeriksaan filter udara</li>
                            <li>✓ Pemeriksaan rem dan ban</li>
                            <li>✓ Pemeriksaan visual kendaraan</li>
                        </ul>

                        <a href="#booking" data-service="Paket Ringan"
                            class="choose-service mt-8 block rounded-xl border border-zinc-700 py-3.5 text-center text-xs font-extrabold text-white transition hover:border-brand-500 hover:bg-brand-600">
                            Pilih Paket
                        </a>
                    </article>

                    <article
                        class="relative flex flex-col rounded-2xl border border-brand-600/70 bg-gradient-to-b from-brand-950/40 to-card p-7 shadow-xl shadow-brand-950/30">
                        <span
                            class="absolute -top-3 right-6 rounded-full bg-brand-600 px-4 py-1.5 text-[9px] font-extrabold uppercase tracking-widest text-white">
                            Pilihan Populer
                        </span>
                        <span
                            class="w-fit rounded-full bg-brand-500/10 px-3 py-1.5 text-[10px] font-extrabold uppercase tracking-widest text-brand-400">
                            Complete Care
                        </span>
                        <h3 class="mt-5 text-xl font-extrabold text-white">Paket Komplit</h3>
                        <p class="mt-2 text-xs leading-6 text-zinc-400">Untuk pemeriksaan dan perawatan lebih
                            menyeluruh.</p>
                        <div class="mt-6 text-3xl font-extrabold text-white">
                            Rp1.150.000
                        </div>
                        <p class="mt-1 text-[10px] text-zinc-500">Estimasi harga awal</p>

                        <ul class="mt-7 flex-1 space-y-3 text-xs text-zinc-200">
                            <li>✓ Pemeriksaan paket ringan</li>
                            <li>✓ Pemeriksaan sistem transmisi</li>
                            <li>✓ Pemeriksaan mesin lanjutan</li>
                            <li>✓ Pemeriksaan roda dan suspensi</li>
                            <li>✓ Laporan hasil pemeriksaan</li>
                        </ul>

                        <a href="#booking" data-service="Paket Komplit"
                            class="choose-service mt-8 block rounded-xl bg-brand-600 py-3.5 text-center text-xs font-extrabold text-white transition hover:bg-brand-500">
                            Pilih Paket
                        </a>
                    </article>

                    <article class="flex flex-col rounded-2xl border border-zinc-800 bg-card p-7">
                        <span
                            class="w-fit rounded-full bg-zinc-800 px-3 py-1.5 text-[10px] font-extrabold uppercase tracking-widest text-zinc-300">
                            Premium Care
                        </span>
                        <h3 class="mt-5 text-xl font-extrabold text-white">Paket Premium</h3>
                        <p class="mt-2 text-xs leading-6 text-zinc-400">Untuk kebutuhan perawatan khusus berdasarkan
                            tipe kendaraan.</p>
                        <div class="mt-6 text-3xl font-extrabold text-white">
                            Rp2.450.000
                        </div>
                        <p class="mt-1 text-[10px] text-zinc-500">Estimasi harga awal</p>

                        <ul class="mt-7 flex-1 space-y-3 text-xs text-zinc-300">
                            <li>✓ Pemeriksaan kondisi menyeluruh</li>
                            <li>✓ Pemeriksaan sistem pengereman</li>
                            <li>✓ Perawatan interior pilihan</li>
                            <li>✓ Konsultasi perawatan lanjutan</li>
                        </ul>

                        <a href="#booking" data-service="Paket Premium"
                            class="choose-service mt-8 block rounded-xl border border-zinc-700 py-3.5 text-center text-xs font-extrabold text-white transition hover:border-brand-500 hover:bg-brand-600">
                            Pilih Paket
                        </a>
                    </article>

                </div>
            </div>
        </section>

        <!-- ALUR -->
        <section id="alur" class="scroll-mt-24 py-20 sm:py-24">
            <div class="mx-auto max-w-7xl px-5 sm:px-8">
                <div class="mb-12 text-center">
                    <p class="text-[10px] font-extrabold uppercase tracking-[.22em] text-brand-400">Proses Layanan</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                        Alur Servis yang Mudah
                    </h2>
                    <p class="mt-3 text-sm text-zinc-400">Dari pengajuan jadwal sampai kendaraan selesai ditangani.</p>
                </div>

                <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
                    <div class="rounded-2xl border border-zinc-800 bg-card p-6">
                        <span class="text-3xl font-extrabold text-brand-500">01</span>
                        <h3 class="mt-4 text-sm font-extrabold text-white">Pilih Layanan</h3>
                        <p class="mt-2 text-xs leading-6 text-zinc-400">Tentukan jenis perawatan atau paket yang sesuai.
                        </p>
                    </div>
                    <div class="rounded-2xl border border-zinc-800 bg-card p-6">
                        <span class="text-3xl font-extrabold text-brand-500">02</span>
                        <h3 class="mt-4 text-sm font-extrabold text-white">Isi Formulir</h3>
                        <p class="mt-2 text-xs leading-6 text-zinc-400">Masukkan informasi kontak, kendaraan, dan jadwal
                            yang diinginkan.</p>
                    </div>
                    <div class="rounded-2xl border border-zinc-800 bg-card p-6">
                        <span class="text-3xl font-extrabold text-brand-500">03</span>
                        <h3 class="mt-4 text-sm font-extrabold text-white">Konfirmasi Jadwal</h3>
                        <p class="mt-2 text-xs leading-6 text-zinc-400">Tunggu konfirmasi dari petugas sebelum datang ke
                            bengkel.</p>
                    </div>
                    <div class="rounded-2xl border border-zinc-800 bg-card p-6">
                        <span class="text-3xl font-extrabold text-brand-500">04</span>
                        <h3 class="mt-4 text-sm font-extrabold text-white">Pemeriksaan Mobil</h3>
                        <p class="mt-2 text-xs leading-6 text-zinc-400">Petugas memeriksa kendaraan dan menjelaskan
                            pekerjaan yang diperlukan.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- BOOKING FORM -->
        <section id="booking" class="scroll-mt-24 border-t border-white/5 bg-zinc-950 py-20 sm:py-24">
            <div class="mx-auto grid max-w-7xl gap-10 px-5 sm:px-8 lg:grid-cols-[.8fr_1.2fr]">

                <div class="lg:pt-5">
                    <p class="text-[10px] font-extrabold uppercase tracking-[.22em] text-brand-400">Service Appointment
                    </p>
                    <h2 class="mt-4 text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl">
                        Jadwalkan Servis Kendaraan Anda
                    </h2>
                    <p class="mt-5 text-sm leading-7 text-zinc-400">
                        Lengkapi formulir untuk mengajukan jadwal servis. Pengajuan belum dianggap
                        terkonfirmasi sampai petugas memberikan konfirmasi.
                    </p>

                    <div class="mt-8 space-y-5">
                        <div class="flex gap-4">
                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/10 text-lg">
                                📅</div>
                            <div>
                                <h3 class="text-sm font-extrabold text-white">Pilih tanggal kedatangan</h3>
                                <p class="mt-1 text-xs leading-5 text-zinc-500">Gunakan tanggal yang sesuai dengan
                                    rencana kunjungan Anda.</p>
                            </div>
                        </div>
                        <div class="flex gap-4">
                            <div
                                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xl bg-brand-500/10 text-lg">
                                📱</div>
                            <div>
                                <h3 class="text-sm font-extrabold text-white">Pastikan nomor kontak benar</h3>
                                <p class="mt-1 text-xs leading-5 text-zinc-500">Petugas memerlukan informasi kontak
                                    untuk menindaklanjuti pengajuan.</p>
                            </div>
                        </div>
                        <div class="rounded-2xl border border-amber-500/20 bg-amber-500/5 p-5">
                            <p class="text-xs font-bold text-amber-300">Informasi penting</p>
                            <p class="mt-2 text-xs leading-6 text-zinc-400">
                                Jadwal yang diajukan dapat berubah sesuai ketersediaan bengkel.
                                Biaya akhir dikonfirmasi setelah pemeriksaan kendaraan.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="rounded-3xl border border-zinc-800 bg-card p-6 shadow-2xl sm:p-9" x-data="{
         form: {
             nama: '{{ old('nama', auth()->user()->name ?? '') }}',
             whatsapp: '{{ old('whatsapp') }}',
             model_mobil: '{{ old('model_mobil') }}',
             layanan: '{{ old('layanan') }}',
             lokasi_bengkel: '{{ old('lokasi_bengkel') }}',
             tanggal: '{{ old('tanggal', now()->toDateString()) }}',
             jam: '{{ old('jam') }}',
             catatan: '{{ old('catatan') }}'
         },
         isLoading: false,
         showModal: false,
         errorMessage: '',

         submitBooking() {
             this.isLoading = true;
             this.errorMessage = '';

             fetch('{{ route('booking-servis.store') }}', {
                 method: 'POST',
                 headers: {
                     'Content-Type': 'application/json',
                     'X-CSRF-TOKEN': '{{ csrf_token() }}',
                     'Accept': 'application/json'
                 },
                 body: JSON.stringify(this.form)
             })
             .then(response => response.json().then(data => ({ status: response.status, body: data })))
             .then(res => {
                 this.isLoading = false;
                 if (res.status === 200 || res.status === 201 || res.body.success) {
                     this.showModal = true; // Munculkan popup sukses
                 } else {
                     this.errorMessage = res.body.message || 'Terjadi kesalahan pada input data.';
                 }
             })
             .catch(err => {
                 this.isLoading = false;
                 this.errorMessage = 'Gagal terhubung ke server. Periksa kembali koneksi Anda.';
                 console.error(err);
             });
         }
     }">

                    <div class="mb-7 border-b border-zinc-800 pb-6">
                        <h3 class="text-xl font-extrabold text-white">Formulir Booking Servis</h3>
                        <p class="mt-2 text-xs text-zinc-500">Tanda * menunjukkan data yang wajib diisi.</p>
                    </div>

                    <!-- Alert Error Validasi / Sistem -->
                    <template x-if="errorMessage">
                        <div class="mb-6 rounded-xl border border-red-500/20 bg-red-500/10 p-4 text-sm text-red-300"
                            x-text="errorMessage"></div>
                    </template>

                    <form @submit.prevent="submitBooking()" class="space-y-5">
                        @csrf

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="nama" class="mb-2 block text-xs font-bold text-zinc-300">Nama Lengkap
                                    *</label>
                                <input id="nama" x-model="form.nama" type="text" required maxlength="100"
                                    placeholder="Nama sesuai identitas"
                                    class="w-full rounded-xl border border-zinc-700 bg-zinc-950 px-4 py-3.5 text-sm text-white outline-none transition placeholder:text-zinc-600 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                            </div>

                            <div>
                                <label for="whatsapp" class="mb-2 block text-xs font-bold text-zinc-300">Nomor WhatsApp
                                    *</label>
                                <input id="whatsapp" x-model="form.whatsapp" type="tel" required maxlength="20"
                                    placeholder="08xxxxxxxxxx"
                                    class="w-full rounded-xl border border-zinc-700 bg-zinc-950 px-4 py-3.5 text-sm text-white outline-none transition placeholder:text-zinc-600 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                            </div>
                        </div>

                        <div>
                            <label for="model_mobil" class="mb-2 block text-xs font-bold text-zinc-300">Merek dan Model
                                Mobil *</label>
                            <input id="model_mobil" x-model="form.model_mobil" type="text" required maxlength="150"
                                placeholder="Contoh: Toyota Avanza 2022"
                                class="w-full rounded-xl border border-zinc-700 bg-zinc-950 px-4 py-3.5 text-sm text-white outline-none transition placeholder:text-zinc-600 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="layanan" class="mb-2 block text-xs font-bold text-zinc-300">Jenis Layanan
                                    *</label>
                                <select id="layanan" x-model="form.layanan" required
                                    class="w-full rounded-xl border border-zinc-700 bg-zinc-950 px-4 py-3.5 text-sm text-white outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                                    <option value="">Pilih layanan</option>
                                    <option value="Servis Berkala">Servis Berkala</option>
                                    <option value="Tune Up Mesin">Tune Up Mesin</option>
                                    <option value="Spooring & Balancing">Spooring & Balancing</option>
                                    <option value="Diagnostik Kendaraan">Diagnostik Kendaraan</option>
                                    <option value="Detailing & Perawatan Cat">Detailing & Perawatan Cat</option>
                                    <option value="Perbaikan Kendaraan">Perbaikan Kendaraan</option>
                                </select>
                            </div>

                            <div>
                                <label for="lokasi_bengkel" class="mb-2 block text-xs font-bold text-zinc-300">Lokasi
                                    Bengkel *</label>
                                <select id="lokasi_bengkel" x-model="form.lokasi_bengkel" required
                                    class="w-full rounded-xl border border-zinc-700 bg-zinc-950 px-4 py-3.5 text-sm text-white outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                                    <option value="">Pilih lokasi</option>
                                    <option value="Jakarta Selatan">Jakarta Selatan</option>
                                    <option value="Tangerang BSD">Tangerang BSD</option>
                                    <option value="Bekasi Cyber Park">Bekasi Cyber Park</option>
                                </select>
                            </div>
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="tanggal" class="mb-2 block text-xs font-bold text-zinc-300">Tanggal
                                    Kedatangan *</label>
                                <input id="tanggal" x-model="form.tanggal" type="date" required
                                    min="{{ now()->toDateString() }}"
                                    class="w-full rounded-xl border border-zinc-700 bg-zinc-950 px-4 py-3.5 text-sm text-white outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                            </div>

                            <div>
                                <label for="jam" class="mb-2 block text-xs font-bold text-zinc-300">
                                    Waktu Kedatangan *
                                </label>

                                <select id="jam" name="jam" x-model="form.jam" required
                                    class="w-full rounded-xl border border-zinc-700 bg-zinc-950 px-4 py-3.5 text-sm text-white outline-none transition focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">

                                    <option value="">Pilih waktu kedatangan</option>
                                    <option value="08:00">08:00</option>
                                    <option value="08:30">08:30</option>
                                    <option value="09:00">09:00</option>
                                    <option value="09:30">09:30</option>
                                    <option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    <option value="17:00">17:00</option>
                                </select>
                            </div>
                        </div>

                        <div>
                            <label for="catatan" class="mb-2 block text-xs font-bold text-zinc-300">Keluhan atau
                                Catatan</label>
                            <textarea id="catatan" x-model="form.catatan" rows="3" maxlength="1000"
                                placeholder="Contoh: mesin bergetar saat AC dinyalakan..."
                                class="w-full resize-y rounded-xl border border-zinc-700 bg-zinc-950 px-4 py-3.5 text-sm text-white outline-none transition placeholder:text-zinc-600 focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20"></textarea>
                        </div>

                        <button type="submit" :disabled="isLoading"
                            class="flex w-full items-center justify-center gap-2 rounded-xl bg-brand-600 px-5 py-4 text-sm font-extrabold text-white shadow-lg shadow-brand-600/20 transition hover:bg-brand-500 focus:outline-none focus:ring-2 focus:ring-brand-400 focus:ring-offset-2 focus:ring-offset-card cursor-pointer">
                            <span x-show="!isLoading">Ajukan Booking Servis →</span>
                            <span x-show="isLoading">Menyimpan ke Database...</span>
                        </button>
                    </form>

                    <!-- POPUP MODAL NOTIFIKASI BERHASIL -->
                    <div x-show="showModal"
                        class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm p-4"
                        style="display: none;" x-transition.opacity>

                        <div class="bg-zinc-900 border border-zinc-800 rounded-2xl max-w-md w-full p-6 text-center space-y-4 shadow-2xl"
                            @click.outside="showModal = false" x-transition>

                            <div
                                class="w-14 h-14 bg-emerald-500/20 border border-emerald-500/40 text-emerald-400 rounded-full flex items-center justify-center mx-auto text-2xl font-bold">
                                ✓
                            </div>

                            <div>
                                <h3 class="text-lg font-black text-white tracking-tight">Booking Berhasil Disimpan!</h3>
                                <p class="text-xs text-zinc-400 mt-1">
                                    Data Anda telah masuk ke sistem database kami. Tim bengkel kami akan segera
                                    memverifikasi jadwal Anda.
                                </p>
                            </div>

                            <button @click="showModal = false; window.location.reload();"
                                class="w-full bg-brand-600 hover:bg-brand-500 text-white font-bold py-3 rounded-xl text-xs cursor-pointer transition-all">
                                Selesai / Tutup
                            </button>
                        </div>
                    </div>
                </div>
        </section>

        <!-- FAQ -->
        <section class="py-20">
            <div class="mx-auto max-w-3xl px-5 sm:px-8">
                <div class="mb-9 text-center">
                    <p class="text-[10px] font-extrabold uppercase tracking-[.22em] text-brand-400">Informasi</p>
                    <h2 class="mt-3 text-3xl font-extrabold text-white">Pertanyaan Umum</h2>
                </div>

                <div class="space-y-3">
                    <details class="group rounded-xl border border-zinc-800 bg-card p-5">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between gap-4 text-sm font-bold text-white">
                            Apakah booking langsung dikonfirmasi?
                            <span class="text-brand-400 transition group-open:rotate-45">+</span>
                        </summary>
                        <p class="mt-4 text-xs leading-6 text-zinc-400">
                            Tidak. Booking merupakan pengajuan jadwal. Petugas perlu memeriksa ketersediaan
                            dan memberikan konfirmasi terlebih dahulu.
                        </p>
                    </details>

                    <details class="group rounded-xl border border-zinc-800 bg-card p-5">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between gap-4 text-sm font-bold text-white">
                            Apakah harga pada halaman ini merupakan harga final?
                            <span class="text-brand-400 transition group-open:rotate-45">+</span>
                        </summary>
                        <p class="mt-4 text-xs leading-6 text-zinc-400">
                            Harga yang ditampilkan merupakan estimasi contoh. Biaya akhir perlu disesuaikan
                            dengan daftar harga resmi dan kondisi kendaraan.
                        </p>
                    </details>

                    <details class="group rounded-xl border border-zinc-800 bg-card p-5">
                        <summary
                            class="flex cursor-pointer list-none items-center justify-between gap-4 text-sm font-bold text-white">
                            Apakah saya harus mengisi keluhan?
                            <span class="text-brand-400 transition group-open:rotate-45">+</span>
                        </summary>
                        <p class="mt-4 text-xs leading-6 text-zinc-400">
                            Tidak wajib. Namun, catatan keluhan dapat membantu petugas memahami kebutuhan
                            kendaraan sebelum kunjungan.
                        </p>
                    </details>
                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="border-t border-white/5 bg-zinc-950">
        <div
            class="mx-auto flex max-w-7xl flex-col gap-5 px-5 py-8 sm:px-8 md:flex-row md:items-center md:justify-between">
            <a href="{{ url('/') }}" class="flex items-center gap-3">
                <div class="flex h-9 w-9 items-center justify-center rounded-xl bg-brand-600 text-white">⚡</div>
                <div>
                    <p class="text-sm font-extrabold text-white">MEJENG AUTO</p>
                    <p class="text-[10px] text-zinc-500">Automotive Service & Care</p>
                </div>
            </a>

            <p class="text-xs text-zinc-500">
                © {{ date('Y') }} Mejeng Auto. Hak cipta dilindungi.
            </p>

            <div class="flex gap-5 text-xs font-bold text-zinc-400">
                <a href="{{ url('/') }}" class="transition hover:text-white">Beranda</a>
                <a href="{{ url('/beli-mobil') }}" class="transition hover:text-white">Beli Mobil</a>
                <a href="#booking" class="transition hover:text-white">Booking</a>
            </div>
        </div>
    </footer>

    <!-- PILIH LAYANAN: OTOMATIS MENGISI FORM -->
    <script>
    document.querySelectorAll('.choose-service').forEach(function(button) {
        button.addEventListener('click', function() {
            const service = this.dataset.service;
            const serviceSelect = document.getElementById('layanan');

            if (service && serviceSelect) {
                const matchingOption = Array.from(serviceSelect.options)
                    .find(option => option.value === service);

                if (matchingOption) {
                    serviceSelect.value = service;
                }
            }
        });
    });
    </script>

</body>

</html>
```