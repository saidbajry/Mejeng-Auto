<!DOCTYPE html>
<html lang="id" class="h-full scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pelanggan | Mejeng Auto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    brand: {
                        500: '#f43f5e',
                        600: '#e11d48'
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
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body class="min-h-full bg-surface text-zinc-100 font-sans antialiased flex selection:bg-brand-600 selection:text-white"
    x-data="{ 
          sidebarOpen: false, 
          activeTab: 'overview', 
          creditPrice: 250000000, 
          dpPercent: 20, 
          tenure: 36, 
          showAddCarModal: false,
          newCar: { name: '', brand: '', plate: '', year: '', vin: '' },
          cars: [
              { name: 'Toyota GR Yaris', brand: 'Toyota', plate: 'B 2456 TPA', year: '2024', vin: 'MHF8392019482', km: '450 KM / 14 Hari' }
          ],
          addCar() {
              if(this.newCar.name && this.newCar.brand) {
                  this.cars.push({
                      name: this.newCar.name,
                      brand: this.newCar.brand,
                      plate: this.newCar.plate || 'B 1234 XYZ',
                      year: this.newCar.year || '2025',
                      vin: this.newCar.vin || 'VIN9988776655',
                      km: '10.000 KM / 6 Bulan'
                  });
                  this.newCar = { name: '', brand: '', plate: '', year: '', vin: '' };
                  this.showAddCarModal = false;
                  alert('Armada berhasil ditambahkan ke garasi digital!');
              } else {
                  alert('Mohon isi minimal Nama Mobil dan Merek!');
              }
          },
          get calculatedDP() { return (this.creditPrice * this.dpPercent) / 100; }, 
          get loanAmount() { return this.creditPrice - this.calculatedDP; }, 
          get monthlyInstallment() { let rate = 0.12/12; return (this.loanAmount * rate * Math.pow(1+rate, this.tenure)) / (Math.pow(1+rate, this.tenure) - 1); } 
      }">

    <!-- Wrapper Alpine.js untuk state sidebar (isOpen: true = terbuka penuh, false = menyusut) -->
    <div x-data="{ isOpen: true }" class="flex">

        <!-- Tombol Toggle Mobile (Muncul di layar kecil) -->
        <button @click="isOpen = !isOpen"
            class="fixed top-4 left-4 z-50 lg:hidden flex h-10 w-10 items-center justify-center rounded-xl bg-zinc-900 border border-zinc-800 text-brand-500 shadow-lg">
            <span x-text="isOpen ? '✕' : '☰'"></span>
        </button>

        <!-- Sidebar Navigasi -->
        <aside :class="[
            isOpen ? 'translate-x-0 w-64' : '-translate-x-full lg:translate-x-0 lg:w-20',
        ]"
            class="fixed inset-y-0 left-0 z-50 bg-card border-r border-zinc-800/85 p-4 lg:p-6 flex flex-col justify-between transition-all duration-300 ease-in-out lg:sticky lg:top-0 lg:h-screen overflow-y-auto">

            <div>
                <!-- Logo Brand & Tombol Collapse Desktop -->
                <div class="flex items-center justify-between mb-8 overflow-hidden">
                    <div class="flex items-center gap-3">
                        <div
                            class="w-9 h-9 bg-brand-600 text-white rounded-xl flex items-center justify-center font-bold text-lg shadow-lg shadow-brand-500/30 shrink-0">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <!-- Teks Brand (Sembunyikan saat tertutup di desktop) -->
                        <div :class="!isOpen && 'lg:hidden'">
                            <span class="font-extrabold text-sm tracking-tight text-white block leading-none">MEJENG
                                AUTO</span>
                            <span
                                class="text-[9px] text-brand-400 font-bold uppercase tracking-widest mt-0.5 block">Client
                                Portal</span>
                        </div>
                    </div>

                    <!-- Tombol Collapse Khusus Desktop -->
                    <button @click="isOpen = !isOpen"
                        class="hidden lg:flex h-7 w-7 items-center justify-center rounded-lg bg-zinc-900 border border-zinc-800 text-zinc-400 hover:text-brand-500 transition-colors text-xs shrink-0">
                        <span x-text="isOpen ? '◀' : '▶'"></span>
                    </button>
                </div>

                <!-- Menu Navigation -->
                <nav class="space-y-1.5 text-xs font-semibold">
                    <!-- Ringkasan Utama -->
                    <button @click="activeTab = 'overview'; window.scrollTo({top: 0, behavior: 'smooth'})"
                        :class="activeTab === 'overview' ? 'bg-brand-600/10 text-brand-500 border-brand-500/30' : 'text-zinc-400 hover:text-white hover:bg-zinc-950'"
                        class="w-full flex items-center gap-3 px-3 lg:px-4 py-3 rounded-xl border border-transparent transition text-left cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
                        </svg>
                        <span :class="!isOpen && 'lg:hidden'">Ringkasan Utama</span>
                    </button>

                    <!-- Link Eksternal Beli Mobil -->
                    <a href="{{ url('/beli-mobil') }}"
                        class="w-full flex items-center gap-3 px-3 lg:px-4 py-3 rounded-xl border border-transparent text-zinc-400 hover:text-white hover:bg-zinc-950 transition text-left">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                        <span :class="!isOpen && 'lg:hidden'">Beli Mobil</span>
                    </a>

                    <!-- Link Eksternal Layanan Servis -->
                    <a href="{{ url('/layanan-servis') }}"
                        class="w-full flex items-center gap-3 px-3 lg:px-4 py-3 rounded-xl border border-transparent text-zinc-400 hover:text-white hover:bg-zinc-950 transition text-left">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span :class="!isOpen && 'lg:hidden'">Layanan & Servis</span>
                    </a>

                    <!-- Simulasi Kredit Mobil -->
                    <button @click="activeTab = 'simulation'; window.scrollTo({top: 0, behavior: 'smooth'})"
                        :class="activeTab === 'simulation' ? 'bg-brand-600/10 text-brand-500 border-brand-500/30' : 'text-zinc-400 hover:text-white hover:bg-zinc-950'"
                        class="w-full flex items-center gap-3 px-3 lg:px-4 py-3 rounded-xl border border-transparent transition text-left cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                        <span :class="!isOpen && 'lg:hidden'">Simulasi Kredit Mobil</span>
                    </button>

                    <!-- Garasi & Prediksi Servis -->
                    <button @click="activeTab = 'garage'; window.scrollTo({top: 0, behavior: 'smooth'})"
                        :class="activeTab === 'garage' ? 'bg-brand-600/10 text-brand-500 border-brand-500/30' : 'text-zinc-400 hover:text-white hover:bg-zinc-950'"
                        class="w-full flex items-center gap-3 px-3 lg:px-4 py-3 rounded-xl border border-transparent transition text-left cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                        <span :class="!isOpen && 'lg:hidden'">Garasi & Prediksi Servis</span>
                    </button>

                    <!-- Riwayat Perawatan -->
                    <button @click="activeTab = 'history'; window.scrollTo({top: 0, behavior: 'smooth'})"
                        :class="activeTab === 'history' ? 'bg-brand-600/10 text-brand-500 border-brand-500/30' : 'text-zinc-400 hover:text-white hover:bg-zinc-950'"
                        class="w-full flex items-center gap-3 px-3 lg:px-4 py-3 rounded-xl border border-transparent transition text-left cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                        <span :class="!isOpen && 'lg:hidden'">Riwayat Perawatan</span>
                    </button>
                </nav>
            </div>

            <!-- Logout Action -->
            <div class="pt-4 border-t border-zinc-800">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                        class="w-full flex items-center gap-3 px-3 lg:px-4 py-3 rounded-xl text-red-400 hover:bg-red-500/10 transition text-xs font-bold cursor-pointer">
                        <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                        </svg>
                        <span :class="!isOpen && 'lg:hidden'">Keluar Sesi</span>
                    </button>
                </form>
            </div>
        </aside>
    </div>
    <!-- Main Content Area -->
    <main class="flex-1 flex flex-col min-w-0 bg-surface">

        <!-- Top Navbar -->
        <header
            class="h-20 bg-card/60 backdrop-blur-xl border-b border-zinc-800/85 px-6 lg:px-10 flex items-center justify-between sticky top-0 z-40">
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden text-zinc-400 hover:text-white p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div>
                    <h1 class="text-lg font-black text-white tracking-tight">Halo,
                        {{ auth()->user()->name ?? 'Pelanggan' }}! 👋</h1>
                    <p class="text-xs text-zinc-400">Portal Eksklusif Pelanggan Mejeng Auto.</p>
                </div>
            </div>

            <!-- Profile Badge -->
            <div class="flex items-center gap-3 bg-zinc-900 border border-zinc-800 px-4 py-2 rounded-2xl">
                <div
                    class="w-8 h-8 rounded-xl bg-brand-600/20 text-brand-500 flex items-center justify-center font-bold text-xs">
                    {{ substr(auth()->user()->name ?? 'P', 0, 1) }}
                </div>
                <div class="hidden sm:block text-left">
                    <p class="text-xs font-bold text-white">{{ auth()->user()->name ?? 'Pelanggan' }}</p>
                    <p class="text-[10px] text-brand-400 font-semibold uppercase tracking-wider">Verified Member</p>
                </div>
            </div>
        </header>

        <!-- Dynamic Body View Content -->
        <div class="p-6 lg:p-10 space-y-8 max-w-7xl mx-auto w-full">

            <!-- TAB 1: RINGKASAN UTAMA -->
            <div x-show="activeTab === 'overview'" class="space-y-8">
                <div
                    class="relative overflow-hidden bg-gradient-to-r from-brand-900/40 via-zinc-900 to-zinc-950 border border-brand-500/30 p-8 rounded-3xl shadow-2xl">
                    <div
                        class="absolute -right-10 -bottom-10 w-64 h-64 bg-brand-600/10 rounded-full blur-3xl pointer-events-none">
                    </div>
                    <div class="max-w-2xl relative z-10">
                        <span
                            class="bg-brand-600 text-white text-[10px] font-extrabold px-3 py-1 rounded-full uppercase tracking-wider">Command
                            Center Pelanggan</span>
                        <h2 class="text-2xl lg:text-3xl font-black text-white mt-3">Eksplorasi Seluruh Layanan Otomotif
                            Anda</h2>
                        <p class="text-xs text-zinc-300 mt-1 leading-relaxed">Akses cepat ke seluruh fitur utama mulai
                            dari katalog kendaraan, simulasi pembiayaan, garasi digital, hingga rekam jejak servis
                            resmi.</p>
                    </div>
                </div>

                <div>
                    <h3 class="text-base font-black text-white mb-4">Daftar Fitur Utama Dashboard</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">

                        <div @click="activeTab = 'catalog'; window.scrollTo({top: 0, behavior: 'smooth'})"
                            class="bg-card border border-zinc-800 p-6 rounded-2xl hover:border-brand-500/50 transition cursor-pointer group shadow-lg">
                            <div
                                class="w-10 h-10 rounded-xl bg-brand-600/10 text-brand-500 flex items-center justify-center font-bold text-lg mb-4 group-hover:scale-110 transition">
                                🚗</div>
                            <p class="text-xs text-zinc-400 mt-1.5 leading-relaxed">Informasi spesifikasi teknis
                                kendaraan, varian warna eksklusif, dan estimasi harga.</p>
                            <span
                                class="inline-flex items-center gap-1 text-xs font-bold text-brand-500 mt-4 group-hover:translate-x-1 transition">Buka
                                Fitur &rarr;</span>
                        </div>

                        <div @click="activeTab = 'simulation'; window.scrollTo({top: 0, behavior: 'smooth'})"
                            class="bg-card border border-zinc-800 p-6 rounded-2xl hover:border-brand-500/50 transition cursor-pointer group shadow-lg">
                            <div
                                class="w-10 h-10 rounded-xl bg-blue-600/10 text-blue-400 flex items-center justify-center font-bold text-lg mb-4 group-hover:scale-110 transition">
                                📊</div>
                            <h4 class="font-bold text-white text-base">Kalkulator Simulasi Kredit</h4>
                            <p class="text-xs text-zinc-400 mt-1.5 leading-relaxed">Perhitungan otomatis DP dan angsuran
                                bulanan fleksibel berdasarkan pilihan tenor.</p>
                            <span
                                class="inline-flex items-center gap-1 text-xs font-bold text-blue-400 mt-4 group-hover:translate-x-1 transition">Buka
                                Fitur &rarr;</span>
                        </div>

                        <div @click="activeTab = 'garage'; window.scrollTo({top: 0, behavior: 'smooth'})"
                            class="bg-card border border-zinc-800 p-6 rounded-2xl hover:border-brand-500/50 transition cursor-pointer group shadow-lg">
                            <div
                                class="w-10 h-10 rounded-xl bg-emerald-600/10 text-emerald-400 flex items-center justify-center font-bold text-lg mb-4 group-hover:scale-110 transition">
                                🛠️</div>
                            <h4 class="font-bold text-white text-base">Garasi & Prediksi Servis</h4>
                            <p class="text-xs text-zinc-400 mt-1.5 leading-relaxed">Manajemen profil pelanggan,
                                pendaftaran armada, dan indikator sisa kilometer preventif.</p>
                            <span
                                class="inline-flex items-center gap-1 text-xs font-bold text-emerald-400 mt-4 group-hover:translate-x-1 transition">Buka
                                Fitur &rarr;</span>
                        </div>

                        <div @click="activeTab = 'history'; window.scrollTo({top: 0, behavior: 'smooth'})"
                            class="bg-card border border-zinc-800 p-6 rounded-2xl hover:border-brand-500/50 transition cursor-pointer group shadow-lg">
                            <div
                                class="w-10 h-10 rounded-xl bg-purple-600/10 text-purple-400 flex items-center justify-center font-bold text-lg mb-4 group-hover:scale-110 transition">
                                📋</div>
                            <h4 class="font-bold text-white text-base">Transparansi Riwayat Servis</h4>
                            <p class="text-xs text-zinc-400 mt-1.5 leading-relaxed">Rekam jejak digital perawatan
                                kendaraan dan rincian pergantian suku cadang asli.</p>
                            <span
                                class="inline-flex items-center gap-1 text-xs font-bold text-purple-400 mt-4 group-hover:translate-x-1 transition">Buka
                                Fitur &rarr;</span>
                        </div>

                    </div>
                </div>
            </div>

            <!-- TAB 3: SIMULASI KREDIT -->
            <div x-show="activeTab === 'simulation'" class="space-y-6" style="display: none;" x-data="{
         creditPrice: 300000000,
         downPaymentPercent: 20,
         tenor: 36, // dalam bulan (12, 24, 36, 48, 60)
         interestRate: 8.5, // bunga flat per tahun (%)
         showSuccessModal: false, // State untuk popup
         
         // Hitung Nominal DP
         get nominalDP() {
             return this.creditPrice * (this.downPaymentPercent / 100);
         },
         
         // Hitung Pokok Hutang (OTR - DP)
         get principalDebt() {
             return this.creditPrice - this.nominalDP;
         },
         
         // Hitung Estimasi Cicilan per Bulan (Bunga Flat)
         get monthlyInstallment() {
             let years = this.tenor / 12;
             let totalInterest = this.principalDebt * (this.interestRate / 100) * years;
             let totalDebt = this.principalDebt + totalInterest;
             return totalDebt / this.tenor;
         },
         
         // Total Pembayaran Pertama (TDP) = DP + Cicilan Pertama + Estimasi Admin/Asuransi
         get totalFirstPayment() {
             return this.nominalDP + this.monthlyInstallment + 3000000;
         }
     }">

                <div>
                    <h2 class="text-xl font-black text-white tracking-tight">Kalkulator Simulasi Kredit Mobil</h2>
                    <p class="text-xs text-zinc-400">Masukkan harga kendaraan secara manual, pilih DP, dan tentukan
                        tenor cicilan Anda.</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Panel Kontrol Input -->
                    <div class="lg:col-span-2 bg-card border border-zinc-800 p-6 rounded-2xl space-y-5">

                        <!-- Harga Kendaraan (Input Manual) -->
                        <div>
                            <label class="block text-xs font-bold text-zinc-400 uppercase tracking-wider mb-2">
                                Harga Kendaraan (OTR Rp)
                            </label>
                            <div class="relative flex items-center">
                                <span class="absolute left-4 text-sm font-bold text-zinc-400">Rp</span>
                                <input type="number" x-model.number="creditPrice" min="50000000" max="5000000000"
                                    step="5000000"
                                    class="w-full bg-zinc-900 border border-zinc-800 focus:border-brand-500 rounded-xl py-3 pl-12 pr-4 text-white text-sm font-bold outline-none transition-all">
                            </div>
                            <p class="text-[11px] text-zinc-500 mt-1.5">
                                *Contoh: 300000000 (300 Juta) atau ketik bebas sesuai harga OTR pilihan Anda.
                            </p>
                        </div>

                        <!-- Pilihan Uang Muka (DP %) -->
                        <div>
                            <label class="block text-xs font-bold text-zinc-400 uppercase tracking-wider mb-2">
                                Uang Muka (DP)
                            </label>
                            <div class="grid grid-cols-4 gap-3">
                                <template x-for="dp in [20, 25, 30, 40]">
                                    <button type="button" @click="downPaymentPercent = dp"
                                        :class="downPaymentPercent === dp ? 'bg-brand-600 text-white border-brand-500' : 'bg-zinc-900 text-zinc-300 border-zinc-800 hover:border-zinc-700'"
                                        class="py-2.5 rounded-xl border text-xs font-bold transition-all cursor-pointer"
                                        x-text="dp + '%'">
                                    </button>
                                </template>
                            </div>
                            <p class="text-xs text-zinc-500 mt-2"
                                x-text="'Nominal DP: Rp ' + Number(nominalDP).toLocaleString('id-ID', {maximumFractionDigits: 0})">
                            </p>
                        </div>

                        <!-- Pilihan Tenor -->
                        <div>
                            <label class="block text-xs font-bold text-zinc-400 uppercase tracking-wider mb-2">
                                Pilihan Tenor (Jangka Waktu)
                            </label>
                            <div class="grid grid-cols-5 gap-2">
                                <template x-for="t in [12, 24, 36, 48, 60]">
                                    <button type="button" @click="tenor = t"
                                        :class="tenor === t ? 'bg-brand-600 text-white border-brand-500' : 'bg-zinc-900 text-zinc-300 border-zinc-800 hover:border-zinc-700'"
                                        class="py-2.5 rounded-xl border text-xs font-bold transition-all cursor-pointer"
                                        x-text="(t/12) + ' Tahun'">
                                    </button>
                                </template>
                            </div>
                        </div>

                    </div>

                    <!-- Panel Hasil Kalkulasi -->
                    <div
                        class="bg-gradient-to-br from-zinc-900 to-zinc-950 border border-brand-500/40 p-6 rounded-2xl flex flex-col justify-between shadow-2xl">
                        <div>
                            <span
                                class="bg-brand-600/20 text-brand-400 text-[10px] font-extrabold px-3 py-1 rounded-full uppercase">
                                Rincian Pembiayaan
                            </span>

                            <div class="mt-6 space-y-4 border-b border-zinc-800 pb-5">
                                <div>
                                    <span class="text-xs text-zinc-400">Estimasi Cicilan per Bulan</span>
                                    <p class="text-2xl font-black text-brand-500"
                                        x-text="'Rp ' + Number(monthlyInstallment).toLocaleString('id-ID', {maximumFractionDigits: 0})">
                                    </p>
                                </div>

                                <div class="flex justify-between text-xs">
                                    <span class="text-zinc-400">Total Pembayaran Pertama (TDP)*</span>
                                    <span class="text-white font-bold"
                                        x-text="'Rp ' + Number(totalFirstPayment).toLocaleString('id-ID', {maximumFractionDigits: 0})"></span>
                                </div>

                                <div class="flex justify-between text-xs">
                                    <span class="text-zinc-400">Suku Bunga Flat</span>
                                    <span class="text-zinc-300 font-semibold"
                                        x-text="interestRate + '% / tahun'"></span>
                                </div>
                            </div>

                            <p class="text-[10px] text-zinc-500 mt-3">
                                *TDP sudah termasuk DP murni, cicilan bulan pertama, serta estimasi biaya administrasi &
                                asuransi awal.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- POPUP MODAL NOTIFIKASI BERHASIL -->
                <div x-show="showSuccessModal"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm p-4"
                    style="display: none;" x-transition.opacity>

                    <div class="bg-zinc-900 border border-zinc-800 rounded-2xl max-w-md w-full p-6 text-center space-y-4 shadow-2xl relative"
                        @click.outside="showSuccessModal = false" x-transition>

                        <!-- Icon Sukses -->
                        <div
                            class="w-14 h-14 bg-brand-600/20 border border-brand-500/40 text-brand-500 rounded-full flex items-center justify-center mx-auto text-2xl font-bold">
                            ✓
                        </div>

                        <div>
                            <h3 class="text-lg font-black text-white tracking-tight">Pengajuan Berhasil Dikirim!</h3>
                            <p class="text-xs text-zinc-400 mt-1">
                                Terima kasih. Simulasi pembiayaan kendaraan Anda telah kami terima. Tim marketing kami
                                akan segera menghubungi Anda melalui nomor kontak terdaftar.
                            </p>
                        </div>

                        <div
                            class="bg-zinc-950/60 border border-zinc-800/80 rounded-xl p-3 text-left space-y-1.5 text-xs">
                            <div class="flex justify-between">
                                <span class="text-zinc-400">Harga OTR:</span>
                                <span class="text-white font-bold"
                                    x-text="'Rp ' + Number(creditPrice).toLocaleString('id-ID')"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-zinc-400">Estimasi Cicilan:</span>
                                <span class="text-brand-500 font-bold"
                                    x-text="'Rp ' + Number(monthlyInstallment).toLocaleString('id-ID', {maximumFractionDigits: 0}) + ' / bln'"></span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-zinc-400">Tenor:</span>
                                <span class="text-white font-bold"
                                    x-text="(tenor/12) + ' Tahun (' + tenor + ' Bulan)'"></span>
                            </div>
                        </div>

                        <button @click="showSuccessModal = false"
                            class="w-full bg-brand-600 hover:bg-brand-500 text-white font-bold py-3 rounded-xl text-xs cursor-pointer transition-all">
                            Tutup / Kembali
                        </button>
                    </div>
                </div>
            </div>

            <!-- TAB 4: GARASI DIGITAL & PREDIKSI SERVIS (DENGAN FITUR ADD INTERAKTIF) -->
            <div x-show="activeTab === 'garage'" class="space-y-6" style="display: none;">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-xl font-black text-white tracking-tight">Garasi Digital & Prediksi Servis</h2>
                        <p class="text-xs text-zinc-400">Manajemen profil pelanggan dan pendaftaran armada/kendaraan
                            pribadi yang dimiliki.</p>
                    </div>
                    <button @click="showAddCarModal = true"
                        class="bg-brand-600 hover:bg-brand-500 text-white font-bold px-4 py-2.5 rounded-xl text-xs transition shadow-lg shadow-brand-600/30 cursor-pointer">
                        + Tambah Armada
                    </button>
                </div>

                <!-- Grid Kartu Mobil Dinamis -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <template x-for="car in cars">
                        <div class="bg-card border border-zinc-800 p-6 rounded-2xl space-y-4 shadow-xl">
                            <div class="flex items-center justify-between">
                                <span
                                    class="bg-emerald-500/10 text-emerald-400 text-[10px] font-bold px-3 py-1 rounded-full">Kondisi
                                    Prima</span>
                                <span class="text-xs text-zinc-500" x-text="'Plat: ' + car.plate"></span>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold text-white" x-text="car.name + ' (' + car.year + ')'"></h3>
                                <p class="text-xs text-zinc-400"
                                    x-text="'Merek: ' + car.brand + ' • No. Rangka: ' + car.vin"></p>
                            </div>
                            <div class="p-4 bg-zinc-950 rounded-xl border border-zinc-800 space-y-2">
                                <div class="flex justify-between text-xs font-bold">
                                    <span class="text-zinc-400">Sisa Interval Servis Preventif</span>
                                    <span class="text-brand-500" x-text="car.km"></span>
                                </div>
                                <div class="w-full bg-zinc-900 h-2 rounded-full overflow-hidden">
                                    <div class="bg-brand-600 h-full w-[85%]"></div>
                                </div>
                            </div>
                            <a href="{{ url('/layanan-servis') }}"
                                class="block text-center w-full bg-zinc-900 hover:bg-zinc-800 text-white font-bold py-3 rounded-xl border border-zinc-700 text-xs transition">Jadwalkan
                                Servis Bengkel</a>
                        </div>
                    </template>
                </div>

                <!-- Modal Form Tambah Armada -->
                <div x-show="showAddCarModal"
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm p-4"
                    style="display: none;">
                    <div
                        class="bg-card border border-zinc-800 p-6 sm:p-8 rounded-3xl max-w-md w-full space-y-4 shadow-2xl">
                        <div class="flex justify-between items-center pb-3 border-b border-zinc-800">
                            <h3 class="font-bold text-white text-base">Daftarkan Kendaraan Baru</h3>
                            <button @click="showAddCarModal = false"
                                class="text-zinc-400 hover:text-white font-bold text-sm">✕</button>
                        </div>
                        <div class="space-y-3">
                            <div>
                                <label class="block text-[11px] font-bold text-zinc-400 uppercase mb-1">Nama Mobil /
                                    Model</label>
                                <input type="text" x-model="newCar.name"
                                    class="w-full bg-zinc-950 border border-zinc-800 px-4 py-3 rounded-xl text-white text-xs"
                                    placeholder="Contoh: Honda Civic Type R">
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-zinc-400 uppercase mb-1">Merek</label>
                                <input type="text" x-model="newCar.brand"
                                    class="w-full bg-zinc-950 border border-zinc-800 px-4 py-3 rounded-xl text-white text-xs"
                                    placeholder="Contoh: Honda">
                            </div>
                            <div class="grid grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-[11px] font-bold text-zinc-400 uppercase mb-1">Plat
                                        Nomor</label>
                                    <input type="text" x-model="newCar.plate"
                                        class="w-full bg-zinc-950 border border-zinc-800 px-4 py-3 rounded-xl text-white text-xs"
                                        placeholder="B 1234 ABC">
                                </div>
                                <div>
                                    <label
                                        class="block text-[11px] font-bold text-zinc-400 uppercase mb-1">Tahun</label>
                                    <input type="text" x-model="newCar.year"
                                        class="w-full bg-zinc-950 border border-zinc-800 px-4 py-3 rounded-xl text-white text-xs"
                                        placeholder="2025">
                                </div>
                            </div>
                            <div>
                                <label class="block text-[11px] font-bold text-zinc-400 uppercase mb-1">Nomor Rangka
                                    (VIN)</label>
                                <input type="text" x-model="newCar.vin"
                                    class="w-full bg-zinc-950 border border-zinc-800 px-4 py-3 rounded-xl text-white text-xs"
                                    placeholder="MHF...">
                            </div>
                        </div>
                        <div class="flex gap-3 pt-2">
                            <button @click="showAddCarModal = false"
                                class="w-1/2 bg-zinc-900 hover:bg-zinc-800 text-zinc-300 font-bold py-3 rounded-xl text-xs">Batal</button>
                            <button @click="addCar()"
                                class="w-1/2 bg-brand-600 hover:bg-brand-500 text-white font-bold py-3 rounded-xl text-xs shadow-lg">Simpan
                                Armada</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- TAB 5: RIWAYAT PERAWATAN -->
            <div x-show="activeTab === 'history'" class="space-y-6" style="display: none;">
                <div>
                    <h2 class="text-xl font-black text-white tracking-tight">Transparansi Riwayat Servis</h2>
                    <p class="text-xs text-zinc-400">Rekam jejak digital perawatan kendaraan dan rincian pergantian suku
                        cadang sebelumnya di bengkel resmi.</p>
                </div>
                <div class="bg-card border border-zinc-800 rounded-2xl overflow-hidden shadow-xl">
                    <div class="p-6 border-b border-zinc-800 flex justify-between items-center">
                        <h3 class="font-bold text-white text-sm">Log Rekam Jejak Servis Kendaraan</h3>
                        <a href="{{ url('/layanan-servis') }}"
                            class="text-xs font-bold text-brand-500 hover:underline">+ Buat Booking Servis Baru</a>
                    </div>
                    <div class="divide-y divide-zinc-800/80 text-xs">
                        <div class="p-5 flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4">
                            <div>
                                <span
                                    class="bg-blue-500/10 text-blue-400 font-bold px-2.5 py-1 rounded-full text-[10px]">Servis
                                    10.000 KM</span>
                                <h4 class="font-bold text-white mt-2">Cabang Purwakarta Kota</h4>
                                <p class="text-zinc-400 mt-0.5">Penggantian Oli Mesin Motul, Filter Udara OEM,
                                    Pengecekan Rem.</p>
                            </div>
                            <div class="text-right">
                                <span class="text-zinc-500 block">12 Januari 2026</span>
                                <span class="font-bold text-white">Rp 1.250.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>

</body>

</html>