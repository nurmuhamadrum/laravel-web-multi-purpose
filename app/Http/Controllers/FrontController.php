<?php

namespace App\Http\Controllers;

use App\Models\CompanyAbout;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;

class FrontController extends Controller
{
    public function index()
    {
        $statistics = CompanyStatistic::take(4)->get();
        $principles = OurPrinciple::take(4)->get();
        $products = Product::take(4)->get();
        $heroSections = HeroSection::orderByDesc('id')->take(1)->get();
        $teams = OurTeam::take(7)->get();
        $testimonials = Testimonial::take(5)->get();
        return view('front.index', compact('statistics', 'principles', 'products', 'heroSections', 'teams', 'testimonials'));
    }

    public function team()
    {
        $teams = OurTeam::take(7)->get();
        return view('front.layouts.team', compact('teams'));
    }

    public function about()
    {
        $abouts = CompanyAbout::take(7)->get();
        return view('front.layouts.about', compact('abouts'));
    }
}
