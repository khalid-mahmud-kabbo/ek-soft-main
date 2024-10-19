<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\WhychooseUs;

class WhychooseUsController extends Controller
{


    public function whychooseusEdit($id)
    {
        $data['title'] = __('Why Choose Us Edit');
        $data['edit'] = WhychooseUs::where('id', $id)->first();
        return view('admin.pages.whychooseus.edit', $data);
    }
    public function whychooseusUpdate(Request $request)
    {
        $id = $request->id;

        $about = WhychooseUs::whereId($id)->first();

        $update = $about->update([

            'title' => is_null($request->title) ? $about->title : $request->title,
            'video_link' => is_null($request->video_link) ? $about->video_link : $request->video_link,

        ]);
        if ($update) {
            return redirect()->route('admin.whychooseus.edit', ['id' => $about->id])->with('success', __('Successfully Updated !'));

        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }






}
