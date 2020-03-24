<?php

namespace App\Http\Controllers\Auth;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skills as Skills;
use App\Users as Users;
use App\SkillsValue as skills_values;
use App\SkillsValue as SkillsValue;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;

class SkillsValuesController extends Controller

{


public function __construct( Skills $skills, SkillsValues $skillValues)
    {
        $this->skills = $skills->all();
        $this->skillValues = $skillValues->all();
    }

    public function index()
    {
        $skills = Skills::all();
        $skillValues = SkillsValues::all(); 
        return view("auth/modify", ["skill" => $skills], ["skillValues" => $skillValues]);
    }

    
   public function create()
    {
        $skill = Skills::all();
        $values = SkillsValue::all();
        return view("auth/modify", ["skill" => $skill, "values" => $values]);

    }
 

    protected function show(Request $request)
    {
            return Validator::make( [
            'rating' => ['required|integer'],
            "user_id" => ["required|string"],
            'skill_id' => ['required|string']         
        ]);
        }

    protected function store()
    {
        $skills = new SkillsValue;
        $skills->user_id = request("user_id");
        $skills->skill_id = request("skill");
        $skills->rating = request("rating");
        $skills->save();
      return view ('auth.home');
    }

    public function modify( Request $request, skill_id $skill_id)

    {
        $values = SkillsValue::create()->get($request->all()([
        "user_id" => $request->update->get()
       ]));
       //dont uncomment
        /*
        $values = new SkillsValue;
        $values = SkillsValue::all([
        
        $values->user_id = request("user_id"),
        $values->idForRating = request("skill"),
        $values->rating = request("rating"),
        $values->save()]);
        */
        return view ('auth.home', ["values" => $values]);  
      }

    protected function update(Request $request)
    {
        $values = SkillsValue::create($request->all()->update([
        "user_id" => $request->get()
        ]));
        



        /*
        $values = new SkillsValue;
        $values = SkillsValue::all([
        
        $values->user_id = request("user_id"),
        $values->idForRating = request("skill"),
        $values->rating = request("rating"),
        $values->save()]);*/

      return view ('auth.home', ["values" => $values]);  

    }


}
