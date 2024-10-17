<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    public function slider(Request $request)
    {
        if ($request->ajax()) {
            $data = Slider::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.slider.edit', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>';

                    if ($data->Status == 1) {
                        $btn = $btn . '<a href="' . route('admin.slider.inactive', $data->id) . '" class="btn-action" title="Inactive"><i class="fas fa-toggle-on"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.slider.active', $data->id) . '" class="btn-action" title="Active"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn . '<a href="' . route('admin.slider.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
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
                ->editColumn('SliderImage', function ($data) {
                    $url = asset(SliderImage() . $data->SliderImage);
                    return '<img src=' . $url . ' border="0" width="70" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'title', 'Status', 'SliderImage', 'SliderImage'])
                ->make(true);
        }
        $data['title'] = __('Slider List');
        return view('admin.pages.slider.index', $data);
    }

    public function sliderCreate()
    {
        $data['title'] = __('Slider Create');
        return view('admin.pages.slider.create', $data);
    }
    public function sliderStore(SliderRequest $request)
    {
        if (!empty($request->slider_image)) {
            $image = fileUpload($request['slider_image'], SliderImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }


        $slider = Slider::create([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'short_description' => $request->short_description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
            'SliderImage' => $image
        ]);
        if ($slider) {
            return redirect()->route('admin.slider')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }

    public function sliderDelete($id)
    {

        $delete = Slider::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.slider')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.slider')->with('error', __('Does Not Delete!'));
    }

    public function sliderActive($id)
    {
        $inactive = Slider::find($id)->update(['Status' => 1]);
        if ($inactive) {
            return redirect()->route('admin.slider')->with('success', __('Successfully Active !'));
        }
        return redirect()->route('admin.slider')->with('success', __('Does not Updated !'));
    }
    public function sliderInactive($id)
    {
        $inactive = Slider::find($id)->update(['Status' => 0]);
        if ($inactive) {
            return redirect()->route('admin.slider')->with('success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.slider')->with('success', __('Does not Updated !'));
    }

    public function sliderEdit($id)
    {
        $data['title'] = __('Slider Edit');
        $data['edit'] = Slider::where('id', $id)->first();
        return view('admin.pages.slider.edit', $data);
    }
    public function sliderUpdate(Request $request)
    {
        $id = $request->id;

        $slider = Slider::whereId($id)->first();
        if (!empty($request->slider_image)) {
            $image = fileUpload($request['slider_image'], SliderImage());
        } else {
            $image = $slider->SliderImage;
        }
        $update = $slider->update([

            'title' => is_null($request->title) ? $slider->title : $request->title,
            'subtitle' => is_null($request->subtitle) ? $slider->subtitle : $request->subtitle,
            'short_description' => is_null($request->short_description) ? $slider->short_description : $request->short_description,
            'button_text' => is_null($request->button_text) ? $slider->button_text : $request->button_text,
            'button_link' => is_null($request->button_link) ? $slider->button_link : $request->button_link,
            'SliderImage' => $image
        ]);
        if ($update) {
            return redirect()->route('admin.slider')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }
}
