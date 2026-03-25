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

{{-- nav --}}
<x-layout.nav />

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

{{-- hero --}}
<x-layout.hero />

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

{{-- marquee strip --}}
<x-layout.marquee />

{{-- product gallery --}}
<section id="products" style="padding:6rem 1.5rem;background:linear-gradient(180deg,#0A0A0F 0%,#0D0D18 100%);">
    <div style="max-width:80rem;margin:0 auto;">

        <!-- Section header -->
        <x-section.header-product />

        <!-- Product grid -->
        <div id="product-grid" style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:1.5rem;">
            @forelse($products as $index => $product)
                @include('section.product', [
                    'product' => $product,
                    'index' => $index
                ])
            @empty
                <div style="grid-column:1/-1;text-align:center;padding:4rem 0;">
                    <p style="font-family:'Cormorant Garamond',serif;font-size:1.5rem;color:rgba(240,234,224,0.3);">
                        Koleksi segera hadir ✦
                    </p>
                </div>
            @endforelse
        </div>

        <!-- View all CTA -->
        <x-section.collection-product />
    </div>
</section>

{{-- about --}}
<x-section.about />

{{-- testimonials --}}
<section style="padding:5rem 1.5rem;background:linear-gradient(180deg,#0A0A0F,#0D0D18);">
    <div style="max-width:80rem;margin:0 auto;">
        <div class="reveal" style="text-align:center;margin-bottom:3rem;">
            <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:#C9A96E;margin-bottom:0.5rem;">Kind Words</p>
            <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2rem,5vw,3rem);color:#F0EAE0;margin:0;">Worn &amp; Loved</h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:1.25rem;">
            @foreach ($testimonies as $testimony)
                @include('section.testimony', [
                    'testimony' => $testimony
                ])
            @endforeach
        </div>
    </div>
</section>

{{-- contact WA --}}
<x-section.contact-wa />

{{-- footer --}}
<footer style="padding:4rem 1.5rem;background:linear-gradient(160deg,#060608 0%,#09090F 100%);border-top:1px solid rgba(201,169,110,0.08);">
    <div style="max-width:80rem;margin:0 auto;">
        <div id="footer-grid" style="display:grid;grid-template-columns:1fr;gap:2.5rem;margin-bottom:3rem;">

            <!-- Brand -->
            <x-layout.footer.brand />

            <!-- Quick links -->
            <x-layout.footer.quick-links />

            <!-- Contact -->
            <x-layout.footer.contact />
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

{{-- javascript --}}
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