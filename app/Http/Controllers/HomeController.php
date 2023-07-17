<?php

namespace App\Http\Controllers;

use App\Models\SeoFeature;
use Artesaos\SEOTools\Contracts\JsonLd;
use Artesaos\SEOTools\Contracts\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['metaData'] = SeoFeature::where('slug', 'home')->first(); 
        return view("frontend.index", $data);
    }

    public function aboutUs()
    {
        $data['seoData'] = SeoFeature::where('slug', 'about-us')->first(); 
        return view("frontend.about-us", $data);
    }

    public function contactUs()
    {
        $data['seoData'] = SeoFeature::where('slug', 'contact-us')->first();
        return view("frontend.contact-us", $data);
    }

    public function service()
    {
        $data['seoData'] = SeoFeature::where('slug', 'service')->first();
        return view("frontend.service", $data);
    }

    public function serviceDetails()
    {
        $data['seoData'] = SeoFeature::where('slug', 'service-details')->first();
        return view("frontend.service-details", $data);
    }

    public function project()
    {
        $data['seoData'] = SeoFeature::where('slug', 'project')->first();
        return view("frontend.project", $data);
    }

    public function projectDetails()
    {
        $data['seoData'] = SeoFeature::where('slug', 'project-details')->first();
        return view("frontend.project-details", $data);
    }

    public function faq()
    {
        $data['seoData'] = SeoFeature::where('slug', 'faq')->first();
        return view("frontend.faq", $data);
    }

    public function termsCondition()
    {
        $data['seoData'] = SeoFeature::where('slug', 'terms-condition')->first();
        return view("frontend.terms-condition", $data);
    }

    public function privacyPolicy()
    {
        $data['seoData'] = SeoFeature::where('slug', 'privacy-policy')->first();
        return view("frontend.privacy-policy", $data);
    }

}
