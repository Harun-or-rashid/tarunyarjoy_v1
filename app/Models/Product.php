<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * volunteers
     *
     * @return void
     */
    public function volunteers()
    {
        return $this->belongsToMany('App\Models\User')->role('Volunteer')->withPivot('quantity');
    }

    public function request()
    {
        return $this->hasMany('App\Models\Request');
    }
}
