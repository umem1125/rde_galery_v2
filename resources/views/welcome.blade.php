<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rde Galery</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        /* Minimal: only things Tailwind cannot express */

        /* Gold shimmer text animation */
        .gold-shimmer {
            background: linear-gradient(90deg, #C9A96E 0%, #E8CFA0 45%, #C9A96E 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 3s linear infinite;
        }
        @keyframes shimmer { to { background-position: 200% center; } }

        /* Marquee animation */
        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-33.33%); } }
        .animate-marquee { animation: marquee 22s linear infinite; }

        /* Mobile menu transition */
        #mobile-menu {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, opacity 0.35s ease;
        }
        #mobile-menu.open {
            max-height: 300px;
            opacity: 1;
        }

        /* Scroll reveal */
        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="antialiased bg-[#FAF6F1] font-[Jost,sans-serif] text-[#2D2525] [box-sizing:border-box] scroll-smooth">

{{-- ═══════════════════════════════════════════════
     STICKY NAVIGATION
═══════════════════════════════════════════════ --}}
<nav id="navbar"
     class="fixed top-0 left-0 right-0 z-50 py-4 px-6 md:px-12 transition-all duration-300
            data-[scrolled]:bg-[rgba(250,246,241,0.96)] data-[scrolled]:backdrop-blur-md data-[scrolled]:shadow-[0_1px_20px_rgba(201,169,110,0.15)]">
    <div class="max-w-7xl mx-auto flex items-center justify-between">

        {{-- Logo --}}
        <a href="#" class="flex items-center gap-2">
            <span class="text-[#C9A96E] text-2xl">✦</span>
            <span class="font-['Cormorant_Garamond',serif] text-2xl font-semibold tracking-wide text-[#2D2525]">
                RDE Galery
            </span>
        </a>

        {{-- Desktop nav --}}
        <ul class="hidden md:flex items-center gap-8">
            @foreach([['#hero','Home'],['#products','Collection'],['#about','About'],['#contact','Contact']] as [$href,$label])
            <li>
                <a href="{{ $href }}"
                   class="font-[Jost,sans-serif] text-sm font-medium text-[#6B4F3A] hover:text-[#C9A96E] tracking-widest uppercase transition-colors">
                    {{ $label }}
                </a>
            </li>
            @endforeach
        </ul>

        {{-- CTA + Burger --}}
        <div class="flex items-center gap-4">
            <a href="#products"
               class="hidden md:inline-flex items-center gap-2 bg-[#2D2525] text-[#FAF6F1] font-[Jost,sans-serif] text-xs font-medium uppercase tracking-widest px-5 py-2.5 rounded-full hover:bg-[#C9A96E] transition-colors duration-300">
                Shop Now
            </a>
            <button id="burger" class="md:hidden text-[#2D2525] p-2" aria-label="Menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path id="burger-icon" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="md:hidden bg-[#FAF6F1]/95 backdrop-blur mt-3 rounded-2xl px-6">
        <ul class="py-4 flex flex-col gap-4">
            @foreach([['#hero','Home'],['#products','Collection'],['#about','About'],['#contact','Contact']] as [$href,$label])
            <li>
                <a href="{{ $href }}"
                   class="font-[Jost,sans-serif] text-sm font-medium text-[#6B4F3A] hover:text-[#C9A96E] tracking-widest uppercase transition-colors mobile-link">
                    {{ $label }}
                </a>
            </li>
            @endforeach
            <li>
                <a href="#products"
                   class="inline-flex items-center gap-2 bg-[#2D2525] text-[#FAF6F1] font-[Jost,sans-serif] text-xs font-medium uppercase tracking-widest px-5 py-2.5 rounded-full mobile-link">
                    Shop Now
                </a>
            </li>
        </ul>
    </div>
</nav>


{{-- ═══════════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════════ --}}
<section id="hero"
         class="relative min-h-screen flex items-center pt-24 pb-16 overflow-hidden
                [background:radial-gradient(ellipse_70%_60%_at_80%_40%,rgba(242,221,213,0.55)_0%,transparent_65%),radial-gradient(ellipse_50%_50%_at_20%_70%,rgba(201,169,110,0.12)_0%,transparent_60%),#FAF6F1]">

    {{-- Decorative orbs --}}
    <div class="absolute rounded-full pointer-events-none w-96 h-96 bg-[#F2DDD5]/40 blur-3xl -top-16 -right-16"></div>
    <div class="absolute rounded-full pointer-events-none w-64 h-64 bg-[#C9A96E]/10 blur-2xl bottom-24 left-8"></div>
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[700px] h-[700px] rounded-full border border-[#C9A96E]/10 pointer-events-none"></div>
    <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-[500px] h-[500px] rounded-full border border-[#C9A96E]/[0.08] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-6 md:px-12 grid md:grid-cols-2 gap-16 items-center w-full">

        {{-- Text --}}
        <div class="text-center md:text-left">
            <p class="font-[Jost,sans-serif] text-xs font-medium uppercase tracking-[0.3em] text-[#C9A96E] mb-6">
                Handcrafted with love ✦ Pekalongan, Indonesia
            </p>
            <h1 class="font-['Cormorant_Garamond',serif] text-6xl md:text-7xl lg:text-8xl leading-[1.05] text-[#2D2525] mb-6">
                Where <em class="not-italic gold-shimmer">Art</em><br>
                Meets Your<br>
                <em class="not-italic text-[#C9979A]">Lapel</em>
            </h1>
            <p class="font-[Jost,sans-serif] text-base md:text-lg text-[#6B4F3A]/80 leading-relaxed max-w-md mx-auto md:mx-0 mb-10">
                Discover our curated collection of handcrafted brooches —
                each pin a tiny universe of elegance, made to be worn and cherished.
            </p>
            <div class="flex flex-wrap gap-4 justify-center md:justify-start">
                <a href="#products"
                   class="inline-flex items-center gap-3 bg-[#2D2525] text-[#FAF6F1] font-[Jost,sans-serif] text-sm font-medium uppercase tracking-widest px-8 py-4 rounded-full hover:bg-[#C9A96E] transition-all duration-300 group">
                    Shop Collection
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#about"
                   class="inline-flex items-center gap-2 border border-[#C9A96E]/50 text-[#C9A96E] font-[Jost,sans-serif] text-sm font-medium uppercase tracking-widest px-8 py-4 rounded-full hover:bg-[#C9A96E]/10 transition-all duration-300">
                    Our Story
                </a>
            </div>

            {{-- Trust badges --}}
            <div class="mt-12 flex flex-wrap gap-6 justify-center md:justify-start">
                @foreach(['500+ Happy Customers','Handcrafted Daily','Free Gift Wrap'] as $badge)
                <div class="flex items-center gap-2">
                    <span class="text-[#C9A96E] text-sm">✦</span>
                    <span class="font-[Jost,sans-serif] text-xs font-medium text-[#6B4F3A]/70 uppercase tracking-wider">{{ $badge }}</span>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Hero visual --}}
        <div class="relative flex justify-center">
            <div class="relative w-72 h-72 md:w-96 md:h-96">
                {{-- Decorative ring --}}
                <div class="absolute inset-0 rounded-full border-2 border-dashed border-[#C9A96E]/30 animate-spin [animation-duration:25s]"></div>
                <div class="absolute inset-6 rounded-full bg-[#F2DDD5]/60"></div>

                {{-- Central brooch placeholder --}}
                <div class="absolute inset-12 rounded-full overflow-hidden shadow-2xl ring-4 ring-[#C9A96E]/30 flex items-center justify-center bg-gradient-to-br from-[#F2DDD5] to-[#FAF6F1]">
                    <div class="text-center p-6">
                        <div class="text-7xl mb-2">
                            <img src="{{ asset('/image/products/preview_brooch.png') }}" alt="Product">
                        </div>
                        <p class="font-['Cormorant_Garamond',serif] text-sm text-[#6B4F3A]/60 italic">Featured Piece</p>
                    </div>
                </div>

                {{-- Floating accent chips --}}
                <div class="absolute -top-4 -right-4 bg-white rounded-2xl shadow-lg px-4 py-2 border border-[#C9A96E]/20">
                    <p class="font-[Jost,sans-serif] text-xs text-[#6B4F3A]/60">New In</p>
                    <p class="font-['Cormorant_Garamond',serif] text-base font-semibold text-[#2D2525]">Spring '26</p>
                </div>
                <div class="absolute -bottom-4 -left-4 bg-[#2D2525] rounded-2xl shadow-lg px-4 py-2">
                    <p class="font-[Jost,sans-serif] text-xs text-[#FAF6F1]/60">Starting from</p>
                    <p class="font-['Cormorant_Garamond',serif] text-lg font-semibold text-[#C9A96E]">Rp 45.000</p>
                </div>
            </div>
        </div>

    </div>

    {{-- Scroll hint --}}
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 animate-bounce">
        <span class="font-[Jost,sans-serif] text-xs uppercase tracking-widest text-[#6B4F3A]/40">Scroll</span>
        <svg class="w-4 h-4 text-[#C9A96E]/50" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     MARQUEE STRIP
═══════════════════════════════════════════════ --}}
<div class="bg-[#2D2525] py-3 overflow-hidden">
    <div class="flex whitespace-nowrap animate-marquee">
        @for($i = 0; $i < 3; $i++)
            @foreach(['Handcrafted Brooches','Elegant Accessories','Free Gift Wrap','Ships Nationwide','New Arrivals Weekly','✦'] as $item)
            <span class="font-[Jost,sans-serif] text-xs font-medium uppercase tracking-[0.25em] text-[#C9A96E]/70 px-8">{{ $item }}</span>
            @endforeach
        @endfor
    </div>
