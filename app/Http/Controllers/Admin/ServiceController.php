<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Admin\Service;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ServiceController extends Controller
{
    public function service(Request $request)
    {
        if ($request->ajax()) {
            $data = Service::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.service.edit', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>';

                    if ($data->Status == 1) {
                        $btn = $btn . '<a href="' . route('admin.service.inactive', $data->id) . '" class="btn-action" title="Inactive"><i class="fas fa-toggle-on"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.service.active', $data->id) . '" class="btn-action" title="Active"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn . '<a href="' . route('admin.service.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
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
                ->editColumn('ServiceImage', function ($data) {
                    $url = asset(ServiceImage() . $data->ServiceImage);
                    return '<img src=' . $url . ' border="0" width="70" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'title', 'Status', 'ServiceImage', 'ServiceImage'])
                ->make(true);
        }
        $data['title'] = __('Service List');
        return view('admin.pages.service.index', $data);
    }


    public function serviceCreate()
    {
        $data['title'] = __('Service Create');
        return view('admin.pages.service.create', $data);
    }

    public function serviceStore(ServiceRequest $request)
    {
        if (!empty($request->service_image)) {
            $image = fileUpload($request['service_image'], ServiceImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }

        if (!empty($request->icon_image)) {
            $iconimage = fileUpload($request['icon_image'], IconImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }

        $service = Service::create([
            'title' => $request->title,
            'icon' => $request->icon,
            'description' => $request->description,
            'package' => $request->package,
            'pricing' => $request->pricing,
            'ServiceImage' => $image,
            'IconImage' => $iconimage
        ]);
        if ($service) {
            return redirect()->route('admin.service')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }


    public function serviceDelete($id)
    {

        $delete = Service::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.service')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.service')->with('error', __('Does Not Delete!'));
    }


    public function serviceActive($id)
    {
        $inactive = Service::find($id)->update(['Status' => 1]);
        if ($inactive) {
            return redirect()->route('admin.service')->with('success', __('Successfully Active !'));
        }
        return redirect()->route('admin.service')->with('success', __('Does not Updated !'));
    }


    public function serviceInactive($id)
    {
        $inactive = Service::find($id)->update(['Status' => 0]);
        if ($inactive) {
            return redirect()->route('admin.service')->with('success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.service')->with('success', __('Does not Updated !'));
    }


    public function serviceEdit($id)
    {
        $data['title'] = __('Service Edit');
        $data['edit'] = Service::where('id', $id)->first();
        return view('admin.pages.service.edit', $data);
    }


    public function serviceUpdate(Request $request)
    {
        $id = $request->id;

        $service = Service::whereId($id)->first();

        if (!empty($request->service_image)) {
            $image = fileUpload($request['service_image'], ServiceImage());
        } else {
            $image = $service->ServiceImage;
        }

        if (!empty($request->icon_image)) {
            $iconimage = fileUpload($request['icon_image'], IconImage());
        } else {
            $iconimage = $service->IconImage;
        }



        $update = $service->update([

            'title' => is_null($request->title) ? $service->title : $request->title,
            'icon' => is_null($request->icon) ? $service->icon : $request->icon,
            'description' => is_null($request->description) ? $service->description : $request->description,
            'package' => is_null($request->package) ? $service->package : $request->package,
            'pricing' => is_null($request->pricing) ? $service->pricing : $request->pricing,
            'ServiceImage' => $image,
            'IconImage' => $iconimage
        ]);
        if ($update) {
            return redirect()->route('admin.service')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }



}
