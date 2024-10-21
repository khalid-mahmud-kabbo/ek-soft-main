<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\TermsConditions;

class TermsConditionsController extends Controller
{


    public function termsconditionEdit($id)
    {
        $data['title'] = __('Terms & Conditions Edit');
        $data['edit'] = TermsConditions::where('id', $id)->first();
        return view('admin.pages.termscondition.edit', $data);
    }
    public function termsconditionUpdate(Request $request)
    {
        $id = $request->id;

        $terms = TermsConditions::whereId($id)->first();

        $update = $terms->update([

            'page_title' => is_null($request->page_title) ? $terms->title : $request->page_title,
            'termscondition' => is_null($request->termscondition) ? $terms->termscondition : $request->termscondition,

        ]);
        if ($update) {
            return redirect()->route('admin.termscondition.edit', ['id' => $terms->id])->with('success', __('Successfully Updated !'));

        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }






}
