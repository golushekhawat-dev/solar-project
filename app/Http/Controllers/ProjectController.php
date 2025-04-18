<?php
namespace App\Http\Controllers;
use App\Models\Projects;
use App\Models\Metatags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class ProjectController extends Controller
{
/**
* Display a listing of the resource.
*/
public function index()
{
$data =  Projects::orderby('id','desc')->get();
return view('admin/projectview',compact('data'));
}
/**
* Show the form for creating a new resource.
*/
public function create()
{
return view('admin/projectcreate');
}
/**
* Store a newly created resource in storage.
*/
public function store(Request $request)
{
    $request->validate([
        'content' => 'required|string',
        'text' => 'required|string',
        'slug' => 'required|string|unique:projects,slug',
        'long_text' => 'nullable|string',
        'image' => 'nullable|image',
    ]);

    $data = new Projects();
    $data->content = $request->content;
    $data->text = $request->text;
    $data->slug = $request->slug;
    $data->long_text = $request->long_text;

  
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();  
        $path = $image->storeAs('projects', $filename, 'public');  
        $data->image = $path;
    }

    $data->save();

    return redirect('projectview')->with('success', 'Project added successfully!');
}


/**
* Show the form for editing the specified resource.
*/

public function show($slug)
{
$data = Projects::where('slug', $slug)->firstOrFail();
// Meta Tags fetch karna
$metaData = Metatags::where('route_name', 'project_information')->first();
return view('website.project-information', compact('data', 'metaData'));
}
public function edit(string $id)
{
    $data = Projects::find($id);

    if (!$data) {
        return redirect()->back()->with('error', 'Project not found!');
    }

    return view('admin.projectupdate', compact('data'));
}
/**
* Update the specified resource in storage.
*/
public function update(Request $request, string $id)
{
    $data = Projects::find($id);
    if (!$data) {
        return redirect()->back()->with('error', 'Project not found!');
    }

    $request->validate([
        'content' => 'required|string',
        'text' => 'required|string',
        'slug' => 'required|string|unique:projects,slug,' . $id,
        'long_text' => 'nullable|string',
        'image' => 'nullable|image',
    ]);
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName(); 
        $path = $image->storeAs('projects', $filename, 'public'); 
        $data->image = $path;
    }

    $data->content = $request->content;
    $data->text = $request->text;
    $data->slug = $request->slug;
    $data->long_text = $request->long_text;
    $data->status = $request->status;

    $data->save();

    return redirect('projectview')->with('success', 'Project updated successfully!');
}
/**
* Remove the specified resource from storage.
*/
public function destroy(string $id)
{
$data = Projects::where('id',$id)->first();
if(is_null($data)) {
return redirect()->back();
} 
$data->status='0';
$data->save();
return redirect('projectview');
}
public function projectdelete($id)
{
    $data = Projects::find($id); 

    if (!$data) {
        return redirect()->back()->with('error', 'Project not found!');
    }

    $data->delete();
    return back()->with('success', 'Project deleted successfully!');
}
}