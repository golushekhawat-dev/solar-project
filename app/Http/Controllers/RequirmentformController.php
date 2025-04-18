<?php
namespace App\Http\Controllers;
use App\Models\Reqforms;
use Illuminate\Http\Request;
class RequirmentformController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$data = Reqforms::orderby('id', 'desc')->get();
// dd($data); // Yeh check karega ki data aa raha hai ya nahi
return view('admin.reqformsview', compact('data'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('website/careers');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
// dd($request);
$data = new Reqforms; 
$data->fname=$request->fname;  
$data->lname=$request->lname;  
$data->email=$request->email;  
$data->address=$request->address;  
$data->mobile_number=$request->mobile_number;  
$data->solar_req=$request->solar_req; 

if ($request->hasfile('image')) {
   $image = $request->file('image');
   $filename = time().'_'. $image->getClientOriginalName();
   $path =$image->storeAs('requirmentform' , $filename , 'public');
   $data->image = $path;
}
$data->save();
$request->session()->flash('alert-success','Thank you');
//  return back()->with('success','thank you'); 
return back();
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
//
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
//
}
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
$data = Reqforms::where('id',$id)->first();
if(is_null($data)) {
return redirect()->back();
} 
$data->status='0';
$data->save();
return redirect('reqformsview');
}
public function reqformdelete($id)
{
$data = Reqforms::find($id); 
$data->delete();
return back();
}
}