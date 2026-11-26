<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="publisher" content="Khayou">
    <meta name="copyright" content="Khayou">
    <meta name="language" content="EN">
    <link rel="shortcut icon" href="{{asset('images/Logo/main-logo-1.png')}}" type="image/x-icon">
    @php $page = Request::segment(1); @endphp
     @if($page === 'about')
            <title>Founder Khayou - Muhammad Rizki Khaira</title>
            <meta name="title" content="Founder Khayou - Muhammad Rizki Khaira">
            <meta name="image" content="{{asset('images/team/founder-khayou.jpg')}}">
            <meta name="description" content="Pelajari lebih lanjut tentang Khayou, penyedia meja kerja dan setup meja kerja berkualitas. Temukan visi, misi, dan nilai-nilai kami di sini.">
            <meta name="keywords" content="tentang Khayou, profil perusahaan, visi misi Khayou, meja kerja, setup meja kerja">
            <meta name="author" content="Khayou">
            <link rel="canonical" href="{{ url('about') }}">
            <meta property="og:title" content="Founder Khayou - Muhammad Rizki Khaira">
            <meta property="og:description"content="Pelajari lebih lanjut tentang Khayou, penyedia meja kerja dan setup meja kerja berkualitas. Temukan visi, misi, dan nilai-nilai kami di sini.">
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://khayou.id/about">
            <meta property="og:site_name" content="Khayou">
            <meta property="og:image" content="{{asset('images/team/founder-khayou.jpg')}}">
            <h1 style="display:none;">Founder Khayou - Muhammad Rizki Khaira</h1>
            <h2 style="display:none;" class="d-none">tentang Khayou, profil perusahaan, visi misi Khayou, meja kerja, setup meja kerja</h2>
    @endif
    @if (Request::is('shop/*'))
        @php $slug = Request::segment(2); @endphp
        @if ($slug === 'khayou-set-bundle')
            <title>Khayou Set Bundle - Paket Meja Kerja Lengkap & Setup Meja Kerja</title>
            <meta name="image" content="{{ asset('images/products/bundle/bundle1.jpg') }}">
            <meta name="title" content="Khayou Set Bundle - Paket Meja Kerja Lengkap & Setup Meja Kerja">
            <meta name="description" content="Khayou Set Bundle: paket meja kerja lengkap dan setup meja kerja untuk kenyamanan dan produktivitas maksimal. Lengkap dengan aksesoris pilihan.">
            <meta name="keywords" content="Khayou Set Bundle, bundle meja kerja, setup meja, paket workspace, Khayou">
            <meta name="author" content="Khayou">
            <link rel="canonical" href="{{ url('shop/khayou-set-bundle') }}">
            <meta property="og:title" content="Jual Meja Kerja & Setup Meja Kerja | Khayou">
            <meta property="og:description"content="Temukan meja kerja, setup meja kerja, deskmate, dan tempat CPU terbaik di Khayou untuk meningkatkan produktivitas Anda.">
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://khayou.id/">
            <meta property="og:site_name" content="Khayou">
            <meta property="og:image" content="{{asset('images/products/bundle/bundle1.jpg')}}">
        @elseif ($slug === 'minima-desk')
            <title>Minima Desk - Meja Kerja Minimalis untuk Ruang Kerja Modern</title>
            <meta name="title" content="Minima Desk - Meja Kerja Minimalis untuk Ruang Kerja Modern">
            <meta name="image" content="{{ asset('images/products/minima/thumb.jpg') }}">
            <meta name="description" content="Minima Desk: meja kerja bergaya minimalis dengan desain ramping dan fungsi maksimal untuk ruang kerja modern.">
            <meta name="keywords" content="Minima Desk, meja minimalis, meja kecil, meja kerja minimalis, Khayou">
            <meta name="author" content="Khayou">
            <link rel="canonical" href="{{ url('shop/minima-desk') }}">
            <h1 style="display:none;" class="d-none">Minima Desk</h1>
            <h2 style="display:none;" class="d-none">Minima Desk, meja minimalis, meja kecil, meja kerja minimalis, Khayou</h2>
            <meta property="og:title" content="Minima Desk - Meja Kerja Minimalis untuk Ruang Kerja Modern">
            <meta property="og:description"content="Minima Desk: meja kerja bergaya minimalis dengan desain ramping dan fungsi maksimal untuk ruang kerja modern.">
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://khayou.id/shop/minima-desk">
            <meta property="og:site_name" content="Khayou">
            <meta property="og:image" content="{{asset('images/products/minima/thumb.jpg')}}">
        @elseif ($slug === 'legdy-deskshelf')
            <title>Legdy DeskShelf - Meja Kerja dengan Rak Penyimpanan Terintegrasi</title>
            <meta name="title" content="Legdy DeskShelf - Meja Kerja dengan Rak Penyimpanan Terintegrasi">
            <meta name="image" content="{{ asset('images/products/ledgy/thumb.webp') }}">
            <meta name="description" content="Legdy DeskShelf: meja kerja dengan rak penyimpanan terintegrasi, solusi rapi untuk menyimpan perlengkapan kerja Anda.">
            <meta name="keywords" content="Legdy DeskShelf, meja rak, meja dengan shelf, meja penyimpanan, Khayou">
            <meta name="author" content="Khayou">
            <link rel="canonical" href="{{ url('shop/legdy-deskshelf') }}">
            <h1 style="display:none;" class="d-none">Legdy DeskShelf</h1>
            <h2 style="display:none;" class="d-none">Legdy DeskShelf, meja rak, meja dengan shelf, meja penyimpanan, Khayou</h2>
            <meta property="og:title" content="Legdy DeskShelf - Meja Kerja dengan Rak Penyimpanan Terintegrasi">
            <meta property="og:description"content="Legdy DeskShelf: meja kerja dengan rak penyimpanan terintegrasi, solusi rapi untuk menyimpan perlengkapan kerja Anda.">
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://khayou.id/shop/legdy-deskshelf">
            <meta property="og:site_name" content="Khayou">
            <meta property="og:image" content="{{asset('images/products/ledgy/thumb.webp')}}">
        @elseif ($slug === 'slyde-pc-tray')
            <title>Slyde PC Tray - Tempat CPU Geser untuk Meja Kerja Rapi</title>
            <meta name="title" content="Slyde PC Tray - Tempat CPU Geser untuk Meja Kerja Rapi">
            <meta name="image" content="{{ asset('images/products/slide/thumb.jpg') }}">
            <meta name="description" content="Slyde PC Tray: tempat CPU geser praktis yang menjaga meja tetap rapi dan memudahkan akses ke perangkat keras Anda.">
            <meta name="keywords" content="Slyde PC Tray, tray CPU, tempat CPU geser, aksesoris meja, Khayou">
            <meta name="author" content="Khayou">
            <link rel="canonical" href="{{ url('shop/slyde-pc-tray') }}">
            <h1 style="display:none;" class="d-none">Slyde PC Tray</h1>
            <h2 style="display:none;" class="d-none">Slyde PC Tray, tray CPU, tempat CPU geser, aksesoris meja, Khayou</h2>     
            <meta property="og:title" content="Slyde PC Tray - Tempat CPU Geser untuk Meja Kerja Rapi">
            <meta property="og:description"content="Slyde PC Tray: tempat CPU geser praktis yang menjaga meja tetap rapi dan memudahkan akses ke perangkat keras Anda.">    
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://khayou.id/shop/slyde-pc-tray">
            <meta property="og:site_name" content="Khayou">
            <meta property="og:image" content="{{asset('images/products/slide/thumb.jpg')}}">
        @else        
            <title>Jual Meja Kerja & Setup Meja Kerja | Khayou</title>
            <meta name="description" content="Khayou menjual meja kerja, setup meja kerja, deskmate, dan tempat CPU berkualitas untuk produktivitas dan kenyamanan ruang kerja Anda. Temukan solusi workspace terbaik di Khayou.">
            <meta name="keywords" content="meja kerja, setup meja kerja, deskmate, tempat CPU, jual meja kerja, workspace, Khayou">
            <meta name="author" content="Khayou">
            <link rel="canonical" href="{{ url()->current() }}">
            <meta property="og:title" content="Jual Meja Kerja & Setup Meja Kerja | Khayou">
            <meta property="og:description"content="Khayou menyediakan meja kerja, setup meja kerja, deskmate, dan tempat CPU berkualitas.">
            <meta property="og:type" content="website">
            <meta property="og:url" content="https://khayou.id/">
            <meta property="og:site_name" content="Khayou">
            <meta property="og:image" content="{{asset('images/Logo/main-logo-1.png')}}">
        @endif
    @else
        <title>Jual Meja Kerja & Setup Meja Kerja | Khayou</title>
        <meta name="title" content="Jual Meja Kerja & Setup Meja Kerja | Khayou">
        <meta name="image" content="{{ asset('images/backgrounds/ls1.webp') }}">
        <meta name="description" content="Khayou menjual meja kerja, setup meja kerja, deskmate, dan tempat CPU berkualitas untuk produktivitas dan kenyamanan ruang kerja Anda. Temukan solusi workspace terbaik di Khayou.">
        <meta name="keywords" content="meja kerja, setup meja kerja, deskmate, tempat CPU, jual meja kerja, workspace, Khayou">
        <meta name="author" content="Khayou">
        <link rel="canonical" href="{{ url('/') }}">
        <meta property="og:title" content="Jual Meja Kerja & Setup Meja Kerja | Khayou">
        <meta property="og:description"content="Khayou menyediakan meja kerja, setup meja kerja, deskmate, dan tempat CPU berkualitas.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://khayou.id/">
        <meta property="og:site_name" content="Khayou">
        <meta property="og:image" content="{{asset('images/backgrounds/ls1.webp')}}">
    @endif
   
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Jual Meja Kerja & Setup Meja Kerja | Khayou">
    <meta name="twitter:description"
        content="Khayou menyediakan meja kerja, setup meja kerja, deskmate, dan tempat CPU berkualitas.">
    <meta name="twitter:image" content="{{asset('images/backgrounds/ls1.webp')}}">
    <!-- Google Fonts -->

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/animate/custom-animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/jarallax/jarallax.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/odometer/odometer.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/onpoint-icons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-select/css/bootstrap-select.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}" />

    <!-- template styles -->

    <link rel="stylesheet" href="{{ asset('css/detail.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/onpoint.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/onpoint-responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/card.css') }}" />
    <link rel="stylesheet" href="{{asset('css/testimonial.css')}}" />

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

</head>