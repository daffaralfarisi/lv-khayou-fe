<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $data_products = [
            [
                'name' => 'Khayou Set Bundle',
                'price' => '1700000',
                'description' => 'Complete setup including desk, chair, and accessories.',
                'image' => 'images/products/bundle/bundle1.jpg',
                'tags_type' => 1, //Best Seller
                'slug' => 'khayou-set-bundle'
            ],
            [
                'name' => 'Khayou - Minima (Desk)',
                'price' => '950000',
                'description' => 'High-quality desk for ergonomic setup.',
                'image' => 'images/products/minima/IMG_7220_1.jpg',
                'tags_type' => 1, //Best Seller
                'slug' => 'minima-desk'
            ],
            [
                'name' => 'Khayou - Ledgy (Deskshelf)',
                'price' => '450000',
                'description' => 'High-quality monitor stand for ergonomic setup',
                'image' => 'images/products/ledgy/IMG_7183_1.webp',
                'tags_type' => 2, //New Arrival
                'slug' => 'legdy-deskshelf'
            ],
            [
                'name' => 'Khayou - Slyde (PC Tray)',
                'price' => '350000',
                'description' => 'Organize your PC with this sleek tray.',
                'image' => 'images/products/slide/thumb.jpg',
                'tags_type' => 3, //Limited Stock
                'slug' => 'slyde-pc-tray'
            ],
            // Add more products as needed
        ];

        $data = [
            'products' => $data_products
        ];
        return view('pages.landingpage.index', $data);
    }

    public function shop()
    {
        // Logic for the shop page
        $data = [
            // You can pass data to the shop view if needed
            'title' => 'Shop - Khayou Set Bundle',
            'products' => [
                    'name' => 'Khayou Set Bundle',
                    'price' => '1700000',
                    'description' => 'Complete setup including desk, chair, and accessories.',
                    'image' => 'images/products/bundle/bundle1.jpg',
                    'tags_type' => 1, //Best Seller
                    'sub_items' => [
                       0 => [
                            'name' => 'Khayou - Minima (Desk)',
                            'price' => '950000',
                            'image' => 'images/products/minima/IMG_7220_1.jpg',
                            'description' => 'High-quality desk for ergonomic setup.',
                            'tags_type' => 1, //Best Seller
                            'slug' => 'minima-desk'
                        ],
                        1 => [
                            'name' => 'Khayou - Slyde (PC Tray)',
                            'price' => '450000',
                            'image' => 'images/products/ledgy/IMG_7183_1.webp',
                            'description' => 'High-quality monitor stand for ergonomic setup',
                            'tags_type' => 2, //New Arrival
                            'slug' => 'legdy-deskshelf'
                        ],
                        2 => [
                            'name' => 'Khayou - Slyde (PC Tray)',
                            'price' => '350000',
                            'image' => 'images/products/slide/thumb.jpg',
                            'description' => 'Organize your PC with this sleek tray.',
                            'tags_type' => 3, //Limited Stock
                            'slug' => 'slyde-pc-tray'
                        ]
                    ]
                // Add more products as needed
            ]
        ];
        return view('pages.shop.index', $data);
    }


    public function productDetails($slug)
    {

        // Logic for the product details page
        // Define bundle and its sub items once, reuse for bundle page and product detail lookup
        $bundle = [
            'title' => 'Shop - Khayou Set Bundle',
            'products' => [
            'name' => 'Khayou Set Bundle',
            'price' => '1700000',
            'description' => 'Complete setup including desk, chair, and accessories.',
            'image' => 'images/products/bundle/bundle1.jpg',
            'tags_type' => 1, //Best Seller
            'sub_items' => [
                [
                    'name' => 'Khayou - Minima (Desk)',
                    'price' => '950000',
                    'image' => 'images/products/minima/thumb.jpg',
                    'thumbnail' => 'images/products/minima/thumb.jpg',
                    'banner-spec' => 'images/products/minima-banner.png',
                    'description' => 'A premium quality desk to enhance the appearance of your workspace to be more aesthetic and neat cable management.',
                    'description_long' => 'The Minima desk is a modern and minimalist workspace solution, designed for both home and office use. Made from strong, lightweight plywood with a high-quality HPL finish, this desk offers ample surface area for your computer, accessories, and work supplies. Its minimalist design, available in a variety of colors, blends seamlessly with any decor style while enhancing productivity and cable organization.',
                    'tags_type' => 1, //Best Seller
                    'slug' => 'minima-desk',
                    'banner-spec' => 'images/products/minima-banner.png',
                    'gallery' => [
                            'images/products/minima/thumb.jpg',
                            'images/products/minima/minima1.jpg',
                            'images/products/minima/minima2.jpg',
                            'images/products/minima/minima3.jpeg',
                            'images/products/minima/minima4.jpg',
                            'images/products/minima/minima5.jpg',
                            'images/products/minima/minima6.jpg',
                            'images/products/minima/minima7.jpg',
                            'images/products/minima/minima8.jpg',
                            'images/products/minima/minima9.jpg'
                    ],
                    'details' => [
                        'd1' => 'High Grade Meranti Plywood 2cm 120 x 60cm',
                        'd2' => '120cm (W) x 60cm (D) x 75cm (H)',
                        'd3' => 'White, Black, Oak',
                        'd4' => 'Yes, includes tools and instructions',
                        'd5' => '2 years on manufacturing defects',
                        'd6' => 'Rizki Khaira',
                    ],
                    'details_2' => [
                        'Cable Management' => 'Integrated grommets and under-desk tray',
                        'Weight_Capacity' => 'Up to 50kg',
                        'Leg_Design' => 'Sturdy metal legs with adjustable feet',
                        'Eco-Friendly' => 'Made from sustainable materials',
                    ],
                    'suggestions' => [
                        [
                            'name' => 'Khayou - Ledgy (Deskshelf)',
                            'price' => '450000',
                            'image' => 'images/products/ledgy/IMG_7183_1.webp',
                            'thumbnail' => 'images/products/ledgy/IMG_7183_1.webp',
                            'description' => 'High-quality monitor stand for ergonomic setup',
                            'tags_type' => 2, //New Arrival
                            'slug' => 'legdy-deskshelf'
                        ],
                        [
                            'name' => 'Khayou - Slyde (PC Tray)',
                            'price' => '350000',
                            'image' => 'images/products/slide/thumb.jpg',
                            'thumbnail' => 'images/products/slide/thumb.jpg',
                            'description' => 'Organize your PC with this sleek tray.',
                            'tags_type' => 3, //Limited Stock
                            'slug' => 'slyde-pc-tray'
                        ],
                        [
                            'name' => 'Khayou Bundling Set',
                            'price' => '1700000',
                            'image' => 'images/products/bundle/bundle1.jpg',
                            'thumbnail' => 'images/products/bundle/bundle1.jpg',
                            'description' => 'High-quality desk for ergonomic setup.',
                            'tags_type' => 1, //Best Seller
                            'slug' => 'khayou-set-bundle'
                        ]
                    ]
                ],
                [
                    'name' => 'Khayou - Ledgy (Deskshelf)',
                    'price' => '450000',
                    'image' => 'images/products/ledgy/IMG_7183_1.webp',
                    'thumbnail' => 'images/products/ledgy/IMG_7183_1.webp',
                    'banner-spec' => 'images/products/ledgy-banner.png',
                    'description' => 'Deskshelf with premium quality materials to improve the layout of your desk, improve effectiveness and appearance',
                    'description_long' => 'The Ledgy Deskshelf is a premium monitor stand designed to enhance your workspace. Made from high-quality plywood with a teakwood HPL laminate surface, this stand provides a sturdy platform for your monitor while helping to declutter your desk. Its sleek, strong, and lightweight design makes it the perfect complement to any workspace in the office or at home.',
                    'tags_type' => 2, //New Arrival
                    'slug' => 'legdy-deskshelf',
                    'gallery' => [
                            'images/products/ledgy/thumb.webp',
                            'images/products/ledgy/ledgy1.jpg',
                            'images/products/ledgy/ledgy2.PNG',
                            'images/products/ledgy/ledgy3.jpg',
                            'images/products/ledgy/ledgy4.jpg',
                            'images/products/ledgy/ledgy5.jpg',
                            'images/products/ledgy/ledgy6.jpg',
                    ],
                    'details' => [
                        'Material' => 'Premium MDF with anti-slip surface',
                        'Dimensions' => '60cm (W) x 25cm (D) x 10cm (H)',
                        'Color_Options' => 'Black, White, Walnut',
                        'Weight_Capacity' => 'Up to 15kg',
                        'Warranty' => '1 year on manufacturing defects',
                        'Desaigner' => 'Rizki Khaira',
                    ],
                    'suggestions' => [
                        [
                            'name' => 'Khayou - Minima (Desk)',
                            'price' => '950000',
                            'image' => 'images/products/minima/IMG_7220_1.jpg',
                            'thumbnail' => 'images/products/minima/IMG_7220_1.jpg',
                            'description' => 'High-quality desk for ergonomic setup.',
                            'tags_type' => 1, //Best Seller
                            'slug' => 'minima-desk'
                        ],
                        [
                            'name' => 'Khayou - Slyde (PC Tray)',
                            'price' => '350000',
                            'image' => 'images/products/slide/thumb.jpg',
                            'thumbnail' => 'images/products/slide/thumb.jpg',
                            'description' => 'Organize your PC with this sleek tray.',
                            'tags_type' => 3, //Limited Stock
                            'slug' => 'slyde-pc-tray'
                        ],
                        [
                            'name' => 'Khayou Bundling Set',
                            'price' => '1700000',
                            'image' => 'images/products/bundle/bundle1.jpg',
                            'thumbnail' => 'images/products/bundle/bundle1.jpg',
                            'description' => 'High-quality desk for ergonomic setup.',
                            'tags_type' => 1, //Best Seller
                            'slug' => 'khayou-set-bundle'
                        ]
                    ]
                ],
                [
                    'name' => 'Khayou - Slyde (PC Tray)',
                    'price' => '350000',
                    'image' => 'images/products/slide/thumb.jpg',
                    'thumbnail' => 'images/products/slide/thumb.jpg',                    
                    'banner-spec' => 'images/products/slyde-banner.png',
                    'description' => 'Premium look for PC Tray with sturdy material and easy to move because it is equipped with lockable wheels.',
                    'description_long' => 'The Slyde PC Tray is designed to keep your computer case organized, secure, and effortlessly mobile. Crafted from durable plywood and equipped with smooth-rolling wheels with stoppers, it ensures stability while making it easy to reposition your PC whenever needed. Its teakwood finish blends seamlessly with modern, minimalist workspaces, whether placed beside or beneath your desk. A perfect balance of function, style, and cleanliness for your setup.',
                    'tags_type' => 3, //Limited Stock
                    'slug' => 'slyde-pc-tray',
                    'gallery' => [
                            'images/products/slide/thumb.jpg',
                            'images/products/slide/slyde1.jpg',
                            'images/products/slide/slyde2.jpg',
                            'images/products/slide/slyde3.jpg',
                            'images/products/slide/slyde4.jpg',
                            'images/products/slide/slyde5.jpg',
                            'images/products/slide/slyde6.jpg'
                    ],
                    'details' => [
                        'Material' => 'Durable plastic with non-slip feet',
                        'Dimensions' => '40cm (W) x 30cm (D) x 10cm (H)',
                        'Color_Options' => 'Black, White',
                        'Weight_Capacity' => 'Up to 10kg',
                        'Warranty' => '6 months on manufacturing defects',
                        'Desaigner' => 'Rizki Khaira',
                    ],
                    'suggestions' => [
                        [
                            'name' => 'Khayou - Minima (Desk)',
                            'price' => '950000',
                            'image' => 'images/products/minima/IMG_7220_1.jpg',
                            'thumbnail' => 'images/products/minima/IMG_7220_1.jpg',
                            'description' => 'High-quality desk for ergonomic setup.',
                            'tags_type' => 1, //Best Seller
                            'slug' => 'minima-desk'
                        ],
                        [
                            'name' => 'Khayou - Ledgy (Deskshelf)',
                            'price' => '450000',
                            'image' => 'images/products/ledgy/IMG_7183_1.webp',
                            'thumbnail' => 'images/products/ledgy/IMG_7183_1.webp',
                            'description' => 'High-quality monitor stand for ergonomic setup',
                            'tags_type' => 2, //New Arrival
                            'slug' => 'legdy-deskshelf'
                        ],
                        [
                            'name' => 'Khayou Bundling Set',
                            'price' => '1700000',
                            'image' => 'images/products/bundle/bundle1.jpg',
                            'thumbnail' => 'images/products/bundle/bundle1.jpg',
                            'description' => 'High-quality desk for ergonomic setup.',
                            'tags_type' => 1, //Best Seller
                            'slug' => 'khayou-set-bundle'
                        ]
                    ]
                ],
            ],            
          ],
        ];

        // If request is for the bundle page
        if ($slug === 'khayou-set-bundle') {
            return view('pages.shop.index', $bundle);
        }

        // Lookup sub items by slug for product detail pages
        foreach ($bundle['products']['sub_items'] as $item) {
            if (isset($item['slug']) && $item['slug'] === $slug) {
            return view('pages.shop.detail', [
                'title' => 'Product Detail - ' . $item['name'],
                'product' => $item
            ]);
            }
        }

        // Not found
        return view('pages.error404', ['message' => 'Product not found']);
    }   

    public function about()
    {
        // Logic for the about page
        return view('pages.about.index');
    }

    public function contact()
    {
        // Logic for the contact page
        return view('pages.contact.index');
    }
}
