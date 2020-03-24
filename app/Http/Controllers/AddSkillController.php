<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills as Skills;
use App\Users;
use App\SkillsValue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;

class AddSkillController extends Controller

{

   

    protected function show(Request $request)

    {
        return Validator::make( [
            'skill' => ['required', 'string', 'max:255']

        ]);
    }

    protected function store(Request $request)
    {
        skills::create([

          
             "skill" => $request->get('skill')
      
        ]);

        return redirect("skills");


    }





    public function create()

    {

        return view('auth.addskill');

    }


    

}
