<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rde Galery — Dark / Light Mode</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* ═══════════════════════════════════════════════
           CSS VARIABLES — DARK MODE (DEFAULT)
        ═══════════════════════════════════════════════ */
        :root,
        [data-theme="dark"] {
            --bg-base:      #0A0A0F;
            --bg-deep:      #080810;
            --bg-card:      #111118;
            --bg-card-2:    #16161F;
            --bg-card-hover:#1A1A26;

            --border:       rgba(201,169,110,0.12);
            --border-hover: rgba(201,169,110,0.30);

            --gold:         #C9A96E;
            --gold-light:   #E8CFA0;
            --gold-bg:      rgba(201,169,110,0.05);
            --gold-bg-hover:rgba(201,169,110,0.12);

            --rose:         #C9979A;

            --text-primary: #F0EAE0;
            --text-muted:   rgba(240,234,224,0.50);
            --text-sub:     rgba(240,234,224,0.28);
            --text-micro:   rgba(240,234,224,0.20);

            --nav-bg:       rgba(10,10,15,0.92);
            --nav-border:   rgba(201,169,110,0.12);

            --footer-bg:    #060608;
            --footer-bg-2:  #09090F;

            --marquee-bg-l: #0D0D14;
            --marquee-bg-m: #111120;

            --hero-orb-1:   rgba(201,169,110,0.04);
            --hero-orb-2:   rgba(201,151,154,0.06);
            --hero-ring:    rgba(201,169,110,0.06);
            --hero-ring-2:  rgba(201,169,110,0.04);

            --section-grad-1: linear-gradient(180deg,#0A0A0F 0%,#0D0D18 100%);
            --section-grad-2: linear-gradient(160deg,#0D0D18 0%,#0A0A0F 50%,#0F0A14 100%);
            --section-grad-3: linear-gradient(180deg,#0A0A0F,#0D0D18);
            --section-grad-4: linear-gradient(160deg,#0D0D18,#0A0A0F);

            --about-orb-1:  rgba(201,169,110,0.04);
            --about-orb-2:  rgba(201,151,154,0.05);
            --about-divider:rgba(201,169,110,0.2);

            --testi-bg:     linear-gradient(145deg,#111118,#16161F);
            --testi-border: rgba(201,169,110,0.10);

            --contact-blob: rgba(201,169,110,0.05);

            --stat-bg:      rgba(201,169,110,0.05);
            --stat-border:  rgba(201,169,110,0.10);

            --img-grid-bg:  linear-gradient(145deg,rgba(201,169,110,0.08),rgba(201,151,154,0.05));
            --img-grid-b:   rgba(201,169,110,0.1);
            --img-opacity:  0.85;

            --spin-ring:    rgba(201,169,110,0.2);
            --hero-inner-bg:radial-gradient(circle,rgba(201,169,110,0.08),rgba(201,151,154,0.05));
            --hero-visual-bg:linear-gradient(145deg,#16161F,#111118);

            --noise-opacity:0.025;

            /* Toggle */
            --toggle-track:    #1E1E2A;
            --toggle-track-b:  rgba(201,169,110,0.25);
            --toggle-thumb:    #C9A96E;
            --toggle-icon-sun: rgba(240,234,224,0.25);
            --toggle-icon-moon:#C9A96E;

            color-scheme: dark;
        }

        /* ═══════════════════════════════════════════════
           CSS VARIABLES — LIGHT MODE
        ═══════════════════════════════════════════════ */
        [data-theme="light"] {
            --bg-base:      #FAF8F4;
            --bg-deep:      #F4F0E8;
            --bg-card:      #FFFFFF;
            --bg-card-2:    #F9F6F0;
            --bg-card-hover:#FFF9F0;

            --border:       rgba(180,140,70,0.15);
            --border-hover: rgba(160,115,40,0.40);

            --gold:         #9A6F2E;
            --gold-light:   #C49040;
            --gold-bg:      rgba(180,140,70,0.06);
            --gold-bg-hover:rgba(180,140,70,0.14);

            --rose:         #A55A5D;

            --text-primary: #1C1610;
            --text-muted:   rgba(28,22,16,0.60);
            --text-sub:     rgba(28,22,16,0.40);
            --text-micro:   rgba(28,22,16,0.25);

            --nav-bg:       rgba(250,248,244,0.93);
            --nav-border:   rgba(180,140,70,0.14);

            --footer-bg:    #EDE8DF;
            --footer-bg-2:  #E8E2D8;

            --marquee-bg-l: #EDE8DF;
            --marquee-bg-m: #E8E2D8;

            --hero-orb-1:   rgba(180,140,70,0.08);
            --hero-orb-2:   rgba(165,90,93,0.06);
            --hero-ring:    rgba(180,140,70,0.10);
            --hero-ring-2:  rgba(180,140,70,0.06);

            --section-grad-1: linear-gradient(180deg,#FAF8F4 0%,#F4F0E8 100%);
            --section-grad-2: linear-gradient(160deg,#F4F0E8 0%,#FAF8F4 50%,#F7F2EA 100%);
            --section-grad-3: linear-gradient(180deg,#FAF8F4,#F4F0E8);
            --section-grad-4: linear-gradient(160deg,#F4F0E8,#FAF8F4);

            --about-orb-1:  rgba(180,140,70,0.07);
            --about-orb-2:  rgba(165,90,93,0.05);
            --about-divider:rgba(160,115,40,0.25);

            --testi-bg:     linear-gradient(145deg,#FFFFFF,#F9F6F0);
            --testi-border: rgba(180,140,70,0.12);

            --contact-blob: rgba(180,140,70,0.06);

            --stat-bg:      rgba(180,140,70,0.05);
            --stat-border:  rgba(180,140,70,0.12);

            --img-grid-bg:  linear-gradient(145deg,rgba(180,140,70,0.08),rgba(165,90,93,0.04));
            --img-grid-b:   rgba(180,140,70,0.12);
            --img-opacity:  0.95;

            --spin-ring:    rgba(180,140,70,0.22);
            --hero-inner-bg:radial-gradient(circle,rgba(180,140,70,0.07),rgba(165,90,93,0.04));
            --hero-visual-bg:linear-gradient(145deg,#EDE8DF,#F4F0E8);

            --noise-opacity:0.012;

            /* Toggle */
            --toggle-track:    #EDE8DF;
            --toggle-track-b:  rgba(180,140,70,0.30);
            --toggle-thumb:    #9A6F2E;
            --toggle-icon-sun: #C49040;
            --toggle-icon-moon:rgba(28,22,16,0.25);

            color-scheme: light;
        }

        /* ═══════════════════════════════════════════════
           GLOBAL RESETS USING VARIABLES
        ═══════════════════════════════════════════════ */
        body {
            background: var(--bg-base);
            color: var(--text-primary);
            font-family: 'Jost', sans-serif;
            -webkit-font-smoothing: antialiased;
            transition: background 0.45s ease, color 0.45s ease;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;
            pointer-events: none;
            z-index: 0;
            opacity: var(--noise-opacity);
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)'/%3E%3C/svg%3E");
            background-repeat: repeat;
            background-size: 128px 128px;
            transition: opacity 0.45s ease;
        }

        /* ── Shimmer ── */
        .gold-shimmer {
            background: linear-gradient(90deg, var(--gold) 0%, var(--gold-light) 45%, var(--gold) 100%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: shimmer 3s linear infinite;
        }
        @keyframes shimmer { to { background-position: 200% center; } }

        /* ── Marquee ── */
        @keyframes marquee { from { transform: translateX(0); } to { transform: translateX(-33.33%); } }
        .animate-marquee { animation: marquee 22s linear infinite; }

        /* ── Nav ── */
        #navbar { transition: all 0.3s; }
        #navbar[data-scrolled] {
            background: var(--nav-bg) !important;
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            box-shadow: 0 1px 0 var(--nav-border);
        }

        .nav-link {
            font-family:'Jost',sans-serif;
            font-size:0.75rem;font-weight:500;
            letter-spacing:0.2em;text-transform:uppercase;
            color: var(--text-muted);
            text-decoration:none;
            transition:color 0.2s;
        }
        .nav-link:hover { color: var(--gold); }

        /* ── Mobile menu ── */
        #mobile-menu {
            max-height:0; opacity:0; overflow:hidden;
            transition:max-height 0.35s ease,opacity 0.35s ease;
        }
        #mobile-menu.open { max-height:300px; opacity:1; }

        /* ── Reveal ── */
        .reveal {
            opacity:0; transform:translateY(28px);
            transition:opacity 0.7s ease,transform 0.7s ease;
        }
        .reveal.visible { opacity:1; transform:translateY(0); }

        /* ── Hero ── */
        .hero-bg {
            background:
                radial-gradient(ellipse 60% 55% at 85% 35%, var(--hero-orb-1) 0%, transparent 65%),
                radial-gradient(ellipse 45% 50% at 15% 70%, var(--hero-orb-2) 0%, transparent 60%),
                radial-gradient(ellipse 80% 60% at 50% 0%, rgba(25,20,40,0.9) 0%, transparent 70%),
                var(--bg-base);
            transition: background 0.45s ease;
        }
        [data-theme="light"] .hero-bg {
            background:
                radial-gradient(ellipse 60% 55% at 85% 35%, var(--hero-orb-1) 0%, transparent 65%),
                radial-gradient(ellipse 45% 50% at 15% 70%, var(--hero-orb-2) 0%, transparent 60%),
                radial-gradient(ellipse 80% 60% at 50% 0%, rgba(240,232,215,0.8) 0%, transparent 70%),
                var(--bg-base);
        }

        /* ── Product card ── */
        .product-card {
            background: var(--bg-card);
            border: 1px solid var(--border);
            transition: all 0.45s cubic-bezier(0.22,0.61,0.36,1);
        }
        .product-card:hover {
            border-color: var(--border-hover);
            box-shadow: 0 0 40px rgba(201,169,110,0.07), 0 8px 40px rgba(0,0,0,0.12);
            transform: translateY(-4px);
            background: var(--bg-card-hover);
        }
        [data-theme="light"] .product-card:hover {
            box-shadow: 0 0 40px rgba(180,140,70,0.08), 0 8px 32px rgba(0,0,0,0.08);
        }

        /* ── Testimonials ── */
        .testi-card {
            background: var(--testi-bg);
            border: 1px solid var(--testi-border);
            transition: background 0.45s ease, border-color 0.45s ease;
        }

        /* ── Gold divider ── */
        .gold-divider {
            width:48px; height:1px;
            background: linear-gradient(90deg, transparent, var(--gold), transparent);
            display:inline-block;
            transition: background 0.45s ease;
        }

        /* ── Img hover ── */
        .img-wrap img { transition:transform 0.7s cubic-bezier(0.22,0.61,0.36,1); }
        .img-wrap:hover img { transform:scale(1.08); }

        /* ── Spinning ring ── */
        @keyframes slow-spin { to { transform:rotate(360deg); } }
        .spin-ring { animation:slow-spin 25s linear infinite; }

        /* ══════════════════════════════════════
           THEME TOGGLE BUTTON
        ══════════════════════════════════════ */
        #theme-toggle {
            position: relative;
            width: 3.25rem;
            height: 1.75rem;
            border-radius: 9999px;
            background: var(--toggle-track);
            border: 1.5px solid var(--toggle-track-b);
            cursor: pointer;
            transition: background 0.35s ease, border-color 0.35s ease;
            flex-shrink: 0;
            outline: none;
        }
        #theme-toggle:focus-visible {
            outline: 2px solid var(--gold);
            outline-offset: 2px;
        }
        #toggle-thumb {
            position: absolute;
            top: 50%;
            left: 0.2rem;
            transform: translateY(-50%);
            width: 1.2rem;
            height: 1.2rem;
            border-radius: 9999px;
            background: var(--toggle-thumb);
            transition: transform 0.35s cubic-bezier(0.34,1.56,0.64,1), background 0.35s ease;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        [data-theme="light"] #toggle-thumb {
            transform: translateX(1.4rem) translateY(-50%);
        }
        .icon-sun, .icon-moon {
            position: absolute;
            width: 0.9rem;
            height: 0.9rem;
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        .icon-sun { color: var(--toggle-icon-sun); }
        .icon-moon { color: var(--toggle-icon-moon); }
        [data-theme="dark"] .icon-sun  { opacity: 0; transform: rotate(90deg) scale(0.6); }
        [data-theme="dark"] .icon-moon { opacity: 1; transform: rotate(0deg) scale(1); }
        [data-theme="light"] .icon-sun  { opacity: 1; transform: rotate(0deg) scale(1); }
        [data-theme="light"] .icon-moon { opacity: 0; transform: rotate(-90deg) scale(0.6); }

        /* ── Mobile responsive nav ── */
        @media(min-width:768px){
            #desktop-nav { display:flex !important; }
            #shop-cta    { display:inline-flex !important; }
            #burger      { display:none !important; }
        }

        @keyframes bounce{
            0%,100%{transform:translateX(-50%) translateY(0);}
            50%{transform:translateX(-50%) translateY(-8px);}
        }

        /* ── Light mode overrides for inline styles ── */
        [data-theme="light"] .stat-box {
            background: var(--stat-bg) !important;
            border-color: var(--stat-border) !important;
        }

        /* Global transition for theme switch */
        *, *::before, *::after {
            transition-property: background-color, border-color, color, box-shadow;
            transition-duration: 0.35s;
            transition-timing-function: ease;
        }
        /* But don't slow down animations themselves */
        .spin-ring, .animate-marquee, .gold-shimmer, .reveal {
            transition: none !important;
        }
        .reveal { transition: opacity 0.7s ease, transform 0.7s ease !important; }
        .img-wrap img { transition: transform 0.7s cubic-bezier(0.22,0.61,0.36,1) !important; }
        #toggle-thumb { transition: transform 0.35s cubic-bezier(0.34,1.56,0.64,1), background 0.35s ease !important; }
    </style>
</head>
<body class="scroll-smooth">

<!-- ═══════════════════════════════════════════════
     STICKY NAVIGATION
═══════════════════════════════════════════════ -->
<nav id="navbar"
     style="position:fixed;top:0;left:0;right:0;z-index:50;padding:1rem 1.5rem;">
    <div style="max-width:80rem;margin:0 auto;display:flex;align-items:center;justify-content:space-between;">

        <!-- Logo -->
        <a href="#" style="display:flex;align-items:center;gap:0.5rem;text-decoration:none;">
            <span style="color:var(--gold);font-size:1.5rem;">✦</span>
            <span style="font-family:'Cormorant Garamond',serif;font-size:1.4rem;font-weight:600;letter-spacing:0.05em;color:var(--text-primary);">
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

            <!-- ── THEME TOGGLE ── -->
            <button id="theme-toggle" aria-label="Toggle theme" title="Toggle dark/light mode">
                <div id="toggle-thumb">
                    <!-- Moon icon -->
                    <svg class="icon-moon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z"/>
                    </svg>
                    <!-- Sun icon -->
                    <svg class="icon-sun" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
                        <circle cx="12" cy="12" r="4"/>
                        <path stroke-linecap="round" d="M12 2v2M12 20v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M2 12h2M20 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/>
                    </svg>
                </div>
            </button>

            <a href="#products" id="shop-cta"
               style="display:none;align-items:center;gap:0.5rem;background:linear-gradient(135deg,var(--gold),var(--gold-light));color:#0A0A0F;font-size:0.7rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;padding:0.6rem 1.4rem;border-radius:9999px;text-decoration:none;transition:opacity 0.3s;">
                Shop Now
            </a>
            <button id="burger" style="background:none;border:none;cursor:pointer;color:var(--text-primary);padding:0.5rem;" aria-label="Menu">
                <svg style="width:1.5rem;height:1.5rem;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path id="burger-icon" stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </div>

    <!-- Mobile menu -->
    <div id="mobile-menu"
         style="background:var(--nav-bg);backdrop-filter:blur(12px);margin-top:0.75rem;border-radius:1rem;padding:0 1.5rem;border:1px solid var(--border);">
        <ul style="padding:1rem 0;list-style:none;display:flex;flex-direction:column;gap:1rem;margin:0;">
            <li><a href="#hero"     class="mobile-link" style="color:var(--text-muted);text-decoration:none;font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;">Home</a></li>
            <li><a href="#products" class="mobile-link" style="color:var(--text-muted);text-decoration:none;font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;">Collection</a></li>
            <li><a href="#about"    class="mobile-link" style="color:var(--text-muted);text-decoration:none;font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;">About</a></li>
            <li><a href="#contact"  class="mobile-link" style="color:var(--text-muted);text-decoration:none;font-size:0.8rem;letter-spacing:0.2em;text-transform:uppercase;">Contact</a></li>
            <li>
                <a href="#products" class="mobile-link"
                   style="display:inline-flex;background:linear-gradient(135deg,var(--gold),var(--gold-light));color:#0A0A0F;font-size:0.7rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;padding:0.6rem 1.4rem;border-radius:9999px;text-decoration:none;">
                    Shop Now
                </a>
            </li>
        </ul>
    </div>
</nav>


<!-- ═══════════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════════ -->
<section id="hero" class="hero-bg" style="position:relative;min-height:100vh;display:flex;align-items:center;padding:6rem 1.5rem 4rem;overflow:hidden;">

    <div style="position:absolute;top:-4rem;right:-4rem;width:24rem;height:24rem;border-radius:9999px;background:var(--hero-orb-1);filter:blur(64px);pointer-events:none;"></div>
    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:700px;height:700px;border-radius:9999px;border:1px solid var(--hero-ring);pointer-events:none;"></div>
    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:480px;height:480px;border-radius:9999px;border:1px solid var(--hero-ring-2);pointer-events:none;"></div>

    <div id="hero-inner" style="max-width:80rem;margin:0 auto;display:grid;grid-template-columns:1fr;gap:4rem;align-items:center;width:100%;position:relative;z-index:1;">

        <!-- Text -->
        <div style="text-align:center;">
            <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:var(--gold);margin-bottom:1.5rem;">
                Handcrafted with love ✦ Pekalongan, Indonesia
            </p>
            <h1 style="font-family:'Cormorant Garamond',serif;font-size:clamp(3.5rem,9vw,7rem);line-height:1.05;color:var(--text-primary);margin-bottom:1.5rem;">
                Elegan, <em class="gold-shimmer" style="font-style:normal;">Menggoda</em><br>
                Hanya Ada di<br>
                <em style="font-style:normal;color:var(--rose);">Rde Galery</em>
            </h1>
            <p style="font-size:1rem;color:var(--text-muted);line-height:1.75;max-width:28rem;margin:0 auto 2.5rem;">
                Hadir dengan standar kualitas tinggi —
                produk kami menggunakan material Lapis Emas Asli 18K dan Permata Zircon Original.
            </p>
            <div style="display:flex;flex-wrap:wrap;gap:1rem;justify-content:center;">
                <a href="#products"
                   style="display:inline-flex;align-items:center;gap:0.75rem;background:linear-gradient(135deg,var(--gold) 0%,var(--gold-light) 100%);color:#0A0A0F;font-size:0.75rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;padding:1rem 2rem;border-radius:9999px;text-decoration:none;box-shadow:0 8px 32px rgba(201,169,110,0.20);">
                    Shop Collection
                    <svg style="width:1rem;height:1rem;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
                <a href="#about"
                   style="display:inline-flex;align-items:center;gap:0.5rem;border:1px solid var(--border-hover);color:var(--gold);font-size:0.75rem;font-weight:500;letter-spacing:0.15em;text-transform:uppercase;padding:1rem 2rem;border-radius:9999px;text-decoration:none;background:var(--gold-bg);">
                    Our Story
                </a>
            </div>

            <!-- Trust badges -->
            <div style="margin-top:3rem;display:flex;flex-wrap:wrap;gap:1.5rem;justify-content:center;">
                <div style="display:flex;align-items:center;gap:0.5rem;">
                    <span style="color:var(--gold);font-size:0.75rem;">✦</span>
                    <span style="font-size:0.7rem;font-weight:500;color:var(--text-sub);letter-spacing:0.15em;text-transform:uppercase;">Original Permata Zircon</span>
                </div>
                <div style="display:flex;align-items:center;gap:0.5rem;">
                    <span style="color:var(--gold);font-size:0.75rem;">✦</span>
                    <span style="font-size:0.7rem;font-weight:500;color:var(--text-sub);letter-spacing:0.15em;text-transform:uppercase;">Lapis Emas Asli 18K</span>
                </div>
                <div style="display:flex;align-items:center;gap:0.5rem;">
                    <span style="color:var(--gold);font-size:0.75rem;">✦</span>
                    <span style="font-size:0.7rem;font-weight:500;color:var(--text-sub);letter-spacing:0.15em;text-transform:uppercase;">Awet Bertahun-tahun</span>
                </div>
            </div>
        </div>

        <!-- Hero visual -->
        <div style="display:flex;justify-content:center;">
            <div style="position:relative;width:18rem;height:18rem;">
                <div class="spin-ring" style="position:absolute;inset:0;border-radius:9999px;border:2px dashed var(--spin-ring);"></div>
                <div style="position:absolute;inset:1.5rem;border-radius:9999px;background:var(--hero-inner-bg);"></div>
                <div style="position:absolute;inset:3rem;border-radius:9999px;overflow:hidden;box-shadow:0 0 60px rgba(201,169,110,0.12);border:2px solid var(--spin-ring);display:flex;align-items:center;justify-content:center;background:var(--hero-visual-bg);">
                    <div style="text-align:center;padding:1.5rem;">
                        <div style="font-size:4rem;">📌</div>
                        <p style="font-family:'Cormorant Garamond',serif;font-size:0.8rem;color:var(--text-sub);font-style:italic;margin:0.5rem 0 0;">Featured Piece</p>
                    </div>
                </div>
                <div style="position:absolute;bottom:-1rem;left:-2rem;background:linear-gradient(135deg,var(--gold),var(--gold-light));border-radius:1rem;padding:0.5rem 1rem;box-shadow:0 4px 24px rgba(201,169,110,0.25);">
                    <p style="font-size:0.65rem;color:rgba(10,10,15,0.6);margin:0;">Starting from</p>
                    <p style="font-family:'Montserrat',serif;font-size:1.1rem;font-weight:700;color:#0A0A0F;margin:0;">Rp 45.000</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll hint -->
    <div style="position:absolute;bottom:2rem;left:50%;transform:translateX(-50%);display:flex;flex-direction:column;align-items:center;gap:0.5rem;animation:bounce 1.5s infinite;">
        <span style="font-size:0.65rem;letter-spacing:0.25em;text-transform:uppercase;color:var(--text-micro);">Scroll</span>
        <svg style="width:1rem;height:1rem;color:var(--gold);opacity:0.4;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
        </svg>
    </div>
</section>


<!-- ═══════════════════════════════════════════════
     MARQUEE STRIP
═══════════════════════════════════════════════ -->
<div style="background:linear-gradient(90deg,var(--marquee-bg-l),var(--marquee-bg-m),var(--marquee-bg-l));padding:0.65rem 0;overflow:hidden;border-top:1px solid var(--border);border-bottom:1px solid var(--border);">
    <div class="animate-marquee" style="display:flex;white-space:nowrap;">
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Original permata zircon</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Lapis emas asli 18K</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Mutiara air tawar</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Shell cangkang kerang asli</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Stok limited edition</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Awet bertahun-tahun</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Jarum tajam halus tidak merusak kain</span>
        <span style="font-size:0.65rem;color:var(--gold);opacity:0.6;padding:0 2rem;">✦</span>
        <!-- Duplicate for seamless loop -->
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Original permata zircon</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Lapis emas asli 18K</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Mutiara air tawar</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Shell cangkang kerang asli</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Stok limited edition</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Awet bertahun-tahun</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Jarum tajam halus tidak merusak kain</span>
        <span style="font-size:0.65rem;color:var(--gold);opacity:0.6;padding:0 2rem;">✦</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Original permata zircon</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Lapis emas asli 18K</span>
        <span style="font-size:0.65rem;font-weight:500;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);opacity:0.6;padding:0 2rem;">Shell cangkang kerang asli</span>
        <span style="font-size:0.65rem;color:var(--gold);opacity:0.6;padding:0 2rem;">✦</span>
    </div>
</div>


<!-- ═══════════════════════════════════════════════
     PRODUCT GALLERY SECTION
═══════════════════════════════════════════════ -->
<section id="products" style="padding:6rem 1.5rem;background:var(--section-grad-1);">
    <div style="max-width:80rem;margin:0 auto;">

        <div class="reveal" style="text-align:center;margin-bottom:4rem;">
            <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:var(--gold);margin-bottom:0.75rem;">Our Collection</p>
            <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2.5rem,6vw,4rem);color:var(--text-primary);margin-bottom:1rem;">
                Every Pin, a <em style="font-style:normal;color:var(--rose);">Story</em>
            </h2>
            <p style="font-size:0.9rem;color:var(--text-muted);max-width:28rem;margin:0 auto;line-height:1.75;">
                Rasakan kemewahan tiada tara dengan koleksi Limited Edition.
            </p>
            <div style="margin-top:1.5rem;display:flex;justify-content:center;align-items:center;gap:0.5rem;">
                <span class="gold-divider"></span>
                <span style="color:var(--gold);font-size:0.75rem;">✦</span>
                <span class="gold-divider"></span>
            </div>
        </div>

        <!-- Product grid — sample cards -->
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:1.5rem;">
            <!-- Card 1 -->
            <div class="product-card reveal" style="border-radius:1.25rem;overflow:hidden;display:flex;flex-direction:column;">
                <div class="img-wrap" style="aspect-ratio:4/5;background:var(--img-grid-bg);overflow:hidden;display:flex;align-items:center;justify-content:center;">
                    <div style="font-size:5rem;">📌</div>
                </div>
                <div style="padding:1.5rem;flex-grow:1;display:flex;flex-direction:column;background:var(--bg-card);">
                    <h3 style="font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:600;color:var(--text-primary);margin:0 0 0.4rem;">Rde Galery Brooch Premium</h3>
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1.5rem;">
                        <span style="font-size:0.9rem;color:var(--text-muted);">Rp 75.000</span>
                        <span style="font-size:0.65rem;color:var(--gold);border:1px solid var(--border);padding:0.1rem 0.4rem;border-radius:0.4rem;">Zircon</span>
                    </div>
                    <div style="display:flex;gap:0.5rem;margin-top:auto;">
                        <a href="#" style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:rgba(37,211,102,0.08);color:#25D366;font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid rgba(37,211,102,0.15);">WA</a>
                        <a href="#" style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:var(--gold-bg);color:var(--text-muted);font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid var(--border);">TikTok</a>
                        <a href="#" style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:rgba(238,77,45,0.08);color:#EE4D2D;font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid rgba(238,77,45,0.15);">Shopee</a>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="product-card reveal" style="border-radius:1.25rem;overflow:hidden;display:flex;flex-direction:column;">
                <div class="img-wrap" style="aspect-ratio:4/5;background:var(--img-grid-bg);overflow:hidden;display:flex;align-items:center;justify-content:center;">
                    <div style="font-size:5rem;">💎</div>
                </div>
                <div style="padding:1.5rem;flex-grow:1;display:flex;flex-direction:column;background:var(--bg-card);">
                    <h3 style="font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:600;color:var(--text-primary);margin:0 0 0.4rem;">Rde Galery Brooch Premium</h3>
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1.5rem;">
                        <span style="font-size:0.9rem;color:var(--text-muted);">Rp 95.000</span>
                        <span style="font-size:0.65rem;color:var(--gold);border:1px solid var(--border);padding:0.1rem 0.4rem;border-radius:0.4rem;">Pearl</span>
                    </div>
                    <div style="display:flex;gap:0.5rem;margin-top:auto;">
                        <a href="#" style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:rgba(37,211,102,0.08);color:#25D366;font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid rgba(37,211,102,0.15);">WA</a>
                        <a href="#" style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:var(--gold-bg);color:var(--text-muted);font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid var(--border);">TikTok</a>
                        <a href="#" style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:rgba(238,77,45,0.08);color:#EE4D2D;font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid rgba(238,77,45,0.15);">Shopee</a>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="product-card reveal" style="border-radius:1.25rem;overflow:hidden;display:flex;flex-direction:column;">
                <div class="img-wrap" style="aspect-ratio:4/5;background:var(--img-grid-bg);overflow:hidden;display:flex;align-items:center;justify-content:center;">
                    <div style="font-size:5rem;">🌸</div>
                </div>
                <div style="padding:1.5rem;flex-grow:1;display:flex;flex-direction:column;background:var(--bg-card);">
                    <h3 style="font-family:'Cormorant Garamond',serif;font-size:1.2rem;font-weight:600;color:var(--text-primary);margin:0 0 0.4rem;">Rde Galery Brooch Premium</h3>
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:1.5rem;">
                        <span style="font-size:0.9rem;color:var(--text-muted);">Rp 55.000</span>
                        <span style="font-size:0.65rem;color:var(--gold);border:1px solid var(--border);padding:0.1rem 0.4rem;border-radius:0.4rem;">Shell</span>
                    </div>
                    <div style="display:flex;gap:0.5rem;margin-top:auto;">
                        <a href="#" style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:rgba(37,211,102,0.08);color:#25D366;font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid rgba(37,211,102,0.15);">WA</a>
                        <a href="#" style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:var(--gold-bg);color:var(--text-muted);font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid var(--border);">TikTok</a>
                        <a href="#" style="flex:1;display:flex;justify-content:center;align-items:center;gap:0.4rem;padding:0.65rem 0.5rem;border-radius:0.75rem;background:rgba(238,77,45,0.08);color:#EE4D2D;font-size:0.65rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;text-decoration:none;border:1px solid rgba(238,77,45,0.15);">Shopee</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════════════
     ABOUT SECTION
═══════════════════════════════════════════════ -->
<section id="about" style="padding:6rem 1.5rem;background:var(--section-grad-2);position:relative;overflow:hidden;">
    <div style="position:absolute;top:0;right:0;width:28rem;height:28rem;border-radius:9999px;background:var(--about-orb-1);filter:blur(80px);pointer-events:none;"></div>
    <div style="position:absolute;bottom:0;left:0;width:20rem;height:20rem;border-radius:9999px;background:var(--about-orb-2);filter:blur(64px);pointer-events:none;"></div>
    <div style="position:absolute;top:0;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,var(--about-divider),transparent);"></div>

    <div style="max-width:80rem;margin:0 auto;display:grid;grid-template-columns:1fr;gap:4rem;align-items:center;position:relative;z-index:1;" id="about-inner">

        <div class="reveal">
            <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:var(--gold);margin-bottom:1rem;">Our Story</p>
            <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2.5rem,6vw,4rem);color:var(--text-primary);line-height:1.1;margin-bottom:1.5rem;">
                Crafted with<br><em style="font-style:normal;color:var(--rose);">Intention</em>
            </h2>
            <p style="font-size:0.9rem;color:var(--text-muted);line-height:1.8;margin-bottom:1rem;">
                Rde Galery hadir sebagai pioneer aksesori bros anti-karat pertama di marketplace Indonesia.
            </p>
            <p style="font-size:0.9rem;color:var(--text-muted);line-height:1.8;margin-bottom:2.5rem;">
                Dengan kontrol produksi tangan pertama, kami memastikan setiap detail bros yang Anda terima memiliki standar ketahanan tinggi.
            </p>
            <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:1.5rem;">
                <div style="text-align:center;padding:1.5rem;border-radius:1rem;background:var(--stat-bg);border:1px solid var(--stat-border);">
                    <p style="font-family:'Cormorant Garamond',serif;font-size:2.5rem;font-weight:600;color:var(--gold);margin:0 0 0.25rem;">500+</p>
                    <p style="font-size:0.65rem;color:var(--text-sub);letter-spacing:0.15em;text-transform:uppercase;margin:0;">Happy Customers</p>
                </div>
                <div style="text-align:center;padding:1.5rem;border-radius:1rem;background:var(--stat-bg);border:1px solid var(--stat-border);">
                    <p style="font-family:'Cormorant Garamond',serif;font-size:2.5rem;font-weight:600;color:var(--gold);margin:0 0 0.25rem;">48h</p>
                    <p style="font-size:0.65rem;color:var(--text-sub);letter-spacing:0.15em;text-transform:uppercase;margin:0;">Handcraft Time</p>
                </div>
                <div style="text-align:center;padding:1.5rem;border-radius:1rem;background:var(--stat-bg);border:1px solid var(--stat-border);">
                    <p style="font-family:'Cormorant Garamond',serif;font-size:2.5rem;font-weight:600;color:var(--gold);margin:0 0 0.25rem;">100%</p>
                    <p style="font-size:0.65rem;color:var(--text-sub);letter-spacing:0.15em;text-transform:uppercase;margin:0;">Handmade</p>
                </div>
            </div>
        </div>

        <!-- Image grid -->
        <div class="reveal" style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
            <div style="aspect-ratio:1;border-radius:1.25rem;overflow:hidden;background:var(--img-grid-bg);border:1px solid var(--img-grid-b);display:flex;align-items:center;justify-content:center;">
                <div style="font-size:3rem;">📌</div>
            </div>
            <div style="aspect-ratio:1;border-radius:1.25rem;overflow:hidden;background:var(--img-grid-bg);border:1px solid var(--img-grid-b);margin-top:1.5rem;display:flex;align-items:center;justify-content:center;">
                <div style="font-size:3rem;">💎</div>
            </div>
            <div style="aspect-ratio:1;border-radius:1.25rem;overflow:hidden;background:var(--img-grid-bg);border:1px solid var(--img-grid-b);margin-top:-1.5rem;display:flex;align-items:center;justify-content:center;">
                <div style="font-size:3rem;">🌸</div>
            </div>
            <div style="aspect-ratio:1;border-radius:1.25rem;background:var(--stat-bg);border:1px solid var(--stat-border);display:flex;align-items:center;justify-content:center;">
                <div style="text-align:center;">
                    <p style="font-size:2rem;margin:0;">✦</p>
                    <p style="font-family:'Cormorant Garamond',serif;font-size:1rem;color:var(--gold);font-style:italic;margin:0.5rem 0 0;opacity:0.6;">Since 2021</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════════════ -->
<section style="padding:5rem 1.5rem;background:var(--section-grad-3);">
    <div style="max-width:80rem;margin:0 auto;">
        <div class="reveal" style="text-align:center;margin-bottom:3rem;">
            <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:var(--gold);margin-bottom:0.5rem;">Kind Words</p>
            <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2rem,5vw,3rem);color:var(--text-primary);margin:0;">Worn &amp; Loved</h2>
        </div>
        <div style="display:grid;grid-template-columns:repeat(auto-fill,minmax(260px,1fr));gap:1.25rem;">
            <div class="testi-card reveal" style="border-radius:1.25rem;padding:1.5rem;">
                <p style="font-size:0.8rem;margin:0 0 0.75rem;">⭐⭐⭐⭐⭐</p>
                <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.7;margin:0 0 1.25rem;font-style:italic;">"Broochnya cantik banget, kualitas premium tapi harga terjangkau!"</p>
                <div style="display:flex;align-items:center;gap:0.75rem;">
                    <div style="width:2rem;height:2rem;border-radius:9999px;background:linear-gradient(135deg,var(--gold),var(--gold-light));display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:0.9rem;color:#0A0A0F;font-weight:600;">S</div>
                    <div>
                        <p style="font-size:0.75rem;font-weight:500;color:var(--text-primary);margin:0;">Siti R.</p>
                        <p style="font-size:0.7rem;color:var(--text-sub);margin:0;">Jakarta</p>
                    </div>
                </div>
            </div>
            <div class="testi-card reveal" style="border-radius:1.25rem;padding:1.5rem;">
                <p style="font-size:0.8rem;margin:0 0 0.75rem;">⭐⭐⭐⭐⭐</p>
                <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.7;margin:0 0 1.25rem;font-style:italic;">"Sudah beli berkali-kali, tidak pernah kecewa. Anti karat beneran!"</p>
                <div style="display:flex;align-items:center;gap:0.75rem;">
                    <div style="width:2rem;height:2rem;border-radius:9999px;background:linear-gradient(135deg,var(--gold),var(--gold-light));display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:0.9rem;color:#0A0A0F;font-weight:600;">A</div>
                    <div>
                        <p style="font-size:0.75rem;font-weight:500;color:var(--text-primary);margin:0;">Ayu W.</p>
                        <p style="font-size:0.7rem;color:var(--text-sub);margin:0;">Surabaya</p>
                    </div>
                </div>
            </div>
            <div class="testi-card reveal" style="border-radius:1.25rem;padding:1.5rem;">
                <p style="font-size:0.8rem;margin:0 0 0.75rem;">⭐⭐⭐⭐⭐</p>
                <p style="font-size:0.85rem;color:var(--text-muted);line-height:1.7;margin:0 0 1.25rem;font-style:italic;">"Pengiriman cepat, packaging mewah, produknya memuaskan sekali."</p>
                <div style="display:flex;align-items:center;gap:0.75rem;">
                    <div style="width:2rem;height:2rem;border-radius:9999px;background:linear-gradient(135deg,var(--gold),var(--gold-light));display:flex;align-items:center;justify-content:center;font-family:'Cormorant Garamond',serif;font-size:0.9rem;color:#0A0A0F;font-weight:600;">N</div>
                    <div>
                        <p style="font-size:0.75rem;font-weight:500;color:var(--text-primary);margin:0;">Nadia M.</p>
                        <p style="font-size:0.7rem;color:var(--text-sub);margin:0;">Bandung</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ═══════════════════════════════════════════════
     CONTACT
═══════════════════════════════════════════════ -->
<section id="contact" style="padding:5rem 1.5rem;background:var(--section-grad-4);position:relative;overflow:hidden;">
    <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:600px;height:300px;background:radial-gradient(ellipse,var(--contact-blob),transparent 70%);pointer-events:none;"></div>
    <div class="reveal" style="max-width:40rem;margin:0 auto;text-align:center;position:relative;z-index:1;">
        <p style="font-size:0.7rem;font-weight:500;letter-spacing:0.3em;text-transform:uppercase;color:var(--gold);margin-bottom:0.75rem;">Get In Touch</p>
        <h2 style="font-family:'Cormorant Garamond',serif;font-size:clamp(2rem,5vw,3.5rem);color:var(--text-primary);margin-bottom:1rem;">Still Have Questions?</h2>
        <p style="font-size:0.9rem;color:var(--text-muted);margin-bottom:2.5rem;line-height:1.75;">
            Chat with us on WhatsApp — we typically reply within the hour.
        </p>
        <a href="https://wa.me/+6282114244700"
           target="_blank" rel="noopener"
           style="display:inline-flex;align-items:center;gap:0.75rem;background:#25D366;color:#fff;font-size:0.75rem;font-weight:600;letter-spacing:0.15em;text-transform:uppercase;padding:1rem 2.5rem;border-radius:9999px;text-decoration:none;box-shadow:0 8px 32px rgba(37,211,102,0.2);">
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
<footer style="padding:4rem 1.5rem;background:var(--footer-bg);border-top:1px solid var(--border);">
    <div style="max-width:80rem;margin:0 auto;">
        <div id="footer-grid" style="display:grid;grid-template-columns:1fr;gap:2.5rem;margin-bottom:3rem;">
            <div>
                <div style="display:flex;align-items:center;gap:0.5rem;margin-bottom:1rem;">
                    <span style="color:var(--gold);font-size:1.5rem;">✦</span>
                    <span style="font-family:'Cormorant Garamond',serif;font-size:1.4rem;font-weight:600;color:var(--text-primary);">Rde Galery</span>
                </div>
                <p style="font-size:0.8rem;color:var(--text-sub);line-height:1.75;max-width:18rem;margin-bottom:1.5rem;">
                    Handcrafted brooches from Indonesia, made to adorn your everyday. Small batches. Big love.
                </p>
            </div>
            <div>
                <h4 style="font-size:0.65rem;font-weight:500;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);margin:0 0 1.25rem;">Quick Links</h4>
                <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:0.75rem;">
                    <li><a href="#hero"     style="font-size:0.8rem;color:var(--text-sub);text-decoration:none;">Home</a></li>
                    <li><a href="#products" style="font-size:0.8rem;color:var(--text-sub);text-decoration:none;">Collection</a></li>
                    <li><a href="#about"    style="font-size:0.8rem;color:var(--text-sub);text-decoration:none;">About Us</a></li>
                    <li><a href="#contact"  style="font-size:0.8rem;color:var(--text-sub);text-decoration:none;">Contact</a></li>
                </ul>
            </div>
            <div>
                <h4 style="font-size:0.65rem;font-weight:500;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);margin:0 0 1.25rem;">Contact Us</h4>
                <ul style="list-style:none;padding:0;margin:0;display:flex;flex-direction:column;gap:0.6rem;">
                    <li style="font-size:0.8rem;color:var(--text-sub);">📱 +62 8211-4244-700</li>
                    <li style="font-size:0.8rem;color:var(--text-sub);">📍 Pekalongan, Indonesia</li>
                    <li style="font-size:0.8rem;color:var(--text-sub);">⏰ Mon–Sat, 9am–6pm WIB</li>
                </ul>
            </div>
        </div>
        <div id="footer-bottom" style="border-top:1px solid var(--border);padding-top:2rem;display:flex;flex-direction:column;align-items:center;gap:0.5rem;text-align:center;">
            <p style="font-size:0.7rem;color:var(--text-micro);margin:0;">© 2025 Rde Galery. All rights reserved.</p>
            <p style="font-size:0.7rem;color:var(--text-micro);margin:0;">Made with ✦ in Indonesia</p>
        </div>
    </div>
</footer>


<!-- ═══════════════════════════════════════════════
     JAVASCRIPT
═══════════════════════════════════════════════ -->
<script>
    // ── Theme Toggle ──
    const html = document.documentElement;
    const toggle = document.getElementById('theme-toggle');

    // Load saved preference
    const saved = localStorage.getItem('rde-theme') || 'dark';
    html.setAttribute('data-theme', saved);

    toggle.addEventListener('click', () => {
        const current = html.getAttribute('data-theme');
        const next = current === 'dark' ? 'light' : 'dark';
        html.setAttribute('data-theme', next);
        localStorage.setItem('rde-theme', next);
    });

    // ── Sticky nav ──
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 40) navbar.setAttribute('data-scrolled', '');
        else navbar.removeAttribute('data-scrolled');
    });

    // ── Mobile burger ──
    const burger = document.getElementById('burger');
    const menu   = document.getElementById('mobile-menu');
    burger.addEventListener('click', () => menu.classList.toggle('open'));
    document.querySelectorAll('.mobile-link').forEach(link => {
        link.addEventListener('click', () => menu.classList.remove('open'));
    });

    // ── Hero grid ──
    function applyHeroGrid(){
        const el = document.getElementById('hero-inner');
        if(!el) return;
        if(window.innerWidth >= 768){
            el.style.gridTemplateColumns = '1fr 1fr';
            el.querySelector(':scope > div:first-child').style.textAlign = 'left';
        } else {
            el.style.gridTemplateColumns = '1fr';
            el.querySelector(':scope > div:first-child').style.textAlign = 'center';
        }
    }
    window.addEventListener('resize', applyHeroGrid);
    applyHeroGrid();

    // ── About / Footer grid ──
    function applyResponsive(){
        const aboutInner  = document.getElementById('about-inner');
        const footerGrid  = document.getElementById('footer-grid');
        const footerBot   = document.getElementById('footer-bottom');
        const wide = window.innerWidth >= 768;
        if(aboutInner)  aboutInner.style.gridTemplateColumns = wide ? '1fr 1fr' : '1fr';
        if(footerGrid)  footerGrid.style.gridTemplateColumns = wide ? '2fr 1fr 1fr' : '1fr';
        if(footerBot){
            footerBot.style.flexDirection  = wide ? 'row' : 'column';
            footerBot.style.justifyContent = wide ? 'space-between' : '';
        }
    }
    window.addEventListener('resize', applyResponsive);
    applyResponsive();

    // ── Scroll reveal ──
    const revealEls = document.querySelectorAll('.reveal');
    const observer  = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting){
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.12 });
    revealEls.forEach(el => observer.observe(el));
</script>

</body>
</html>