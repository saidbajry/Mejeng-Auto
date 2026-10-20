<!DOCTYPE html>
<html lang="id" class="h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Eksklusif | Mejeng Auto</title>
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
                    surface: '#09090b'
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

<body
    class="h-full bg-surface text-zinc-100 font-sans antialiased flex items-center justify-center relative overflow-x-hidden p-4 selection:bg-brand-600 selection:text-white"
    x-data="{ showPassword: false, showConfirmPassword: false }">

    <!-- Background Glow Elements -->
    <div class="absolute -top-32 -left-32 w-80 h-80 bg-brand-600/15 rounded-full blur-[120px] pointer-events-none">
    </div>
    <div class="absolute -bottom-32 -right-32 w-80 h-80 bg-brand-600/10 rounded-full blur-[120px] pointer-events-none">
    </div>

    <!-- Main Glass Card (Lebih compact & proporsional) -->
    <div
        class="w-full max-w-md bg-zinc-900/70 border border-zinc-800/80 p-6 sm:p-8 rounded-2xl shadow-2xl backdrop-blur-2xl relative z-10">

        <!-- Header & Logo -->
        <div class="flex items-center justify-between mb-6 pb-4 border-b border-zinc-800/80">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2.5 group">
                <div
                    class="w-8 h-8 bg-brand-600 text-white rounded-xl flex items-center justify-center font-bold text-base shadow-md shadow-brand-500/30 group-hover:scale-105 transition-transform">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <div>
                    <span class="font-extrabold text-sm tracking-tight text-white block leading-none">MEJENG AUTO</span>
                    <span class="text-[8px] text-brand-400 font-bold uppercase tracking-widest mt-0.5 block">Elite
                        Ecosystem</span>
                </div>
            </a>
            <div class="text-right">
                <span class="text-[11px] text-zinc-400">Sudah punya akun?</span>
                <a href="{{ route('login') }}"
                    class="block text-xs font-bold text-brand-500 hover:text-brand-400 transition underline underline-offset-2">Masuk</a>
            </div>
        </div>

        <div class="mb-5">
            <h1 class="text-xl font-black text-white tracking-tight">Buat Akun Member</h1>
            <p class="text-xs text-zinc-400 mt-0.5">Dapatkan akses eksklusif ke seluruh unit pilihan.</p>
        </div>

        <!-- Alert Error -->
        @if ($errors->any())
        <div class="mb-4 p-3 bg-red-500/10 border border-red-500/20 text-red-400 text-xs rounded-xl">
            {{ $errors->first() }}
        </div>
        @endif

        <!-- Form Register -->
        <form action="{{ route('register.process') }}" method="POST" class="space-y-3.5">
            @csrf
            <div>
                <label class="block text-[11px] font-bold text-zinc-400 uppercase tracking-wider mb-1">Nama
                    Lengkap</label>
                <input type="text" name="name" required value="{{ old('name') }}"
                    class="w-full bg-zinc-950/80 border border-zinc-800 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-600 text-white text-xs font-medium placeholder-zinc-600 transition"
                    placeholder="Masukkan nama lengkap">
            </div>

            <div>
                <label class="block text-[11px] font-bold text-zinc-400 uppercase tracking-wider mb-1">Alamat
                    Email</label>
                <input type="email" name="email" required value="{{ old('email') }}"
                    class="w-full bg-zinc-950/80 border border-zinc-800 px-4 py-3 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-600 text-white text-xs font-medium placeholder-zinc-600 transition"
                    placeholder="nama@domain.com">
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                <div>
                    <label class="block text-[11px] font-bold text-zinc-400 uppercase tracking-wider mb-1">Kata
                        Sandi</label>
                    <div class="relative">
                        <input :type="showPassword ? 'text' : 'password'" name="password" required
                            class="w-full bg-zinc-950/80 border border-zinc-800 px-4 py-3 pr-10 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-600 text-white text-xs font-medium placeholder-zinc-600 transition"
                            placeholder="Min. 8 karakter">
                        <button type="button" @click="showPassword = !showPassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-zinc-400 hover:text-white transition">
                            <svg x-show="!showPassword" class="w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg x-show="showPassword" class="w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.07 10.07 0 014.288-5.036m5.67-1.353A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div>
                    <label
                        class="block text-[11px] font-bold text-zinc-400 uppercase tracking-wider mb-1">Konfirmasi</label>
                    <div class="relative">
                        <input :type="showConfirmPassword ? 'text' : 'password'" name="password_confirmation" required
                            class="w-full bg-zinc-950/80 border border-zinc-800 px-4 py-3 pr-10 rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-600 text-white text-xs font-medium placeholder-zinc-600 transition"
                            placeholder="Ulangi sandi">
                        <button type="button" @click="showConfirmPassword = !showConfirmPassword"
                            class="absolute inset-y-0 right-0 pr-3 flex items-center text-zinc-400 hover:text-white transition">
                            <svg x-show="!showConfirmPassword" class="w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            <svg x-show="showConfirmPassword" class="w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" style="display: none;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a10.07 10.07 0 014.288-5.036m5.67-1.353A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <button type="submit"
                class="w-full bg-brand-600 hover:bg-brand-500 text-white font-bold py-3.5 rounded-xl shadow-lg shadow-brand-600/30 transition-all duration-300 flex items-center justify-center gap-2 text-xs mt-5 cursor-pointer">
                <span>Daftar Sekarang</span>
                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </button>
        </form>

        <div class="mt-6 pt-4 border-t border-zinc-800/80 text-center">
            <a href="{{ url('/') }}"
                class="text-[11px] font-bold text-zinc-500 hover:text-zinc-300 transition inline-flex items-center gap-1.5">
                &larr; Kembali ke Beranda Utama
            </a>
        </div>
    </div>

</body>

</html>