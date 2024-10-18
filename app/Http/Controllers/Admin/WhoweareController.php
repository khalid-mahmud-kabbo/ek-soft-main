<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WhoweareRequest;
use App\Models\Admin\Whoweare;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class WhoweareController extends Controller
{


    public function aboutCreate()
    {
        $data['title'] = __('About Create');
        return view('admin.pages.about.create', $data);
    }


    public function aboutStore(WhoweareRequest $request)
    {
        if (!empty($request->main_image)) {
            $image = fileUpload($request['main_image'], AboutImage());
        } else {
            return redirect()->back()->with('error', __('Main Image 1 is  required'));
        }

        if (!empty($request->sub_image)) {
            $subimage = fileUpload($request['sub_image'], AboutImage2());
        } else {
            return redirect()->back()->with('error', __('SUb Image 2 is  required'));
        }

        $about = Whoweare::create([
            'title' => $request->title,
            'description' => $request->description,
            'point_1' => $request->point_1,
            'point_2' => $request->point_2,
            'point_3' => $request->point_3,
            'point_4' => $request->point_4,
            'AboutImage' => $image,
            'AboutSubImage' => $subimage
        ]);
        if ($about) {
            return redirect()->route('admin.about.create')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }


    public function aboutEdit($id)
    {
        $data['title'] = __('About Edit');
        $data['edit'] = Whoweare::where('id', $id)->first();
        return view('admin.pages.about.edit', $data);
    }
    public function aboutUpdate(Request $request)
    {
        $id = $request->id;

        $about = Whoweare::whereId($id)->first();


        if (!empty($request->slider_image)) {
            $image = fileUpload($request['slider_image'], AboutImage());
        } else {
            $image = $about->AboutImage;
        }

        if (!empty($request->sub_image)) {
            $subimage = fileUpload($request['sub_image'], AboutImage2());
        } else {
            $subimage = $about->AboutSubImage;
        }

        $update = $about->update([

            'title' => is_null($request->title) ? $about->title : $request->title,
            'description' => is_null($request->description) ? $about->description : $request->description,
            'point_1' => is_null($request->point_1) ? $about->point_1 : $request->point_1,
            'point_2' => is_null($request->point_2) ? $about->point_2 : $request->point_2,
            'point_3' => is_null($request->point_3) ? $about->point_3 : $request->point_3,
            'point_4' => is_null($request->point_4) ? $about->point_4 : $request->point_4,
            'AboutImage' => $image,
            'AboutSubImage' => $subimage
        ]);
        if ($update) {
            return redirect()->route('admin.about.edit', ['id' => $about->id])->with('success', __('Successfully Updated !'));

        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }
}
