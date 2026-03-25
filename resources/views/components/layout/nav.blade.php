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