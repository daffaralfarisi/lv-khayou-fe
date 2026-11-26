@extends('layouts.main')

@section('content')
<div class="stricky-header stricked-menu main-menu">
    <div class="sticky-header__content"></div>
</div>

<div class="container my-3">

    <div class="row">
        <div class="cardProducts">

            <div class="card mb-3 border-0">
                <div class="row g-0">
                    <div class="col-md-7 col-sm-12">
                        @php
                            // try using product images if provided, otherwise fallback to the static images used before
                            $images = [];
                            if (isset($product) && !empty($product['gallery']) && is_array($product['gallery'])) {
                                $images = array_map(function($path){
                                    return filter_var($path, FILTER_VALIDATE_URL) ? $path : asset(ltrim($path, '/'));
                                }, $product['gallery']);
                            } else {
                                $images = [
                                    asset('images/products/ledgy/IMG_7183_1.webp'),
                                    asset('images/products/ledgy/IMG_7183_1.webp'),
                                    asset('images/products/ledgy/IMG_7183_1.webp'),
                                    asset('images/products/ledgy/IMG_7183_1.webp'),
                                ];
                            }

                        @endphp

                        {{-- Scrollable container for left column images --}}
                        <div class="row" style="max-height: calc(100vh - 200px); overflow-y: auto; padding-right: 8px;">
                            @foreach ($images as $idx => $img)
                                @php
                                    // pattern: 1 -> full, 2 & 3 -> half, repeating every 3 items
                                    $pos = $idx + 1;
                                    if ($pos % 3 === 1) {
                                        // gambar ke-1, ke-4, ke-7, ... full width on md
                                        $colClass = 'col-12 col-md-12 mb-3';
                                    } else {
                                        // gambar ke-2, ke-3, ke-5, ke-6, ... half width on md
                                        $colClass = 'col-12 col-md-6 mb-3';
                                    }
                                @endphp

                                <div class="{{ $colClass }}">
                                    {{-- each image opens the overlay with popup animation --}}
                                    <img
                                        src="{{ is_string($img) ? $img : (isset($img['path']) ? $img['path'] : '') }}"
                                        data-large="{{ is_string($img) ? $img : (isset($img['path']) ? $img['path'] : '') }}"
                                        class="img-fluid rounded-start w-100 gallery-thumb"
                                        style="height: 25rem; object-fit: cover; cursor: pointer;"
                                        alt="Product image {{ $idx + 1 }}"
                                        onclick="openProductOverlay(this)"
                                    >
                                </div>

                                @if($idx === 0)
                                    {{-- single overlay element (rendered once) --}}
                                   

                                    <div id="product-image-overlay" aria-hidden="true" tabindex="-1">
                                        <div class="overlay-backdrop" onclick="closeProductOverlay()"></div>
                                        <div class="overlay-content" role="dialog" aria-modal="true">
                                            <button class="overlay-close" aria-label="Close" onclick="closeProductOverlay()">X</button>
                                            <img id="overlay-img" src="" alt="Preview" />
                                        </div>
                                    </div>

                                    <script>
                                        (function(){
                                            const overlay = document.getElementById('product-image-overlay');
                                            const overlayImg = document.getElementById('overlay-img');

                                            window.openProductOverlay = function(imgEl){
                                                const src = imgEl.dataset.large || imgEl.src;
                                                overlayImg.src = src;
                                                overlay.classList.add('show');
                                                overlay.setAttribute('aria-hidden','false');
                                                // focus for accessibility
                                                setTimeout(()=>overlay.querySelector('.overlay-close').focus(), 200);
                                                // prevent body scroll while open
                                                // document.documentElement.style.overflow = 'hidden';
                                                // document.body.style.overflow = 'hidden';
                                            };

                                            window.closeProductOverlay = function(){
                                                overlay.classList.remove('show');
                                                overlay.setAttribute('aria-hidden','true');
                                                // restore body scroll after animation
                                                setTimeout(()=>{
                                                    overlayImg.src = '';
                                                    document.documentElement.style.overflow = '';
                                                    document.body.style.overflow = '';
                                                }, 320);
                                            };

                                            // close on ESC
                                            document.addEventListener('keydown', function(e){
                                                if(e.key === 'Escape' && overlay.classList.contains('show')){
                                                    closeProductOverlay();
                                                }
                                            });

                                            // click outside image also closes (handled by backdrop), ensure click inside doesn't propagate
                                            document.querySelector('#product-image-overlay .overlay-content').addEventListener('click', function(e){
                                                e.stopPropagation();
                                            });
                                        })();
                                    </script>
                                @endif
                            @endforeach
                        </div>

                        
                    </div>

                    <div class="col-md-5 col-sm-12">
                        <div class="card-body">
                            <div class="d-flex gap-2">
                                <span class="shadow-sm badge-custom badge-khayou">NEW</span>
                                <span class="shadow-sm badge-custom bg-danger">Hot Item</span>
                                <span class="shadow-sm badge-custom bg-success">Best Seller</span>
                            </div>
                            <h5 class="card-title fw-bold fs-3 mt-3">{{isset($product) ? $product['name'] : ''}}</h5>
                            <p class="card-text">{{isset($product) ? $product['description'] : ''}}</p>
                            <p class="card-text text-end fw-bold text-dark mb-3">
                                Rp{{isset($product) ? number_format($product['price'], 0, ',', '.') : ''}}</p>
                            <div class="row">
                                <button 
                                class="btn btn-block btn-dark rounded-pill mb-3 shadow-sm"
                                onclick="window.open('https://www.tokopedia.com/archive-mrk1506-1726099264/meja-komputer-desk-120x60cm-tinggi-70cm-cable-management-minima-khayou-1732369202482021814?extParam=whid%3D2149602&amp;aff_unique_id=&amp;channel=others&amp;chain_key=', '_blank');"
                                >Buy Now</button>
                            </div>
                            <div class="row px-1">
                                <div class="alert alert-warning " style="font-size: 14px" role="alert">
                                    <strong><i class="fas fa-truck me-2"></i></strong> All of our products are ready
                                    stock! To place an order, please click the Buy Now button
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex-row d-lg-flex align-items-start justify-content-between mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-clipboard-check text-dark me-2"></i>
                                    <p class="mb-0 " style="font-size: 14px">Premium Quality</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-shield-alt text-dark me-2"></i>
                                    <p class="mb-0" style="font-size: 14px">Anti fungal and termite</p>
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-truck text-dark me-2"></i>
                                    <p class="mb-0" style="font-size: 14px">Safety Shipping</p>
                                </div>
                            </div>
                            <div class="row">
                                <p class="card-text mb-3">Others Product</p>
                                <div class="list-product-suggestion">
                                    <div class="card shadow-sm border-0">
                                        <div class="card-header bg-dark text-white">
                                            You may also like
                                        </div>
                                        <div class="card-body">
                                            @foreach ($product['suggestions'] as $key => $item)
                                            <a href="{{ route('product.details', ['slug' => $item['slug']]) }}"
                                                class="text-decoration-none text-dark">

                                                {{-- Desktop --}}
                                                <div class="d-none d-lg-flex align-items-center mb-3">
                                                    <img src="{{ asset($item['thumbnail']) }}" alt="{{ $item['name'] }}"
                                                        class="img-fluid rounded"
                                                        style="width: 60px; height: 60px; object-fit: cover;">
                                                    <div class="ms-3 flex-grow-1">
                                                        <div
                                                            class="d-flex justify-content-between align-items-center w-100">
                                                            <div>
                                                                <p class="mb-1" style="font-size: 14px;">
                                                                    {{ $item['name'] }}</p>
                                                                <p class="mb-0 fw-bold" style="font-size: 14px;">
                                                                    Rp{{ number_format($item['price'], 0, ',', '.') }}
                                                                </p>
                                                            </div>
                                                            <a href="{{ route('product.details', ['slug' => $item['slug']]) }}"
                                                                class="btn btn-dark rounded-pill">Show Product</a>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{-- Mobile --}}
                                                <div class="d-lg-none d-flex align-items-center mb-3">
                                                    <a href="{{ route('product.details', ['slug' => $item['slug']]) }}"><img src="{{ asset($item['thumbnail']) }}" alt="{{ $item['name'] }}"
                                                        class="img-fluid rounded"
                                                        style="width: 60px; height: 60px; object-fit: cover;"></a>
                                                    <div class="ms-3 flex-grow-1">
                                                       <a class="text-dark lh-sm " href="{{ route('product.details', ['slug' => $item['slug']]) }}"> <p class="mb-1" style="font-size: 14px;">
                                                            {{ $item['name'] }}</p></a>
                                                       <a class="text-dark lh-sm " href="{{ route('product.details', ['slug' => $item['slug']]) }}"> <p class="mb-0 fw-bold" style="font-size: 14px;">
                                                            Rp{{ number_format($item['price'], 0, ',', '.') }}
                                                        </p></a>
                                                    </div>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
