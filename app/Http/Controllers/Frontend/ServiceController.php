<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use App\Models\Admin\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $seo = SeoSetting::where('slug', 'service')->first();
        $data['title'] = $seo->title;
        $data['services'] = Service::get()->all();
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('front.pages.service.service', $data);
    }
    public function serviceDetails($service_slug)
    {
        $service = Service::where('service_slug', $service_slug)->first();
        $data['service'] = $service;
        $data['title'] = $service->title;
        $data['description'] = $service->title;
        $data['keywords'] = $service->title;
        return view('front.pages.service.service_details', $data);
    }

}
