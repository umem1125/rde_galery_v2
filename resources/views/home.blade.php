<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rde Galery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        :root {
            --bg-base:      #0A0A0F;
            --bg-deep:      #080810;
            --bg-card:      #111118;
            --bg-card-2:    #16161F;
            --border:       rgba(201,169,110,0.12);
            --gold:         #C9A96E;
            --gold-light:   #E8CFA0;
            --rose:         #C9979A;
            --text-primary: #F0EAE0;
            --text-muted:   rgba(240,234,224,0.45);
            --text-sub:     rgba(240,234,224,0.25);
        }

        body {
            background: var(--bg-base);
            color: var(--text-primary);
            font-family: 'Jost', sans-serif;
            -webkit-font-smoothing: antialiased;
        }

        .gold-shimmer {
            background: linear-gradient(90deg, #C9A96E 0%, #F0D89A 45%, #C9A96E 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 3s linear infinite;
        }
        @keyframes shimmer { to { background-position: 200% center; } }

        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-33.33%); } }
        .animate-marquee { animation: marquee 22s linear infinite; }

        #mobile-menu {
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            transition: max-height 0.35s ease, opacity 0.35s ease;
        }
        #mobile-menu.open { max-height: 300px; opacity: 1; }

        .reveal {
            opacity: 0;
            transform: translateY(28px);
            transition: opacity 0.7s ease, transform 0.7s ease;
        }
        .reveal.visible { opacity: 1; transform: translateY(0); }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            opacity: 0.025;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
            background-repeat: repeat;
            background-size: 128px 128px;
        }

        .hero-bg {
            background:
                radial-gradient(ellipse 60% 55% at 85% 35%, rgba(201,169,110,0.08) 0%, transparent 65%),
                radial-gradient(ellipse 45% 50% at 15% 70%, rgba(201,151,154,0.07) 0%, transparent 60%),
                radial-gradient(ellipse 80% 60% at 50% 0%,  rgba(25,20,40,0.9) 0%, transparent 70%),
                #0A0A0F;
        }

        .product-card {
            background: var(--bg-card);
            border: 1px solid rgba(201,169,110,0.10);
            transition: all 0.45s cubic-bezier(0.22,0.61,0.36,1);
        }
        .product-card:hover {
            border-color: rgba(201,169,110,0.30);
            box-shadow: 0 0 40px rgba(201,169,110,0.07), 0 8px 40px rgba(0,0,0,0.5);
            transform: translateY(-4px);
        }

        .testi-card {
            background: linear-gradient(145deg, #111118, #16161F);
            border: 1px solid rgba(201,169,110,0.10);
        }

        .gold-divider {
            width: 48px; height: 1px;
            background: linear-gradient(90deg, transparent, #C9A96E, transparent);
            display: inline-block;
        }

        #navbar[data-scrolled] {
            background: rgba(10,10,15,0.92);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow: 0 1px 0 rgba(201,169,110,0.12);
        }

        @keyframes slow-spin { to { transform: rotate(360deg); } }
        .spin-ring { animation: slow-spin 25s linear infinite; }

        .img-wrap img { transition: transform 0.7s cubic-bezier(0.22,0.61,0.36,1); }
        .img-wrap:hover img { transform: scale(1.08); }
    </style>
</head>
<body class="scroll-smooth">

<!-- ═══════════════════════════════════════════════
     STICKY NAVIGATION
═══════════════════════════════════════════════ -->
<nav id="navbar"
     style="position:fixed;top:0;left:0;right:0;z-index:50;padding:1rem 1.5rem;transition:all 0.3s;">
    <div style="max-width:80rem;margin:0 auto;display:flex;align-items:center;justify-content:space-between;">

        <!-- Logo -->
        <a href="#" style="display:flex;align-items:center;gap:0.5rem;text-decoration:none;">
            <span style="color:#C9A96E;font-size:1.5rem;">✦</span>
            <span style="font-family:'Cormorant Garamond',serif;font-size:1.4rem;font-weight:600;letter-spacing:0.05em;color:#F0EAE0;">
                Rde Galery
            </span>
        </a>

        <!-- Desktop nav -->
        <ul style="display:none;list-style:none;gap:2rem;margin:0;padding:0;" id="desktop-nav">
            <li><a href="#hero"     class="nav-link">Home</a></li>
            <li><a href="#products" class="nav-link">Collection</a></li>
            <li><a href="#about"    class="nav-link">About</a></li>
            <li><a href="#contact"  class="nav-link">Contact</a></li>
        </ul>

        <div style="display:flex;align-items:center;gap:1rem;">
            <a href="#products" id="shop-cta"
               style="display:none;align-items:center;gap:0.5rem;background:linear-gradient(135deg,#C9A96E,#E8CFA0);color:#0A0A0F;font-size:0.7rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;padding:0.6rem 1.4rem;border-radius:9999px;text-decoration:none;transition:opacity 0.3s;">
                Shop Now
            </a>
            <button id="burger" style="background:none;border:none;cursor:pointer;color:#F0EAE0;padding:0.5rem;" aria-label="Menu">
                <svg style="width:1.5rem;height:1.5rem;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path id="burger-icon" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu" style="background:rgba(10,10,15,0.98);backdrop-filter:blur(12px);margin-top:0.75rem;border-radius:1rem;padding:0 1.5rem;border:1px solid rgba(201,169,110,0.12);">
        <ul style="padding:1rem 0;list-style:none;display:flex;flex-direction:column;gap:1rem;margin:0;">
            <li><a href="#hero"     class="mobile-link" style="color:rgba(240,234,224,0.7);text-decoration:none;font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;">Home</a></li>
            <li><a href="#products" class="mobile-link" style="color:rgba(240,234,224,0.7);text-decoration:none;font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;">Collection</a></li>
            <li><a href="#about"    class="mobile-link" style="color:rgba(240,234,224,0.7);text-decoration:none;font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;">About</a></li>
            <li><a href="#contact"  class="mobile-link" style="color:rgba(240,234,224,0.7);text-decoration:none;font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;">Contact</a></li>
            <li>
                <a href="#products" class="mobile-link"
                   style="display:inline-flex;background:linear-gradient(135deg,#C9A96E,#E8CFA0);color:#0A0A0F;font-size:0.7rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;padding:0.6rem 1.4rem;border-radius:9999px;text-decoration:none;">
                    Shop Now
                </a>
            </li>
        </ul>
    </div>
</nav>

<style>
    @media(min-width:768px){
        #desktop-nav { display:flex !important; }
        #shop-cta    { display:inline-flex !important; }
        #burger      { display:none !important; }
    }
    .nav-link {
        font-family:'Jost',sans-serif;font-size:0.75rem;font-weight:500;
        letter-spacing:0.2em;text-transform:uppercase;
        color:rgba(240,234,224,0.6);text-decoration:none;
        transition:color 0.2s;
    }
    .nav-link:hover { color:#C9A96E; }
</style>


<!-- ═══════════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════════ -->
<section id="hero" class="hero-bg" style="position:relative;min-height:100vh;display:flex;align-items:center;padding:6rem 1.5rem 4rem;overflow:hidden;">

    <!-- Decorative orbs -->
    <div style="position:absolute;top:-4rem;right:-4rem;width:24rem;height:24rem;border-radius:9999px;background:rgba(201,169,110,0.04);filter:blur(64px);pointer-events:none;"></div>
    {{-- <div style="position:absolute;bottom:6rem;left:2rem;width:16rem;height:16rem;border-radius:9999px;background:rgba(201,151,154,0.06);filter:blur:48px);pointer-events:none;"></div> --}}
    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:700px;height:700px;border-radius:9999px;border:1px solid rgba(201,169,110,0.06);pointer-events:none;"></div>
    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:480px;height:480px;border-radius:9999px;border:1px solid rgba(201,169,110,0.04);pointer-events:none;"></div>

    <div id="hero-inner" style="max-width:80rem;margin:0 auto;display:grid;grid-template-columns:1fr;gap:4rem;align-items:center;width:100%;position:relative;z-index:1;">

        <!-- Text -->
        <div style="text-align:center;">
            <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:#C9A96E;margin-bottom:1.5rem;">
                Handcrafted with love ✦ Pekalongan, Indonesia
            </p>
            <h1 style="font-family:'Cormorant Garamond',serif;font-size:clamp(3.5rem,9vw,7rem);line-height:1.05;color:#F0EAE0;margin-bottom:1.5rem;">
                Elegan, <em class="gold-shimmer" style="font-style:normal;">Menggoda</em><br>
                Hanya Ada di<br>
                <em style="font-style:normal;color:#C9979A;">Rde Galery</em>
            </h1>
            <p style="font-size:1rem;color:rgba(240,234,224,0.55);line-height:1.75;max-width:28rem;margin:0 auto 2.5rem;">
                Hadir dengan standar kualitas tinggi —
                produk kami menggunakan material Lapis Emas Asli 18K dan Permata Zircon Original.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
                <a href="#products"
                   style="display:inline-flex;align-items:center;gap:0.75rem;background:linear-gradient(135deg,#C9A96E 0%,#E8CFA0 100%);color:#0A0A0F;font-size:0.75rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;padding:1rem 2rem;border-radius:9999px;text-decoration:none;transition:opacity 0.3s;box-shadow:0 8px 32px rgba(201,169,110,0.25);">
                    Shop Collection
                    <svg style="width:1rem;height:1rem;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#about"
                   style="display:inline-flex;align-items:center;gap:0.5rem;border:1px solid rgba(201,169,110,0.35);color:#C9A96E;font-size:0.75rem;font-weight:500;letter-spacing:0.15em;text-transform:uppercase;padding:1rem 2rem;border-radius:9999px;text-decoration:none;transition:all 0.3s;background:rgba(201,169,110,0.05);">
                    Our Story
                </a>
            </div>

            <!-- Trust badges -->
            <div style="margin-top:3rem;display:flex;flex-wrap:wrap;gap:1.5rem;justify-content:center;">
                <div style="display:flex;align-items:center;gap:0.5rem;">
                    <span style="color:#C9A96E;font-size:0.75rem;">✦</span>
                    <span style="font-size:0.7rem;font-weight:500;color:rgba(240,234,224,0.4);letter-spacing:0.15em;text-transform:uppercase;">Original Permata Zircon</span>
                </div>
                <div style="display:flex;align-items:center;gap:0.5rem;">
                    <span style="color:#C9A96E;font-size:0.75rem;">✦</span>
                    <span style="font-size:0.7rem;font-weight:500;color:rgba(240,234,224,0.4);letter-spacing:0.15em;text-transform:uppercase;">Lapis Emas Asli 18K</span>
                </div>
                <div style="display:flex;align-items:center;gap:0.5rem;">
                    <span style="color:#C9A96E;font-size:0.75rem;">✦</span>
                    <span style="font-size:0.7rem;font-weight:500;color:rgba(240,234,224,0.4);letter-spacing:0.15em;text-transform:uppercase;">Awet Bertahun-tahun</span>
                </div>
            </div>
        </div>

        <!-- Hero visual -->
        <div style="display:flex;justify-content:center;">
            <div style="position:relative;width:18rem;height:18rem;">
                <div class="spin-ring" style="position:absolute;inset:0;border-radius:9999px;border:2px dashed rgba(201,169,110,0.2);"></div>
                <div style="position:absolute;inset:1.5rem;border-radius:9999px;background:radial-gradient(circle,rgba(201,169,110,0.08),rgba(201,151,154,0.05));"></div>
                <div style="position:absolute;inset:3rem;border-radius:9999px;overflow:hidden;box-shadow:0 0 60px rgba(201,169,110,0.15);ring:4px;border:2px solid rgba(201,169,110,0.2);display:flex;align-items:center;justify-content:center;background:linear-gradient(145deg,#16161F,#111118);">
                    {{-- <div style="text-align:center;padding:1.5rem;">
                        <img src="{{ asset('image/products/img_1.png') }}" alt="Product" style="max-width:100%;max-height:100%;">
                        <p style="font-family:'Cormorant Garamond',serif;font-size:0.8rem;color:rgba(240,234,224,0.4);font-style:italic;margin-top:0.5rem;">Featured Piece</p>
                    </div> --}}
                    <img src="{{ asset('image/products/img_1.png') }}" alt="Product"
                        style="width:100%;height:400px;object-fit:cover;display:block;">
                    <div style="position:absolute;bottom:0.75rem;left:0;right:0;text-align:center;">
                        <p style="font-family:'Cormorant Garamond',serif;font-size:0.75rem;color:rgba(240,234,224,0.4);font-style:italic;margin:0;text-shadow:0 1px 4px rgba(0,0,0,0.8);">Featured Piece</p>
                    </div>
                </div>
                <!-- Chips -->
                {{-- <div style="position:absolute;top:-1rem;right:-2rem;background:#16161F;border-radius:1rem;padding:0.5rem 1rem;border:1px solid rgba(201,169,110,0.2);box-shadow:0 4px 24px rgba(0,0,0,0.4);">
                    <p style="font-size:0.65rem;color:rgba(240,234,224,0.4);margin:0;">New In</p>
                    <p style="font-family:'Cormorant Garamond',serif;font-size:1rem;font-weight:600;color:#F0EAE0;margin:0;">Spring '26</p>
                </div> --}}
                <div style="position:absolute;bottom:-1rem;left:-2rem;background:linear-gradient(135deg,#C9A96E,#E8CFA0);border-radius:1rem;padding:0.5rem 1rem;box-shadow:0 4px 24px rgba(201,169,110,0.3);">
                    <p style="font-size:0.65rem;color:rgba(10,10,15,0.6);margin:0;">Starting from</p>
                    <p style="font-family:'Montserrat',serif;font-size:1.1rem;font-weight:700;color:#0A0A0F;margin:0;">Rp 45.000</p>
                </div>
            </div>
        </div>

    </div>

    <!-- Scroll hint -->
    <div style="position:absolute;bottom:2rem;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:0.5rem;animation:bounce 1.5s infinite;">
        <span style="font-size:0.65rem;letter-spacing:0.25em;text-transform:uppercase;color:rgba(240,234,224,0.25);">Scroll</span>
        <svg style="width:1rem;height:1rem;color:rgba(201,169,110,0.4);" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
    </div>
    <style>
        @keyframes bounce{0%,100%{transform:translateX(-50%) translateY(0);}50%{transform:translateX(-50%) translateY(-8px);}}
    </style>
</section>

<script>
    function applyHeroGrid(){
        const el = document.getElementById('hero-inner');
        if(!el) return;
        if(window.innerWidth >= 768){
            el.style.gridTemplateColumns = '1fr 1fr';
            el.querySelector(':scope > div:first-child').style.textAlign = 'left';
        } else {
            el.style.gridTemplateColumns = '1fr';
        }
    }
    window.addEventListener('resize', applyHeroGrid);
    applyHeroGrid();
</script>


<!-- ═══════════════════════════════════════════════
     MARQUEE STRIP
═══════════════════════════════════════════════ -->
<div style="background:linear-gradient(90deg,#0D0D14,#111120,#0D0D14);padding:0.65rem 0;overflow:hidden;border-top:1px solid rgba(201,169,110,0.08);border-bottom:1px solid rgba(201,169,110,0.08);">
    <div class="animate-marquee" style="display:flex;white-space:nowrap;">
        @foreach(range(1, 3) as $i)
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:rgba(201,169,110,0.5);padding:0 2rem;">Original permata zircon</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:rgba(201,169,110,0.5);padding:0 2rem;">Lapis emas asli 18K</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:rgba(201,169,110,0.5);padding:0 2rem;">Mutiara air tawar</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:rgba(201,169,110,0.5);padding:0 2rem;">Shell cangkang kerang asli</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:rgba(201,169,110,0.5);padding:0 2rem;">Stok limited edition</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:rgba(201,169,110,0.5);padding:0 2rem;">Awet bertahun-tahun</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:rgba(201,169,110,0.5);padding:0 2rem;">⁠Jarum tajam halus tidak merusak kain</span>
        <span style="font-size:0.65rem;color:rgba(201,169,110,0.5);padding:0 2rem;">✦</span>
        @endforeach
    </div>
</div>


<!-- ═══════════════════════════════════════════════
     PRODUCT GALLERY SECTION
═══════════════════════════════════════════════ -->
<section id="products" style="padding:6rem 1.5rem;background:linear-gradient(180deg,#0A0A0F 0%,#0D0D18 100%);">
    <div style="max-width:80rem;margin:0 auto;">

        <!-- Section header -->
        <div class="reveal" style="text-align:center;margin-bottom:4rem;">
            <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:#C9A96E;margin-bottom:0.75rem;">Our Collection</p>
            <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2.5rem,6vw,4rem);color:#F0EAE0;margin-bottom:1rem;">
                Every Pin, a <em style="font-style:normal;color:#C9979A;">Story</em>
            </h2>
            <p style="font-size:0.9rem;color:rgba(240,234,224,0.45);max-width:28rem;margin:0 auto;line-height:1.75;">
                Rasakan kemewahan tiada tara dengan koleksi Limited Edition yang memadukan Permata Zircon Original dan Lapis Emas Asli 18K.
            </p>
            <div style="margin-top:1.5rem;display:flex;justify-content:center;align-items:center;gap:0.5rem;">
                <span class="gold-divider"></span>
                <span style="color:#C9A96E;font-size:0.75rem;">✦</span>
                <span class="gold-divider"></span>
            </div>
        </div>

        <!-- Product grid -->
        <div id="product-grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:1.5rem;">
            @forelse($products as $index => $product)
            <div class="product-card reveal" style="border-radius:1.25rem;overflow:hidden;display:flex;flex-direction:column;animation-delay:{{ $index * 80 }}ms;">
                <div class="img-wrap" style="aspect-ratio:4/5;background:linear-gradient(145deg,#16161F,#111118);overflow:hidden;">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}"
                             alt="{{ $product->name }}"
                             style="width:100%;height:100%;object-fit:cover;">
                    @else
                        <div style="width:100%;height:100%;display:flex;align-items:center;justify-content:center;padding:2rem;">
                            <div style="font-size:5rem;">📌</div>
                        </div>
                    @endif
                </div>
                <div style="padding:1.5rem;flex-grow:1;display:flex;flex-direction:column;">
                    <h3 style="font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:600;color:#F0EAE0;margin:0 0 0.4rem;">
                        {{-- {{ $product->name }} --}}
                        Rde Galery Brooch Premium
                    </h3>
                    <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.5rem;">
                        <span style="font-size:0.9rem;color:rgba(240,234,224,0.4);">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </span>
                        
                        <span style="font-size:0.65rem; color:#C9A96E; border:1px solid rgba(201,169,110,0.3); padding:0.1rem 0.4rem; border-radius:0.4rem; text-transform:cappitalize; letter-spacing:0.05em;">
                            {{ $product->category->name }}
                        </span>
                </div>
                    <div style="display:flex;gap:0.5rem;margin-top:auto;">

                        {{-- WhatsApp --}}
                        <a href="https://wa.me/+6282114244700?text=Halo!+Saya+tertarik+dengan+{{ urlencode($product->name) }}+seharga+Rp+{{ number_format($product->price, 0, ',', '.') }}"
                           target="_blank" rel="noopener"
                           style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:rgba(37,211,102,0.08);color:#25D366;font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid rgba(37,211,102,0.15);transition:all 0.3s;"
                           onmouseover="this.style.background='#25D366';this.style.color='#fff';"
                           onmouseout="this.style.background='rgba(37,211,102,0.08)';this.style.color='#25D366';">
                            <svg style="width:0.85rem;height:0.85rem;" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            WA
                        </a>

                        {{-- TikTok --}}
                        <a href="https://www.tiktok.com/@rde.galery02?_r=1&_t=ZS-94uthJ8XcP9" target="_blank" rel="noopener"
                           style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:rgba(255,255,255,0.04);color:rgba(240,234,224,0.5);font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid rgba(255,255,255,0.07);transition:all 0.3s;"
                           onmouseover="this.style.background='#111';this.style.color='#fff';"
                           onmouseout="this.style.background='rgba(255,255,255,0.04)';this.style.color='rgba(240,234,224,0.5)';">
                            <svg style="width:0.85rem;height:0.85rem;" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.77 1.51V6.75a4.85 4.85 0 01-1-.06z"/></svg>
                            TikTok
                        </a>

                        {{-- Shopee --}}
                        <a href="https://shopee.co.id/rdegalery02" target="_blank" rel="noopener"
                           style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:rgba(238,77,45,0.08);color:#EE4D2D;font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid rgba(238,77,45,0.15);transition:all 0.3s;"
                           onmouseover="this.style.background='#EE4D2D';this.style.color='#fff';"
                           onmouseout="this.style.background='rgba(238,77,45,0.08)';this.style.color='#EE4D2D';">
                            <svg style="width:0.85rem;height:0.85rem;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C9.243 2 7 4.243 7 7v1H4.272l-.917 13H20.64l-.917-13H17V7c0-2.757-2.243-5-5-5zm0 2c1.654 0 3 1.346 3 3v1H9V7c0-1.654 1.346-3 3-3zm5.397 16H6.603L7.38 10h9.243l.774 10z"/></svg>
                            Shopee
                        </a>

                    </div>
                </div>
            </div>
            @empty
            <div style="grid-column:1/-1;text-align:center;padding:4rem 0;">
                <p style="font-family:'Cormorant Garamond',serif;font-size:1.5rem;color:rgba(240,234,224,0.3);">
                    Koleksi segera hadir ✦
                </p>
            </div>
            @endforelse

        </div>

        <!-- View all CTA -->
        {{-- <div class="reveal" style="text-align:center;margin-top:4rem;">
            <a href="#"
               style="display:inline-flex;align-items:center;gap:0.75rem;border:1px solid rgba(201,169,110,0.3);color:#C9A96E;font-size:0.75rem;font-weight:500;letter-spacing:0.15em;text-transform:uppercase;padding:1rem 2.5rem;border-radius:9999px;text-decoration:none;transition:all 0.3s;background:rgba(201,169,110,0.04);"
               onmouseover="this.style.background='rgba(201,169,110,0.12)';this.style.borderColor='rgba(201,169,110,0.6)';"
               onmouseout="this.style.background='rgba(201,169,110,0.04)';this.style.borderColor='rgba(201,169,110,0.3)';">
                View Full Collection
                <svg style="width:1rem;height:1rem;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div> --}}
    </div>
</section>


<!-- ═══════════════════════════════════════════════
     ABOUT / BRAND STORY
═══════════════════════════════════════════════ -->
<section id="about" style="padding:6rem 1.5rem;background:linear-gradient(160deg,#0D0D18 0%,#0A0A0F 50%,#0F0A14 100%);position:relative;overflow:hidden;">
    <div style="position:absolute;top:0;right:0;width:28rem;height:28rem;border-radius:9999px;background:rgba(201,169,110,0.04);filter:blur(80px);pointer-events:none;"></div>
    <div style="position:absolute;bottom:0;left:0;width:20rem;height:20rem;border-radius:9999px;background:rgba(201,151,154,0.05);filter:blur(64px);pointer-events:none;"></div>
    <div style="position:absolute;top:0;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,rgba(201,169,110,0.2),transparent);"></div>

    <div style="max-width:80rem;margin:0 auto;display:grid;grid-template-columns:1fr;gap:4rem;align-items:center;position:relative;z-index:1;" id="about-inner">

        <!-- Text -->
        <div class="reveal">
            <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:#C9A96E;margin-bottom:1rem;">Our Story</p>
            <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2.5rem,6vw,4rem);color:#F0EAE0;line-height:1.1;margin-bottom:1.5rem;">
                Crafted with<br><em style="font-style:normal;color:#C9979A;">Intention</em>
            </h2>
            <p style="font-size:0.9rem;color:rgba(240,234,224,0.5);line-height:1.8;margin-bottom:1rem;">
                Rde Galery hadir sebagai pioneer aksesori bros anti-karat pertama di marketplace Indonesia. Komitmen kami terhadap kualitas dibuktikan melalui kerjasama eksklusif langsung dengan pabrik pusat di China <em>tanpa perantara</em>.
            </p>
            <p style="font-size:0.9rem;color:rgba(240,234,224,0.5);line-height:1.8;margin-bottom:2.5rem;">
                Dengan kontrol produksi tangan pertama, kami memastikan setiap detail bros yang Anda terima memiliki standar ketahanan tinggi yang tak tertandingi.
            </p>
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;">
                <div style="text-align:center;padding:1.5rem;border-radius:1rem;background:rgba(201,169,110,0.05);border:1px solid rgba(201,169,110,0.1);">
                    <p style="font-family:'Cormorant Garamond',serif;font-size:2.5rem;font-weight:600;color:#C9A96E;margin:0 0 0.25rem;">500+</p>
                    <p style="font-size:0.65rem;color:rgba(240,234,224,0.4);letter-spacing:0.15em;text-transform:uppercase;margin:0;">Happy Customers</p>
                </div>
                <div style="text-align:center;padding:1.5rem;border-radius:1rem;background:rgba(201,169,110,0.05);border:1px solid rgba(201,169,110,0.1);">
                    <p style="font-family:'Cormorant Garamond',serif;font-size:2.5rem;font-weight:600;color:#C9A96E;margin:0 0 0.25rem;">48h</p>
                    <p style="font-size:0.65rem;color:rgba(240,234,224,0.4);letter-spacing:0.15em;text-transform:uppercase;margin:0;">Handcraft Time</p>
                </div>
                <div style="text-align:center;padding:1.5rem;border-radius:1rem;background:rgba(201,169,110,0.05);border:1px solid rgba(201,169,110,0.1);">
                    <p style="font-family:'Cormorant Garamond',serif;font-size:2.5rem;font-weight:600;color:#C9A96E;margin:0 0 0.25rem;">100%</p>
                    <p style="font-size:0.65rem;color:rgba(240,234,224,0.4);letter-spacing:0.15em;text-transform:uppercase;margin:0;">Handmade</p>
                </div>
            </div>
        </div>

        <!-- Visual grid -->
        <div class="reveal" style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
            <div style="aspect-ratio:1;border-radius:1.25rem;overflow:hidden;background:linear-gradient(145deg,rgba(201,169,110,0.08),rgba(201,151,154,0.05));border:1px solid rgba(201,169,110,0.1);">
                <img src="{{ asset('image/products/img_1.png') }}" alt="Product 1" style="width:100%;height:100%;object-fit:cover;opacity:0.85;">
            </div>
            <div style="aspect-ratio:1;border-radius:1.25rem;overflow:hidden;background:linear-gradient(145deg,rgba(201,169,110,0.08),rgba(201,151,154,0.05));border:1px solid rgba(201,169,110,0.1);margin-top:1.5rem;">
                <img src="{{ asset('image/products/img_2.png') }}" alt="Product 2" style="width:100%;height:100%;object-fit:cover;opacity:0.85;">
            </div>
            <div style="aspect-ratio:1;border-radius:1.25rem;overflow:hidden;background:linear-gradient(145deg,rgba(201,169,110,0.08),rgba(201,151,154,0.05));border:1px solid rgba(201,169,110,0.1);margin-top:-1.5rem;">
                <img src="{{ asset('image/products/img_3.png') }}" alt="Product 3" style="width:100%;height:100%;object-fit:cover;opacity:0.85;">
            </div>
            <div style="aspect-ratio:1;border-radius:1.25rem;background:linear-gradient(145deg,rgba(201,169,110,0.06),rgba(10,10,20,0.8));border:1px solid rgba(201,169,110,0.1);display:flex;align-items:center;justify-content:center;">
                <div style="text-align:center;">
                    <p style="font-size:2rem;margin:0;">✦</p>
                    <p style="font-family:'Cormorant Garamond',serif;font-size:1rem;color:rgba(201,169,110,0.6);font-style:italic;margin:0.5rem 0 0;">Since 2021</p>
                </div>
            </div>
        </div>

    </div>
    <script>
        (function(){
            const el = document.getElementById('about-inner');
            function apply(){ if(el) el.style.gridTemplateColumns = window.innerWidth >= 768 ? '1fr 1fr' : '1fr'; }
            window.addEventListener('resize', apply); apply();
        })();
    </script>
</section>


<!-- ═══════════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════════ -->
<section style="padding:5rem 1.5rem;background:linear-gradient(180deg,#0A0A0F,#0D0D18);">
    <div style="max-width:80rem;margin:0 auto;">
        <div class="reveal" style="text-align:center;margin-bottom:3rem;">
            <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:#C9A96E;margin-bottom:0.5rem;">Kind Words</p>
            <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2rem,5vw,3rem);color:#F0EAE0;margin:0;">Worn &amp; Loved</h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:1.25rem;">
            @foreach ($testimonies as $testimony)
                <div class="testi-card reveal" style="border-radius:1.25rem;padding:1.5rem;">
                <p style="font-size:0.8rem;margin:0 0 0.75rem;">⭐⭐⭐⭐⭐</p>
                <p style="font-size:0.85rem;color:rgba(240,234,224,0.6);line-height:1.7;margin:0 0 1.25rem;font-style:italic;">"{{ $testimony->title }}"</p>
                <div style="display:flex;align-items:center;gap:0.75rem;">
                    <div style="width:2rem;height:2rem;border-radius:9999px;background:linear-gradient(135deg,#C9A96E,#E8CFA0);display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:0.9rem;color:#0A0A0F;font-weight:600;">{{ substr($testimony->name, 0, 1) }}</div>
                    <div>
                        <p style="font-size:0.75rem;font-weight:500;color:#F0EAE0;margin:0;">{{ $testimony->name }}</p>
                        <p style="font-size:0.7rem;color:rgba(240,234,224,0.35);margin:0;">{{ $testimony->city ?? 'Jakarta'}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════════════
     CONTACT
═══════════════════════════════════════════════ -->
<section id="contact" style="padding:5rem 1.5rem;background:linear-gradient(160deg,#0D0D18,#0A0A0F);position:relative;overflow:hidden;">
    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:600px;height:300px;background:radial-gradient(ellipse,rgba(201,169,110,0.05),transparent 70%);pointer-events:none;"></div>
    <div class="reveal" style="max-width:40rem;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:#C9A96E;margin-bottom:0.75rem;">Get In Touch</p>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2rem,5vw,3.5rem);color:#F0EAE0;margin-bottom:1rem;">Still Have Questions?</h2>
        <p style="font-size:0.9rem;color:rgba(240,234,224,0.5);margin-bottom:2.5rem;line-height:1.75;">
            We'd love to hear from you. Chat with us on WhatsApp — we typically reply within the hour.
        </p>
        <a href="https://wa.me/+6282114244700?text=Hello! I have a question about your brooches."
           target="_blank" rel="noopener"
           style="display:inline-flex;align-items:center;gap:0.75rem;background:#25D366;color:#fff;font-size:0.75rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;padding:1rem 2.5rem;border-radius:9999px;text-decoration:none;transition:all 0.3s;box-shadow:0 8px 32px rgba(37,211,102,0.2);"
           onmouseover="this.style.background='#128C7E';this.style.boxShadow='0 8px 40px rgba(37,211,102,0.3)';"
           onmouseout="this.style.background='#25D366';this.style.boxShadow='0 8px 32px rgba(37,211,102,0.2)';">
            <svg style="width:1.1rem;height:1.1rem;" viewBox="0 0 24 24" fill="currentColor">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/>
            </svg>
            Chat on WhatsApp
        </a>
    </div>