</div>


{{-- ═══════════════════════════════════════════════
     PRODUCT GALLERY SECTION
═══════════════════════════════════════════════ --}}
<section id="products" class="py-24 px-6 md:px-12 bg-[#FAF6F1]">
    <div class="max-w-7xl mx-auto">

        {{-- Section header --}}
        <div class="text-center mb-16 reveal">
            <p class="font-[Jost,sans-serif] text-xs font-medium uppercase tracking-[0.3em] text-[#C9A96E] mb-3">Our Collection</p>
            <h2 class="font-['Cormorant_Garamond',serif] text-5xl md:text-6xl text-[#2D2525] mb-4">
                Every Pin, a <em class="not-italic text-[#C9979A]">Story</em>
            </h2>
            <p class="font-[Jost,sans-serif] text-base text-[#6B4F3A]/70 max-w-lg mx-auto leading-relaxed">
                Handmade in small batches. Each brooch is crafted with intention — meant to become a keepsake.
            </p>
            <div class="mt-6 flex justify-center gap-2">
                <span class="block w-8 h-px bg-[#C9A96E]/40"></span>
                <span class="text-[#C9A96E] text-xs">✦</span>
                <span class="block w-8 h-px bg-[#C9A96E]/40"></span>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
    @foreach($products as $product)
    <div class="reveal group flex flex-col bg-white rounded-2xl border border-gray-100 hover:shadow-[0_8px_30px_rgb(0,0,0,0.06)] transition-all duration-500 ease-out overflow-hidden"
         style="transition-delay: {{ $loop->index * 80 }}ms">

        {{-- Image Area: Warm minimal background, scales on hover --}}
        <div class="relative aspect-[4/5] bg-[#faf9f8] flex items-center justify-center p-8 overflow-hidden">
            <img src="{{ asset('storage/' . $product['image']) }}"
                 alt="{{ $product['name'] }}"
                 {{-- mix-blend-multiply helps products with white backgrounds blend perfectly into the #faf9f8 container --}}
                 class="w-full h-full object-contain mix-blend-multiply transition-transform duration-700 ease-out group-hover:scale-110">

            {{-- Badge --}}
            @if($product['badge'])
            <span class="absolute top-4 left-4 bg-gray-900 text-white text-[0.65rem] font-semibold tracking-widest uppercase px-3 py-1.5 rounded-full">
                {{ $product['badge'] }}
            </span>
            @endif
        </div>

        {{-- Card Body --}}
        <div class="p-6 flex flex-col flex-grow">
            {{-- Text Content --}}
            <div class="flex-grow mb-6">
                <h3 class="font-['Cormorant_Garamond',serif] text-xl font-semibold text-gray-900 mb-1.5 leading-tight line-clamp-2">
                    {{ $product['name'] }}
                </h3>
                <span class="font-[Jost,sans-serif] text-base font-medium text-gray-500">
                    Rp {{ number_format($product['price'], 0, ',', '.') }}
                </span>
            </div>

            {{-- Buy Buttons (Unified minimal style, colors appear on hover) --}}
            @php
                $waNumber = '+6282114244700';
                $waText   = urlencode('Halo, RDE Galery. Aku mau beli Bros ' . $product['name'] . ' ini donk!');
                $waUrl    = "https://wa.me/{$waNumber}?text={$waText}";
            @endphp
            
            <div class="flex items-center gap-2">
                {{-- WhatsApp --}}
                <a href="{{ $waUrl }}" target="_blank" rel="noopener"
                   class="flex-1 flex justify-center items-center gap-1.5 py-2.5 px-2 rounded-xl bg-gray-50 text-gray-500 font-[Jost,sans-serif] text-[0.65rem] font-semibold tracking-wider uppercase transition-all duration-300 hover:bg-[#25D366] hover:text-white">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
                    </svg>
                    <span>WA</span>
                </a>

                {{-- TikTok Shop --}}
                <a href="https://www.tiktok.com/@rde.galery02?_r=1&_t=ZS-93RElDOcgSX" target="_blank" rel="noopener"
                   class="flex-1 flex justify-center items-center gap-1.5 py-2.5 px-2 rounded-xl bg-gray-50 text-gray-500 font-[Jost,sans-serif] text-[0.65rem] font-semibold tracking-wider uppercase transition-all duration-300 hover:bg-black hover:text-white">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.77 1.51V6.75a4.85 4.85 0 01-1-.06z"/>
                    </svg>
                    <span>TikTok</span>
                </a>

                {{-- Shopee --}}
                <a href="https://id.shp.ee/zyRt2Xh" target="_blank" rel="noopener"
                   class="flex-1 flex justify-center items-center gap-1.5 py-2.5 px-2 rounded-xl bg-gray-50 text-gray-500 font-[Jost,sans-serif] text-[0.65rem] font-semibold tracking-wider uppercase transition-all duration-300 hover:bg-[#EE4D2D] hover:text-white">
                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2C9.243 2 7 4.243 7 7v1H4.272l-.917 13H20.64l-.917-13H17V7c0-2.757-2.243-5-5-5zm0 2c1.654 0 3 1.346 3 3v1H9V7c0-1.654 1.346-3 3-3zm5.397 16H6.603L7.38 10h9.243l.774 10z"/>
                    </svg>
                    <span>Shopee</span>
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

        {{-- View all CTA --}}
        <div class="text-center mt-16 reveal">
            <a href="{{ route('products.index') ?? '#' }}"
               class="inline-flex items-center gap-3 border-2 border-[#2D2525] text-[#2D2525] font-[Jost,sans-serif] text-sm font-medium uppercase tracking-widest px-10 py-4 rounded-full hover:bg-[#2D2525] hover:text-[#FAF6F1] transition-all duration-300 group">
                View Full Collection
                <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     ABOUT / BRAND STORY SECTION
═══════════════════════════════════════════════ --}}
<section id="about" class="py-24 px-6 md:px-12 bg-[#2D2525] relative overflow-hidden">
    {{-- bg deco --}}
    <div class="absolute top-0 right-0 w-96 h-96 rounded-full bg-[#C9A96E]/5 blur-3xl pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 w-64 h-64 rounded-full bg-[#C9979A]/10 blur-2xl pointer-events-none"></div>

    <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">

        {{-- Text --}}
        <div class="reveal">
            <p class="font-[Jost,sans-serif] text-xs font-medium uppercase tracking-[0.3em] text-[#C9A96E] mb-4">Our Story</p>
            <h2 class="font-['Cormorant_Garamond',serif] text-5xl md:text-6xl text-[#FAF6F1] leading-[1.1] mb-6">
                Crafted with<br><em class="not-italic text-[#C9979A]">Intention</em>
            </h2>
            <p class="font-[Jost,sans-serif] text-base text-[#FAF6F1]/60 leading-relaxed mb-4">
                RDE Galery hadir sebagai pioneer aksesori bros anti-karat pertama di marketplace Indonesia. Komitmen kami terhadap kualitas dibuktikan melalui kerjasama eksklusif langsung dengan pabrik pusat di China <em>tanpa perantara</em>.
            </p>
            <p class="font-[Jost,sans-serif] text-base text-[#FAF6F1]/60 leading-relaxed mb-8">
                Dengan kontrol produksi tangan pertama, kami memastikan setiap detail bros yang Anda terima memiliki standar ketahanan tinggi yang tak tertandingi.
            </p>
            <div class="grid grid-cols-3 gap-6">
                @foreach([['500+','Happy Customers'],['48h','Handcraft Time'],['100%','Handmade']] as [$num,$label])
                <div class="text-center">
                    <p class="font-['Cormorant_Garamond',serif] text-4xl font-semibold text-[#C9A96E] mb-1">{{ $num }}</p>
                    <p class="font-[Jost,sans-serif] text-xs text-[#FAF6F1]/50 uppercase tracking-wider">{{ $label }}</p>
                </div>
                @endforeach
            </div>
        </div>

        {{-- Visual grid --}}
        <div class="reveal grid grid-cols-2 gap-4">
            {{-- @foreach(['🌸','🍂','🎀','🦋'] as $i => $e) --}}
            @foreach([
    '/image/products/img_1.png',
    '/image/products/img_2.png',
    '/image/products/img_3.png',
] as $index => $path)
    <div class="aspect-square rounded-2xl bg-gradient-to-br from-[#F2DDD5]/20 to-[#C9A96E]/10 border border-[#C9A96E]/15 flex items-center justify-center {{ $index === 1 ? 'mt-6' : '' }} {{ $index === 2 ? '-mt-6' : '' }}">
        <img src="{{ asset($path) }}" alt="Product {{ $index }}" class="w-full h-full object-cover">
    </div>
@endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     TESTIMONIALS STRIP
═══════════════════════════════════════════════ --}}
<section class="py-20 px-6 md:px-12 bg-[#F2DDD5]/40">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12 reveal">
            <p class="font-[Jost,sans-serif] text-xs font-medium uppercase tracking-[0.3em] text-[#C9A96E] mb-2">Kind Words</p>
            <h2 class="font-['Cormorant_Garamond',serif] text-4xl text-[#2D2525]">Worn & Loved</h2>
        </div>
        <div class="grid md:grid-cols-3 gap-6">
            @foreach([
                ['Siti R.','The Sakura Petal Pin is even more beautiful in person. Packaging was gorgeous, feels like a gift to myself!','Jakarta','⭐⭐⭐⭐⭐'],
                ['Bella K.','I ordered via WhatsApp and it was super easy. Got my order in 2 days. Will definitely buy again!','Bandung','⭐⭐⭐⭐⭐'],
                ['Nadia F.','Gave the Pearl Bow Cluster as a gift. My friend cried — in a good way! Quality is exceptional.','Surabaya','⭐⭐⭐⭐⭐'],
            ] as [$name,$text,$city,$stars])
            <div class="bg-white rounded-2xl p-6 border border-[#C9A96E]/15 reveal">
                <p class="text-sm mb-1">{{ $stars }}</p>
                <p class="font-[Jost,sans-serif] text-sm text-[#6B4F3A]/80 leading-relaxed mb-4 italic">"{{ $text }}"</p>
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-full bg-[#F2DDD5] flex items-center justify-center font-['Cormorant_Garamond',serif] text-sm text-[#C9979A] font-semibold">
                        {{ substr($name, 0, 1) }}
                    </div>
                    <div>
                        <p class="font-[Jost,sans-serif] text-xs font-medium text-[#2D2525]">{{ $name }}</p>
                        <p class="font-[Jost,sans-serif] text-xs text-[#6B4F3A]/50">{{ $city }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     CONTACT / FIND US SECTION
═══════════════════════════════════════════════ --}}
<section id="contact" class="py-20 px-6 md:px-12 bg-[#FAF6F1]">
    <div class="max-w-3xl mx-auto text-center reveal">
        <p class="font-[Jost,sans-serif] text-xs font-medium uppercase tracking-[0.3em] text-[#C9A96E] mb-3">Get In Touch</p>
        <h2 class="font-['Cormorant_Garamond',serif] text-5xl text-[#2D2525] mb-4">Still Have Questions?</h2>
        <p class="font-[Jost,sans-serif] text-base text-[#6B4F3A]/70 mb-10">
            We'd love to hear from you. Chat with us on WhatsApp — we typically reply within the hour.
        </p>
        <a href="https://wa.me/+6282114244700?text=Hello! I have a question about your brooches."
           target="_blank" rel="noopener"
           class="inline-flex items-center gap-3 bg-[#25D366] text-white font-[Jost,sans-serif] text-sm font-medium uppercase tracking-widest px-10 py-4 rounded-full hover:bg-[#128C7E] transition-colors duration-300 shadow-lg shadow-green-200">
            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            Chat on WhatsApp
        </a>
    </div>
