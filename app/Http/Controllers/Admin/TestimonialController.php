<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Testimonial;
use App\Http\Requests\TestimonialRequest;
use Yajra\DataTables\Facades\DataTables;

class TestimonialController extends Controller
{


    public function testimonial(Request $request)
    {
        if ($request->ajax()) {
            $data = Testimonial::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.testimonial.edit', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>';

                    if ($data->Status == 1) {
                        $btn = $btn . '<a href="' . route('admin.testimonial.inactive', $data->id) . '" class="btn-action" title="Inactive"><i class="fas fa-toggle-on"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.testimonial.active', $data->id) . '" class="btn-action" title="Active"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn . '<a href="' . route('admin.testimonial.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('client_name', function ($data) {
                    return $data->client_name;
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
                ->editColumn('ClientImage', function ($data) {
                    $url = asset(ClientImage() . $data->ClientImage);
                    return '<img src=' . $url . ' border="0" width="70" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'client_name', 'Status', 'ClientImage', 'ClientImage'])
                ->make(true);
        }
        $data['title'] = __('Testimonial List');
        return view('admin.pages.testimonial.index', $data);
    }


    public function testimonialCreate()
    {
        $data['title'] = __('Testimonial Create');
        return view('admin.pages.testimonial.create', $data);
    }

    public function testimonialStore(TestimonialRequest $request)
    {
        if (!empty($request->client_image)) {
            $image = fileUpload($request['client_image'], ClientImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }

        $testimonial = Testimonial::create([
            'client_name' => $request->client_name,
            'designation' => $request->designation,
            'description' => $request->description,
            'rating' => $request->rating,
            'ClientImage' => $image
        ]);
        if ($testimonial) {
            return redirect()->route('admin.testimonial')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }


    public function testimonialDelete($id)
    {

        $delete = Testimonial::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.testimonial')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.testimonial')->with('error', __('Does Not Delete!'));
    }


    public function testimonialActive($id)
    {
        $inactive = Testimonial::find($id)->update(['Status' => 1]);
        if ($inactive) {
            return redirect()->route('admin.testimonial')->with('success', __('Successfully Active !'));
        }
        return redirect()->route('admin.testimonial')->with('success', __('Does not Updated !'));
    }


    public function testimonialInactive($id)
    {
        $inactive = Testimonial::find($id)->update(['Status' => 0]);
        if ($inactive) {
            return redirect()->route('admin.testimonial')->with('success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.testimonial')->with('success', __('Does not Updated !'));
    }


    public function testimonialEdit($id)
    {
        $data['title'] = __('Testimonial Edit');
        $data['edit'] = Testimonial::where('id', $id)->first();
        return view('admin.pages.testimonial.edit', $data);
    }


    public function testimonialUpdate(Request $request)
    {
        $id = $request->id;

        $testimonial = Testimonial::whereId($id)->first();

        if (!empty($request->client_image)) {
            $image = fileUpload($request['client_image'], ClientImage());
        } else {
            $image = $testimonial->ClientImage;
        }

        $update = $testimonial->update([
            'client_name' => is_null($request->client_name) ? $testimonial->client_name : $request->client_name,
            'designation' => is_null($request->designation) ? $testimonial->designation : $request->designation,
            'description' => is_null($request->description) ? $testimonial->description : $request->description,
            'rating' => is_null($request->rating) ? $testimonial->rating : $request->rating,
            'ClientImage' => $image
        ]);
        if ($update) {
            return redirect()->route('admin.testimonial')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }

}
