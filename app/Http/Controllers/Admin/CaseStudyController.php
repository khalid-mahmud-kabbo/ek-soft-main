<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CaseStudyRequest;
use App\Models\Admin\CaseStudy;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CaseStudyController extends Controller
{

    public function casestudy(Request $request)
    {
        if ($request->ajax()) {
            $data = CaseStudy::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.casestudy.edit', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>';

                    if ($data->Status == 1) {
                        $btn = $btn . '<a href="' . route('admin.casestudy.inactive', $data->id) . '" class="btn-action" title="Inactive"><i class="fas fa-toggle-on"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.casestudy.active', $data->id) . '" class="btn-action" title="Active"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn . '<a href="' . route('admin.casestudy.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('title', function ($data) {
                    return $data->title;
                })

                ->editColumn('Status', function ($data) {
                    if ($data->Status == 1) {
                        $active = "Active";
                        return '<span class="status active">' . $active . '</span>';
                    } else {
                        $active = "Inactive";
                        return '<span class="status blocked">' . $active . '</span>';
                    }
                })
                ->editColumn('CaseImage', function ($data) {
                    $url = asset(CaseImage() . $data->CaseImage);
                    return '<img src=' . $url . ' border="0" width="70" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'title', 'Status', 'CaseImage', 'CaseImage'])
                ->make(true);
        }
        $data['title'] = __('Case Study List');
        return view('admin.pages.casestudy.index', $data);
    }


    public function casestudyCreate()
    {
        $data['title'] = __('Case Study Create');
        return view('admin.pages.casestudy.create', $data);
    }

    public function casestudyStore(CaseStudyRequest $request)
    {
        if (!empty($request->case_image)) {
            $image = fileUpload($request['case_image'], CaseImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }

        $casestudy = CaseStudy::create([
            'title' => $request->title,
            'description' => $request->description,
            'group' => $request->group,
            'casestudy_slug' => $request->casestudy_slug,
            'CaseImage' => $image
        ]);
        if ($casestudy) {
            return redirect()->route('admin.casestudy')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }


    public function casestudyDelete($id)
    {

        $delete = CaseStudy::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.casestudy')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.casestudy')->with('error', __('Does Not Delete!'));
    }


    public function casestudyActive($id)
    {
        $inactive = CaseStudy::find($id)->update(['Status' => 1]);
        if ($inactive) {
            return redirect()->route('admin.casestudy')->with('success', __('Successfully Active !'));
        }
        return redirect()->route('admin.casestudy')->with('success', __('Does not Updated !'));
    }


    public function casestudyInactive($id)
    {
        $inactive = CaseStudy::find($id)->update(['Status' => 0]);
        if ($inactive) {
            return redirect()->route('admin.casestudy')->with('success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.casestudy')->with('success', __('Does not Updated !'));
    }


    public function casestudyEdit($id)
    {
        $data['title'] = __('Case Study Edit');
        $data['edit'] = CaseStudy::where('id', $id)->first();
        return view('admin.pages.casestudy.edit', $data);
    }


    public function casestudyUpdate(Request $request)
    {
        $id = $request->id;

        $casestudy = CaseStudy::whereId($id)->first();

        if (!empty($request->case_image)) {
            $image = fileUpload($request['case_image'], CaseImage());
        } else {
            $image = $casestudy->CaseImage;
        }

        $update = $casestudy->update([
            'title' => is_null($request->title) ? $casestudy->title : $request->title,
            'description' => is_null($request->description) ? $casestudy->description : $request->description,
            'group' => is_null($request->package) ? $casestudy->group : $request->group,
            'casestudy_slug' => is_null($request->casestudy_slug) ? $casestudy->casestudy_slug : $request->casestudy_slug,
            'CaseImage' => $image
        ]);
        if ($update) {
            return redirect()->route('admin.casestudy')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }



}
