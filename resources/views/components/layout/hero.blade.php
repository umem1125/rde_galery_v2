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
                Elegan, <em class="gold-shimmer" style="font-style:normal;">Mewah</em><br>
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
                    Shop Now
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