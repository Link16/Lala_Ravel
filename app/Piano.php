<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Piano extends Model
{
    protected $fillable = ['name', 'mark', 'color', 'model'];

    public function role() {
        return $this->belongsTo('App\Role');
    }
}