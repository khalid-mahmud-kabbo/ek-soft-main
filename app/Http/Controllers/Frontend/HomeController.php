<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Brand;
use App\Models\Admin\Service;
use App\Models\Admin\Team;
use App\Models\Admin\WhychooseUs;
use App\Models\Admin\Whoweare;
use App\Models\Admin\Slider;
use App\Models\SeoSetting;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{

    public  function index()
    {
        if (file_exists(storage_path('installed'))) {
            $seo = SeoSetting::where('slug', 'home')->first();
            $data['title'] = $seo->title;
            $data['sliders'] = Slider::latest()->get();
            $data['brands'] = Brand::latest()->get();
            $data['services'] = Service::latest()->get();
            $data['teams'] = Team::latest()->get();
            $data['about'] = Whoweare::select([
                'AboutImage',
                'AboutSubImage',
                'title',
                'description',
                'point_1',
                'point_2',
                'point_3',
                'point_4'
            ])->latest()->first();
            $data['whychooseus'] = WhychooseUs::select([
                'title',
                'video_link'
            ])->latest()->first();
            $data['description'] = $seo->description;
            $data['keywords'] = $seo->keywords;
            return view('front.home.home', $data);
        } else {
            return redirect()->to('/install');
        }
    }

}
