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
    <div id="about-stats" style="display:grid;grid-template-columns:repeat(3,1fr);gap:1rem;">
        <div style="text-align:center;padding:1.25rem 0.75rem;border-radius:1rem;background:rgba(201,169,110,0.05);border:1px solid rgba(201,169,110,0.1);">
            <p style="font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:600;color:#C9A96E;margin:0 0 0.25rem;">500+</p>
            <p style="font-size:0.6rem;color:rgba(240,234,224,0.4);letter-spacing:0.12em;text-transform:uppercase;margin:0;">Happy Customers</p>
        </div>
        <div style="text-align:center;padding:1.25rem 0.75rem;border-radius:1rem;background:rgba(201,169,110,0.05);border:1px solid rgba(201,169,110,0.1);">
            <p style="font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:600;color:#C9A96E;margin:0 0 0.25rem;">48h</p>
            <p style="font-size:0.6rem;color:rgba(240,234,224,0.4);letter-spacing:0.12em;text-transform:uppercase;margin:0;">Handcraft Time</p>
        </div>
        <div style="text-align:center;padding:1.25rem 0.75rem;border-radius:1rem;background:rgba(201,169,110,0.05);border:1px solid rgba(201,169,110,0.1);">
            <p style="font-family:'Cormorant Garamond',serif;font-size:2rem;font-weight:600;color:#C9A96E;margin:0 0 0.25rem;">100%</p>
            <p style="font-size:0.6rem;color:rgba(240,234,224,0.4);letter-spacing:0.12em;text-transform:uppercase;margin:0;">Handmade</p>
        </div>
    </div>
</div>

<script>
(function(){
    const stats = document.getElementById('about-stats');
    function apply(){
        if(!stats) return;
        stats.style.gridTemplateColumns = window.innerWidth < 768 ? '1fr' : 'repeat(3,1fr)';
    }
    window.addEventListener('resize', apply); apply();
})();
</script>