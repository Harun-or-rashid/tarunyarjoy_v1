<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * This method match current time and
     * event time return true if
     * event time is past
     *
     * @return bool true|false
     */

    public function isComing(): bool
    {
        return time() < strtotime($this->event_date);
    }
}
