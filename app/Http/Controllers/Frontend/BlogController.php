<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\BlogComment;
use App\Models\SeoSetting;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data['blogs'] = Blog::with('tags')->latest();
        $seo = SeoSetting::where('slug', 'blog')->first();
        $data['title'] = $seo->title;
        $data['description'] = $seo->description;
        $data['keywords'] = $seo->keywords;
        return view('front.pages.blogs.blog', $data);
    }
    public function blogDetails($blog_slug)
    {
        $blog = Blog::where('blog_slug', $blog_slug)->with('comments', 'author')->first();
        $data['blogs'] = Blog::orderBy('created_at', 'desc')->take(10)->get();
        $data['blog'] = $blog;
        $data['title'] = $blog->en_Title;
        $data['description'] = $blog->en_Title;
        $data['keywords'] = $blog->en_Title;
        return view('front.pages.blogs.blog_details', $data);
    }
}
