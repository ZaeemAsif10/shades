<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use DB;

class ServiceController extends Controller
{
    public function index()
    {
        return view('admin-side.all-service');
    }
    
    public function showService()
    {
        $data = DB::select('select * from services');
        return $data;
    }
    
    public function addService()
    {
        return view('admin-side.add-service');
    }
    
    public function storeService(Request $request)
    {
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
 
        ]);
        
        $image = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->move(public_path('images'));
        
        $save = new Service;
        $save->title = $request->title;
        $save->image = $image;
 
        $save->save();
        
        return back()
                ->with('success','Data Add Succesfully');
    }
    
    public function editService(Request $request)
    {
        $id = $request->input('id');
        $data = DB::select("select * from services where id = '$id'");
        return $data;
    }
    
    public function updateService(Request $request)
    {
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
 
        ]);
        
        $image = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->move(public_path('images'));
        
        $save = new Service;
        $save->title = $request->title;
        $save->image = $image;
 
        $save->save();
        
        return back()
                ->with('success','Data Update Succesfully');
    }
    
    public function deleteService(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('services')->where('id',$id)->delete();
        if($data)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
}
