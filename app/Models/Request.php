<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    /**
     * table
     *
     * @var string
     */
    protected $table = 'product_user';
    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * product
     *
     * @return void
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }


    /**
     * volunteer
     *
     * @return void
     */
    public function volunteer()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
}
