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