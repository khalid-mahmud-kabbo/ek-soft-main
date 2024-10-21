<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use App\Models\Admin\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $seo = SeoSetting::where('slug', 'privacy-policy')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        $data['privacypolicy'] = PrivacyPolicy::select([
            'page_title',
            'privacypolicy'
        ])->latest()->first();
        return view('front.pages.privacypolicies.privacypolicies', $data);
    }

}
