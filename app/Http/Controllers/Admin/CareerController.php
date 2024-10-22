<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CareerRequest;
use App\Models\Admin\Career;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CareerController extends Controller
{
    public function career(Request $request)
    {
        if ($request->ajax()) {
            $data = Career::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.career.edit', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>';

                    if ($data->Status == 1) {
                        $btn = $btn . '<a href="' . route('admin.career.inactive', $data->id) . '" class="btn-action" title="Inactive"><i class="fas fa-toggle-on"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.career.active', $data->id) . '" class="btn-action" title="Active"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn . '<a href="' . route('admin.career.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
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
                ->editColumn('CareerImage', function ($data) {
                    $url = asset(CareerImage() . $data->CareerImage);
                    return '<img src=' . $url . ' border="0" width="70" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'title', 'Status', 'CareerImage', 'CareerImage'])
                ->make(true);
        }
        $data['title'] = __('Career List');
        return view('admin.pages.career.index', $data);
    }


    public function careerCreate()
    {
        $data['title'] = __('Career Create');
        return view('admin.pages.career.create', $data);
    }

    public function careerStore(CareerRequest $request)
    {
        if (!empty($request->Career_Image)) {
            $image = fileUpload($request['Career_Image'], CareerImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }

        $career = Career::create([
            'title' => $request->title,
            'career_slug' => $request->career_slug,
            'description' => $request->description,
            'deadline' => $request->deadline,
            'CareerImage' => $image,
        ]);
        if ($career) {
            return redirect()->route('admin.career')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }


    public function careerDelete($id)
    {

        $delete = Career::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.career')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.career')->with('error', __('Does Not Delete!'));
    }


    public function careerActive($id)
    {
        $inactive = Career::find($id)->update(['Status' => 1]);
        if ($inactive) {
            return redirect()->route('admin.career')->with('success', __('Successfully Active !'));
        }
        return redirect()->route('admin.career')->with('success', __('Does not Updated !'));
    }


    public function careerInactive($id)
    {
        $inactive = Career::find($id)->update(['Status' => 0]);
        if ($inactive) {
            return redirect()->route('admin.career')->with('success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.career')->with('success', __('Does not Updated !'));
    }


    public function careerEdit($id)
    {
        $data['title'] = __('Career Edit');
        $data['edit'] = Career::where('id', $id)->first();
        return view('admin.pages.career.edit', $data);
    }


    public function careerUpdate(Request $request)
    {
        $id = $request->id;

        $career = Career::whereId($id)->first();

        if (!empty($request->Career_Image)) {
            $image = fileUpload($request['Career_Image'], CareerImage());
        } else {
            $image = $career->CareerImage;
        }

        $update = $career->update([

            'title' => is_null($request->title) ? $career->title : $request->title,
            'career_slug' => is_null($request->career_slug) ? $career->career_slug : $request->career_slug,
            'description' => is_null($request->description) ? $career->description : $request->description,
            'deadline' => is_null($request->deadline) ? $career->deadline : $request->deadline,
            'CareerImage' => $image,
        ]);
        if ($update) {
            return redirect()->route('admin.career')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }



}
