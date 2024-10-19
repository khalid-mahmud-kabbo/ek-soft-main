<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Team;
use App\Http\Requests\TeamRequest;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{
    public function team(Request $request)
    {
        if ($request->ajax()) {
            $data = Team::latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    $btn = '<div class="action__buttons">';
                    $btn = $btn . '<a href="' . route('admin.team.edit', $data->id) . '" class="btn-action" title="Edit"><i class="fas fa-pen-to-square"></i></a>';

                    if ($data->Status == 1) {
                        $btn = $btn . '<a href="' . route('admin.team.inactive', $data->id) . '" class="btn-action" title="Inactive"><i class="fas fa-toggle-on"></i></a>';
                    } else {
                        $btn = $btn . '<a href="' . route('admin.team.active', $data->id) . '" class="btn-action" title="Active"><i class="fas fa-toggle-off"></i></a>';
                    }
                    $btn = $btn . '<a href="' . route('admin.team.delete', $data->id) . '" class="btn-action delete" title="Delete"><i class="fas fa-trash-alt"></i></a>';
                    $btn = $btn . '</div>';
                    return $btn;
                })
                ->editColumn('Name', function ($data) {
                    return $data->Name;
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
                ->editColumn('TeamMemberImage', function ($data) {
                    $url = asset(TeamMemberImage() . $data->TeamMemberImage);
                    return '<img src=' . $url . ' border="0" width="70" class="img-rounded" align="center" />';
                })
                ->rawColumns(['action', 'Name', 'Status', 'TeamMemberImage', 'TeamMemberImage'])
                ->make(true);
        }
        $data['title'] = __('Team List');
        return view('admin.pages.team.index', $data);
    }


    public function teamCreate()
    {
        $data['title'] = __('Team Create');
        return view('admin.pages.team.create', $data);
    }

    public function teamStore(TeamRequest $request)
    {
        if (!empty($request->member_image)) {
            $image = fileUpload($request['member_image'], TeamMemberImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }


        $team = Team::create([
            'Name' => $request->team_member_name,
            'Designation' => $request->designation,
            'Facebook_id' => $request->facebook_id,
            'Instagram_id' => $request->instagram_id,
            'LinkedIn_id' => $request->linkedin_id,
            'TeamMemberImage' => $image
        ]);
        if ($team) {
            return redirect()->route('admin.team')->with('success', __('Successfully Stored !'));
        }
        return redirect()->back()->with('error', __('Does not insert  !'));
    }


    public function teamDelete($id)
    {

        $delete = Team::Where('id', $id);
        if ($delete) {
            $delete->delete();
            return redirect()->route('admin.team')->with('success', __('Successfully Deleted !'));
        }
        return redirect()->route('admin.team')->with('error', __('Does Not Delete!'));
    }


    public function teamActive($id)
    {
        $inactive = Team::find($id)->update(['Status' => 1]);
        if ($inactive) {
            return redirect()->route('admin.team')->with('success', __('Successfully Active !'));
        }
        return redirect()->route('admin.team')->with('success', __('Does not Updated !'));
    }


    public function teamInactive($id)
    {
        $inactive = Team::find($id)->update(['Status' => 0]);
        if ($inactive) {
            return redirect()->route('admin.team')->with('success', __('Successfully Inactive !'));
        }
        return redirect()->route('admin.team')->with('success', __('Does not Updated !'));
    }


    public function teamEdit($id)
    {
        $data['title'] = __('Team Edit');
        $data['edit'] = Team::where('id', $id)->first();
        return view('admin.pages.team.edit', $data);
    }


    public function teamUpdate(Request $request)
    {
        $id = $request->id;

        $team = Team::whereId($id)->first();

        if (!empty($request->member_image)) {
            $image = fileUpload($request['member_image'], TeamMemberImage());
        } else {
            $image = $team->TeamMemberImage;
        }

        $update = $team->update([

            'Name' => is_null($request->Name) ? $team->Name : $request->team_member_name,
            'Designation' => is_null($request->Designation) ? $team->Designation : $request->designation,
            'Facebook_id' => is_null($request->Facebook_id) ? $team->Facebook_id : $request->facebook_id,
            'Instagram_id' => is_null($request->Instagram_id) ? $team->Instagram_id : $request->instagram_id,
            'LinkedIn_id' => is_null($request->LinkedIn_id) ? $team->LinkedIn_id : $request->linkedin_id,
            'TeamMemberImage' => $image,
        ]);
        if ($update) {
            return redirect()->route('admin.team')->with('success', __('Successfully Updated !'));
        }
        return redirect()->back()->with('error', __('Does not Update  !'));
    }



}
