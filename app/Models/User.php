<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, HasRoles, Billable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * roleNameC return User Most Power Role name 
     *
     * @return string
     */

    public function roleNameC(): string
    {
        $roles = $this->getRoleNames()->all();
        foreach (["Admin", "Volunteer", "Donor"] as $item) {
            if (in_array($item, $roles)) {
                return $item;
            }
        }
        return "No Role";
    }

    /**
     * products
     *
     * @return void
     */
    public function products()
    {
        return $this->belongsToMany('App\Models\Product')->withPivot('quantity');
    }
}
