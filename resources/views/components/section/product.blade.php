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
            {{ $product->name }}
            {{-- Rde Galery Brooch Premium --}}
        </h3>
        <div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:1.5rem;">
            <div style="display:flex; flex-direction:column; gap:0.15rem;">
                <span style="font-size:0.9rem;color:rgba(240,234,224,0.4);">
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </span>

                {{-- Harga Coret --}}
                @if($product->cross_price)
                    <span style="font-size:0.75rem; color:rgba(240,234,224,0.25); text-decoration:line-through; font-style:italic;">
                        Rp {{ number_format($product->cross_price, 0, ',', '.') }}
                    </span>
                @endif
            </div>
            
            <span style="font-size:0.65rem; color:#C9A96E; border:1px solid rgba(201,169,110,0.3); padding:0.1rem 0.4rem; border-radius:0.4rem; text-transform:capitalize; letter-spacing:0.05em;">
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