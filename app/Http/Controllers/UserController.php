<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function uploadavatar(Request $request){

        if($request->hasfile('image')){
            
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('image', $filename, 'public');
            User::find(1)->update(['avatar' => $filename]);
        }

        
        
        return redirect()->back();
        //dd($request->hasfile('image'));
    }
}
