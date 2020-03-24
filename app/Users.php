<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{


protected $table = "users";
protected $primaryKey = "id";
protected $keyType = 'string';


public function skillsvalues()
{
    return $this->hasMany("App\SkillsValue", "id", "id");

}
}