</section>


<!-- ═══════════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════════ -->
<footer style="padding:4rem 1.5rem;background:linear-gradient(160deg,#060608 0%,#09090F 100%);border-top:1px solid rgba(201,169,110,0.08);">
    <div style="max-width:80rem;margin:0 auto;">
        <div id="footer-grid" style="display:grid;grid-template-columns:1fr;gap:2.5rem;margin-bottom:3rem;">

            <!-- Brand -->
            <div>
                <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:1rem;">
                    <span style="color:#C9A96E;font-size:1.5rem;">✦</span>
                    <span style="font-family:'Cormorant Garamond',serif;font-size:1.4rem;font-weight:600;color:#F0EAE0;">Rde Galery</span>
                </div>
                <p style="font-size:0.8rem;color:rgba(240,234,224,0.35);line-height:1.75;max-width:18rem;margin-bottom:1.5rem;">
                    Handcrafted brooches from Indonesia, made to adorn your everyday. Small batches. Big love.
                </p>
                <div style="display:flex;gap:0.75rem;">
                    <a href="https://instagram.com" target="_blank" rel="noopener"
                       style="width:2.25rem;height:2.25rem;border-radius:9999px;border:1px solid rgba(201,169,110,0.15);display:flex;align-items:center;justify-content:center;color:rgba(240,234,224,0.4);text-decoration:none;transition:all 0.3s;"
                       onmouseover="this.style.borderColor='#C9A96E';this.style.color='#C9A96E';"
                       onmouseout="this.style.borderColor='rgba(201,169,110,0.15)';this.style.color='rgba(240,234,224,0.4)';">
                        <svg style="width:1rem;height:1rem;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                    <a href="https://tiktok.com" target="_blank" rel="noopener"
                       style="width:2.25rem;height:2.25rem;border-radius:9999px;border:1px solid rgba(201,169,110,0.15);display:flex;align-items:center;justify-content:center;color:rgba(240,234,224,0.4);text-decoration:none;transition:all 0.3s;"
                       onmouseover="this.style.borderColor='#C9A96E';this.style.color='#C9A96E';"
                       onmouseout="this.style.borderColor='rgba(201,169,110,0.15)';this.style.color='rgba(240,234,224,0.4)';">
                        <svg style="width:1rem;height:1rem;" viewBox="0 0 24 24" fill="currentColor"><path d="M19.59 6.69a4.83 4.83 0 01-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 01-2.88 2.5 2.89 2.89 0 01-2.89-2.89 2.89 2.89 0 012.89-2.89c.28 0 .54.04.79.1V9.01a6.33 6.33 0 00-.79-.05 6.34 6.34 0 00-6.34 6.34 6.34 6.34 0 006.34 6.34 6.34 6.34 0 006.33-6.34V8.69a8.18 8.18 0 004.77 1.51V6.75a4.85 4.85 0 01-1-.06z"/></svg>
                    </a>
                    <a href="https://shopee.co.id" target="_blank" rel="noopener"
                       style="width:2.25rem;height:2.25rem;border-radius:9999px;border:1px solid rgba(201,169,110,0.15);display:flex;align-items:center;justify-content:center;color:rgba(240,234,224,0.4);text-decoration:none;transition:all 0.3s;"
                       onmouseover="this.style.borderColor='#C9A96E';this.style.color='#C9A96E';"
                       onmouseout="this.style.borderColor='rgba(201,169,110,0.15)';this.style.color='rgba(240,234,224,0.4)';">
                        <svg style="width:1rem;height:1rem;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C9.243 2 7 4.243 7 7v1H4.272l-.917 13H20.64l-.917-13H17V7c0-2.757-2.243-5-5-5zm0 2c1.654 0 3 1.346 3 3v1H9V7c0-1.654 1.346-3 3-3zm5.397 16H6.603L7.38 10h9.243l.774 10z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Quick links -->
            <div>
                <h4 style="font-size:0.65rem;font-weight:500;letter-spacing:0.2em;text-transform:uppercase;color:#C9A96E;margin:0 0 1.25rem;">Quick Links</h4>
                <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:0.75rem;">
                    <li><a href="#hero"     style="font-size:0.8rem;color:rgba(240,234,224,0.4);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#C9A96E';" onmouseout="this.style.color='rgba(240,234,224,0.4)';">Home</a></li>
                    <li><a href="#products" style="font-size:0.8rem;color:rgba(240,234,224,0.4);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#C9A96E';" onmouseout="this.style.color='rgba(240,234,224,0.4)';">Collection</a></li>
                    <li><a href="#about"    style="font-size:0.8rem;color:rgba(240,234,224,0.4);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#C9A96E';" onmouseout="this.style.color='rgba(240,234,224,0.4)';">About Us</a></li>
                    <li><a href="#contact"  style="font-size:0.8rem;color:rgba(240,234,224,0.4);text-decoration:none;transition:color 0.2s;" onmouseover="this.style.color='#C9A96E';" onmouseout="this.style.color='rgba(240,234,224,0.4)';">Contact</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 style="font-size:0.65rem;font-weight:500;letter-spacing:0.2em;text-transform:uppercase;color:#C9A96E;margin:0 0 1.25rem;">Contact Us</h4>
                <ul style="list-style:none;padding:0;margin:0 0 1rem;display:flex;flex-direction:column;gap:0.6rem;">
                    <li style="font-size:0.8rem;color:rgba(240,234,224,0.4);">📱 +62 8211-4244-700</li>
                    <li style="font-size:0.8rem;color:rgba(240,234,224,0.4);">📍 Pekalongan, Indonesia</li>
                    <li style="font-size:0.8rem;color:rgba(240,234,224,0.4);">⏰ Mon–Sat, 9am–6pm WIB</li>
                </ul>
                <div style="border-radius:0.75rem;overflow:hidden;border:1px solid rgba(201,169,110,0.12);filter:grayscale(0.6);">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.921534278638!2d109.63567977506675!3d-6.8999875930992625!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e702700134e8d53%3A0x4a9a7633330c203!2sRde%20Galery%20Bros%20hijab%20zircon%20anti%20karat!5e0!3m2!1sid!2sid!4v1773537928524!5m2!1sid!2sid"
                            width="100%" height="150" style="border:0;display:block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>

        <div id="footer-bottom" style="border-top:1px solid rgba(240,234,224,0.06);padding-top:2rem;display:flex;flex-direction:column;align-items:center;gap:0.5rem;text-align:center;">
            <p style="font-size:0.7rem;color:rgba(240,234,224,0.2);margin:0;">© {{ date('Y') }} Rde Galery. All rights reserved.</p>
            <p style="font-size:0.7rem;color:rgba(240,234,224,0.2);margin:0;">Made with ✦ in Indonesia</p>
        </div>
    </div>
    <script>
        (function(){
            const fg = document.getElementById('footer-grid');
            const fb = document.getElementById('footer-bottom');
            function apply(){
                if(window.innerWidth >= 768){
                    if(fg) fg.style.gridTemplateColumns = '2fr 1fr 1fr';
                    if(fb){ fb.style.flexDirection = 'row'; fb.style.justifyContent = 'space-between'; }
                } else {
                    if(fg) fg.style.gridTemplateColumns = '1fr';
                    if(fb){ fb.style.flexDirection = 'column'; fb.style.justifyContent = ''; }
                }
            }
            window.addEventListener('resize', apply); apply();
        })();
    </script>
</footer>


<!-- ═══════════════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════════════ -->
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
    burger.addEventListener('click', () => menu.classList.toggle('open'));
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