<section style="background: #f8f9fa; padding: 20px 0;">
    <div class="row mb-4">
        <div class="col-12">
            <ul id="nav-bottom-detail-product" class="nav nav-pills justify-content-around shadow-sm w-100 w-md-50 mx-auto rounded-pill p-2" style="max-width:300px; background:#fff;">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active rounded-pill " id="tab-desc" data-bs-toggle="pill" data-bs-target="#pane-desc" type="button" role="tab" aria-controls="pane-desc" aria-selected="true">
                        Description
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link rounded-pill " id="tab-specs" data-bs-toggle="pill" data-bs-target="#pane-specs" type="button" role="tab" aria-controls="pane-specs" aria-selected="false">
                        Specs
                    </button>
                </li>
            </ul>
        </div>
    </div>
    
    <div class="row mt-5" style="max-width: 1200px; margin:auto;">
        <div class="tab-content" id="detailProductTabContent">
            <div class="tab-pane fade show active" id="pane-desc" role="tabpanel" aria-labelledby="tab-desc">
                <div class="content-description">
                    <div class="content-description-title">
                        <div class="text-center">
                            <h3 class="fs-1">{{ $product['name'] }}</h3>
                        </div>
                    </div>
                    <div class="content-description-image">
                        <img class="w-100 " src="{{ asset($product['banner-spec']) }}" alt="">
                    </div>
                    <div class="content-description-long-desc px-s1 px-md-5 mb-5 mx-md-5 text-dark fs-5" style="text-align: justify;">
                        {!! isset($product) ? $product['description_long'] : '' !!}
                    </div>
               </div>
            </div>
            <div class="tab-pane fade" id="pane-specs" role="tabpanel" aria-labelledby="tab-specs">
                <div class="content-specs">
                    <div class="content-specs-title">
                        <div class="text-center">
                            <h3 class="fs-1 mb-3">Specifications</h3>
                        </div>
                    </div>
                    <div class="card shadow-sm mx-0 mx-md-5 text-dark fs-5 mb-3 border-0" style="background: #fff;">
                        
                        @if($product['slug'] == 'minima-desk')
                        <div class="card-body px-5 py-3">
                            <button class="btn btn-dark mb-3 fw-bold">Top Table</button>
                            <p class="mb-3 pb-3 mt-3 border-bottom"> Material: <span>High Grade Meranti Plywood 2cm 120 x 60cm</span></p>
                            <p class="mb-3 pb-3 border-bottom">Texture Top Surface and Edge: <span>HPL Teak Wood Matte Finish</span></p>
                            <p class="mb-3 pb-3 border-bottom">Bottom Surface: <span>PVC Leather Coffee Matte Finish</span></p>
                            <p class="mb-3 pb-3 border-bottom">Feature: <span>Knockdown system using insert nut + 5mm Bolt, Black Doff Aluminum</span></p>
                            <p class="mb-3 pb-3 border-bottom">Grommet : <span>8x8cm, Cable Management Straps</span></p>
                            <p class="mb-3 pb-3 border-bottom">Quality: <span>Smooth Edges</span></p>

                            <button class="btn btn-dark mb-3 fw-bold">Table Leg</button>
                            <p class="mb-3 pb-3 border-bottom">Material: <span>Stainless Cylinder Diameter 4cm Length 71,5cm</span></p>
                            <p class="mb-3 pb-3 border-bottom">Texture: <span>Flat Texture Black Matte</span></p>
                            <p class="mb-1 pb-3">Feature: <span>Each table leg can be adjusted up to 3cm</span></p>
                        </div>

                        @elseif($product['slug'] == 'legdy-deskshelf')
                        <div class="card-body px-5 py-3">
                            <p class="mb-3 pb-3 mt-3 border-bottom">Material: <span> High Grade Meranti Plywood 2cm 100 x 23,5cm</span></p>
                            <p class="mb-3 pb-3 border-bottom">Texture Top Surface and Edge: <span>{{ $product['details']['Texture'] ?? 'HPL Teak Wood Matte Finish and Black Doff wood texture' }}</span></p>
                            <p class="mb-3 pb-3 border-bottom">Bottom Surface: <span>{{ $product['details']['Bottom'] ?? 'PVC Leather Coffee Matte Finish' }}</span></p>
                            <p class="mb-3 pb-3 border-bottom">Feature: <span>{{ $product['details']['Feature'] ?? 'Knockdown system using Minifix Bolt' }}</span></p>
                            <p class="mb-1 pb-3">Feet: <span>{{ $product['details']['Feet'] ?? 'Anti-slip Rubber Feet' }}</span></p>
                        </div>

                        @elseif($product['slug'] == 'slyde-pc-tray')
                        <div class="card-body px-5 py-3">
                            <p class="mb-3 pb-3 mt-3 border-bottom">Material: <span>High Grade Meranti Plywood 18mm 25 x 45 x 11cm In-size : 22 x 43,5cm</span></p>
                            <p class="mb-3 pb-3 border-bottom">Texture Top Surface and Edge: <span> HPL Teak Wood Matte Finish and PVC Leather Coffee Matte Finish</span></p>
                            <p class="mb-3 pb-3 border-bottom">Bottom Surface: <span>HPL Teak Wood Matte Finish and Black Doff wood texture</span></p>
                            <p class="mb-3 pb-3 border-bottom">Feature: <span>2 Standard wheels and 2 Stopper wheels</span></p>
                            <p class="mb-3 pb-3 border-bottom">Pay Attention: <span>Make sure the dimensions of your PC case match the dimensions of the tray</span></p>
                        </div>

                        @else
                        <div class="card-body px-5 py-3">
                            <p class="mb-3 pb-3 mt-3 border-bottom">Material: <span>{{ $product['details']['Material'] ?? '' }}</span></p>
                            <p class="mb-3 pb-3 border-bottom">Dimension: <span>{{ $product['details']['Dimensions'] ?? '' }}</span></p>
                            <p class="mb-3 pb-3 border-bottom">Color Options: <span>{{ $product['details']['Color_Options'] ?? '' }}</span></p>
                            <p class="mb-3 pb-3 border-bottom">Assembly Required: <span>{{ $product['details']['Assembly_Required'] ?? '' }}</span></p>
                            <p class="mb-3 pb-3 border-bottom">Warranty: <span>{{ $product['details']['Warranty'] ?? '' }}</span></p>
                            <p class="mb-1 pb-3">Designer: <span>{{ $product['details']['Desaigner'] ?? '' }}</span></p>
                        </div>
                        @endif
                    </div>
               </div>
            </div>
        </div>
       
    </div>
</section>
@endsection
