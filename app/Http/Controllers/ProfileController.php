<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function profile(){

        return view('Profiles.profile');

    }
    public function addProfile(Request $request){
        $this->validate($request,[
            'name'  => 'required',
            'designation' => 'required',
            'profile_pic' => 'required'

        ]);


    }
}
