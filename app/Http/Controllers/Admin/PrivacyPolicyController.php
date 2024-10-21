<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\PrivacyPolicy;

class PrivacyPolicyController extends Controller
{


    public function privacypolicyEdit($id)
    {
        $data['title'] = __('Privacy Policy Edit');
        $data['edit'] = PrivacyPolicy::where('id', $id)->first();
        return view('admin.pages.privacypolicy.edit', $data);
    }
    public function privacypolicyUpdate(Request $request)
    {
        $id = $request->id;

        $privacy = PrivacyPolicy::whereId($id)->first();

        $update = $privacy->update([

            'page_title' => is_null($request->page_title) ? $privacy->title : $request->page_title,
            'privacypolicy' => is_null($request->privacypolicy) ? $privacy->privacypolicy : $request->privacypolicy,

        ]);
        if ($update) {
            return redirect()->route('admin.privacypolicy.edit', ['id' => $privacy->id])->with('success', __('Successfully Updated !'));

        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }






}
