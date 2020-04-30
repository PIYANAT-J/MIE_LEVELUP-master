<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest_user extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'GUEST_USERS_TEL', 'GUEST_USERS_ID_CARD', 'GUEST_USERS_IMG', 'GUEST_USERS_BIRTHDAY', 'GUEST_USERS_AGE', 'GUEST_USERS_GENDER', 'GUEST_USERS_ADDRESS', 'ZIPCODE_ID', 'USERS_ID',
    ];
}
