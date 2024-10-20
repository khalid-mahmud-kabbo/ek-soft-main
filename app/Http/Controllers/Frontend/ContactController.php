<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $seo = SeoSetting::where('slug', 'contact')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('front.pages.contact.contact', $data);
    }

}
