<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function piano() {
        return $this->hasMany('App\Piano');
    }
}