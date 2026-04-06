<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $features = [
            [
                'title' => 'High Quality Prints',
                'description' => 'Studio-quality lighting and professional DSLR cameras ensure your guests look their best.'
            ],
            [
                'title' => 'Modern Props',
                'description' => 'A huge variety of fun, quirky, and themed props tailored for your specific event.'
            ],
            [
                'title' => 'Instant Sharing',
                'description' => 'Share photos instantly via email or QR code direct from the photobooth screen.'
            ]
        ];

        return view('homepage', compact('features'));
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function services()
{
    $packages = [
        [
            'name' => 'Basic Snap',
            'price' => 'Rp 1.500.000',
            'duration' => '/2 hours',
            'header_class' => 'bg-secondary text-white',
            'button_class' => 'btn-outline-dark',
            'is_popular' => false,
            'features' => ['Unlimited Prints (2x6)', 'Standard Backdrop', 'Fun Props Set', 'Online Gallery']
        ],
        [
            'name' => 'Premium Joy',
            'price' => 'Rp 2.500.000',
            'duration' => '/4 hours',
            'header_class' => 'bg-warning text-dark',
            'button_class' => 'btn-warning text-dark fw-bold',
            'is_popular' => true,
            'features' => ['Unlimited Premium Prints (4x6)', 'Custom Premium Backdrop', 'Themed High-End Props', 'Boomerang & GIF Creation', 'Scrapbook Station']
        ],
        [
            'name' => 'Wedding VIP',
            'price' => 'Rp 4.000.000',
            'duration' => '/6 hours',
            'header_class' => 'bg-dark text-warning',
            'button_class' => 'btn-outline-dark',
            'is_popular' => false,
            'features' => ['Everything in Premium', '360 Video Booth Included', 'Custom Photo Template Design', 'Instant Social Media Sharing Kiosk', 'Idle Time (1 hour free)']
        ]
    ];

    return view('services', compact('packages'));
}
    
}