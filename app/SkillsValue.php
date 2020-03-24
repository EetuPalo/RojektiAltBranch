<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SkillsValue extends Model
{
    protected $table = "skills_values";
    protected $primaryKey = "id";
    protected $keyType = 'string';

    protected $fillable = [
        "rating",
        "user_id",
        "skill_id",
        "id"
    ];

    public function user()
    {
        return $this->hasOne("App\Users", "id", "id");
    }

    public function skill()
    {
        return $this->hasOne("App\Skills", "skill_id", "user_id");
    }

    public function belong()
    {
        return $this->belongsTo("App\User", "App\Skills");
    }

    public function rating() 
    {

        return $this->hasOne("App\Skills", "skill_id", "user_id");

    }
}
