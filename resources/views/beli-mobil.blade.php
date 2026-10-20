<!DOCTYPE html>
<html lang="id" class="scroll-smooth dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Mobil Eksklusif | Mejeng Auto</title>
    <meta name="description"
        content="Temukan koleksi mobil pilihan terbaik di katalog eksklusif Mejeng Auto. Cari berdasarkan merek, harga, kondisi, transmisi, dan bahan bakar dengan standar kemewahan tertinggi.">

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Plus Jakarta Sans', 'sans-serif']
                },
                colors: {
                    brand: {
                        350: '#fb7185',
                        400: '#f43f5e',
                        500: '#e11d48',
                        600: '#be123c',
                        700: '#9f1239',
                        800: '#881337',
                    }
                },
                boxShadow: {
                    'glow': '0 0 50px -10px rgba(225, 29, 72, 0.15)',
                    'card-hover': '0 25px 50px -12px rgba(0, 0, 0, 0.7)',
                }
            }
        }
    }
    </script>
    <style>
    /* Custom scrollbar & subtle glows */
    ::-webkit-scrollbar {
        width: 8px;
    }

    ::-webkit-scrollbar-track {
        background: #050507;
    }

    ::-webkit-scrollbar-thumb {
        background: #27272a;
        border-radius: 4px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #3f3f46;
    }
    </style>
</head>

