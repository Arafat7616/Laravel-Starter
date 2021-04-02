<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Str;


class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Partner::orderBy('id', 'desc')->get();
            return datatables::of($data)
                ->addColumn('image', function ($data) {
                    return '<img height="70px;" src="' . asset($data->image ?? get_static_option('no_image')) . '" width="70px;" class="rounded-circle" />';
                })->addColumn('action', function ($data) {
                    return '<a href="' . route('backend.partner.edit', $data) . '" class="btn btn-info"><i class="fa fa-edit"></i> </a>
                    <button class="btn btn-danger" onclick="delete_function(this)" value="' . route('backend.partner.destroy', $data) . '"><i class="fa fa-trash"></i> </button>';
                })
                ->rawColumns(['image', 'action'])
                ->make(true);
        } else {
            return view('backend.website.partner.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.website.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'link' => 'nullable|string',
            'image' => 'required|image',
        ]);

        $partner = new Partner();
        $partner->link   = $request->link;
        if ($request->hasFile('image')) {
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/partner/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $partner->image   = $folder_path . $image_new_name;
        }
        try {
            $partner->save();
            return back()->withToastSuccess('Successfully stored.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        return view('backend.website.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $request->validate([
            'link' => 'nullable|string',
            'image' => 'nullable|image',
        ]);

        $partner->link   = $request->link;
        if ($request->hasFile('image')) {
            if ($partner->image != null)
                File::delete(public_path($partner->image)); //Old image delete
            $image             = $request->file('image');
            $folder_path       = 'uploads/images/partner/';
            $image_new_name    = Str::random(20) . '-' . now()->timestamp . '.' . $image->getClientOriginalExtension();
            //resize and save to server
            Image::make($image->getRealPath())->save($folder_path . $image_new_name);
            $partner->image   = $folder_path . $image_new_name;
        }
        try {
            $partner->save();
            return back()->withToastSuccess('Successfully updated !.');
        } catch (\Exception $exception) {
            return back()->withErrors('Something going wrong. ' . $exception->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        try {
            if ($partner->image != null)
                File::delete(public_path($partner->image)); //Old image delete
            $partner->delete();
            return response()->json([
                'type' => 'success',
            ]);
        } catch (\Exception $exception) {
            return response()->json([
                'type' => 'error',
            ]);
        }
    }
}
