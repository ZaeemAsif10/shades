<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use DB;

class ProjectController extends Controller
{
    public function index()
    {
        return view('admin-side.all-project');
    }
    
    public function showProject()
    {
        $data = DB::select('select * from projects');
        return $data;
    }
    
    public function addProject()
    {
        return view('admin-side.add-project');
    }
    
    public function storeProject(Request $request)
    {
        
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
 
        ]);
        
        $image = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->move(public_path('images'));
        
        $save = new Project;
        $save->name = $request->name;
        $save->image = $image;
        $save->details = $request->details;
 
        $save->save();
        
        return back()
                ->with('success','Data Add Succesfully');
        
    }
    
    public function editProject(Request $request)
    {
        $id = $request->input('id');
        $data = DB::select("select * from projects where id = '$id'");
        return $data;
    }
    
    public function updateProject(Request $request)
    {
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
 
        ]);
        
        $image = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->move(public_path('images'));
        
        $save = new Project;
        $save->name = $request->name;
        $save->image = $image;
        $save->details = $request->details;
 
        $save->save();
        
        return back()
                ->with('success','Data Update Succesfully');
    }
    
    public function deleteProject(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('projects')->where('id',$id)->delete();
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