</section>


{{-- ═══════════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════════ --}}
<footer class="py-16 px-6 md:px-12 [background:linear-gradient(160deg,#2D2525_0%,#3D2E2E_100%)]">
    <div class="max-w-7xl mx-auto">
        <div class="grid md:grid-cols-4 gap-10 mb-12">

            {{-- Brand --}}
            <div class="md:col-span-2">
                <div class="flex items-center gap-2 mb-4">
                    <span class="text-[#C9A96E] text-2xl">✦</span>
                    <span class="font-['Cormorant_Garamond',serif] text-2xl font-semibold text-[#FAF6F1]">
                        RDE Galery
                    </span>
                </div>
                <p class="font-[Jost,sans-serif] text-sm text-[#FAF6F1]/50 leading-relaxed max-w-xs mb-6">
                    Handcrafted brooches from Indonesia, made to adorn your everyday.
                    Small batches. Big love.
                </p>
                {{-- Social icons --}}
                <div class="flex gap-4">
                    @foreach([
                        ['https://instagram.com','M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z'],
                        ['https://tiktok.com','M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.77 1.51V6.75a4.85 4.85 0 01-1-.06z'],
                        ['https://shopee.co.id','M12 2C9.243 2 7 4.243 7 7v1H4.272l-.917 13H20.64l-.917-13H17V7c0-2.757-2.243-5-5-5zm0 2c1.654 0 3 1.346 3 3v1H9V7c0-1.654 1.346-3 3-3zm5.397 16H6.603L7.38 10h9.243l.774 10z'],
                    ] as [$url,$path])
                    <a href="{{ $url }}" target="_blank" rel="noopener"
                       class="w-9 h-9 rounded-full border border-[#FAF6F1]/20 flex items-center justify-center text-[#FAF6F1]/50 hover:border-[#C9A96E] hover:text-[#C9A96E] transition-colors duration-300">
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor"><path d="{{ $path }}"/></svg>
                    </a>
                    @endforeach
                </div>
            </div>

            {{-- Quick links --}}
            <div>
                <h4 class="font-[Jost,sans-serif] text-xs font-medium uppercase tracking-widest text-[#C9A96E] mb-5">Quick Links</h4>
                <ul class="space-y-3">
                    @foreach(['Home' => '#hero','Collection' => '#products','About Us' => '#about','Contact' => '#contact'] as $label => $href)
                    <li>
                        <a href="{{ $href }}" class="font-[Jost,sans-serif] text-sm text-[#FAF6F1]/50 hover:text-[#C9A96E] transition-colors">{{ $label }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>

            {{-- Contact info --}}
            <div>
                <h4 class="font-[Jost,sans-serif] text-xs font-medium uppercase tracking-widest text-[#C9A96E] mb-5">Contact Us</h4>
                <ul class="space-y-3">
                    <li class="font-[Jost,sans-serif] text-sm text-[#FAF6F1]/50">📱 +62 8211-4244-700</li>
                    <li class="font-[Jost,sans-serif] text-sm text-[#FAF6F1]/50">📍 Pekalongan, Indonesia</li>
                    <li class="font-[Jost,sans-serif] text-sm text-[#FAF6F1]/50">⏰ Mon–Sat, 9am–6pm WIB</li>
                </ul>
                <div class="overflow-hidden rounded-lg border border-[#C9A96E]/20 grayscale hover:grayscale-0 transition-all duration-500">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.921534278638!2d109.63567977506675!3d-6.8999875930992625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e702700134e8d53%3A0x4a9a7633330c203!2sRde%20Galery%20Bros%20hijab%20zircon%20anti%20karat!5e0!3m2!1sid!2sid!4v1773537928524!5m2!1sid!2sid" 
                width="100%" 
            height="150" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
            </div>
        </div>

        <div class="border-t border-[#FAF6F1]/10 pt-8 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="font-[Jost,sans-serif] text-xs text-[#FAF6F1]/30">
                © {{ date('Y') }} RDE Galery All rights reserved.
            </p>
            <p class="font-[Jost,sans-serif] text-xs text-[#FAF6F1]/30">
                Made with ✦ in Indonesia
            </p>
        </div>
    </div>
</footer>


{{-- ═══════════════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════════════ --}}
<script>
    // ── Sticky nav ──
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) {
            navbar.setAttribute('data-scrolled', '');
        } else {
            navbar.removeAttribute('data-scrolled');
        }
    });

    // ── Mobile burger ──
    const burger = document.getElementById('burger');
    const menu   = document.getElementById('mobile-menu');
    burger.addEventListener('click', () => {
        menu.classList.toggle('open');
    });
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => menu.classList.remove('open'));
    });

    // ── Scroll reveal ──
    const revealEls = document.querySelectorAll('.reveal');
    const observer  = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    revealEls.forEach(el => observer.observe(el));
</script>

</body>
</html>
