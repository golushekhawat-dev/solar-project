<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Indexs;
class IndexController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$content =  indexs::orderby('id','desc')->get();
return view('admin/indexview',compact('content'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('admin/indexcreate');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
// dd($request);
$content = new indexs; 
$content->address=$request->address; 
$content->email=$request->email;
$content->mobilenumber=$request->mobilenumber;
$content->gstnumber=$request->gstnumber;

// if($request->hasfile('logoimage')){
// $logoimage =$request->file('logoimage');
// $filename = time().''.$logoimage->getClientOriginalName();
// $destinationPath = public_path('uploads/new/');
// $logoimage->move($destinationPath,$filename);
// $content->logoimage="uploads/new/".$filename;
// }

if ($request->hasFile('logoimage')) {

  $logoimage = $request->file('logoimage');
  $filename = time() . '_' . $logoimage->getClientOriginalName();
  $path = $logoimage->storeAs('index' , $filename ,'public');
  $content->logoimage = $path;
}

$content->save();
$request->session()->flash('alert-success','Thank you');
//  return back()->with('success','thank you for Contact'); 
return redirect('indexview');
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
$content = indexs::where('id', $id)->first();
if(is_null($content)) {
return redirect()->back();
} 
return view ('admin/indexupdate',compact('content'));
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
$content = indexs::find($id); 
if ($request->hasFile('logoimage')) { 
    $logoimage = $request->file('logoimage');
    $filename = time() . '_' . $logoimage->getClientOriginalName();
    $path = $logoimage->storeAs('index' , $filename ,'public');
    $content->logoimage = $path;
  } 
$content->address= $request->address; 
$content->email= $request->email; 
$content->mobilenumber= $request->mobilenumber; 
$content->gstnumber= $request->gstnumber;  
$content->status= $request->status; 

$content->save();   
// $request->session()->flash('alert-success');
return redirect('indexview');
}
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
$content = indexs::where('id',$id)->first();
if(is_null($content)) {
return redirect()->back();
} 
$content->status='0';
$content->save();
return redirect('indexview');
}
public function indexdelete($id)
{
$content = indexs::find($id); 
$content->delete();
return back();
}
}