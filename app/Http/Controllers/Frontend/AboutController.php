<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Whoweare;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $seo = SeoSetting::where('slug', 'about-us')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['about'] = Whoweare::select([
            'AboutImage',
            'AboutSubImage',
            'title',
            'description',
            'point_1',
            'point_2',
            'point_3',
            'point_4',
            'satisfied_clients',
            'finished_projects',
            'skilled_experts',
            'years_of_experience',
        ])->latest()->first();
        $data['keywords'] = $seo->keywords;
        return view('front.pages.about.about', $data);
    }

}
