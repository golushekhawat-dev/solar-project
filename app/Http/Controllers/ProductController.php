<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data =  Products::orderby('id','desc')->get();
        return view('admin/productview',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin/productcreate');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the uploaded file
    $request->validate([ 
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
    ]);

    // Create a new Product instance
    $data = new Products;

    // Check if the file is present
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $filename = time() . '_' . $image->getClientOriginalName();  
        $path = $image->storeAs('product', $filename, 'public');  
        $data->image = $path;
    }

    // Save the product data in the database
    $data->save();

    // Set a flash message to indicate success
    $request->session()->flash('alert-success', 'Thank you');

    // Redirect to the product view
    return redirect('productview');
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
        $data = Products::where('id', $id)->first();
        if(is_null($data)) {
        return redirect()->back();
    } 

    return view ('admin/productupdate',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Products::find($id); 
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '_' . $image->getClientOriginalName();  
            $path = $image->storeAs('product', $filename, 'public');  
            $data->image = $path;
        }
            $data->status = $request->status;  
            $data->save();   
        // $request->session()->flash('alert-success');
        return redirect('productview');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Products::where('id',$id)->first();
        if(is_null($data)) {
        return redirect()->back();
          } 
       $data->status='0';
       $data->save();
       return redirect('productview');
       }
public function productdelete($id)
{
$data = Products::find($id); 
$data->delete();
return back();
    }
}
