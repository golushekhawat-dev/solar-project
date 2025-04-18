<?php
namespace App\Http\Controllers;
use App\Models\Ourvisions;
use Illuminate\Http\Request;
class OurvisionController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$data =  Ourvisions::orderby('id','desc')->get();
return view('admin/ourvisionview',compact('data'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('admin/ourvisioncreate');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
$data = new Ourvisions; 
$data->content=$request->content;   
$data->save();
$request->session()->flash('alert-success','Thank you');
//  return back()->with('success','thank you for Contact'); 
return redirect('ourvisionview');
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
$data = Ourvisions::where('id', $id)->first();
if(is_null($data)) {
return redirect()->back();
} 
return view ('admin/ourvisionupdate',compact('data'));
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
$data = Ourvisions::find($id);  
$data->content = $request->content;  
$data->status = $request->status;   
$data->save();   
// $request->session()->flash('alert-success');
return redirect('ourvisionview');
}
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
$data = Ourvisions::where('id',$id)->first();
if(is_null($data)) {
return redirect()->back();
} 
$data->status='0';
$data->save();
return redirect('ourvisionview');
}
public function ourvisiondelete($id)
{
$data = Ourvisions::find($id); 
$data->delete();
return back();
}
}