<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Metatags;
class MetaController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$metadata =  Metatags::orderby('id','desc')->get();
return view('admin/metatagview',compact('metadata'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('admin/metatagcreate');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
$metadata = new Metatags; 
$metadata->route_name=$request->route_name; 
$metadata->meta_title=$request->meta_title;
$metadata->meta_description=$request->meta_description;
$metadata->meta_keywords=$request->meta_keywords; 
$metadata->save();
$request->session()->flash('alert-success','Thank you');
//  return back()->with('success','thank you for Contact'); 
return redirect('metatagview');
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
$metadata = Metatags::where('id', $id)->first();
if(is_null($metadata)) {
return redirect()->back();
} 
return view ('admin/metatagupdate',compact('metadata'));
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
$metadata = Metatags::find($id);  
$metadata->route_name= $request->route_name; 
$metadata->meta_title= $request->meta_title; 
$metadata->meta_description= $request->meta_description; 
$metadata->meta_keywords= $request->meta_keywords;  
$metadata->status= $request->status;  
$metadata->save();   
// $request->session()->flash('alert-success');
return redirect('metatagview');
}
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
$metadata = Metatags::where('id',$id)->first();
if(is_null($metadata)) {
return redirect()->back();
} 
$metadata->status='0';
$metadata->save();
return redirect('metatagview');
}
public function metadelete($id)
{
$metadata = Metatags::find($id); 
$metadata->delete();
return back();
}
}