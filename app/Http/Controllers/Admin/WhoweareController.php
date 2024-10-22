<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Whoweare;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class WhoweareController extends Controller
{
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
            'satisfied_clients' => is_null($request->satisfied_clients) ? $about->satisfied_clients : $request->satisfied_clients,
            'finished_projects' => is_null($request->finished_projects) ? $about->finished_projects : $request->finished_projects,
            'skilled_experts' => is_null($request->skilled_experts) ? $about->skilled_experts : $request->skilled_experts,
            'years_of_experience' => is_null($request->years_of_experience) ? $about->years_of_experience : $request->years_of_experience,
            'AboutImage' => $image,
            'AboutSubImage' => $subimage
        ]);
        if ($update) {
            return redirect()->route('admin.about.edit', ['id' => $about->id])->with('success', __('Successfully Updated !'));

        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }
}
