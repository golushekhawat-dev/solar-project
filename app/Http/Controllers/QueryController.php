<?php

namespace App\Http\Controllers;
use App\Models\Querys;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Querys::orderby('id', 'desc')->get();
        // dd($data); // Yeh check karega ki data aa raha hai ya nahi
        return view('admin/queryview', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // return view('website/query');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Querys; 
        $data->fname=$request->fname; 
        $data->email=$request->email;  
        $data->address=$request->address;  
        $data->mobilenumber=$request->mobilenumber; 
        $data->house_size=$request->house_size;  
        $data->roof_type=$request->roof_type; 
        $data->light_avg=$request->light_avg; 
        $data->monthly_bill=$request->monthly_bill; 
        $data->battery_backup=$request->battery_backup;
        $data->solar_type=$request->solar_type; 
        
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $filename = time().'_'. $image->getClientOriginalName();
            $path =$image->storeAs('qurey' , $filename , 'public');
            $data->image = $path;
         }
        $data->save();
        $request->session()->flash('alert-success','Thank you');
        //  return back()->with('success','thank you'); 
        return redirect()->back();
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
        $data = Querys::where('id',$id)->first();
        if(is_null($data)) {
        return redirect()->back();
        } 
        $data->status='0';
        $data->save();
        return redirect('queryview');
        }
        public function querydelete($id)
        {
        $data = Querys::find($id); 
        $data->delete();
        return back();
        }
}
