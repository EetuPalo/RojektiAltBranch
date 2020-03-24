<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Skills as Skills;
use App\Users as Users;
use Schema;
use App\SkillsValue as SkillsValue;
use App\SkillsValue as SkillValue;
use Illuminate\Support\Facades\DB;

class SkillsController extends Controller

{

    public function __construct(Skills $skills, Users $users)
    {
        $this->skills = $skills->all();
        $this->users = $users;
    }

    public function index()
    {

        //$userId = Auth::id();
        //$user = DB::table('users')->where("id", $userId)->first();
         //$skillvalues = SkillsValue::with("user")->where("user_id")->get();
        $skills = Skills::all();
        $rating = DB::table('skills_values')->get("rating");
        $update = SkillsValue::with("skill")->where("skill_id")->get();

        return view("auth/skills", ["skills" => $skills, "update" => $update, "rating" => $rating]);
    }


    public function store(Request $request)
    {

        $skills = [];
        $skills = new SkillsValue;
        $skills = [
            "user_id" => $request->input('user_id'),
            "skill_id" => $request->input("skill_id"),
            "rating" => request("rating")   
        ];
        /*
        if ($skills->user_id.is_null())
        {
            $skills->user_id = (Auth::id());
        }
        */
        SkillsValue::insert($skills);


        /*
        $skills = new SkillsValue;
        $skills->user_id = request('id');
        $skills->user_id = request('user_id');
        $skills->skill_id = request("skill_id");
        $skills->rating = request("rating");
        $skills->save();
        */
        return redirect()->back()->with('message', 'Ratings have been saved!', ["skills" => $skills]);
    }




    public function update(Request $request)
    {
        $this->validate($request, [
            'rating'     =>  'required'
        ]);
        $update = Skillsvalue::find($user_id);
        $update->rating = $request->get('rating');
        $update->save();
        return redirect()->route('skills.index')->with('success', 'Data Updated');
    }


    public function create()
    {
        $skills = Skills::all();
        $values = SkillsValue::all();
        return view("auth/modify", ["skills" => $skills, "values" => $values]);
    }


    protected function show(Request $request)

    {
        return Validator::make([
            'rating' => ['required'],
            "user_id" => ["required"],
            'skill_id' => ['required']

        ]);
    }
}
