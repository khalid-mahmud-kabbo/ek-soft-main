<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class TermsConditionController extends Controller
{
    public function index()
    {
        $seo = SeoSetting::where('slug', 'terms-conditions')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('front.pages.termsconditions.termsconditions', $data);
    }

}
