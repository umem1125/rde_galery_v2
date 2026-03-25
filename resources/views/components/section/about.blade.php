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
                    <p style="font-family:'Montserrat',serif;font-size:2.5rem;font-weight:600;color:#C9A96E;margin:0 0 0.25rem;">500+</p>
                    <p style="font-size:0.65rem;color:rgba(240,234,224,0.4);letter-spacing:0.15em;text-transform:uppercase;margin:0;">Happy Customers</p>
                </div>
                <div style="text-align:center;padding:1.5rem;border-radius:1rem;background:rgba(201,169,110,0.05);border:1px solid rgba(201,169,110,0.1);">
                    <p style="font-family:'Montserrat',serif;font-size:2.5rem;font-weight:600;color:#C9A96E;margin:0 0 0.25rem;">48h</p>
                    <p style="font-size:0.65rem;color:rgba(240,234,224,0.4);letter-spacing:0.15em;text-transform:uppercase;margin:0;">Handcraft Time</p>
                </div>
                <div style="text-align:center;padding:1.5rem;border-radius:1rem;background:rgba(201,169,110,0.05);border:1px solid rgba(201,169,110,0.1);">
                    <p style="font-family:'Montserrat',serif;font-size:2.5rem;font-weight:600;color:#C9A96E;margin:0 0 0.25rem;">100%</p>
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
                    <p style="font-family:'Cormorant Garamond',serif;font-size:1rem;color:rgba(201,169,110,0.6);font-style:italic;margin:0.5rem 0 0;">Since 2020</p>
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