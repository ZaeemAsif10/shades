<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Models\Team;
class AdminController extends Controller
{
    public function index()
    {
        return view('admin-side.admin-home');
    }
    
    //addTeam
    
    public function addTeam()
    {
        return view('admin-side.add-team');
    }
    
    //saveTeam
    
    public function allTeam()
    {
        return view('admin-side.team-list');
    }
    
    public function showTeam()
    {
        $data = DB::select('select * from teams');
        return $data;
    }
    
    
    
    public function saveTeam(Request $request){
        
        $data = $request->all();
        
    $image = mt_rand(1,1000).''.time() . '.' . $request->file('image')->getClientOriginalExtension();
    $request->file('image')->move('assets/uploads/team-images',$image);
        
         $res = Team::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'contact'=>$data['contact'],
            'cnic'=>$data['cnic'],
            'image'=>$data['image'],
           
        ]);
        if($data){
            return back()->with('success','Your message submited successfully');
        }
        else{
            
            return back()->with('error','Record not save');
        }
    }
    
    
    public function editTeam(Request $request)
    {
        $id = $request->input('id');
        $data = DB::select("select * from teams where id = '$id'");
        return $data;
    }
    
    public function updateTeam(Request $request)
    {
        $validatedData = $request->validate([
         'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg,pdf|max:2048',
 
        ]);
        
        $image = $request->file('image')->getClientOriginalName();
 
        $path = $request->file('image')->move(public_path('images'));
        
        $save = Team::find($request->id);;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->contact = $request->contact;
        $save->cnic = $request->cnic;
        $save->image = $image;
 
        $save->save();
        
        return back()
                ->with('success','Data Update Succesfully');
    }
    
    public function deleteTeam(Request $request)
    {
        $id = $request->input('id');
        $data = DB::table('teams')->where('id',$id)->delete();
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
