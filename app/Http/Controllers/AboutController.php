<?php
namespace App\Http\Controllers;
use App\Models\Abouts;
use Illuminate\Http\Request;
class AboutController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$data =  Abouts::orderby('id','desc')->get();
return view('admin/aboutview',compact('data'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('admin/aboutcreate');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
$data = new Abouts; 
$data->content=$request->content;   
$data->save();
$request->session()->flash('alert-success','Thank you');
//  return back()->with('success','thank you for Contact'); 
return redirect('aboutview');
}
/**
* Display the specified resource.
*/
public function show(string $id)
{
//
}
/**
* Show the form for editing the specified resource.
*/
public function edit(string $id)
{
$data = Abouts::where('id', $id)->first();
if(is_null($data)) {
return redirect()->back();
} 
return view ('admin/aboutupdate',compact('data'));
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
$data = Abouts::find($id);  
$data->content = $request->content;  
$data->status = $request->status;   
$data->save();   
// $request->session()->flash('alert-success');
return redirect('aboutview');
}
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
$data = Abouts::where('id',$id)->first();
if(is_null($data)) {
return redirect()->back();
} 
$data->status='0';
$data->save();
return redirect('aboutview');
}
public function aboutdelete($id)
{
$data = Abouts::find($id); 
$data->delete();
return back();
}
}