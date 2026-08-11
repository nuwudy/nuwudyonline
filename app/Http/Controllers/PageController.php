<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function attestation()
    {
        return view('services.show', ['title' => 'Attestation & Dataflow Verification', 'service' => 'attestation']);
    }

    public function visa()
    {
        return view('services.show', ['title' => 'Visa Consultancy', 'service' => 'visa']);
    }

    public function travel()
    {
        return view('services.show', ['title' => 'Travel & Tours', 'service' => 'travel']);
    }

    public function medical()
    {
        return view('services.show', ['title' => 'Medical Tourism', 'service' => 'medical']);
    }

    public function apostille()
    {
        return view('services.show', ['title' => 'Apostille Services', 'service' => 'apostille']);
    }
}
