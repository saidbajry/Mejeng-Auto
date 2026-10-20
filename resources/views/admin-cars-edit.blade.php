<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Mobil | Mejeng Auto</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
    tailwind.config = {
        theme: {
            extend: {
                colors: {
                    darkBg: '#0b0a09',
                    cardBg: '#161412',
                    inputBg: '#1f1c19',
                    borderDark: 'rgba(255, 255, 255, 0.08)',
                }
            }
        }
    }
    </script>
</head>

<body class="min-h-screen bg-darkBg text-slate-100 antialiased selection:bg-amber-500 selection:text-black pb-16">

    <!-- Top Glow Accent -->
    <div
        class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-4xl h-32 bg-amber-500/10 blur-[120px] pointer-events-none">
    </div>

    <main class="relative mx-auto max-w-3xl px-4 pt-10">

        <!-- Breadcrumb / Back Navigation -->
        <nav class="mb-6">
            <a href="{{ route('dashboard.admin') }}"
                class="inline-flex items-center gap-2 text-sm font-medium text-amber-400 hover:text-amber-300 transition-colors">
                <i class="fa-solid fa-arrow-left text-xs"></i>
                Kembali ke Dashboard
            </a>
        </nav>

        <!-- Header Section -->
        <div
            class="mb-8 flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4 border-b border-borderDark pb-6">
            <div>
                <h1 class="text-3xl font-bold tracking-tight text-white flex items-center gap-3">
                    <span
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-amber-500/10 text-amber-400 text-lg border border-amber-500/20">
                        <i class="fa-solid fa-car"></i>
                    </span>
                    Edit Data Mobil
                </h1>
                <p class="mt-1.5 text-sm text-slate-400">
                    Perbarui informasi kendaraan <span class="text-slate-200 font-medium">{{ $car->model }}</span> di
                    katalog Mejeng Auto.
                </p>
            </div>
            <div>
                <span
                    class="inline-flex items-center gap-1.5 rounded-full px-3 py-1 text-xs font-semibold 
                    {{ $car->status == 'Tersedia' ? 'bg-emerald-500/10 text-emerald-400 border border-emerald-500/20' : ($car->status == 'Dipesan' ? 'bg-amber-500/10 text-amber-400 border border-amber-500/20' : 'bg-rose-500/10 text-rose-400 border border-rose-500/20') }}">
                    <span
                        class="h-1.5 w-1.5 rounded-full {{ $car->status == 'Tersedia' ? 'bg-emerald-400' : ($car->status == 'Dipesan' ? 'bg-amber-400' : 'bg-rose-400') }}"></span>
                    Status: {{ $car->status }}
                </span>
            </div>
        </div>

        <!-- Error Alert -->
        @if ($errors->any())
        <div class="mb-6 rounded-2xl border border-rose-500/30 bg-rose-500/10 p-4 text-rose-300 backdrop-blur-md">
            <div class="flex items-center gap-2 font-semibold text-rose-200 mb-2">
                <i class="fa-solid fa-triangle-exclamation"></i>
                Terjadi kesalahan input:
            </div>
            <ul class="list-inside list-disc space-y-1 text-sm">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <!-- Main Form -->
        <form action="{{ route('admin.cars.update', $car->id) }}" method="POST" enctype="multipart/form-data"
            class="space-y-6">

            @csrf
            @method('PUT')

            <!-- Section 1: Informasi Dasar -->
            <div class="rounded-2xl border border-borderDark bg-cardBg p-6 shadow-xl space-y-5">
                <h2 class="text-base font-semibold text-white flex items-center gap-2 border-b border-borderDark pb-3">
                    <i class="fa-solid fa-circle-info text-amber-500"></i>
                    Informasi Utama
                </h2>

                <div>
                    <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Merek
                        Kendaraan</label>
                    <div class="relative">
                        <select name="brand_id" required
                            class="w-full appearance-none rounded-xl border border-borderDark bg-inputBg px-4 py-3 text-sm text-white focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                            @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" class="bg-[#1a1816]"
                                {{ old('brand_id', $car->brand_id) == $brand->id ? 'selected' : '' }}>
                                {{ $brand->name }}
                            </option>
                            @endforeach
                        </select>
                        <div
                            class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                            <i class="fa-solid fa-chevron-down text-xs"></i>
                        </div>
                    </div>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Model</label>
                        <input name="model" required maxlength="150" value="{{ old('model', $car->model) }}"
                            placeholder="Contoh: Civic Turbo"
                            class="w-full rounded-xl border border-borderDark bg-inputBg px-4 py-3 text-sm text-white placeholder-slate-600 focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                    </div>
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Varian</label>
                        <input name="variant" maxlength="100" value="{{ old('variant', $car->variant) }}"
                            placeholder="Contoh: RS CVT"
                            class="w-full rounded-xl border border-borderDark bg-inputBg px-4 py-3 text-sm text-white placeholder-slate-600 focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                    </div>
                </div>
            </div>

            <!-- Section 2: Spesifikasi & Harga -->
            <div class="rounded-2xl border border-borderDark bg-cardBg p-6 shadow-xl space-y-5">
                <h2 class="text-base font-semibold text-white flex items-center gap-2 border-b border-borderDark pb-3">
                    <i class="fa-solid fa-gauge-high text-amber-500"></i>
                    Spesifikasi & Harga
                </h2>

                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Tahun
                            Pembuatan</label>
                        <input type="number" name="year" required min="1950" max="{{ date('Y') + 1 }}"
                            value="{{ old('year', $car->year) }}"
                            class="w-full rounded-xl border border-borderDark bg-inputBg px-4 py-3 text-sm text-white focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                    </div>
                    <div>
                        <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Harga
                            (Rp)</label>
                        <div class="relative">
                            <span
                                class="absolute inset-y-0 left-0 flex items-center pl-4 text-xs font-semibold text-slate-500">Rp</span>
                            <input type="number" name="price" required min="0" step="0.01"
                                value="{{ old('price', $car->price) }}"
                                class="w-full rounded-xl border border-borderDark bg-inputBg pl-11 pr-4 py-3 text-sm text-white focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                        </div>
                    </div>
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Kilometer
                            (KM)</label>
                        <input type="number" name="mileage" required min="0" value="{{ old('mileage', $car->mileage) }}"
                            class="w-full rounded-xl border border-borderDark bg-inputBg px-4 py-3 text-sm text-white focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                    </div>
                    <div>
                        <label
                            class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Transmisi</label>
                        <div class="relative">
                            <select name="transmission" required
                                class="w-full appearance-none rounded-xl border border-borderDark bg-inputBg px-4 py-3 text-sm text-white focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                                @foreach (['Manual', 'Otomatis'] as $option)
                                <option value="{{ $option }}" class="bg-[#1a1816]"
                                    {{ old('transmission', $car->transmission) == $option ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Bahan
                            Bakar</label>
                        <div class="relative">
                            <select name="fuel_type" required
                                class="w-full appearance-none rounded-xl border border-borderDark bg-inputBg px-4 py-3 text-sm text-white focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                                @foreach (['Bensin', 'Diesel', 'Hybrid', 'Listrik', 'Lainnya'] as $option)
                                <option value="{{ $option }}" class="bg-[#1a1816]"
                                    {{ old('fuel_type', $car->fuel_type) == $option ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div>
                        <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Kondisi
                            Kendaraan</label>
                        <div class="relative">
                            <select name="condition" required
                                class="w-full appearance-none rounded-xl border border-borderDark bg-inputBg px-4 py-3 text-sm text-white focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                                @foreach (['Baru', 'Bekas'] as $option)
                                <option value="{{ $option }}" class="bg-[#1a1816]"
                                    {{ old('condition', $car->condition) == $option ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Status
                            Mobil</label>
                        <div class="relative">
                            <select name="status" required
                                class="w-full appearance-none rounded-xl border border-borderDark bg-inputBg px-4 py-3 text-sm text-white focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">
                                @foreach (['Tersedia', 'Dipesan', 'Terjual'] as $option)
                                <option value="{{ $option }}" class="bg-[#1a1816]"
                                    {{ old('status', $car->status) == $option ? 'selected' : '' }}>
                                    {{ $option }}
                                </option>
                                @endforeach
                            </select>
                            <div
                                class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-slate-400">
                                <i class="fa-solid fa-chevron-down text-xs"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <label class="mb-2 block text-xs font-semibold uppercase tracking-wider text-slate-400">Deskripsi /
                        Catatan Tambahan</label>
                    <textarea name="description" rows="4"
                        placeholder="Tuliskan kondisi detail, kelengkapan surat, atau fitur unggulan..."
                        class="w-full rounded-xl border border-borderDark bg-inputBg p-4 text-sm text-white placeholder-slate-600 focus:border-amber-500 focus:outline-none focus:ring-1 focus:ring-amber-500 transition-all">{{ old('description', $car->description) }}</textarea>
                </div>
            </div>

            <!-- Section 3: Media / Foto -->
            <div class="rounded-2xl border border-borderDark bg-cardBg p-6 shadow-xl space-y-5">
                <h2 class="text-base font-semibold text-white flex items-center gap-2 border-b border-borderDark pb-3">
                    <i class="fa-solid fa-image text-amber-500"></i>
                    Foto Kendaraan
                </h2>

                @if ($car->image_path)
                <div>
                    <p class="mb-2.5 text-xs font-semibold uppercase tracking-wider text-slate-400">Foto Saat Ini</p>
                    <div class="relative group overflow-hidden rounded-xl border border-borderDark sm:w-80 bg-black/40">
                        <img src="{{ asset('storage/' . $car->image_path) }}" alt="Foto {{ $car->model }}"
                            class="h-48 w-full object-cover transition-transform duration-300 group-hover:scale-105">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity flex items-end p-3">
                            <span class="text-xs text-slate-200 font-medium">Foto Aktif di Katalog</span>
                        </div>
                    </div>
                </div>
                @endif

                <div>
                    <label class="mb-2.5 block text-xs font-semibold uppercase tracking-wider text-slate-400">Ganti Foto
                        Baru (Opsional)</label>
                    <label
                        class="flex flex-col items-center justify-center w-full h-32 border-2 border-dashed border-borderDark rounded-xl cursor-pointer bg-inputBg hover:border-amber-500/50 hover:bg-[#25221f] transition-all group">
                        <div class="flex flex-col items-center justify-center pt-5 pb-6 px-4 text-center">
                            <i
                                class="fa-solid fa-cloud-arrow-up text-2xl text-slate-400 group-hover:text-amber-400 mb-2 transition-colors"></i>
                            <p class="text-sm text-slate-300 font-medium" id="file-label">Klik untuk pilih foto atau
                                seret ke sini</p>
                            <p class="mt-1 text-xs text-slate-500">JPG, PNG, atau WebP (Maksimal 2 MB)</p>
                        </div>
                        <input type="file" name="image" id="image-input" accept=".jpg,.jpeg,.png,.webp" class="hidden"
                            onchange="updateFileName(this)">
                    </label>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex items-center gap-4 pt-2">
                <a href="{{ route('dashboard.admin') }}"
                    class="w-1/3 rounded-xl border border-borderDark bg-cardBg py-3.5 text-center text-sm font-semibold text-slate-300 hover:bg-white/5 hover:text-white transition-all">
                    Batal
                </a>
                <button type="submit"
                    class="w-2/3 rounded-xl bg-amber-500 py-3.5 text-center text-sm font-bold text-slate-950 hover:bg-amber-400 shadow-lg shadow-amber-500/15 transition-all flex items-center justify-center gap-2">
                    <i class="fa-solid fa-floppy-disk"></i>
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </main>

    <!-- Script to show selected filename -->
    <script>
    function updateFileName(input) {
        const label = document.getElementById('file-label');
        if (input.files && input.files[0]) {
            label.textContent = "File dipilih: " + input.files[0].name;
            label.classList.add('text-amber-400');
        }
    }
    </script>
</body>

</html>