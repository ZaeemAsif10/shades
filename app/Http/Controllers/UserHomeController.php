<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer_message;


class UserHomeController extends Controller
{
    
    
    
    public function index(Request $request){
        
        $data = $request->all();
        
         $res = Customer_message::create([
            'name'=>$data['name'],
            'email'=>$data['email'],
            'subject'=>$data['subject'],
            'message'=>$data['message'],
           
        ]);
        if($data){
            return back()->with('success','Your message submited successfully');
        }
        else{
            
            return back()->with('error','Record not save');
        }
    }
}
