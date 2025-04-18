<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banners;
use Illuminate\Support\Str;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banners::orderBy('id', 'asc')->get();
        return view('admin/bannerview', compact('banner'));
    }

    public function create()
    {
        return view('admin/bannercreate');
    }

    public function store(Request $request)
    {
        $request->validate([
            'route_name' => 'required|string|max:255',
            'heading' => 'nullable|string',
            'sub_heading' => 'nullable|string',
            'desktop_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'mobile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
            'is_overlay_text'=>'nullable|boolean',
        ]);

        $banner = new Banners;
        $banner->route_name = $request->route_name;
        $banner->heading = $request->heading;
        $banner->sub_heading = $request->sub_heading;
        $banner->is_overlay_text = $request->has('is_overlay_text') ? 1 : 0;
        $banner->order_by_count = $request->input('order_by_count', 0);

        if ($request->hasFile('desktop_image')) {
            $desktop_image = $request->file('desktop_image');
            $filename = uniqid() . '_' . Str::random(10) . '.' . $desktop_image->getClientOriginalExtension();
            $path = $desktop_image->storeAs('banner', $filename, 'public');
            $banner->desktop_image = $path;
        }
        
        if ($request->hasFile('mobile_image')) {
            $mobile_image = $request->file('mobile_image');
            $filename = uniqid() . '_' . Str::random(10) . '.' . $mobile_image->getClientOriginalExtension();
            $path = $mobile_image->storeAs('banner', $filename, 'public');
            $banner->mobile_image = $path;
        }
 
        $banner->save();

        session()->flash('alert-success', 'Banner successfully created.');
        return redirect('bannerview');
    }

    public function edit(string $id)
    {
        $banner = Banners::find($id);
        if (!$banner) {
            return redirect()->back()->withErrors('Banner not found.');
        } 
        return view('admin/bannerupdate', compact('banner'));
    }

    public function update(Request $request, string $id)
    {
        $banner = Banners::findOrFail($id);

        $request->validate([
            'route_name' => 'required|string|max:255',
            'heading' => 'nullable|string',
            'sub_heading' => 'nullable|string',
            'is_overlay_text'=>'nullable|boolean',
            'status' => 'nullable|in:0,1',
        ]);

       

        if ($request->hasFile('desktop_image')) {
            $desktop_image = $request->file('desktop_image');
            $filename = uniqid() . '_' . Str::random(10) . '.' . $desktop_image->getClientOriginalExtension();
            $path = $desktop_image->storeAs('banner', $filename, 'public');
            $banner->desktop_image = $path;
        }
        if ($request->hasFile('mobile_image')) {
            $mobile_image = $request->file('mobile_image');
            $filename = uniqid() . '_' . Str::random(10) . '.' . $mobile_image->getClientOriginalExtension();
            $path = $mobile_image->storeAs('banner', $filename, 'public');
            $banner->mobile_image = $path;
        }

        $banner->route_name = $request->route_name;
        $banner->heading = $request->heading;
        $banner->sub_heading = $request->sub_heading;
        $banner->is_overlay_text = $request->input('is_overlay_text', 0);
        $banner->order_by_count = $request->input('order_by_count', 0);
        
        $banner->status = $request->status ?? 1;
        $banner->save();

        session()->flash('alert-success', 'Banner updated successfully.');
        return redirect('bannerview');
    }

    public function destroy(string $id)
    {
        $banner = Banners::find($id);
        if (!$banner) {
            return redirect()->back()->withErrors('Banner not found.');
        }

        $banner->status = '0';
        $banner->save();

        session()->flash('alert-success', 'Banner status deactivated.');
        return redirect('bannerview');
    }

    public function bannerdelete($id)
    {
        $banner = Banners::find($id);
        if (!$banner) {
            return redirect()->back()->withErrors('Banner not found.');
        }

        $banner->delete();
        session()->flash('alert-success', 'Banner deleted successfully.');
        return back();
    }
}
