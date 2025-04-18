<?php
namespace App\Http\Controllers;
use App\Models\Careers;
use App\Models\Metatags;
use Illuminate\Http\Request;
class CareerController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$data =  Careers::orderby('id','desc')->get();
// dd($data);
return view('admin/careerview',compact('data'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('admin/careercreate');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
// dd($request);
$data = new Careers; 
$data->banner_text=$request->banner_text;  
$data->slug=$request->slug;  
$data->content=$request->content; 
$data->text=$request->text;  
$data->long_text=$request->long_text; 

if ($request->hasFile('banner_img')) {
    $banner_img = $request->file('banner_img');
    $filename = time() . '_'. $banner_img->getClientOriginalName();
    $path = $banner_img->storeAs('career',$filename,'public');
    $data ->banner_img = $path;
}
if ($request->hasFile('main_img')) {
    $main_img = $request->file('main_img');
    $filename = time().'_'. $main_img->getClientOriginalName();
    $path = $main_img->storeAs('career',$filename,'public');
    $data->main_img =$path;
}
$data->save();
$request->session()->flash('alert-success','Thank you');
//  return back()->with('success','thank you for Contact'); 
return redirect('careerview');
}
/**
* Display the specified resource.
*/
public function show($slug)
{
// Fetch career data based on slug
$data = Careers::where('slug', $slug)->firstOrFail();
// Fetch meta data for career_details route
$metaData = Metatags::where('route_name', 'career_details')->first();
return view('website.career-details', compact('data', 'metaData'));
}
/**
* Show the form for editing the specified resource.
*/
public function edit(string $id)
{
$data = Careers::where('id', $id)->first();
if(is_null($data)) {
return redirect()->back();
} 

return view ('admin/careerupdate',compact('data'));
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
$data = Careers::find($id); 
if ($request->hasFile('banner_img')) {
    $banner_img = $request->file('banner_img');
    $filename = time() . '_'. $banner_img->getClientOriginalName();
    $path = $banner_img->storeAs('career', $filename,'public');
    $data ->banner_img = $path;
} 
$data->banner_text = $request->banner_text; 
$data->content = $request->content;   
$data->text = $request->text;  
$data->long_text = $request->long_text;  

if ($request->hasFile('main_img')) {
    $main_img = $request->file('main_img');
    $filename = time().'_'. $main_img->getClientOriginalName();
    $path = $main_img->storeAs('career',$filename,'public');
    $data->main_img =$path;
}

$data->status = $request->status;  
$data->save();   
// $request->session()->flash('alert-success');
return redirect('careerview');
}
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
$data = Careers::where('id',$id)->first();
if(is_null($data)) {
return redirect()->back();
} 
$data->status='0';
$data->save();
return redirect('careerview');
}
public function careerdelete($id)
{
$data = Careers::find($id); 
$data->delete();
return back();
}
}