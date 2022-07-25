<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BloodRequest extends Model
{
    protected $guarded=[];


    public function relAcceptedBy() :BelongsTo
    {
        return $this->belongsTo('App\Models\User','accepted_by','id');
    }
}
