<style>
    /* Sembunyikan daftar menu pada layar <= 768px (mobile) */
    @media (max-width: 768px) {
        .main-menu__list {
            display: none !important;
        }

        /* opsional: sesuaikan logo agar tidak terlalu tergeser */
        .main-menu__logo {
            margin-left: 0 !important;
        }
    }

</style>

<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="container">
                <div class="main-menu__wrapper-inner"
                    style="display: flex; justify-content: space-between; align-items: center;">
                    <!-- Menu List (Left) -->
                    <div class="main-menu__main-menu-box" style="flex: 1;">
                        <a href="#" class="mobile-nav__toggler d-none d-md-block d-lg-none"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list" style="display: flex; gap: 30px; align-items: center; margin: 0; justify-content:center;">
                            <li>
                                <a href="/">
                                   <img src="{{asset('images/Logo/main-logo-1.png')}}" alt="Khayou Logo"> 
                                </a>
                            </li>
                            <li @if (request()->is('/')) class="current" @endif>
                                <a class="text-capitalize fs-6" href="{{route('home')}}">Home</a>
                            </li>
                            <li class="menu-dropdown {{ request()->is('shop*') ? 'current' : '' }}" style="position:relative;">
                                <style>
                                    /* Lebarkan dropdown ~3x (desktop) dan layout col12 di atas + 3 col4 di bawah */
                                    .menu-dropdown { position: relative; }
                                    .menu-dropdown > a {
                                        display: inline-flex;
                                        align-items: center;
                                        padding: 6px 8px;
                                        border-radius: 8px;
                                        color: #0b0b0b;
                                        text-decoration: none;
                                        font-weight: 600;
                                        transition: background .15s, color .15s;
                                    }
                                    .menu-dropdown > a:hover { background: rgba(0,0,0,0.04); }

                                    .menu-dropdown .submenu {
                                        display: none;
                                        position: absolute;
                                        left: 0;
                                        top: calc(100% + 8px);
                                        background: #fff;
                                        box-shadow: 0 10px 30px rgba(13,18,30,0.08);
                                        padding: 14px;
                                        min-width: 780px; /* ~3x dari ukuran semula (260px) */
                                        z-index: 9999;
                                    }
                                    .menu-dropdown .submenu li { list-style: none; }
                                    .menu-dropdown:hover .submenu { display: block; }

                                    /* .submenu-vertical a:hover { background: rgba(0,0,0,0.04); } */
                                    .submenu-vertical a{border:none; display:block; padding:8px 10px; border-radius:6px; text-decoration:none; color:inherit;font-weight:400}

                                    /* Grid: top full width (featured), bawah 3 kolom (col-4 each) */
                                    .submenu-grid { display: grid; grid-template-columns: 1fr; gap: 12px; }
                                    .submenu-grid .grid-items { display: grid; grid-template-columns: repeat(3, 1fr); gap: 12px; }

                                    .featured {
                                        display: block;
                                        padding: 10px;
                                        border-radius: 8px;
                                        text-decoration: none;
                                        color: inherit;
                                        background: #fbfbfd;
                                    }
                                    .featured-inner { display: flex; gap: 12px; align-items: center; justify-content: center}
                                    .featured-inner img { width: 220px; height: 140px; object-fit: cover; border-radius: 8px; flex-shrink: 0; }
                                    .featured-inner .featured-text { font-weight: 700; font-weight: bold; color: #000}
                                    .featured-text { font-weight: 700; font-weight: bold; color: #000}
                                    .featured-inner .featured-text strong{ font-weight: 700; font-weight: bold; color: #000}
                                    .featured-inner .featured-text p { margin: 6px 0 0; font-weight: 500; color: #444; font-size: 0.94rem; }

                                    .item-card {
                                        display: block;
                                        background: #fff;
                                        border-radius: 8px;
                                        overflow: hidden;
                                        text-decoration: none;
                                        color: inherit;
                                        border: 1px solid rgba(0,0,0,0.04);
                                    }
                                    .item-card .thumb { width: 100%; height: 160px; object-fit: cover; display: block; }
                                    .item-card .meta { padding: 10px; font-weight: 600; font-size: .95rem; }

                                    .menu-dropdown .submenu a:hover .item-card,
                                    .menu-dropdown .submenu a:hover .featured { box-shadow: 0 6px 20px rgba(13,18,30,0.06); transform: translateY(-2px); transition: transform .12s, box-shadow .12s; }

                                    /* Responsive fallback: stack on mobile */
                                    @media (max-width: 768px) {
                                        .menu-dropdown .submenu {
                                            position: static;
                                            box-shadow: none;
                                            border-radius: 6px;
                                            margin-top: 6px;
                                            min-width: auto;
                                            width: calc(100vw - 40px);
                                        }
                                        .submenu-grid .grid-items { grid-template-columns: 1fr; }
                                        .featured-inner img { width: 120px; height: 80px; }
                                    }
                                </style>

                                <a aria-haspopup="true" aria-expanded="false" href="/shop/khayou-set-bundle">
                                    Shop <span style="font-size:0.8rem; opacity:.6;">▾</span>
                                </a>

                                <ul class="submenu shadow-lg" role="menu" aria-label="Khayou Setup submenu" style="">
                                    <li>
                                        <div class="submenu-vertical" style="display:flex; flex-direction:column; min-width:240px;">
                                           <a href="/shop/khayou-set-bundle"
                                                class="featured {{ request()->is('shop/khayou-set-bundle') ? 'current' : '' }}">
                                                <div class="featured-inner">
                                                    <img class="mb-3" src="{{asset('/images/backgrounds/ls2.webp')}}" alt="Khayou Set Desk Featured">                                                    
                                                </div>
                                                <div class="featured-text">
                                                    Khayou Set Bundle
                                                </div>
                                            </a>

                                            <style>
                                                /* Underline animation: left -> right, underline matches text width (not full container) */
                                                .submenu-vertical a {
                                                    position: relative;
                                                    overflow: hidden;
                                                    -webkit-tap-highlight-color: transparent;
                                                    display: inline-block; /* size to content so underline follows text */
                                                    padding: 8px 10px;
                                                }
                                                .submenu-vertical a::after {
                                                    content: "";
                                                    position: absolute;
                                                    left: 10px; /* respect horizontal padding */
                                                    bottom: 8px;
                                                    height: 2px;
                                                    width: calc(50% - 10px); /* default underline */
                                                    background: currentColor;
                                                    transform: scaleX(0);
                                                    transform-origin: left center;
                                                    transition: transform .22s cubic-bezier(.2,.9,.2,1);
                                                    border-radius: 2px;
                                                    pointer-events: none;
                                                }

                                                /* gunakan nth-of-type agar menghitung hanya elemen <a> (mengabaikan <style> atau node lain) */
                                                .submenu-vertical a:nth-of-type(1)::after {
                                                    width: calc(50% - 10px); /* item ke-1 */
                                                }
                                                .submenu-vertical a:nth-of-type(2)::after {
                                                    width: calc(50% - 58px); /* item ke-2 */
                                                }
                                                .submenu-vertical a:nth-of-type(3)::after {
                                                    width: calc(50% - 50px); /* item ke-2 */
                                                }
                                                .submenu-vertical a:nth-of-type(4)::after {
                                                    width: calc(50% - 60px); /* item ke-2 */
                                                }
                                                .submenu-vertical a:hover::after,
                                                .submenu-vertical a.current::after {
                                                    transform: scaleX(1);
                                                }
                                            </style>

                                            <a href="/shop/minima-desk"
                                               class="{{ request()->is('shop/minima-desk') ? 'current' : '' }}">
                                                Khayou Minima
                                            </a>

                                            <a href="/shop/legdy-deskshelf"
                                               class="{{ request()->is('shop/legdy-deskshelf') ? 'current' : '' }}">
                                                Khayou Legdy
                                            </a>

                                            <a href="/shop/slyde-pc-tray"
                                               class="{{ request()->is('shop/slyde-pc-tray') ? 'current' : '' }}">
                                                Khayou Slyde
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li @if (request()->is('about')) class="current" @endif>
                                <a class="text-capitalize fs-6" href="{{route('about')}}">About</a>
                            </li>
                            <li >
                                <a class="text-capitalize fs-6 " style="cursor: pointer" onclick="location.href='/about#contact'">Contact</a>
                                
                            </li>
                        </ul>
                    </div>
                    <!-- Logo (Right) -->
                    <div class="main-menu__logo d-lg-none" style="display: flex; align-items: center; margin-left: 30px;">
                        <a class="mobile-nav__toggler">
                            <img src="{{asset('images/Logo/main-logo-1.png')}}" alt="Khayou Logo">
                        </a>
                        <span class="d-none d-md-none"
                            style="margin-left: 10px; font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 1.5rem; color: #000;">Khayou</span>

                        <span class="d-block d-md-none mobile-nav__toggler" style="font-family: 'Plus Jakarta Sans', sans-serif; font-weight: 700; font-size: 1rem; color: #000; margin-left:0.5rem;">Menu</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
