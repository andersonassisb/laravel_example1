<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class People extends Model
{
    protected $fillable = ['id', 'nome'];
    protected $table = "people";

    public function showTelephonePeople(){
        return $this->hasMany(Telephone::class, "id_people");
    }
}


