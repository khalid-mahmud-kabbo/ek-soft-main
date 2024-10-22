<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use App\Models\Admin\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function index()
    {
        $seo = SeoSetting::where('slug', 'career')->first();
        $data['title'] = $seo->title;
        $data['careers'] = Career::get()->all();
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('front.pages.career.career', $data);
    }

    public function careerDetails($career_slug)
    {
        $career = Career::where('career_slug', $career_slug)->first();
        $data['career'] = $career;
        $data['title'] = $career->title;
        $data['description'] = $career->title;
        $data['keywords'] = $career->title;
        return view('front.pages.career.career_details', $data);
    }

}
