<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\SeoSetting;
use App\Http\Requests\ContactRequest;
use App\Models\ContactUs;
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

    public function contactStore(ContactRequest $request)
    {
        ContactUs::create([
            'name' => $request->name,
            'email' => $request->email,
            'massage' => $request->massage
        ]);

        return redirect()->back()->with('success', __('Successfully Sent Message!'));
    }


}
