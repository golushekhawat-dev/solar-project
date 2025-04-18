<?php
namespace App\Http\Controllers;
use App\Models\Contacts;
use Illuminate\Http\Request;
class ContactController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$content =  Contacts::orderby('id','desc')->get();
return view('admin/contactview',compact('content'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('website/contact');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{

    $request->validate([
        'fname' => 'required|string|max:50',
        'lname' => 'required|string|max:50',
        'email' => 'required|email',
        'address' => 'required|string|max:255',
        'solar' => 'required',
    ]);
// dd($request);
$row = new Contacts; 
$row->fname=$request->fname;  
$row->lname=$request->lname;  
$row->email=$request->email;  
$row->address=$request->address;  
$row->solar=$request->solar;  
$row->save();
$request->session()->flash('alert-success','Thank you');
//  return back()->with('success','thank you for Contact'); 
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
$content = Contacts::where('id',$id)->first();
if(is_null($content)) {
return redirect()->back();
} 
$content->status='0';
$content->save();
return redirect('contactview');
}
public function contactdelete($id)
{
$content = Contacts::find($id); 
$content->delete();
return back();
}
}