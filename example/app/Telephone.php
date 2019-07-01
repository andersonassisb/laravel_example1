<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telephone extends Model
{
    protected $fillable = ['id', 'ddd', 'phone_number', 'id_people'];
    protected $table = 'telephone';

    public function showPeopleTelephone(){
        return $this->belongsTo(People::class, "id_people");
    }
}