<body
    class="bg-[#050507] text-zinc-100 font-sans antialiased selection:bg-brand-600 selection:text-white min-h-screen flex flex-col justify-between">

    <!-- AMBIENT BACKGROUND GLOWS -->
    <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-7xl h-96 bg-gradient-to-b from-brand-600/10 via-transparent to-transparent blur-[120px] pointer-events-none -z-10">
    </div>

    <!-- NAVBAR -->
    <header
        class="sticky top-0 z-50 border-b border-white/[0.08] bg-[#050507]/90 backdrop-blur-2xl transition-all duration-300">
        <div class="mx-auto flex h-24 max-w-7xl items-center justify-between px-6 lg:px-12">

            <a href="{{ url('/') }}" class="group flex items-center gap-4">
                <div
                    class="relative flex h-12 w-12 items-center justify-center rounded-2xl bg-gradient-to-tr from-brand-700 via-brand-600 to-rose-400 text-xl font-black text-white shadow-xl shadow-brand-600/20 transition-all duration-500 group-hover:scale-105 group-hover:shadow-brand-600/40">
                    <span
                        class="absolute inset-0 rounded-2xl bg-white/10 opacity-0 transition-opacity group-hover:opacity-100"></span>
                    M
                </div>
                <div>
                    <div class="text-base font-extrabold tracking-widest text-white">MEJENG AUTO</div>
                    <div class="text-[10px] font-bold tracking-[0.3em] uppercase text-brand-400">Prestige Showroom</div>
                </div>
            </a>

            <nav class="hidden items-center gap-8 text-sm font-medium text-zinc-400 md:flex">
                <a href="{{ url('/beli-mobil') }}"
                    class="relative py-1 font-semibold text-white transition-colors hover:text-white after:absolute after:bottom-0 after:left-0 after:h-0.5 after:w-full after:bg-brand-500">Katalog
                    Mobil</a>
                <a href="#kontak" class="transition-colors hover:text-white">Hubungi Kami</a>
            </nav>

            <div class="flex items-center gap-4">
                @auth
                @if (auth()->user()->role === 'admin')
                <a href="{{ route('dashboard.admin') }}"
                    class="rounded-full border border-white/10 bg-white/[0.04] px-6 py-3 text-xs font-bold uppercase tracking-wider text-white backdrop-blur-md transition-all duration-300 hover:border-brand-500 hover:bg-brand-500/10 hover:shadow-lg hover:shadow-brand-500/20">
                    Dashboard
                </a>
                @else
                <a href="{{ route('dashboard.user') }}"
                    class="rounded-full border border-white/10 bg-white/[0.04] px-6 py-3 text-xs font-bold uppercase tracking-wider text-white backdrop-blur-md transition-all duration-300 hover:border-brand-500 hover:bg-brand-500/10 hover:shadow-lg hover:shadow-brand-500/20">
                    Akun Saya
                </a>
                @endif
                @else
                <a href="{{ route('login') }}"
                    class="rounded-full bg-gradient-to-r from-brand-600 to-rose-600 px-7 py-3.5 text-xs font-bold uppercase tracking-widest text-white shadow-lg shadow-brand-600/30 transition-all duration-300 hover:from-brand-500 hover:to-rose-500 hover:shadow-brand-600/50 hover:scale-[1.02]">
                    Masuk
                </a>
                @endauth
            </div>

        </div>
    </header>

    <main class="flex-grow">

        <!-- HERO -->
        <section class="relative overflow-hidden border-b border-white/[0.06] py-24 lg:py-36">
            <div
                class="absolute -right-20 top-0 h-[450px] w-[450px] rounded-full bg-brand-600/10 blur-[150px] pointer-events-none">
            </div>
            <div
                class="absolute -left-20 bottom-0 h-[400px] w-[400px] rounded-full bg-rose-900/10 blur-[150px] pointer-events-none">
            </div>

            <div class="relative mx-auto max-w-7xl px-6 lg:px-12">
                <div class="max-w-3xl">

                    <div
                        class="inline-flex items-center gap-3 rounded-full border border-white/10 bg-white/[0.03] px-4.5 py-2 text-xs font-medium text-zinc-300 backdrop-blur-xl shadow-inner">
                        <span class="flex h-2 w-2 relative">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span class="tracking-wide">Unit Terverifikasi & Garansi Kualitas</span>
                    </div>

                    <h1
                        class="mt-8 text-4xl font-extrabold leading-[1.08] tracking-tight sm:text-6xl lg:text-7xl text-white">
                        Elegansi Tanpa Kompromi,
                        <span
                            class="block mt-2 bg-gradient-to-r from-white via-zinc-200 to-zinc-500 bg-clip-text text-transparent">Temukan
                            Mobil Impian Anda.</span>
                    </h1>

                    <p class="mt-6 max-w-2xl text-base leading-relaxed text-zinc-400 sm:text-lg font-light">
                        Jelajahi lini kendaraan pilihan dengan spesifikasi tertinggi. Rasakan kemudahan inspeksi
                        transparan dan layanan konsultasi langsung bersama pakar otomotif kami.
                    </p>

                    <div class="mt-10 flex flex-wrap items-center gap-4">
                        <a href="#katalog"
                            class="inline-flex items-center gap-3 rounded-2xl bg-white px-8 py-4 text-xs font-extrabold uppercase tracking-widest text-zinc-950 shadow-xl shadow-white/5 transition-all duration-300 hover:bg-zinc-200 hover:scale-[1.02] active:scale-[0.98]">
                            <span>Jelajahi Katalog</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- KATALOG -->
        <section id="katalog" class="mx-auto max-w-7xl px-6 py-20 lg:py-28 lg:px-12">

            <div
                class="mb-12 flex flex-col gap-6 md:flex-row md:items-end md:justify-between border-b border-white/[0.06] pb-8">
                <div>
                    <span class="text-xs font-extrabold uppercase tracking-[0.3em] text-brand-400">
                        Showroom Inventory
                    </span>
                    <h2 class="mt-2 text-3xl font-extrabold tracking-tight sm:text-4xl text-white">Koleksi Kendaraan
                        Tersedia</h2>
                    <p class="mt-2 text-sm text-zinc-400 font-light">
                        Pilihan unit kendaraan premium dengan riwayat perawatan terbaik.
                    </p>
                </div>

                <div
                    class="inline-flex items-center gap-3 rounded-2xl border border-white/[0.08] bg-zinc-900/60 px-5 py-3.5 backdrop-blur-xl shadow-2xl">
                    <span class="text-xs text-zinc-400">Total Kendaraan:</span>
                    <span class="font-black text-brand-400 text-base">
                        {{ $cars->total() }} Unit
                    </span>
                </div>
            </div>

            <!-- PENCARIAN DAN FILTER -->
            <form action="{{ route('beli-mobil') }}#katalog" method="GET"
                class="mb-16 rounded-3xl border border-white/[0.08] bg-zinc-900/40 p-6 lg:p-8 shadow-2xl backdrop-blur-2xl relative overflow-hidden">
                <div
                    class="absolute -right-32 -bottom-32 w-80 h-80 bg-brand-600/10 rounded-full blur-[100px] pointer-events-none">
                </div>

                <div class="mb-6 flex flex-wrap items-center justify-between gap-4 border-b border-white/[0.06] pb-5">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-8 h-8 rounded-xl bg-brand-500/10 flex items-center justify-center text-brand-400 border border-brand-500/20">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="font-bold text-sm tracking-wide text-white uppercase tracking-wider">Filter Kendaraan
                        </h3>
                    </div>

                    <a href="{{ route('beli-mobil') }}#katalog"
                        class="text-xs font-semibold text-zinc-400 transition-colors hover:text-white inline-flex items-center gap-1.5 bg-white/[0.04] px-4 py-2 rounded-xl border border-white/[0.06]">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15">
                            </path>
                        </svg>
                        Reset Filter
                    </a>
                </div>

                <div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-3">

                    <div>
                        <label for="search"
                            class="mb-2.5 block text-[11px] font-bold uppercase tracking-widest text-zinc-400">
                            Merek atau Model
                        </label>
                        <input type="search" id="search" name="search" value="{{ request('search') }}"
                            placeholder="Contoh: Toyota, Honda, BMW..."
                            class="w-full rounded-2xl border border-white/[0.08] bg-[#09090b] px-4.5 py-4 text-sm text-white placeholder-zinc-600 outline-none transition-all focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                    </div>

                    <div>
                        <label for="fuel_type"
                            class="mb-2.5 block text-[11px] font-bold uppercase tracking-widest text-zinc-400">
                            Bahan Bakar
                        </label>
                        <select id="fuel_type" name="fuel_type"
                            class="w-full rounded-2xl border border-white/[0.08] bg-[#09090b] px-4.5 py-4 text-sm text-white outline-none transition-all focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 cursor-pointer">
                            <option value="" class="bg-zinc-950">Semua Bahan Bakar</option>
                            @foreach (['Bensin', 'Diesel', 'Hybrid', 'Listrik', 'Lainnya'] as $fuel)
                            <option value="{{ $fuel }}" class="bg-zinc-950"
                                {{ request('fuel_type') === $fuel ? 'selected' : '' }}>
                                {{ $fuel }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="transmission"
                            class="mb-2.5 block text-[11px] font-bold uppercase tracking-widest text-zinc-400">
                            Transmisi
                        </label>
                        <select id="transmission" name="transmission"
                            class="w-full rounded-2xl border border-white/[0.08] bg-[#09090b] px-4.5 py-4 text-sm text-white outline-none transition-all focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 cursor-pointer">
                            <option value="" class="bg-zinc-950">Semua Transmisi</option>
                            @foreach (['Manual', 'Otomatis'] as $transmission)
                            <option value="{{ $transmission }}" class="bg-zinc-950"
                                {{ request('transmission') === $transmission ? 'selected' : '' }}>
                                {{ $transmission }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="condition"
                            class="mb-2.5 block text-[11px] font-bold uppercase tracking-widest text-zinc-400">
                            Kondisi Kendaraan
                        </label>
                        <select id="condition" name="condition"
                            class="w-full rounded-2xl border border-white/[0.08] bg-[#09090b] px-4.5 py-4 text-sm text-white outline-none transition-all focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20 cursor-pointer">
                            <option value="" class="bg-zinc-950">Semua Kondisi</option>
                            @foreach (['Baru', 'Bekas'] as $condition)
                            <option value="{{ $condition }}" class="bg-zinc-950"
                                {{ request('condition') === $condition ? 'selected' : '' }}>
                                {{ $condition }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="min_price"
                            class="mb-2.5 block text-[11px] font-bold uppercase tracking-widest text-zinc-400">
                            Harga Minimum (Rp)
                        </label>
                        <input type="number" id="min_price" name="min_price" min="0" step="1"
                            value="{{ request('min_price') }}" placeholder="Contoh: 100000000"
                            class="w-full rounded-2xl border border-white/[0.08] bg-[#09090b] px-4.5 py-4 text-sm text-white placeholder-zinc-600 outline-none transition-all focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                    </div>

                    <div>
                        <label for="max_price"
                            class="mb-2.5 block text-[11px] font-bold uppercase tracking-widest text-zinc-400">
                            Harga Maksimum (Rp)
                        </label>
                        <input type="number" id="max_price" name="max_price" min="0" step="1"
                            value="{{ request('max_price') }}" placeholder="Contoh: 500000000"
                            class="w-full rounded-2xl border border-white/[0.08] bg-[#09090b] px-4.5 py-4 text-sm text-white placeholder-zinc-600 outline-none transition-all focus:border-brand-500 focus:ring-2 focus:ring-brand-500/20">
                    </div>

                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit"
                        class="inline-flex items-center justify-center gap-2 rounded-2xl bg-gradient-to-r from-brand-600 to-rose-600 px-8 py-4 text-xs font-bold uppercase tracking-widest text-white shadow-xl shadow-brand-600/30 transition-all duration-300 hover:from-brand-500 hover:to-rose-500 hover:shadow-brand-600/50 hover:scale-[1.02]">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Terapkan Filter
                    </button>
                </div>
            </form>

            <!-- DAFTAR MOBIL -->
            @if ($cars->count() > 0)

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">

                @foreach ($cars as $car)

                @php
                $imageUrl = $car->image_path
                ? (
                \Illuminate\Support\Str::startsWith(
                $car->image_path,
                ['http://', 'https://']
                )
                ? $car->image_path
                : asset('storage/' . $car->image_path)
                )
                : null;

                $whatsappMessage = 'Halo Mejeng Auto, saya tertarik dengan mobil '
                . $car->brand_name . ' ' . $car->model
                . ' tahun ' . $car->year
                . '. Boleh minta informasi lebih lanjut?';

                $whatsappNumber = '6281234567890';
                @endphp

                <article
                    class="group relative flex flex-col justify-between overflow-hidden rounded-3xl border border-white/[0.08] bg-zinc-900/40 backdrop-blur-xl shadow-2xl transition-all duration-500 hover:-translate-y-2 hover:border-brand-500/40 hover:shadow-card-hover">

                    <div>
                        <!-- FOTO -->
                        <div class="relative aspect-[16/10] overflow-hidden bg-zinc-950">

                            @if ($imageUrl)
                            <img src="{{ $imageUrl }}" alt="{{ $car->brand_name }} {{ $car->model }}"
                                class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"
                                loading="lazy"
                                onerror="this.onerror=null; this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">

                            <div
                                class="absolute inset-0 hidden items-center justify-center text-xs text-zinc-500 bg-zinc-950">
                                Foto tidak dapat dimuat
                            </div>
                            @else
                            <div
                                class="absolute inset-0 flex flex-col items-center justify-center gap-2.5 text-zinc-600 bg-zinc-950">
                                <span class="text-3xl filter grayscale opacity-50">🚘</span>
                                <span class="text-[10px] font-bold tracking-widest uppercase text-zinc-500">No Image
                                    Available</span>
                            </div>
                            @endif

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-zinc-950 via-transparent to-transparent opacity-80">
                            </div>

                            <div class="absolute left-4 top-4">
                                <span
                                    class="inline-flex items-center gap-1.5 rounded-full bg-emerald-500/95 backdrop-blur-md px-3.5 py-1.5 text-[10px] font-extrabold tracking-wider text-white shadow-lg shadow-emerald-500/20">
                                    <span class="w-1.5 h-1.5 rounded-full bg-white animate-pulse"></span>
                                    Tersedia
                                </span>
                            </div>

                            <div class="absolute right-4 top-4">
                                <span
                                    class="rounded-full bg-black/70 backdrop-blur-md border border-white/10 px-3.5 py-1.5 text-[10px] font-extrabold uppercase tracking-widest text-zinc-200 shadow-xl">
                                    {{ $car->condition }}
                                </span>
                            </div>

                        </div>

                        <!-- INFORMASI MOBIL -->
                        <div class="p-6 lg:p-7">

                            <div class="flex items-center justify-between gap-3">
                                <span class="text-[11px] font-black uppercase tracking-[0.25em] text-brand-400">
                                    {{ $car->brand_name }}
                                </span>
                                <span
                                    class="inline-flex items-center gap-1.5 text-xs font-bold text-zinc-400 bg-white/[0.03] px-3 py-1 rounded-xl border border-white/[0.05]">
                                    <svg class="w-3.5 h-3.5 text-zinc-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                    {{ $car->year }}
                                </span>
                            </div>

                            <h3
                                class="mt-2.5 text-xl font-extrabold text-white tracking-tight group-hover:text-brand-300 transition-colors">
                                {{ $car->model }}
                            </h3>

                            @if ($car->variant)
                            <p class="mt-1 text-xs font-medium text-zinc-400">
                                {{ $car->variant }}
                            </p>
                            @endif

                            <div class="mt-6 grid grid-cols-2 gap-3">

                                <div
                                    class="rounded-2xl border border-white/[0.05] bg-[#09090b]/80 p-3.5 backdrop-blur-sm">
                                    <p class="text-[9px] font-bold uppercase tracking-widest text-zinc-500">Kilometer
                                    </p>
                                    <p class="mt-1 text-xs font-bold text-zinc-200">
                                        {{ number_format($car->mileage, 0, ',', '.') }} km
                                    </p>
                                </div>

                                <div
                                    class="rounded-2xl border border-white/[0.05] bg-[#09090b]/80 p-3.5 backdrop-blur-sm">
                                    <p class="text-[9px] font-bold uppercase tracking-widest text-zinc-500">Transmisi
                                    </p>
                                    <p class="mt-1 text-xs font-bold text-zinc-200">
                                        {{ $car->transmission }}
                                    </p>
                                </div>

                                <div
                                    class="rounded-2xl border border-white/[0.05] bg-[#09090b]/80 p-3.5 backdrop-blur-sm">
                                    <p class="text-[9px] font-bold uppercase tracking-widest text-zinc-500">Bahan Bakar
                                    </p>
                                    <p class="mt-1 text-xs font-bold text-zinc-200">
                                        {{ $car->fuel_type }}
                                    </p>
                                </div>

                                <div
                                    class="rounded-2xl border border-white/[0.05] bg-[#09090b]/80 p-3.5 backdrop-blur-sm">
                                    <p class="text-[9px] font-bold uppercase tracking-widest text-zinc-500">Kondisi</p>
                                    <p class="mt-1 text-xs font-bold text-zinc-200">
                                        {{ $car->condition }}
                                    </p>
                                </div>

                            </div>

                            @if ($car->description)
                            <p class="mt-4 text-xs leading-relaxed text-zinc-400 font-light line-clamp-2">
                                {{ $car->description }}
                            </p>
                            @endif

                        </div>
                    </div>

                    <div class="p-6 lg:p-7 pt-0">
                        <div class="rounded-2xl border border-white/[0.08] bg-[#09090b] p-5 shadow-inner">
                            <div class="flex items-center justify-between">
                                <span class="text-[10px] font-bold uppercase tracking-widest text-zinc-500">Harga
                                    Penawaran</span>
                                <span class="flex h-2 w-2 rounded-full bg-emerald-500 animate-pulse"></span>
                            </div>

                            <p class="mt-1.5 text-xl font-black tracking-tight text-white">
                                Rp {{ number_format($car->price, 0, ',', '.') }}
                            </p>

                            <a href="https://wa.me/6285157579813?text={{ urlencode($whatsappMessage) }}" target="_blank"
                                rel="noopener noreferrer"
                                class="mt-4 inline-flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-emerald-600 to-emerald-700 py-3.5 text-xs font-bold uppercase tracking-wider text-white shadow-lg shadow-emerald-600/35 transition-all duration-300 hover:from-emerald-500 hover:to-emerald-600 hover:shadow-emerald-500/50 hover:scale-[1.01]">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.124-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                                </svg>
                                <span>Tanya Via WhatsApp</span>
                            </a>
                        </div>
                    </div>

                </article>

                @endforeach

            </div>

            <!-- PAGINATION -->
            <div class="mt-16 flex justify-center">
                {{ $cars->onEachSide(1)->links() }}
            </div>

            @else

            <!-- DATA KOSONG -->
            <div
                class="rounded-3xl border border-white/[0.08] bg-zinc-900/40 px-6 py-24 text-center backdrop-blur-2xl shadow-2xl">
                <div
                    class="inline-flex h-20 w-20 items-center justify-center rounded-3xl bg-brand-500/10 text-3xl mb-6 border border-brand-500/20 text-brand-400">
                    🚘
                </div>

                <h3 class="text-2xl font-extrabold text-white tracking-tight">
                    Mobil Tidak Ditemukan
                </h3>

                <p class="mx-auto mt-3 max-w-md text-sm leading-relaxed text-zinc-400 font-light">
                    Belum ada unit kendaraan yang sesuai dengan filter pencarian Anda. Silakan sesuaikan kembali
                    kriteria atau reset pencarian.
                </p>

                <a href="{{ route('beli-mobil') }}#katalog"
                    class="mt-8 inline-flex items-center gap-2 rounded-2xl bg-gradient-to-r from-brand-600 to-rose-600 px-8 py-4 text-xs font-bold uppercase tracking-widest text-white shadow-xl shadow-brand-600/30 transition-all duration-300 hover:from-brand-500 hover:to-rose-500 hover:shadow-brand-600/50">
                    Tampilkan Semua Mobil
                </a>
            </div>

            @endif

        </section>

        <!-- KONTAK -->
        <section id="kontak" class="relative overflow-hidden border-t border-white/[0.08] bg-zinc-950 py-28">
            <div
                class="absolute inset-0 bg-gradient-to-b from-transparent via-brand-600/5 to-transparent pointer-events-none">
            </div>

            <div class="relative mx-auto max-w-4xl px-6 text-center lg:px-8">

                <span class="text-xs font-extrabold uppercase tracking-[0.3em] text-brand-400">
                    Layanan Konsultasi Eksekutif
                </span>

                <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-5xl text-white">
                    Butuh Rekomendasi Khusus?
                </h2>

                <p class="mx-auto mt-4 max-w-xl text-sm leading-relaxed text-zinc-400 font-light sm:text-base">
                    Konsultasikan preferensi kendaraan impian Anda dengan sales representative kami untuk mendapatkan
                    pelayanan prioritas terbaik.
                </p>

                <div class="mt-8">
                    <a href="https://wa.me/6281234567890?text={{ urlencode('Halo Mejeng Auto, saya ingin berkonsultasi mengenai pembelian mobil yang tersedia di katalog.') }}"
                        target="_blank" rel="noopener noreferrer"
                        class="inline-flex items-center gap-3 rounded-2xl bg-gradient-to-r from-emerald-600 to-emerald-700 px-9 py-4.5 text-xs font-extrabold uppercase tracking-widest text-white shadow-2xl shadow-emerald-600/40 transition-all duration-300 hover:from-emerald-500 hover:to-emerald-600 hover:shadow-emerald-500/60 hover:scale-105">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                            <path
                                d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.124-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                        <span>Hubungi Konsultan via WhatsApp</span>
                    </a>
                </div>

            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="border-t border-white/[0.08] bg-[#050507] px-6 py-10 text-xs text-zinc-500">
        <div class="mx-auto max-w-7xl flex flex-col sm:flex-row items-center justify-between gap-4 font-light">
            <div>
                © {{ date('Y') }} <span class="text-zinc-300 font-bold">Mejeng Auto</span>. Hak Cipta Dilindungi.
            </div>
            <div class="text-zinc-600">
                Crafted for Prestige Automotive Experience
            </div>
        </div>
    </footer>

</body>

</html>