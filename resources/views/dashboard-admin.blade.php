<!DOCTYPE html>
<html lang="id" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Control Center | Mejeng Auto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script>
    tailwind.config = {
        darkMode: 'class',
        theme: {
            extend: {
                fontFamily: {
                    sans: ['Plus Jakarta Sans', 'sans-serif'],
                },
                colors: {
                    gold: {
                        400: '#f3d09c',
                        500: '#dfb17b',
                        600: '#c49a6c',
                    }
                }
            }
        }
    }
    </script>
    <style>
    ::-webkit-scrollbar {
        width: 5px;
        height: 5px;
    }

    ::-webkit-scrollbar-track {
        background: #020205;
    }

    ::-webkit-scrollbar-thumb {
        background: #1f1f2e;
        border-radius: 9999px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: #dfb17b;
    }

    .glass-panel {
        background: linear-gradient(135deg, rgba(18, 18, 26, 0.75) 0%, rgba(10, 10, 15, 0.85) 100%);
        backdrop-filter: blur(24px);
        -webkit-backdrop-filter: blur(24px);
    }
    </style>
</head>

<body class="min-h-screen bg-[#020205] text-zinc-100 selection:bg-gold-500 selection:text-black antialiased">

    <!-- Ambient Dynamic Glow -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden z-0">
        <div class="absolute -top-[20%] -left-[10%] h-[600px] w-[600px] rounded-full bg-gold-500/[0.04] blur-[160px] animate-pulse"
            style="animation-duration: 8s;"></div>
        <div class="absolute top-[30%] -right-[10%] h-[700px] w-[700px] rounded-full bg-amber-600/[0.03] blur-[180px]">
        </div>
    </div>

    <!-- MAIN APP SHELL -->
    <div class="relative min-h-screen flex flex-col md:flex-row z-10">

        <!-- FLOATING SIDEBAR -->
        <aside
            class="w-full md:w-80 shrink-0 p-4 md:p-6 flex flex-col justify-between border-b md:border-b-0 md:border-r border-zinc-900/80 bg-[#040408]/90 backdrop-blur-2xl">
            <div class="space-y-8">
                <!-- Brand Identity -->
                <div class="flex items-center justify-between px-2">
                    <a href="{{ route('home') }}" class="flex items-center gap-3.5 group">
                        <div
                            class="relative flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-tr from-gold-600 via-gold-500 to-amber-200 text-black font-black text-lg shadow-lg shadow-gold-500/20 transition-transform duration-500 group-hover:scale-105">
                            <div class="absolute inset-0 rounded-2xl border border-white/30"></div>
                            M
                        </div>
                        <div>
                            <h1 class="text-sm font-extrabold tracking-widest text-white">MEJENG<span
                                    class="text-gold-500">AUTO</span></h1>
                            <p class="text-[9px] font-bold tracking-[0.25em] text-zinc-500 uppercase">Executive Core</p>
                        </div>
                    </a>
                    <span
                        class="hidden md:inline-flex px-2 py-0.5 rounded-full bg-zinc-900 border border-zinc-800 text-[10px] font-mono text-gold-500">PRO</span>
                </div>

                <!-- Navigation Hub -->
                <div class="space-y-1">
                    <p class="px-3 pb-2 text-[10px] font-extrabold uppercase tracking-widest text-zinc-600">Menu Utama
                    </p>

                    <a href="{{ route('dashboard.admin') }}"
                        class="group flex items-center justify-between rounded-2xl bg-gradient-to-r from-gold-500/10 to-transparent px-4 py-3 text-sm font-bold text-gold-500 border border-gold-500/20 shadow-sm transition-all">
                        <div class="flex items-center gap-3">
                            <span
                                class="flex h-7 w-7 items-center justify-center rounded-xl bg-gold-500/20 text-xs">📊</span>
                            <span>Dashboard Utama</span>
                        </div>
                        <span class="h-1.5 w-1.5 rounded-full bg-gold-500 animate-ping"></span>
                    </a>

                    <a href="{{ route('admin.cars.create') }}"
                        class="group flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-medium text-zinc-400 transition-all hover:bg-zinc-900/60 hover:text-white border border-transparent hover:border-zinc-800">
                        <div class="flex items-center gap-3">
                            <span
                                class="flex h-7 w-7 items-center justify-center rounded-xl bg-zinc-900 border border-zinc-800 text-zinc-400 group-hover:border-zinc-700 group-hover:text-gold-500 transition-colors text-xs">＋</span>
                            <span>Tambah Kendaraan</span>
                        </div>
                        <span class="text-xs text-zinc-600 group-hover:text-zinc-400">&rarr;</span>
                    </a>

                    <a href="{{ route('beli-mobil') }}"
                        class="group flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-medium text-zinc-400 transition-all hover:bg-zinc-900/60 hover:text-white border border-transparent hover:border-zinc-800">
                        <div class="flex items-center gap-3">
                            <span
                                class="flex h-7 w-7 items-center justify-center rounded-xl bg-zinc-900 border border-zinc-800 text-zinc-400 group-hover:border-zinc-700 group-hover:text-gold-500 transition-colors text-xs">⚡</span>
                            <span>Katalog Publik</span>
                        </div>
                        <span class="text-xs text-zinc-600 group-hover:text-zinc-400">&rarr;</span>
                    </a>

                    <a href="{{ route('home') }}"
                        class="group flex items-center justify-between rounded-2xl px-4 py-3 text-sm font-medium text-zinc-400 transition-all hover:bg-zinc-900/60 hover:text-white border border-transparent hover:border-zinc-800">
                        <div class="flex items-center gap-3">
                            <span
                                class="flex h-7 w-7 items-center justify-center rounded-xl bg-zinc-900 border border-zinc-800 text-zinc-400 group-hover:border-zinc-700 group-hover:text-gold-500 transition-colors text-xs">🏠</span>
                            <span>Halaman Utama</span>
                        </div>
                        <span class="text-xs text-zinc-600 group-hover:text-zinc-400">&rarr;</span>
                    </a>
                </div>
            </div>

            <!-- Footer Panel -->
            <div class="space-y-4 mt-8 pt-6 border-t border-zinc-900">
                <div class="rounded-2xl border border-zinc-800/60 bg-zinc-950/40 p-4 relative overflow-hidden">
                    <div class="flex items-center gap-2 mb-1.5">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        <p class="text-[10px] font-bold uppercase tracking-wider text-gold-500">Secure Environment</p>
                    </div>
                    <p class="text-[11px] leading-relaxed text-zinc-400">
                        Sistem kontrol inventaris beroperasi secara real-time.
                    </p>
                </div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center justify-center gap-2 rounded-2xl border border-red-500/20 bg-red-500/[0.03] px-4 py-3 text-xs font-bold text-red-400 transition-all hover:bg-red-500/10 hover:border-red-500/40">
                        <span>Keluar Sesi Admin</span>
                    </button>
                </form>
            </div>
        </aside>

        <!-- MAIN VIEWPORT -->
        <main class="flex-1 min-w-0 p-6 md:p-10 lg:p-12 space-y-10">

            <!-- HEADER -->
            <header
                class="flex flex-col lg:flex-row lg:items-center justify-between gap-6 pb-6 border-b border-zinc-900">
                <div class="space-y-1.5">
                    <div
                        class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-zinc-900/80 border border-zinc-800 text-gold-500 text-[10px] font-extrabold uppercase tracking-widest shadow-sm">
                        <span class="h-1.5 w-1.5 rounded-full bg-gold-500"></span>
                        Executive Control Panel
                    </div>
                    <h2 class="text-3xl lg:text-4xl font-extrabold tracking-tight text-white">
                        Dashboard Administrator
                    </h2>
                    <p class="text-sm text-zinc-400">
                        Pusat kendali unit kendaraan, analisis status, dan manajemen showroom presisi tinggi.
                    </p>
                </div>

                <a href="{{ route('admin.cars.create') }}"
                    class="group relative inline-flex items-center gap-2.5 rounded-2xl bg-gradient-to-r from-gold-600 via-gold-500 to-amber-300 px-6 py-4 text-xs font-extrabold text-black shadow-xl shadow-gold-500/15 transition-all hover:brightness-110 active:scale-[0.98]">
                    <span
                        class="flex h-5 w-5 items-center justify-center rounded-full bg-black/15 text-sm font-black">+</span>
                    <span>Tambah Kendaraan Baru</span>
                </a>
            </header>

            <!-- NOTIFICATIONS -->
            @if (session('success'))
            <div
                class="flex items-center justify-between rounded-2xl border border-emerald-500/30 bg-emerald-950/20 p-4 text-sm text-emerald-300 backdrop-blur-xl shadow-lg">
                <div class="flex items-center gap-3">
                    <span
                        class="flex h-7 w-7 items-center justify-center rounded-xl bg-emerald-500/20 text-emerald-400 font-bold text-xs">✓</span>
                    <p class="font-medium">{{ session('success') }}</p>
                </div>
                <button onclick="this.parentElement.remove()"
                    class="text-emerald-500 hover:text-emerald-300 px-2">&times;</button>
            </div>
            @endif

            @if ($errors->any())
            <div
                class="rounded-2xl border border-red-900/50 bg-red-950/20 p-5 text-sm text-red-300 backdrop-blur-xl shadow-lg">
                <div class="flex items-center gap-2.5 font-bold text-red-400 mb-2">
                    <span class="flex h-6 w-6 items-center justify-center rounded-lg bg-red-500/20 text-xs">!</span>
                    Perhatian: Terdapat kesalahan input data
                </div>
                <ul class="list-inside list-disc space-y-1 pl-5 text-xs text-red-400/90">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- METRICS BENTO GRID -->
            <section class="grid grid-cols-1 gap-4 sm:grid-cols-2 xl:grid-cols-4">
                <div
                    class="glass-panel rounded-3xl p-6 border border-zinc-800/80 shadow-2xl relative overflow-hidden group hover:border-zinc-700 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-zinc-500">Total Kendaraan</span>
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-2xl bg-zinc-900 border border-zinc-800 text-base">
                            🚘</div>
                    </div>
                    <div class="mt-4 flex items-baseline gap-3">
                        <h3 class="text-4xl font-black text-white tracking-tight">
                            {{ number_format($totalCars ?? 0, 0, ',', '.') }}</h3>
                        <span class="text-[10px] font-bold text-zinc-500 uppercase tracking-widest">Unit</span>
                    </div>
                </div>

                <div
                    class="glass-panel rounded-3xl p-6 border border-zinc-800/80 shadow-2xl relative overflow-hidden group hover:border-emerald-500/40 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-zinc-500">Tersedia</span>
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-2xl bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 text-base">
                            ✓</div>
                    </div>
                    <div class="mt-4 flex items-baseline gap-3">
                        <h3 class="text-4xl font-black text-emerald-400 tracking-tight">
                            {{ number_format($availableCars ?? 0, 0, ',', '.') }}</h3>
                        <span class="text-[10px] font-bold text-emerald-500/60 uppercase tracking-widest">Siap
                            Jual</span>
                    </div>
                </div>

                <div
                    class="glass-panel rounded-3xl p-6 border border-zinc-800/80 shadow-2xl relative overflow-hidden group hover:border-amber-500/40 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-zinc-500">Dipesan</span>
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-2xl bg-amber-500/10 border border-amber-500/20 text-amber-400 text-base">
                            ◷</div>
                    </div>
                    <div class="mt-4 flex items-baseline gap-3">
                        <h3 class="text-4xl font-black text-amber-400 tracking-tight">
                            {{ number_format($reservedCars ?? 0, 0, ',', '.') }}</h3>
                        <span class="text-[10px] font-bold text-amber-500/60 uppercase tracking-widest">Booking</span>
                    </div>
                </div>

                <div
                    class="glass-panel rounded-3xl p-6 border border-zinc-800/80 shadow-2xl relative overflow-hidden group hover:border-blue-500/40 transition-all duration-300">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-bold uppercase tracking-wider text-zinc-500">Terjual</span>
                        <div
                            class="flex h-10 w-10 items-center justify-center rounded-2xl bg-blue-500/10 border border-blue-500/20 text-blue-400 text-base">
                            ★</div>
                    </div>
                    <div class="mt-4 flex items-baseline gap-3">
                        <h3 class="text-4xl font-black text-blue-400 tracking-tight">
                            {{ number_format($soldCars ?? 0, 0, ',', '.') }}</h3>
                        <span class="text-[10px] font-bold text-blue-500/60 uppercase tracking-widest">Selesai</span>
                    </div>
                </div>
            </section>

            <!-- ADVANCED DATA DISPLAY: MODERN RESPONSIVE CARDS GRID (NO HORIZONTAL SCROLL) -->
            <section class="space-y-6">

                <!-- Control & Filter Bar -->
                <div
                    class="glass-panel rounded-3xl border border-zinc-800/80 p-6 flex flex-col md:flex-row md:items-center justify-between gap-4 shadow-2xl">
                    <div class="relative flex-1">
                        <span
                            class="absolute inset-y-0 left-0 flex items-center pl-4 text-zinc-500 pointer-events-none">🔍</span>
                        <input id="searchCar" type="text" placeholder="Cari merek, model, atau varian kendaraan..."
                            class="w-full rounded-2xl border border-zinc-800 bg-zinc-900/80 pl-11 pr-4 py-3.5 text-sm text-zinc-200 shadow-inner transition-all focus:border-gold-500 focus:outline-none focus:ring-1 focus:ring-gold-500">
                    </div>

                    <div class="w-full md:w-64">
                        <select id="filterStatus"
                            class="w-full rounded-2xl border border-zinc-800 bg-zinc-900/80 px-4 py-3.5 text-sm text-zinc-200 shadow-inner transition-all focus:border-gold-500 focus:outline-none focus:ring-1 focus:ring-gold-500">
                            <option value="">Semua Status Unit</option>
                            <option value="tersedia">Tersedia</option>
                            <option value="dipesan">Dipesan</option>
                            <option value="terjual">Terjual</option>
                        </select>
                    </div>
                </div>

                <!-- CARDS GRID CONTAINER (Replaces traditional cramped table to prevent horizontal scrolling) -->
                <div id="carCardsContainer" class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                    @forelse ($cars as $car)
                    <div class="car-card glass-panel rounded-3xl border border-zinc-800/80 p-5 shadow-xl flex flex-col justify-between group hover:border-gold-500/40 transition-all duration-300"
                        data-search="{{ strtolower($car->brand_name . ' ' . $car->model . ' ' . ($car->variant ?? '')) }}"
                        data-status="{{ strtolower($car->status) }}">

                        <div>
                            <!-- Card Top: Image & Status Badge -->
                            <div
                                class="relative h-48 w-full rounded-2xl overflow-hidden border border-zinc-800/80 bg-zinc-950 mb-4 shadow-inner">
                                @if (!empty($car->image_path))
                                <img src="{{ \Illuminate\Support\Str::startsWith($car->image_path, ['http://', 'https://']) ? $car->image_path : asset('storage/' . $car->image_path) }}"
                                    alt="{{ $car->brand_name }} {{ $car->model }}"
                                    class="h-full w-full object-cover group-hover:scale-105 transition-transform duration-500"
                                    onerror="this.style.display='none'; this.nextElementSibling.classList.remove('hidden');">
                                <div class="hidden h-full w-full flex items-center justify-center text-3xl">🚘</div>
                                @else
                                <div class="h-full w-full flex items-center justify-center text-3xl">🚘</div>
                                @endif

                                <!-- Floating Status Badge -->
                                <div class="absolute top-3 right-3">
                                    @if ($car->status === 'Tersedia')
                                    <span
                                        class="inline-flex items-center gap-1.5 rounded-full border border-emerald-500/30 bg-emerald-950/80 backdrop-blur-md px-3 py-1 text-[11px] font-bold text-emerald-400 shadow-lg">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
                                        Tersedia
                                    </span>
                                    @elseif ($car->status === 'Dipesan')
                                    <span
                                        class="inline-flex items-center gap-1.5 rounded-full border border-amber-500/30 bg-amber-950/80 backdrop-blur-md px-3 py-1 text-[11px] font-bold text-amber-400 shadow-lg">
                                        <span class="h-1.5 w-1.5 rounded-full bg-amber-400 animate-pulse"></span>
                                        Dipesan
                                    </span>
                                    @else
                                    <span
                                        class="inline-flex items-center gap-1.5 rounded-full border border-blue-500/30 bg-blue-950/80 backdrop-blur-md px-3 py-1 text-[11px] font-bold text-blue-400 shadow-lg">
                                        <span class="h-1.5 w-1.5 rounded-full bg-blue-400"></span> Terjual
                                    </span>
                                    @endif
                                </div>

                                <!-- Floating ID Tag -->
                                <div class="absolute bottom-3 left-3">
                                    <span
                                        class="rounded-xl border border-zinc-800 bg-zinc-950/80 backdrop-blur-md px-2.5 py-1 text-[10px] font-mono text-zinc-400">
                                        ID #{{ $car->id }}
                                    </span>
                                </div>
                            </div>

                            <!-- Title & Variant -->
                            <div class="space-y-1 mb-4">
                                <h3
                                    class="text-lg font-bold text-white group-hover:text-gold-500 transition-colors tracking-tight">
                                    {{ $car->brand_name }} {{ $car->model }}
                                </h3>
                                <p class="text-xs text-zinc-400 font-medium">
                                    {{ $car->variant ?: 'Varian Standar' }}
                                </p>
                            </div>

                            <!-- Specs Grid Box -->
                            <div
                                class="grid grid-cols-2 gap-2 p-3 rounded-2xl bg-zinc-950/50 border border-zinc-800/60 mb-5 text-xs">
                                <div>
                                    <span
                                        class="text-zinc-500 text-[10px] uppercase font-bold tracking-wider block">Tahun
                                        / Transmisi</span>
                                    <span class="text-zinc-200 font-semibold">{{ $car->year }} &bull;
                                        {{ $car->transmission }}</span>
                                </div>
                                <div>
                                    <span
                                        class="text-zinc-500 text-[10px] uppercase font-bold tracking-wider block">Bahan
                                        Bakar</span>
                                    <span class="text-zinc-200 font-semibold">{{ $car->fuel_type }}</span>
                                </div>
                                <div class="col-span-2 pt-1 border-t border-zinc-900 flex justify-between items-center">
                                    <span class="text-zinc-500 text-[10px] uppercase font-bold tracking-wider">Jarak
                                        Tempuh & Kondisi</span>
                                    <span
                                        class="text-zinc-300 font-mono text-[11px]">{{ number_format($car->mileage, 0, ',', '.') }}
                                        km &bull; {{ $car->condition }}</span>
                                </div>
                            </div>
                        </div>

                        <!-- Card Bottom: Pricing & Actions -->
                        <div class="space-y-4 pt-4 border-t border-zinc-800/80">
                            <div class="flex items-center justify-between">
                                <span class="text-[11px] text-zinc-500 uppercase font-bold tracking-wider">Valuasi
                                    Harga</span>
                                <span class="text-lg font-extrabold text-gold-500 tracking-tight">
                                    Rp {{ number_format($car->price, 0, ',', '.') }}
                                </span>
                            </div>

                            <!-- Action Buttons -->
                            <div class="grid grid-cols-2 gap-2.5">
                                <a href="{{ route('admin.cars.edit', $car->id) }}"
                                    class="w-full flex items-center justify-center rounded-xl border border-zinc-700 bg-zinc-900 py-2.5 text-xs font-bold text-zinc-200 hover:border-gold-500 hover:bg-gold-500 hover:text-black transition-all shadow-sm">
                                    Edit Unit
                                </a>

                                <form action="{{ route('admin.cars.destroy', $car->id) }}" method="POST"
                                    onsubmit="return confirm('Yakin ingin menghapus {{ addslashes($car->brand_name . ' ' . $car->model) }} dari katalog?')"
                                    class="w-full">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="w-full flex items-center justify-center rounded-xl border border-red-500/20 bg-red-500/5 py-2.5 text-xs font-bold text-red-400 hover:bg-red-500 hover:text-white transition-all shadow-sm">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>
                    @empty
                    <div class="col-span-full glass-panel rounded-3xl border border-zinc-800 p-16 text-center">
                        <div class="text-5xl mb-4">🚘</div>
                        <p class="font-extrabold text-white text-base">Belum ada data kendaraan tersimpan</p>
                        <p class="mt-1 text-xs text-zinc-500 max-w-sm mx-auto leading-relaxed">
                            Mulai tambahkan unit mobil pertama Anda ke dalam sistem katalog digital eksklusif Mejeng
                            Auto.
                        </p>
                        <a href="{{ route('admin.cars.create') }}"
                            class="mt-6 inline-flex items-center justify-center rounded-2xl bg-gold-500 px-6 py-3.5 text-xs font-extrabold text-black hover:brightness-110 transition-all shadow-lg shadow-gold-500/15">
                            Tambah Mobil Sekarang
                        </a>
                    </div>
                    @endforelse

                </div>

                <!-- Empty Search Indicator -->
                <div id="noSearchResult"
                    class="hidden glass-panel rounded-3xl border border-zinc-800 p-12 text-center text-zinc-500 text-sm">
                    Tidak ada unit mobil yang cocok dengan kriteria pencarian Anda.
                </div>

            </section>

            <!-- FOOTER -->
            <footer
                class="pt-8 border-t border-zinc-900 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-zinc-500">
                <p>&copy; {{ date('Y') }} Mejeng Auto. Seluruh hak cipta dilindungi undang-undang.</p>
                <p class="font-mono text-[11px] text-zinc-400">Executive Dashboard & Inventory Control Unit.</p>
            </footer>

        </main>
    </div>

    <!-- Script Filter Pencarian & Status yang Dioptimalkan untuk Kartu -->
    <script>
    const searchInput = document.getElementById('searchCar');
    const statusFilter = document.getElementById('filterStatus');
    const carCards = document.querySelectorAll('.car-card');
    const noSearchResult = document.getElementById('noSearchResult');

    function filterCars() {
        const keyword = searchInput.value.toLowerCase().trim();
        const selectedStatus = statusFilter.value.toLowerCase();
        let visibleCount = 0;

        carCards.forEach((card) => {
            const searchText = card.dataset.search || '';
            const status = card.dataset.status || '';

            const matchesSearch = searchText.includes(keyword);
            const matchesStatus = !selectedStatus || status === selectedStatus;
            const visible = matchesSearch && matchesStatus;

            card.classList.toggle('hidden', !visible);

            if (visible) {
                visibleCount++;
            }
        });

        noSearchResult.classList.toggle(
            'hidden',
            visibleCount > 0 || carCards.length === 0
        );
    }

    searchInput.addEventListener('input', filterCars);
    statusFilter.addEventListener('change', filterCars);
    </script>

</body>

</html>