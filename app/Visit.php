<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    public function clients(){
        return $this->belongsToMany(Client::class);
    }
}
