<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mobil | Mejeng Auto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <style>
    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }
    </style>
</head>

<body class="min-h-screen bg-[#060608] text-zinc-100 selection:bg-[#dfb17b] selection:text-black antialiased">
    <!-- Background Ambient Glow -->
    <div class="fixed inset-0 pointer-events-none overflow-hidden">
        <div class="absolute -top-40 -left-40 h-96 w-96 rounded-full bg-[#dfb17b]/5 blur-[120px]"></div>
        <div class="absolute top-1/2 -right-40 h-96 w-96 rounded-full bg-amber-600/5 blur-[140px]"></div>
    </div>

    <main class="relative mx-auto max-w-5xl px-4 py-10 md:px-6 lg:py-16">
        <!-- Back Navigation -->
        <a href="{{ route('dashboard.admin') }}"
            class="group inline-flex items-center gap-2 text-xs font-semibold tracking-wider uppercase text-zinc-400 transition-colors hover:text-[#dfb17b]">
            <span class="transition-transform duration-200 group-hover:-translate-x-1">&larr;</span> Kembali ke
            Dashboard
        </a>

        <!-- Main Card Container -->
        <div
            class="mt-6 overflow-hidden rounded-3xl border border-zinc-800/80 bg-[#0f0f13]/90 shadow-2xl backdrop-blur-xl">
            <!-- Header Banner Inside Card -->
            <div
                class="border-b border-zinc-800/80 bg-gradient-to-r from-zinc-900/50 via-[#0f0f13] to-zinc-900/50 p-6 md:p-10">
                <div class="flex items-center gap-3">
                    <span
                        class="inline-block h-2 w-2 rounded-full bg-[#dfb17b] shadow-[0_0_12px_rgba(223,177,123,0.8)]"></span>
                    <p class="text-xs font-bold uppercase tracking-[4px] text-[#dfb17b]">Manajemen Katalog Eksklusif</p>
                </div>
                <h1 class="mt-3 text-3xl font-extrabold tracking-tight md:text-4xl">Tambah Mobil Baru</h1>
                <p class="mt-2 text-sm text-zinc-400 max-w-2xl leading-relaxed">
                    Daftarkan unit kendaraan baru ke dalam sistem. Pastikan seluruh spesifikasi terisi akurat agar
                    langsung tayang dengan sempurna di katalog digital.
                </p>
            </div>

            <!-- Error Notification Alert -->
            @if($errors->any())
            <div
                class="mx-6 mt-6 md:mx-10 rounded-2xl border border-red-900/50 bg-red-950/30 p-4 text-sm text-red-300 backdrop-blur-md">
                <div class="flex items-center gap-2 font-semibold text-red-400 mb-1">
                    <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    Terdapat beberapa kesalahan input:
                </div>
                <ul class="list-inside list-disc space-y-1 pl-5 text-xs text-red-400/90">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Form Content -->
            <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data"
                class="p-6 md:p-10 space-y-8">
                @csrf

                <!-- Section 1: Informasi Dasar -->
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-500 mb-4 flex items-center gap-2">
                        <span>01</span> <span class="h-[1px] w-8 bg-zinc-800"></span> Informasi Unit
                    </h3>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <!-- Brand -->
                        <div>
                            <label class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Merek
                                Mobil <span class="text-[#dfb17b]">*</span></label>
                            <select name="brand_id" required
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 px-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                                <option value="" class="bg-zinc-900 text-zinc-500">Pilih merek kendaraan</option>
                                @foreach($brands as $brand)
                                <option value="{{ $brand->id }}" @selected(old('brand_id')==$brand->id)
                                    class="bg-zinc-950 text-zinc-200">
                                    {{ $brand->name }}
                                </option>
                                @endforeach
                            </select>
                            @if($brands->isEmpty())
                            <p class="mt-2 text-xs text-amber-400/90 flex items-center gap-1">
                                <span>⚠️</span> Belum ada merek. Tambahkan data di tabel car_brands terlebih dahulu.
                            </p>
                            @endif
                        </div>

                        <!-- Model -->
                        <div>
                            <label class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Model
                                Mobil <span class="text-[#dfb17b]">*</span></label>
                            <input name="model" value="{{ old('model') }}" required maxlength="150"
                                placeholder="Contoh: Civic Type R"
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 px-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                        </div>

                        <!-- Variant -->
                        <div>
                            <label
                                class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Varian</label>
                            <input name="variant" value="{{ old('variant') }}" maxlength="100"
                                placeholder="Contoh: RS Turbo / Facelift"
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 px-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                        </div>

                        <!-- Year -->
                        <div>
                            <label class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Tahun
                                Pembuatan <span class="text-[#dfb17b]">*</span></label>
                            <input type="number" name="year" value="{{ old('year') }}" min="1950"
                                max="{{ date('Y') + 1 }}" required placeholder="2024"
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 px-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                        </div>
                    </div>
                </div>

                <div class="h-[1px] w-full bg-zinc-800/60"></div>

                <!-- Section 2: Spesifikasi & Finansial -->
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-500 mb-4 flex items-center gap-2">
                        <span>02</span> <span class="h-[1px] w-8 bg-zinc-800"></span> Spesifikasi & Kondisi
                    </h3>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-3">
                        <!-- Price -->
                        <div>
                            <label class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Harga
                                (Rupiah) <span class="text-[#dfb17b]">*</span></label>
                            <div class="relative">
                                <span
                                    class="absolute inset-y-0 left-0 flex items-center pl-4 text-xs font-bold text-zinc-500">Rp</span>
                                <input type="number" name="price" value="{{ old('price') }}" min="0" step="1000"
                                    required placeholder="350000000"
                                    class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 pl-10 pr-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                            </div>
                        </div>

                        <!-- Mileage -->
                        <div>
                            <label
                                class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Kilometer
                                (KM) <span class="text-[#dfb17b]">*</span></label>
                            <input type="number" name="mileage" value="{{ old('mileage', 0) }}" min="0" required
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 px-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                        </div>

                        <!-- Transmission -->
                        <div>
                            <label
                                class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Transmisi
                                <span class="text-[#dfb17b]">*</span></label>
                            <select name="transmission" required
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 px-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                                <option value="Otomatis" @selected(old('transmission')==='Otomatis' )
                                    class="bg-zinc-950">Otomatis</option>
                                <option value="Manual" @selected(old('transmission')==='Manual' ) class="bg-zinc-950">
                                    Manual</option>
                            </select>
                        </div>

                        <!-- Fuel Type -->
                        <div>
                            <label class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Bahan
                                Bakar <span class="text-[#dfb17b]">*</span></label>
                            <select name="fuel_type" required
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 px-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                                @foreach(['Bensin', 'Diesel', 'Hybrid', 'Listrik', 'Lainnya'] as $fuel)
                                <option value="{{ $fuel }}" @selected(old('fuel_type', 'Bensin' )===$fuel)
                                    class="bg-zinc-950">
                                    {{ $fuel }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Condition -->
                        <div>
                            <label class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Kondisi
                                Kendaraan <span class="text-[#dfb17b]">*</span></label>
                            <select name="condition" required
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 px-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                                <option value="Bekas" @selected(old('condition', 'Bekas' )==='Bekas' )
                                    class="bg-zinc-950">Bekas (Second)</option>
                                <option value="Baru" @selected(old('condition')==='Baru' ) class="bg-zinc-950">Baru
                                    (Brand New)</option>
                            </select>
                        </div>

                        <!-- Status -->
                        <div>
                            <label class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Status
                                Katalog <span class="text-[#dfb17b]">*</span></label>
                            <select name="status" required
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 px-4 py-3 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">
                                <option value="Tersedia" @selected(old('status', 'Tersedia' )==='Tersedia' )
                                    class="bg-zinc-950">Tersedia</option>
                                <option value="Dipesan" @selected(old('status')==='Dipesan' ) class="bg-zinc-950">
                                    Dipesan</option>
                                <option value="Terjual" @selected(old('status')==='Terjual' ) class="bg-zinc-950">
                                    Terjual</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="h-[1px] w-full bg-zinc-800/60"></div>

                <!-- Section 3: Media & Keterangan -->
                <div>
                    <h3 class="text-xs font-bold uppercase tracking-wider text-zinc-500 mb-4 flex items-center gap-2">
                        <span>03</span> <span class="h-[1px] w-8 bg-zinc-800"></span> Media & Deskripsi
                    </h3>
                    <div class="space-y-5">
                        <!-- File Upload with Premium Border -->
                        <div>
                            <label class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Foto
                                Utama Mobil</label>
                            <label
                                class="flex flex-col items-center justify-center rounded-2xl border-2 border-dashed border-zinc-800 bg-zinc-950/40 p-6 text-center cursor-pointer transition-all hover:border-[#dfb17b]/50 hover:bg-zinc-950/80">
                                <div class="flex flex-col items-center justify-center pt-2 pb-3">
                                    <svg class="w-8 h-8 mb-3 text-zinc-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="mb-1 text-sm text-zinc-300 font-medium">Klik untuk mengunggah foto</p>
                                    <p class="text-xs text-zinc-500">Format JPG, PNG, atau WebP (Maksimal 2 MB)</p>
                                </div>
                                <input type="file" name="image" accept=".jpg,.jpeg,.png,.webp" class="hidden">
                            </label>
                        </div>

                        <!-- Description -->
                        <div>
                            <label
                                class="mb-2 block text-xs font-medium uppercase tracking-wider text-zinc-400">Deskripsi
                                & Keunggulan</label>
                            <textarea name="description" rows="4"
                                placeholder="Jelaskan kondisi riil, riwayat servis, atau keunggulan spesial dari kendaraan ini..."
                                class="w-full rounded-xl border border-zinc-800 bg-zinc-950/80 p-4 text-sm text-zinc-200 shadow-inner transition-all focus:border-[#dfb17b] focus:outline-none focus:ring-1 focus:ring-[#dfb17b]">{{ old('description') }}</textarea>
                        </div>
                    </div>
                </div>

                <!-- Action Buttons Footer -->
                <div class="flex flex-col-reverse gap-3 border-t border-zinc-800/80 pt-6 sm:flex-row sm:justify-end">
                    <a href="{{ route('dashboard.admin') }}"
                        class="inline-flex items-center justify-center rounded-xl border border-zinc-700/80 bg-transparent px-6 py-3.5 text-center text-sm font-semibold text-zinc-300 transition-all hover:bg-zinc-900 hover:text-white">
                        Batal
                    </a>
                    <button type="submit" @disabled($brands->isEmpty())
                        class="inline-flex items-center justify-center rounded-xl bg-gradient-to-r from-[#dfb17b]
                        to-[#c49a6c] px-8 py-3.5 text-sm font-bold text-black shadow-lg shadow-[#dfb17b]/10
                        transition-all hover:brightness-110 active:scale-[0.98] disabled:cursor-not-allowed
                        disabled:opacity-50">
                        Simpan Mobil Baru
                    </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>