<section id="about" style="padding:6rem 1.5rem;background:linear-gradient(160deg,#0D0D18 0%,#0A0A0F 50%,#0F0A14 100%);position:relative;overflow:hidden;">
    <x-svg.new-flowers />

    <div style="position:absolute;top:0;right:0;width:28rem;height:28rem;border-radius:9999px;background:rgba(201,169,110,0.04);filter:blur(80px);pointer-events:none;"></div>
    <div style="position:absolute;bottom:0;left:0;width:20rem;height:20rem;border-radius:9999px;background:rgba(201,151,154,0.05);filter:blur(64px);pointer-events:none;"></div>
    <div style="position:absolute;top:0;left:10%;right:10%;height:1px;background:linear-gradient(90deg,transparent,rgba(201,169,110,0.2),transparent);"></div>

    <div style="max-width:80rem;margin:0 auto;display:grid;grid-template-columns:1fr;gap:4rem;align-items:center;position:relative;z-index:1;" id="about-inner">
        <!-- Text -->
        <x-section.about.text />

        <!-- Visual grid -->
        {{-- <x-section.about.visual-grid /> --}}
            <div class="reveal" id="about-visual-grid" style="display:grid;grid-template-columns:1fr 1fr;gap:1rem;">
            @php
                $productGrids = \App\Models\ProductGrid::all();
            @endphp
            @foreach ($productGrids as $productGrid)
                <div style="aspect-ratio:1;border-radius:1.25rem;overflow:hidden;background:linear-gradient(145deg,rgba(201,169,110,0.08),rgba(201,151,154,0.05));border:1px solid rgba(201,169,110,0.1);">
                    <img src={{ asset('storage/' . $productGrid->image) }} alt="Product 1" style="width:100%;height:100%;object-fit:cover;opacity:0.85;">
                </div>
            @endforeach
            {{-- {{ dd($productGrids) }} --}}
            {{-- @foreach ($productGrids as $productGrid)
                @include('section.about.visual-grid', [
                    'productGrid' => $productGrid
                ])
            @endforeach --}}
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