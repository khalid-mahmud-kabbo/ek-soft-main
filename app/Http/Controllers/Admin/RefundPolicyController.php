<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\RefundPolicy;

class RefundPolicyController extends Controller
{


    public function refundpolicyEdit($id)
    {
        $data['title'] = __('Refund Policy Edit');
        $data['edit'] = RefundPolicy::where('id', $id)->first();
        return view('admin.pages.refundpolicy.edit', $data);
    }
    public function refundpolicyUpdate(Request $request)
    {
        $id = $request->id;

        $refund = RefundPolicy::whereId($id)->first();

        $update = $refund->update([

            'page_title' => is_null($request->page_title) ? $refund->title : $request->page_title,
            'refundpolicy' => is_null($request->refundpolicy) ? $refund->refundpolicy : $request->refundpolicy,

        ]);
        if ($update) {
            return redirect()->route('admin.refundpolicy.edit', ['id' => $refund->id])->with('success', __('Successfully Updated !'));

        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }






}
