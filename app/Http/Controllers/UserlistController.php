<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users as Users;
class UserlistController extends Controller

{


    protected function index()
    {
        $names = Users::all();

        return view("auth.userlist", ["name"=>$names]);
        
    }


}
