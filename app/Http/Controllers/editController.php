<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class editController extends Controller
{
    public function editProfile()
    {
        $user=user::where('id',Session()->get('userId'))->first();
        return view('pages.user.editProfile')->with('user',$user);
    }
}
