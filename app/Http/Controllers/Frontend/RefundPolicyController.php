<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\RefundPolicy;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class RefundPolicyController extends Controller
{
    public function index()
    {
        $seo = SeoSetting::where('slug', 'refund-policy')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        $data['refundpolicy'] = RefundPolicy::select([
            'page_title',
            'refundpolicy'
        ])->latest()->first();
        return view('front.pages.refundpolicies.refundpolicies', $data);
    }

}
