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

{{-- contact --}}
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