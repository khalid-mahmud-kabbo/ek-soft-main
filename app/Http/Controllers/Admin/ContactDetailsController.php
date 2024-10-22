<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactUs;
use Yajra\DataTables\Facades\DataTables;

class ContactDetailsController extends Controller
{


    public function contactdetails(Request $request)
    {
        if ($request->ajax()) {
            $data = ContactUs::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.contactdetails.details', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>';
                    $btn = $btn . '<a href="' . route('admin.contactdetails.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('name', function ($data) {
                    return $data->name;
                })
                ->editColumn('email', function ($data) {
                    return $data->email;
                })
                ->editColumn('massage', function ($data) {
                    return $data->massage;
                })
                ->rawColumns(['action', 'name', 'Status', 'email', 'massage'])
                ->make(true);
        }
        $data['title'] = __('Contact Form Submitted List');
        return view('admin.pages.contactdetails.index', $data);
    }


    public function contactdetailsDelete($id)
    {

        $delete = ContactUs::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.contactdetails')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.contactdetails')->with('error', __('Does Not Delete!'));
    }

    public function contactdetailsView($id)
    {
        $data['details'] = ContactUs::where('id', $id)->first();
        return view('admin.pages.contactdetails.details', $data);
    }

}
