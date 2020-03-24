<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skills extends Model
{

protected $table = "skills";
protected $primaryKey = "skills_id";
protected $keyType = 'string';


protected $fillable = [
'skill'
];

    public function skill()
    {
        return $this->hasOne("skills_id");
    }

    public function belong()
    {
        return $this->belongsTo("App\User");
    }

}
